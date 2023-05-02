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
      const recipientImage = button.getAttribute('data-bs-image')

    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const modalBodyInputName = exampleModal.querySelector('.modal-body input#recipient-name')
    const modalBodyInputEmail = exampleModal.querySelector('.modal-body input#recipient-email')
    const modalBodyInputImage = exampleModal.querySelector('.modal-body img#recipient-image')

    modalBodyInputName.value = recipientName
    modalBodyInputEmail.value = recipientEmail
    modalBodyInputImage.src = `img/verifyTeacher/`+ recipientImage
  })
}
