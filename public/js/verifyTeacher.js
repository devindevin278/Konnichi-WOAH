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

    //   console.log(recipientImage);
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    let modalBodyInputName = exampleModal.querySelector('.modal-body input#recipient-name')
    let modalBodyInputEmail = exampleModal.querySelector('.modal-body input#recipient-email')
    let modalBodyInputImage = exampleModal.querySelector('.modal-body input#image')
    let modalBodyPreviewImage = exampleModal.querySelector('.modal-body img#recipient-image')

    console.log(modalBodyInputImage)
    modalBodyInputName.value = recipientName;
      modalBodyInputEmail.value = recipientEmail;
      modalBodyInputImage.value = recipientImage;
      modalBodyInputEmail.setAttribute("value", recipientEmail);
      modalBodyInputName.setAttribute("value", recipientName);
      modalBodyInputImage.setAttribute("value", recipientImage);
      let value_email = modalBodyInputEmail.getAttributeNode('value');
      value_email = recipientEmail;
      let value_name = modalBodyInputName.getAttributeNode('value');
      value_name = recipientName;
      let value_image = modalBodyInputImage.getAttributeNode('value');
      value_image = recipientImage;
    modalBodyPreviewImage.src = "storage/" + recipientImage;

    console.log(modalBodyInputEmail)
    console.log(modalBodyInputName)
    console.log(modalBodyInputImage)

  })
}

function submitForm() {
    if (confirm("Are you sure you want to verify this user?")) {
        var form = document.getElementById("verify_teacher");

        console.log(form);
        form.submit();
    }
}
