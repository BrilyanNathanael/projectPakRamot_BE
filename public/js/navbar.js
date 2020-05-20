var new_scroll_position = 0;
var last_scroll_position;

var header = document.getElementById("navbarScroll");
window.addEventListener('scroll', function (e) {
    last_scroll_position = window.scrollY;
    if (new_scroll_position < last_scroll_position && last_scroll_position > 80) {
        header.classList.remove("scrollDown");
        header.classList.add("scrollUp");
    } else if (new_scroll_position > last_scroll_position) {
        header.classList.remove("scrollUp");
        header.classList.add("scrollDown");
    }
    new_scroll_position = last_scroll_position;
});
