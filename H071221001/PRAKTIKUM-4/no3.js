const inputText = "Kasur ini rusak";

const text = inputText.toLowerCase();
let reverse = "";

for (let i of text) {
    reverse = i + reverse;
}

if (reverse === text) {
    console.log("Palindrom");
} else {
    console.log("Bukan");
}
