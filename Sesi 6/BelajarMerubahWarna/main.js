var bgcolor = document.querySelector("#bg-color");
var txtColor = document.querySelector("#text-color");

bgcolor.addEventListener("change", (event) => {
  document.body.style.backgroundColor = bgcolor.value;
});

txtColor.addEventListener("change", (event) => {
  document.body.style.color = txtColor.value;
});
