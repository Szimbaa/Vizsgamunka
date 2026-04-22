document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".toggle-password").forEach(toggle => {
    toggle.addEventListener("click", () => {
      const input = toggle.previousElementSibling;

      if (input.type === "password") {
        input.type = "text";
        toggle.classList.replace("bi-eye", "bi-eye-slash");
      } else {
        input.type = "password";
        toggle.classList.replace("bi-eye-slash", "bi-eye");
      }
    });
  });
});