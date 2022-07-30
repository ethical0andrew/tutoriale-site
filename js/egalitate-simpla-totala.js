a = 1
b = true
c = '1'
d = true

// egalitate simpla
if (a == b) console.log(true); // true
if (a == c) console.log(true); // true
if (b == c) console.log(true); // true
if (b == d) console.log(true); // true
// Exemplu de negatie
if (a != b) console.log(true); else console.log(false); // false


// egalitate totala
if (a === b) console.log(true); else console.log(false); // false
if (a === c) console.log(true); else console.log(false); // false
if (b === c) console.log(true); else console.log(false); // false
if (b === d) console.log(true); // true

// Exemplu de negatie
if (a !== b) console.log(true); // true
