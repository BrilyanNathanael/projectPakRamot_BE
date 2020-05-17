var drop = document.querySelector('.menuBar .menuLink .dropdown .profile');

function clickDropDown(e) {
    if (drop.style.display == 'none') {
        drop.style.display = 'flex';
    } else {
        drop.style.display = 'none';
    }
}
