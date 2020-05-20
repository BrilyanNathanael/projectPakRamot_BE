var addPict = document.getElementById('addPicture');
var pict = document.getElementById('picture');
var txt = document.getElementById('text');

addPict.addEventListener("click", function () {
    pict.click();
});

pict.addEventListener("change", function () {
    if (pict.value) {
        txt.innerHTML = pict.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
    } else {
        txt.innerHTML = "No file chosen, yet.";
    }
})
