
document.addEventListener("DOMContentLoaded", () => {
    confirmarEliminacion();
});

function confirmarEliminacion() {
    document.querySelectorAll(".delete-btn").forEach(btn =>
        btn.addEventListener("click", () =>
            Swal.fire({
                title: '¿Estás seguro?',
                text: "Esta acción no se puede deshacer.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then(r => r.isConfirmed && btn.closest("form").submit())
        )
    );
}
