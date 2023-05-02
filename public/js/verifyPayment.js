// console.log("hii")
const exampleModal = document.getElementById('exampleModal')
console.log(exampleModal)
if (exampleModal) {
  exampleModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
      const recipientName = button.getAttribute('data-bs-name')
      const recipientEmail = button.getAttribute('data-bs-email')
    //   console.log(recipient)
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const modalBodyInputName = exampleModal.querySelector('.modal-body input#recipient-name')
    const modalBodyInputEmail = exampleModal.querySelector('.modal-body input#recipient-email')

    modalBodyInputName.value = recipientName
    modalBodyInputEmail.value = recipientEmail
  })
}
