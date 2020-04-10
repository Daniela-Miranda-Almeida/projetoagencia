// vars
let result = document.querySelector('.result'),
img_result = document.querySelector('.img-result'),
img_w = document.querySelector('.img-w'),
p = document.querySelector('.texto'),
img_h = document.querySelector('.img-h'),
options = document.querySelector('.options'),
cropped = document.querySelector('.cropped'),
upload = document.querySelector('#file-input'),
cropper = '';

// on change show image with crop options
upload.addEventListener('change', (e) => {
if (e.target.files.length) {
    // start file reader
    const reader = new FileReader();
    reader.onload = (e) => {
        if (e.target.result) {
            // create new image
            let img = document.createElement('img');
            img.id = 'image';
            img.width = '410';
            img.height = '210';
            img.classList.add('redonda-borda-cima');
            img.classList.add('sombreamento');
            img.src = e.target.result
            // clean result before
            result.innerHTML = '';
            // append new image
            result.appendChild(img);
            p.classList.add('hide');
            // init cropper
            cropper = new Cropper(img);
        }
    };
    reader.readAsDataURL(e.target.files[0]);
}
});