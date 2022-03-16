// Horizontal Bar Chart comp

function setUpBarChart() {
    var container = document.getElementById("geo-bar-chart");
    var bars = container.getElementsByClassName('bar');

    setBarsSize(bars);
    setBarHovers(bars);
    setBarSlices(bars);
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
        bar.textContent = ''
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

function setBarSlices(bars) {
    slices = document.getElementById('chart-slices-list');
    vp_width = window.innerWidth;
    slices_height = (bars.length + 1) * (4 * vp_width / 100);
    slices.style.height = slices_height + "px";
}

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

// Chart Creation with Chart JS

function prepareChart(chart_ID, chart_type, color_set, chart_labels, chart_values) {
    console.log('Chart preparation...')
    try {
        const ctx = document.getElementById(chart_ID).getContext('2d');
        createNewChart(ctx, chart_type, color_set, chart_labels, chart_values);
    
    } catch (error) {
        console.log("Graph not found");
    }
}

function createNewChart(ctx, chart_type, color_set, chart_labels, chart_values) {
    const labels = chart_labels;
    
    const data = {
        labels,
        datasets: [
            {
                data: arrayStringToInt(chart_values),
                label: "Alternance par secteur d'activité",
                backgroundColor: color_set,
            },
        ],
    };
    
    const config = {
        type: chart_type,
        data: data,
        options: {
            responsive: true,
        }
    }
    
    const activityChart = new Chart(ctx, config);
}

// Useful functions

function arrayStringToInt(array) {
    new_array = [];
    for (let i = 0; i < array.length; i++) {
        const el = array[i];
        if (typeof(el) == 'string') {
            try {
                let temp_el = parseInt(el, 10);
                new_array.push(temp_el);
            } catch (error) {
                console.log(error);
                continue;
            }
        }
    }
    return new_array
}