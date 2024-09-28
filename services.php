<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marriage Halls Filter</title>
    <style>
        /* Add the same CSS as your original code */
    </style>
</head>
<body>
    <div class="text">
        <h1>Find Four Marriage Halls</h1>
    </div>

    <!-- Filter Section -->
    <nav class="navbar">
        <label for="location">Filter by Location:</label>
        <select id="location-filter">
            <option value="all">All Locations</option>
            <option value="new-york">New York</option>
            <option value="california">California</option>
            <option value="texas">Texas</option>
        </select>

        <label for="price">Filter by Price:</label>
        <select id="price-filter">
            <option value="all">All Price</option>
            <option value="low">Below $500</option>
            <option value="medium">$500-$1000</option>
            <option value="high">Above $1000</option>
        </select>

        <label for="capacity">Filter by Capacity:</label>
        <select id="capacity-filter">
            <option value="all">All Capacity</option>
            <option value="small">Less than 100</option>
            <option value="medium">100-300</option>
            <option value="large">More than 300</option>
        </select>
    </nav>

    <!-- Halls Section -->
    <div class="hall-container" id="hall-container">
        <!-- This section will be populated dynamically from the database -->
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get filter elements
            const locationFilter = document.getElementById('location-filter');
            const priceFilter = document.getElementById('price-filter');
            const capacityFilter = document.getElementById('capacity-filter');

            // Function to fetch and filter halls
            function filterHalls() {
                const location = locationFilter.value;
                const price = priceFilter.value;
                const capacity = capacityFilter.value;

                // Fetch filtered data from the server
                fetch('fetch_halls.php?location=' + location + '&price=' + price + '&capacity=' + capacity)
                    .then(response => response.json())
                    .then(data => {
                        const hallContainer = document.getElementById('hall-container');
                        hallContainer.innerHTML = ''; // Clear previous results

                        data.forEach(hall => {
                            // Create hall div and populate data
                            const hallDiv = document.createElement('div');
                            hallDiv.className = 'hall';
                            hallDiv.innerHTML = `
                                <img height="300px" src="${hall.image}" alt="${hall.name}">
                                <h3>${hall.name}</h3>
                                <p>Price: ${hall.price}</p>
                                <p>Capacity: ${hall.capacity}</p>
                                <button><a href="hall_${hall.id}.php">LEAN MORE</a></button>
                            `;
                            hallContainer.appendChild(hallDiv);

                            // Send the price (or another value) for conversion/processing
                            sendSecondaryNumber(hall.price);
                        });
                    });
            }

            // Event listeners for filters
            locationFilter.addEventListener('change', filterHalls);
            priceFilter.addEventListener('change', filterHalls);
            capacityFilter.addEventListener('change', filterHalls);

            // Secondary function to handle number conversion or sending
            function sendSecondaryNumber(number) {
                console.log('Secondary number sent for conversion: ' + number);
                // You can add additional logic here to process the number
            }

            // Initial load
            filterHalls();
        });
    </script>
</body>
</html>
