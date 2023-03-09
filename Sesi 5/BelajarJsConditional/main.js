function cek() {
  let nilai = document.getElementById("nilai").value;
  let hasil = document.getElementById("hasil");

  let hasilNilai = "";

  if (nilai > 80) {
    hasilNilai = "A";
  } else if (nilai >= 70) {
    hasilNilai = "B";
  } else if (nilai >= 65) {
    hasilNilai = "C";
  } else {
    hasilNilai = "D";
  }

  hasil.innerHTML = hasilNilai;
}
