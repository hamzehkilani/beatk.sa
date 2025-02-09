import {
    Chart,
    BarController,
    BarElement,
    CategoryScale,
    LinearScale,
    Tooltip,
    Legend,
} from 'chart.js';

// Register the components you need
Chart.register(
    BarController,
    BarElement,
    CategoryScale,
    LinearScale,
    Tooltip,
    Legend
);
import { numbers, days, CHART_COLORS, transparentize } from './ulites';


const ctx = document.getElementById('lablesChar').getContext('2d');
const DATA_COUNT = 7;
const NUMBER_CFG = { count: DATA_COUNT, min: 0, max: 200 };

const labels = days({ count: 7 });
const data = {
    labels: labels,
    datasets: [
        {
            label: 'CPL',
            data: [100,80,150,40,100,90],
            borderColor: CHART_COLORS.blue,
            backgroundColor: CHART_COLORS.blue,
            borderWidth: 1,
            borderRadius: Number.MAX_VALUE,
            borderSkipped: false,
            barPercentage: 0.55,
            categoryPercentage: 0.80,
        },
        {
            label: 'CPC',
            data: numbers(NUMBER_CFG),
            borderColor: CHART_COLORS.customerColor,
            backgroundColor: CHART_COLORS.customerColor,
            borderWidth: 1,
            borderRadius: Number.MAX_VALUE,
            borderSkipped: false,
            barPercentage: 0.55, // Set the exact bar width in pixels
        },
    ],
};

const options = {
    responsive: true,
    plugins: {
        legend: {
            position: 'top',
            align: 'start',

            labels:{

                usePointStyle:true,
                boxHeight:250,
                font: {
                    size: 15,
                    padding:10,
                }


            }



        },
    },

    scales: {
        x: {

            grid: {
                drawTicks: false,
                display: false // Hides X-axis grid lines
            }
        },
        xTopPadding: {
            position: 'top',
            labels: [''],
            grid: {
              drawOnChartArea: false,
              drawTicks: true,
              ticksWidth: 0,
              ticksLength: 1, // Increase ticksLength to increase the "padding"
            },
        },
        y: {
            grid: {
                drawTicks: false,
                display: true // Enables Y-axis grid lines
            },
            ticks: {
                // forces step size to be 50 units
                stepSize: 50
              }
        }

    },

};

new Chart(ctx, {
    type: 'bar', // Specify chart type
    data: data,
    options: options,
});
