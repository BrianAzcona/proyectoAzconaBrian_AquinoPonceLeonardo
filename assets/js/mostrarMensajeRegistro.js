window.addEventListener("DOMContentLoaded", function () {
  const modalEl = document.getElementById("mensajeModal");
  if (modalEl) {
    const modal = new bootstrap.Modal(modalEl);
    modal.show();
  }
});
