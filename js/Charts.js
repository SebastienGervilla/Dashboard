// Horizontal Bar Chart comp

function setUpBarChart() {
    var container = document.getElementById("geo-bar-chart");
    var bars = container.getElementsByClassName('bar');

    setBarsSize(bars);
    setBarHovers(bars);
}

function setBarsSize(bars) {
    if (bars.length == 0) {
        return;
    }
    maxScale = getChartScale(bars);
    maxSize = 600;
    for (let i = 0; i < bars.length; i++) {
        const bar = bars[i];
        barValue = parseInt(bar.textContent, 10);
        barSize = Math.ceil(maxSize * (barValue / maxScale));
        bar.style.width = barSize + "px";
        // bar.textContent = ''
    }
}

function getChartScale(bars) {
    highestBar = parseInt(bars[0].textContent, 10);
    for (let i = 0; i < bars.length; i++) {
        const bar = parseInt(bars[i].textContent, 10);
        if (bar > highestBar) {
            highestBar = bar;
        }
    }
    scale = Math.ceil(highestBar / 50) * 50;
    return scale
}

window.onload = setUpBarChart();

function setBarHovers(bars) {
    for (let i = 0; i < bars.length; i++) {
        const bar = bars[i];
        bar.addEventListener('mouseover', function () {
            console.log('yes');
        });
        bar.addEventListener('mouseleave', function () {
            console.log('yes');
        });
    }
}