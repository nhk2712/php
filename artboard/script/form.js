var canvas = document.getElementById('canvas')
const file = dataURLtoBlob(canvas.toDataURL());

var formData = new FormData();
formData.append('image', file);

$.ajax({
    processData: false,
    contentType: false,
    data: formData,
    url: 'res.php',
    type: 'POST'
}).done(function(o){console.log("done")})

function dataURLtoBlob(dataURL) {
    let array, binary, i, len;
    binary = atob(dataURL.split(',')[1]);
    array = [];
    i = 0;
    len = binary.length;
    while (i < len) {
        array.push(binary.charCodeAt(i));
        i++;
    }
    return new Blob([new Uint8Array(array)], {
        type: 'image/png'
    });
};

var inp = document.querySelector('#inp');
inp.src=canvas.toDataURL('image/png');