var txt = document.querySelector('#txt');
var font = document.querySelector('#font');
var size = document.querySelector('#size');
var bold = document.querySelector('#bold'),
    italic = document.querySelector('#italic'),
    spellcheck = document.querySelector('#spellcheck')

load()
window.onresize = load
function load() {
    txt.style.height = (window.innerHeight * 80 / 100).toString() + 'px';
}

function download() {
    var textcontent = txt.value
    var downloadableLink = document.createElement('a');
    downloadableLink.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(textcontent));
    downloadableLink.download = "download" + ".txt";
    document.body.appendChild(downloadableLink);
    downloadableLink.click();
    document.body.removeChild(downloadableLink);
}

var down = document.querySelector('#down')
down.onclick = download