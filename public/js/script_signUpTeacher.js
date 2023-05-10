"use strict";
function dragNdrop(event) {
    var fileName = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("preview");
    var previewImg = document.createElement("img");
    previewImg.setAttribute("src", fileName);
    preview.innerHTML = "";
    preview.appendChild(previewImg);
}
function drag() {
    document.getElementById('uploadFile').parentNode.className = 'draging dragBox';
}
function drop() {
    document.getElementById('uploadFile').parentNode.className = 'dragBox';
}
// function previewImage() {
//     const image = document.querySelector('#image');
//     const imgPreview = document.querySelector('.img-preview');

//     imgPreview.style.display = 'block';

//     const oFReader = new FileReader();
//     oFReader.readAsDataURL(image.files[0]);

//     oFReader.onload = function(oFREvent) {
//         imgPreview.src = oFREvent.target.result;
//     }
// }
