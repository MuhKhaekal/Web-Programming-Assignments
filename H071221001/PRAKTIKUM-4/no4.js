let list = [50, 20, 1, 45, 3];

for (let i in list) {
    for (let j = 0; j < list.length - 1; j++) {
        if (list[j] > list[j + 1]) {
            let temporary = list[j];
            list[j] = list[j + 1];
            list[j + 1] = temporary;
        }
    }
}
console.log(list.join(' '));
