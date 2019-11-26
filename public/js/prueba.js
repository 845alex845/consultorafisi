const boton=document.getElementById("confirmarexamen");
boton.addEventListener("click",()=>(
Swal.fire({
  title: 'Estás seguro?',
  text: "¡No podrás revertir esto!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Sí, Completar!'
}).then((result) => {
  if (result.value) {
    Swal.fire(
      'Evaluación creada!',
      'Se ha programado una nueva evaluación.',
      'success'
    )
  }
})
  ))