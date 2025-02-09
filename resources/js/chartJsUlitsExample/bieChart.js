import {
    Chart,
    PieController,
    ArcElement,
    Tooltip,
    Legend,
    Title
} from 'chart.js';

// Register components
Chart.register(PieController, ArcElement, Tooltip, Legend, Title);

// Data preparation
const DATA_COUNT = 4;

const data = {
    labels: ['إنستغرام', 'فيس بوك', 'سناب شات', 'تيك توك'],
    datasets: [
        {
            label: 'نسبة الزوار',
            data: Array.from({ length: DATA_COUNT }, () => Math.floor((Math.random() * 100))),
            backgroundColor: ['#FB5A79', '#4976FF', '#FFFD84', '#363636'],
            borderColor: ['#FB5A79', '#4976FF', '#FFFD84', '#363636'],
            borderWidth: 2,
            hoverOffset: 5, // Increase hover interaction
        }
    ]
};

// Configuration for the pie chart
const config = {
    type: 'pie', // Change to 'pie'
    data: data,
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'bottom',
                labels: {
                    color: '#333',
                    font: {
                        size: 16,
                        weight: 'bold',
                        family: "noor, sans-serif"
                    },
                    padding: 20,
                    boxWidth: 20
                }
            },
            title: {
                display: true,
                text: 'نسبة الزوار',
                font: {
                    size: 18,
                    weight: 'bold',
                    family: "noor, sans-serif"
                },
                color: '#333'
            },
            tooltip: {
                backgroundColor: '#333',
                titleFont: {
                    size: 14,
                    weight: 'bold',
                    color: '#fff'
                },
                bodyFont: {
                    size: 12,
                    color: '#fff'
                },
                borderColor: '#fff',
                borderWidth: 1
            }
        },
        animation: {
            duration: 1000,
            easing: 'easeOutBounce'
        },
        layout: {
            padding: {
                top: 10,
                bottom: 10,
                left: 20,
                right: 20
            }
        }
    }
};

// Create the chart
const ctx = document.getElementById('bieChart').getContext('2d');
new Chart(ctx, config);
