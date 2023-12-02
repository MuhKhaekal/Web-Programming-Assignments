function splitMe(string) {
    const specialChars = /[,#$]/g;
    const words = string.split(specialChars);
    const result = [];
    for (let i = 0; i < words.length; i++) {
      const letters = words[i].split('');
      result.push(letters);
    }
    return result;
  }

const result = console.log(splitMe("aqrst,ukaei,ffooo"));