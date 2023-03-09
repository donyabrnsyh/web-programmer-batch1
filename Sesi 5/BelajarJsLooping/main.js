function print() {
  let jumlah = document.getElementById("jumlah").value;
  let hasil = document.getElementById("hasil");
  //   for (let i = 0; i < jumlah; i++) {
  //     hasil.innerHTML = hasil.innerHTML + `<p>${i}</p>`;
  //   }
  let i = 0;
  while (i < jumlah) {
    hasil.innerHTML = hasil.innerHTML + `<p>${i}</p>`;
    i++;
  }
}
