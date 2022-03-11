// Fill BG

function fillBackground() {
    var data_content = document.getElementById('data-content');
    var data_height = data_content.offsetHeight;
    var vp_height = window.innerHeight;
    var excess_height = data_height - (86/100) * vp_height;
    if (excess_height > 0) {
        data_content.parentElement.style.height = (86/100) * vp_height + excess_height + "px";
        document.getElementById('header-area').style.height = vp_height + excess_height + "px";
    }
}

window.onload = fillBackground();

// Horizontal Bar Chart comp

function getBarsHeight(containerID) {
    console.log('tes')
}