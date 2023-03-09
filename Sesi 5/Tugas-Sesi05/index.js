function cetak() {
  let data = document.querySelector("#pesan").value;
  let looping = document.querySelector("#looping").value;
  let input = document.querySelector("input");
  let text = document.querySelector("#text");
  let i = 1;
  while (i <= looping) {
    text.innerHTML = text.innerHTML + `<p>${i}. ${data}</p>`;
    i++;
  }
}
