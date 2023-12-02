let blackjackGame = {
    'money': 5000,
    'bet': 0,
    'you': { 'scoreSpan': '#your-blackjack-result', 'div': '#your-box', 'score': 0 },
    'dealer': { 'scoreSpan': '#dealer-blackjack-result', 'div': '#dealer-box', 'score': 0 },
    'cards': ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'],
    'cardsMap': { '2': 2, '3': 3, '4': 4, '5': 5, '6': 6, '7': 7, '8': 8, '9': 9, '10': 10, 'J': 10, 'Q': 10, 'K': 10, 'A': [1, 11] },
    'isHold': false,
    'turnsOver': false,
};

const YOU = blackjackGame['you'];
const DEALER = blackjackGame['dealer'];

document.querySelector('#blackjack-tc-button').addEventListener('click', blackjackTc);
document.querySelector('#blackjack-tg-button').addEventListener('click', blackjackTg);
document.querySelector('#blackjack-hc-button').addEventListener('click', dealerLogic);
document.querySelector('#place-bet').addEventListener('click', placeBet);
document.querySelector('#reset-money').addEventListener('click', resetMoney);

function resetMoney() {
    blackjackGame['money'] = 5000;
    document.querySelector('#money').textContent = blackjackGame['money'];
}


function placeBet() {
    let betInput = document.querySelector('#bet');
    let betAmount = parseInt(betInput.value);

    if (betAmount <= 0) {
        alert("inputan tidak boleh minus atau nol")

    } else if (betAmount <= blackjackGame['money']) {
        blackjackGame['bet'] = betAmount;
        blackjackGame['money'] -= betAmount;

        betInput.disabled = true;
        document.querySelector('#place-bet').disabled = true;

        document.querySelector('#money').textContent = blackjackGame['money'];

    } else {
        alert('You do not have enough money for this bet.');

    }
}


function blackjackTc() {
    if (blackjackGame['isHold'] === false) {
        let card = randomCard();
        showCard(card, YOU);
        updateScore(card, YOU);
        showScore(YOU);
    } 
}

function randomCard() {
    return blackjackGame['cards'][Math.floor(Math.random() * 13)];
}

function showCard(card, activePlayer) {
    if (activePlayer['score'] <= 21) {
        let cardImage = document.createElement('img');
        cardImage.src = `static/images/${card}.png`;
        document.querySelector(activePlayer['div']).appendChild(cardImage);
    }
}

function blackjackTg() {
    if (blackjackGame['turnsOver'] === true) {
        blackjackGame['isHold'] = false;

        let yourImages = document.querySelector('#your-box').querySelectorAll('img');
        let dealerImages = document.querySelector('#dealer-box').querySelectorAll('img');

        for (i = 0; i < yourImages.length; i++) {
            yourImages[i].remove();
        }

        for (i = 0; i < dealerImages.length; i++) {
            dealerImages[i].remove();
        }

        YOU['score'] = 0;
        DEALER['score'] = 0;

        document.querySelector('#your-blackjack-result').textContent = 0;
        document.querySelector('#your-blackjack-result').style.color = 'white';

        document.querySelector('#dealer-blackjack-result').textContent = 0;
        document.querySelector('#dealer-blackjack-result').style.color = 'white';

        document.querySelector('#blackjack-result').textContent = "Let's Play!";
        document.querySelector('#blackjack-result').style.color = 'black';

        blackjackDeal['turnsOver'] = true;
    }
}

function updateScore(card, activePlayer) {
    if (card === 'A') {
        if (activePlayer['score'] + blackjackGame['cardsMap'][card][1] <= 21) {
            activePlayer['score'] += blackjackGame['cardsMap'][card][1];
        } else {
            activePlayer['score'] += blackjackGame['cardsMap'][card][0];
        }

    } else {
        activePlayer['score'] += blackjackGame['cardsMap'][card];
    }
}

function showScore(activePlayer) {
    if (activePlayer['score'] > 21) {
        document.querySelector(activePlayer['scoreSpan']).textContent = 'BUST!';
        document.querySelector(activePlayer['scoreSpan']).style.color = 'red';
    } else {
        document.querySelector(activePlayer['scoreSpan']).textContent = activePlayer['score'];
    }
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function dealerLogic() {
    blackjackGame['isHold'] = true;

    while (DEALER['score'] < 16 && blackjackGame['isHold'] === true) {
        let card = randomCard();
        showCard(card, DEALER);
        updateScore(card, DEALER);
        showScore(DEALER);
        await sleep(1000);
    }

    blackjackGame['turnsOver'] = true;
    showResult(computeWinner());
}


function computeWinner() {
    let winner;

    if (YOU['score'] <= 21) {
        if (YOU['score'] > DEALER['score'] || DEALER['score'] > 21) {
            winner = YOU;

        } else if (YOU['score'] < DEALER['score']) {
            winner = DEALER;

        } else if (YOU['score'] === DEALER['score']) {

        }

    } else if (YOU['score'] > 21) {
        if (DEALER['score'] <= 21) {
            winner = DEALER;

        } else if (DEALER['score'] > 21) {

        }
    }

    return winner;

}

function showResult(winner) {
    let message, messageColor;
    if (blackjackGame['turnsOver'] === true) {
        if (winner === YOU && YOU['score'] === 21) {
            message = `You got a Blackjack! You won Rp. ${blackjackGame['bet'] * 5}`;
            messageColor = 'green';
            blackjackGame['money'] += blackjackGame['bet'] * 5;
        } else if (winner === YOU) {
            message = `You won Rp.${blackjackGame['bet']}`;
            messageColor = 'green';
            blackjackGame['money'] += blackjackGame['bet'] * 2;
        } else if (winner === DEALER && blackjackGame['money'] === 0) {
            message = 'Game Over!';
            messageColor = 'red';
        }else if (winner === DEALER) {
            message = `You lost Rp.${blackjackGame['bet']}`;
            messageColor = 'red';
        } else {
            message = 'You drew!';
            messageColor = 'black';
            blackjackGame['money'] += blackjackGame['bet'];
        }

        document.querySelector('#bet').disabled = false;
        document.querySelector('#place-bet').disabled = false;

        document.querySelector('#money').textContent = blackjackGame['money'];

        document.querySelector('#blackjack-result').textContent = message;
        document.querySelector('#blackjack-result').style.color = messageColor;

        document.querySelector('#bet').textContent = 0;
    }
}