// Dasar Dom
document.write("Hello World");
document.write("<h2>Hello sesi 6</h2>");

// create element
var judul = document.createElement("p");
judul.textContent = "belajaar Js";
document.body.append(judul);
// create element H1
var deskripsi = document.createElement("h1");
deskripsi.textContent = "belajaar Menggunakan DOM";
document.body.append(deskripsi);
// menghapus dg remove
judul.remove();
// get identitas
var h2 = document.getElementById("judul2");
// Hapus h2
h2.remove();
// tampilkan log/ket. elemeent sdh dihapus
console.log("Elemen sudah dihapus");
// baca kembali data h2 di dlm body
console.log(h2);
