// Algoritma Lingkaran

let lingkaran = prompt("apa yang ingin anda hitung ?");

if (lingkaran == "luas") {
  let jariLingkaran = prompt("masukan nilai jari-jari lingkaran: ");
  let pi = 3.14;
  let luasLingkaran = jariLingkaran ** 2 * pi;
  console.log(`hasil dari luas lingkaran adalah ${luasLingkaran.toFixed(0)}`);
} else if (lingkaran == "keliling") {
  let jariLingkaran = prompt("masukan nilai dari jari-jari lingkaran: ");
  let pi = 3.14;
  let kelilingLingkaran = 2 * jariLingkaran * pi;
  console.log(
    `hasil dari keliling lingkaran adalah ${kelilingLingkaran.toFixed(0)}`
  );
} else {
  alert("harap masukan jawaban yang benar, mau cari nilai luas atau keliling");
}
