
// //No 1
const a = parseInt(prompt("Masukkan Angka 1: "))
const b = parseInt(prompt("Masukkan Angka 2: "))

function pangkat(a,b){
    let c = a ** b
    return c
}
        
alert(pangkat(a,b))
//-------------------------------------------------------------------------------------------------------------------------------------------------

// No 2
function caesarCipher(text, n) {
    let result = '';

    for (let i = 0; i < text.length; i++) {
        let char = text[i];

        // Periksa apakah karakter adalah huruf alfabet
        if (char.match(/[a-zA-Z]/)) {
            let isUpperCase = char === char.toUpperCase();
            char = char.toLowerCase();

            // Menggunakan rumus Caesar cipher untuk menggeser karakter
            let charCode = char.charCodeAt(0);
            charCode = ((charCode - 97 + n) % 26 + 26) % 26 + 97;

            // Kembalikan huruf ke huruf besar jika semula huruf besar
            if (isUpperCase) {
                char = String.fromCharCode(charCode).toUpperCase();
            } else {
                char = String.fromCharCode(charCode);
            }
        }

        // Tambahkan karakter ke hasil
        result += char;
    }

    return result;
}

// Contoh penggunaan
let minta_teks = prompt("Masukkan text : ")
let geser_kata = parseInt(prompt("Geser sebanyak : "))
alert(teksTerenskripsi = caesarCipher(minta_teks, geser_kata));

//-----------------------------------------------------------------------------------------------------------------------------------------------------

// //No 3
function isPalindrome(word) {
    // Menghapus spasi dan mengubah semua huruf ke huruf kecil
    word = word.toLowerCase().replace(/\s/g, '');

    // Membandingkan kata dengan kata yang sudah dibalik
    return word === word.split('').reverse().join('');
}

// Contoh penggunaan
let kata = prompt("Masukkan kata : ")
if (isPalindrome(kata)) {
    alert(`"${kata}" adalah palindrom (true).`);
} else {
    alert(`"${kata}" bukan palindrom (false).`);
}

//------------------------------------------------------------------------------------------------------------------------------------------------

//No 4
function selectionSort(arr) {
    const n = arr.length;
  
    for (let i = 0; i < n - 1; i++) {
      let minIndex = i;
  
      for (let j = i + 1; j < n; j++) {
        if (arr[j] < arr[minIndex]) {
          minIndex = j;
        }
      }
  
      if (minIndex !== i) {
        let temp = arr[i];
        arr[i] = arr[minIndex];
        arr[minIndex] = temp;
      }
    }
  }
  
  // Meminta input jumlah angka (n) dari pengguna
  const n = parseInt(prompt("Masukkan jumlah angka:"));
  if (isNaN(n) || n <= 0) {
    alert("Jumlah angka tidak valid.");
  } else {
    const angka = [];
  
    // Meminta input angka sebanyak n dari pengguna
    for (let i = 0; i < n; i++) {
      const angkaInput = parseInt(prompt(`Masukkan angka ke-${i + 1}:`));
      if (!isNaN(angkaInput)) {
        angka.push(angkaInput);
      } else {
        alert(`Input angka ke-${i + 1} tidak valid.`);
        i--;
      }
    }
  
    alert(`Angka sebelum diurutkan: ${angka}`);
    selectionSort(angka);
    alert(`Angka setelah diurutkan: ${angka.join(" ")}`);
  }

//--------------------------------------------------------------------------------------------------------------------------------------------------

//No 5
function decimalToBinary(decimal) {
    if (decimal === 0) {
      return "0"; // Khususkan kasus angka 0
    }
  
    let binary = "";
    while (decimal > 0) {
      // Bagi angka desimal dengan 2 dan simpan sisa bagi
      binary = (decimal % 2) + binary;
      // Bagi angka desimal dengan 2 untuk mengambil digit berikutnya
      decimal = Math.floor(decimal / 2);
    }
    return binary;
  }
  
  // Meminta input angka desimal dari pengguna
  const angkaDesimal = parseInt(prompt("Masukkan angka :"));
  
  // Mengonversi angka desimal ke angka biner
  const angkaBiner = decimalToBinary(angkaDesimal);
  
  alert(`Angka biner dari ${angkaDesimal} adalah ${angkaBiner}`);
  
