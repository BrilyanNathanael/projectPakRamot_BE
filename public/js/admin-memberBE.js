function hoverNewArticle(e) {
    e.style.backgroundColor = "#00909e";
}

function outHoverNewArticle(e) {
    e.style.backgroundColor = "#142850";
}

function hoverBan(e) {
    e.setAttribute('src', '/image/padlock-ban.png');
}

function outHoverBan(e) {
    e.setAttribute('src', '/image/padlock-unban.png');
}

function hoverUnban(e) {
    e.setAttribute('src', '/image/padlock-unban.png');
}

function outHoverUnban(e) {
    e.setAttribute('src', '/image/padlock-ban.png');
}
