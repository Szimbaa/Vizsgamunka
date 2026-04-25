document.addEventListener("DOMContentLoaded", function () {
  var a = document.querySelectorAll(".password-eye");
  for (var i = 0; i < a.length; i++) {
    var ikon = a[i];
    ikon.addEventListener("click", function () {
      var ikon = this;
      var passw = ikon.previousElementSibling;
      if (passw.type === "password") {
        passw.type = "text";
        ikon.classList.remove("bi-eye");
        ikon.classList.add("bi-eye-slash");

      } else {
        passw.type = "password";
        ikon.classList.remove("bi-eye-slash");
        ikon.classList.add("bi-eye");
      }
    });
  }
});