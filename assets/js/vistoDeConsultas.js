<script>
console.log("vistoDeConsultas.js cargado correctamente");
document.addEventListener('DOMContentLoaded', function() {
    const modals = document.querySelectorAll('[id^="modalConsulta"]');

    modals.forEach(modal => {
        modal.addEventListener('shown.bs.modal', function() {
            const modalId = modal.id;
            const btn = document.querySelector(`button[data-bs-target="#${modalId}"]`);
            if (btn) {
                const icono = btn.parentElement.querySelector('.icono-visto');
                if (icono) {
                    icono.classList.remove('d-none');
                }
            }
        });
    });
});
</script>