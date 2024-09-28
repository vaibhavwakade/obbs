<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marriage Halls Filter</title>
  <style>
    
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url(./img/main\ background.jpg);
        }

        .text {
            text-align: center;
            margin: 20px;
        }

        h1 {
            color: #555;
        }

        .navbar {
            display: flex;
            justify-content: center;
            padding: 10px;
            background-color: #f0d6e7;
            color: #8f1995;
        }

        .navbar label {
            margin: 0 10px;
        }

        .navbar select {
            margin: 0 10px;
        }

        .hall-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px;
        }

        .hall {
            background-color: white;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 10px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .hall:hover {
            transform: scale(1.05);
        }

        .hall img {
            max-width: 100%;
            border-radius: 5px;
        }

        h3 {
            color: black;
        }

        p {
            color: #555;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        header {
            background: #6c63ff;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        nav ul {
            list-style: none;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        section {
            padding: 20px;
            margin: 20px 0;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 15px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 10px;
        }

        .gallery-grid img {
            width: 100%;
            border-radius: 8px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form label {
            margin: 10px 0 5px;
        }

        form input,
        form textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            margin-top: 10px;
            padding: 10px;
            background: #6c63ff;
            color: white;
            border-color: black;
            border-radius: 20px;
        }

        button:hover {
            background: #5a52d8;
        }

        footer {
            text-align: center;
            padding: 20px 0;
            background: #333;
            color: #fff;
        }

        @media (max-width: 768px) {
            nav ul li {
                display: block;
                margin: 10px 0;
            }

            section {
                margin: 10px;
                padding: 15px;
            }

            .gallery-grid {
                grid-template-columns: repeat(auto-fill, minmax(100%, 1fr));
            }

            form input,
            form textarea {
                font-size: 16px;
            }

            button {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            header h1 {
                font-size: 24px;
            }

            nav ul li {
                font-size: 14px;
            }

            section h2 {
                font-size: 20px;
            }
        }
    
  </style>
 
</head>
<body>




<div class="text">

<h1>
    Find Four Marriage Halls
</h1>
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



<label for="Price">Filter by Price:</label>
<select id="price-filter">
    <option value="all">All Price</option>
    <option value="low">Below $500</option>
    <option value="medium">$500-$1000</option>
    <option value="high">above $1000</option>
</select>

<label for="location">Filter by Capacity:</label>
<select id="location-filter">
     <option value="all">All Capacity</option>
     <option value="small">Less then 100</option>
     <option value="medium">100-300</option>
     <option value="large">more than 300</option>
</select>
</nav>
<!-- Halls Section -->

<div class="hall-container" id="hall-container">
    <div class="hall" data-location="Kolhapur" data-price="medium" data-capacity="large">
        <img height="300"src="./img/hall 1.jpg" alt="Hall 1">
        <h3>Amrut Multipurpose Hall, Kolhapur</h3>
        <p >Price: 1,000,000</p>
        <p>Capacity: 500-300 people</p>
        <button><a href="hall_1.php">LEAN MORE</a></button>
        

    </div>
 
        <div class="hall" data-location="Kolhapur" data-price="medium" data-capacity="large">
            <img height="300px" src="./img/hall 2.jpg" alt="Hall 2">
            <h3>Vithai Chandrai Lawns,Kolhapur</h3>
            <p>Price: 5,000,000</p>
            <p>Capacity: 600 people</p>
            <button><a href="hall_2.php">LEAN MORE</button>
        </div>


        <div class="hall" data-location="Kolhapur" data-price="medium" data-capacity="large">
            <img height="300px" src="./img/hall 3.png" alt="Hall 3">
            <h3>Mangalya Multipurpose Hall,Kolhapur</h3>
            <p>Price: 2,000,000</p>
            <p>Capacity: 300 people</p>
            <button><a href="hall_3.php">LEAN MORE</button>
        </div>

        <div class="hall" data-location="Kolhapur" data-price="medium" data-capacity="large">
            <img height="300px" src="./img/hall 4.jpg" alt="Hall 4">
            <h3>Shagun Banquet,Kolhapur</h3>
            <p>Price: 3,000,000</p>
            <p>Capacity: 400 people</p>
            <button><a href="hall_4.php">LEAN MORE</button>
        </div>

        <div class="hall" data-location="Kolhapur" data-price="medium" data-capacity="large">
            <img height="300px" src="./img/hall 5.jpg" alt="Hall 5">
            <h3>Lucky Function Hall,Kolhapur</h3>
            <p>Price: 2,000,000</p>
            <p>Capacity: 300 people</p>
            <button><a href="hall_5.php">LEAN MORE</button>
        </div> 
           
        <div class="hall" data-location="Kolhapur" data-price="medium" data-capacity="large">
    <img height="300px" src="./img/hall 6.jpg" alt="Hall 6">
    <h3>Ravaji Sanskrutik Bhavan, Kolhapur</h3>
    <p>Price: 1,000,000</p>
    <p>Capacity: 500-300 people</p> <!-- Missing closing tag added here -->
    <button><a href="hall_6.php">LEAN MORE</a></button> 
        </div>
            
 

</body>
</html>
