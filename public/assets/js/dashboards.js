// Sample data for the bar charts
const dailyData = {
    labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5"],
    datasets: [
        {
            label: "Daily Sales",
            backgroundColor: "rgba(255, 99, 132, 0.2)",
            borderColor: "rgba(255, 99, 132, 1)",
            borderWidth: 1,
            data: [5, 10, 8, 12, 15],
        },
    ],
};

const monthlyData = {
    labels: ["January", "February", "March", "April", "May"],
    datasets: [
        {
            label: "Monthly Sales",
            backgroundColor: "rgba(54, 162, 235, 0.2)",
            borderColor: "rgba(54, 162, 235, 1)",
            borderWidth: 1,
            data: [10, 20, 15, 25, 30],
        },
    ],
};

// Get the bar chart canvas element
const barChartCanvas = document.getElementById("barChart");

// Create the bar chart with daily data by default
const barChart = new Chart(barChartCanvas, {
    type: "bar",
    data: dailyData,
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});

// Function to switch between daily and monthly data
function switchChartData(isMonthly) {
    const newData = isMonthly ? monthlyData : dailyData;
    barChart.data = newData;
    barChart.update();
}

// Function to add customers
function addCustomers() {
    const customers = [
        {
            name: "Josh",
            profile: "profile1.jpg",
        },
        {
            name: "Josh",
            profile: "profile2.jpg",
        },
        {
            name: "Josh",
            profile: "profile3.jpg",
        },
        // Add more customers as needed
    ];

    // Get the customerList element
    const customerList = document.getElementById("customerList");

    // Loop through customers and create list items
    customers.forEach((customer) => {
        const customerItem = document.createElement("li");
        customerItem.innerHTML = `
        <img src="${customer.profile}" alt="${customer.name}" width="36" height="36" style="border-radius: 50%; object-fit: cover;">
        <span>${customer.name}</span>
      `;

        // Append the customer to the new-customers-list
        customerList.appendChild(customerItem);
    });
}

// Call the function to add customers on page load
addCustomers();
