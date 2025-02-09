import {
    Chart,
    LineController,
    LineElement,
    PointElement,
    CategoryScale,
    LinearScale,
    Tooltip,
    Legend,
} from 'chart.js';

// Register the components you need
Chart.register(
    LineController,
    LineElement,
    PointElement,
    CategoryScale,
    LinearScale,
    Tooltip,
    Legend
);
import { numbers, days, CHART_COLORS, transparentize, months } from './ulites';


const ctx = document.getElementById('lineChar').getContext('2d');
const inputs = {
    min: -100,
    max: 100,
    count: 12,
    decimals: 2,
    continuity: 1
  };

  const generateLabels = () => {
    return months({count: inputs.count});
  };

  const generateData = () => (numbers(inputs));
const data = {
    labels: generateLabels(),
    datasets: [

      {
        label: 'عميل مكرر',
        data: generateData(),
        borderColor: CHART_COLORS.green,
        backgroundColor: transparentize(CHART_COLORS.green),
        fill: false,
        tension: 0.4 // Smooth line

      },
      {
        label: 'عميل جديد',
        data: generateData(),
        borderColor: CHART_COLORS.red,
        backgroundColor: transparentize(CHART_COLORS.red),
        fill: false,
        tension: 0.4 // Smooth line

      },
      {
        label: 'عميل دائم',
        data: generateData(),
        borderColor: CHART_COLORS.purple,
        backgroundColor: transparentize(CHART_COLORS.purple),
        fill: false,
        tension: 0.4 // Smooth line

      },
    ]
  };

const options = {

        plugins: {
          filler: {
            propagate: false,
          },
          legend: {
            position: 'top',
            align: 'start',

            labels:{

                usePointStyle:true,
                color: '#333',
                font: {
                    size: 16,
                    weight: 'bold',
                    family: "noor, sans-serif"
                },
                padding: 20,
                boxWidth: 20


            },
        },

        },
        interaction: {
          intersect: false,
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
    type: 'line', // Specify chart type
    data: data,
    options: options,
});
