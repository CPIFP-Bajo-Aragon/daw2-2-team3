document.addEventListener("DOMContentLoaded", function() {
  let nif = document.getElementById("NIF");
  nif.addEventListener("keyup", function () {
    console.log(nif.value);
  });
});

function getForm() {
  form.nif = document.getElementById("NIF").value;
}