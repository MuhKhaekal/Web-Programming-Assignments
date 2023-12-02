const inputan = "abc";
const n = 1;

let karakter = inputan.split("");
let new_karakter = "";

for (let i of karakter) {
  if (/[a-z]/.test(i)) {
    new_karakter += String.fromCharCode((((i.charCodeAt(0) + n - 97) % 26) + 97))
  } else if (/[A-Z]/.test(i)) {
    new_karakter += String.fromCharCode((((i.charCodeAt(0) + n - 65) % 26) + 65))
  }
}

console.log(new_karakter);
