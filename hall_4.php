<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shagun Banquet,Kolhapur</title>
    <link rel="stylesheet" href="style.css">

    <style>
        /* Reset some default browser styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            max-width: auto;
            margin: auto;
            padding: 20px;
            background:rgb(228, 235, 183);;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            
        }

       
        

        h1, h2 {
            color: #2c3e50;
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
            color:gold;
            -webkit-text-stroke: 1px black;
         }
        
        .details p {
            margin: 10px 0;
        }

        ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        button {
            background-color: #2980b9;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        button a {
            color: white;
            text-decoration: none;
        }

        button:hover {
            background-color: #3498db;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 10px;
            margin-top: 20px;
            
        }

        .gallery img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .gallery img:hover {
            transform: scale(1.05);
        }

        .facility {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }

        .facility div {
            flex: 1 1 200px; /* Flex properties for responsive behavior */
            text-align: center; /* Center the text */
        }

        .facility img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .facility img:hover {
            transform: scale(1.05);
        }

        /* Rating Styles */
        .rating {
            display: flex;
            align-items: center;
            margin: 10px 0;
        }

        .star {
            font-size: 20px;
            color: #f1c40f; /* Gold color */
            cursor: pointer;
            -webkit-text-stroke: 0.50px black;
        }

        .star:hover {
            color: #f39c12; /* Darker gold on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Shagun Banquet,Kolhapur</h1>
<div style="text-align: center; align-items: center;"><img style="align-items: center; height: 400px; width: 500px; text-align: center; border-radius: 1rem;" src="./img/hall 4.jpg" alt="Shagun Banquet,Kolhapur" class="main-image">
</div>        
        <div class="details">
            <h2>Details</h2>
            <p><strong>Location:</strong> Kolhapur</p>
            <p><strong>Price:</strong> ₹3,000,000</p>
            <p><strong>Capacity:</strong>400 people</p>
            <p><strong>Description:</strong> Amrut Multipurpose Hall is a spacious venue suitable for various events such as weddings, receptions, and conferences. With modern amenities and a beautiful ambiance, it is the perfect place for your special day.</p>
            
            
        
        <h2>Amenities</h2>
        <ul>
            <li>video sutting</li>
            <li>garden area</li>
            <li>parking</li>
            <li>Clean and Well Maintained</li>
            <li>All events available</li>
            
            
        </ul>
        
        <h2>Gallery</h2>
        <div class="gallery">
            <img height="120px" src="./img/more3/inrerior.jpg" alt="Gallery Image 1">
            <img height="120px" src="./img/more3/set up.jpeg" alt="Gallery Image 2">
            <img height="120px" src="./img/more3/live wedding.jpg" alt="Gallery Image 3">
        </div>
        
        <h2>Function Facility</h2>
        <div class="facility">
            <div>
                <img style="height: 200px; ;" src="./img/more3/video sutting.jpg" alt="facility 1">
                <h3>video sutting</h3>
            </div>
            <div>
                <img style="height: 200px;" src="./img/more3/garden area.png" alt="facility 2">
                <h3>garden area</h3>
            </div>
            <div>
                <img style="height: 200px;" src="./img/more3/parking.jpg" alt="facility 3">
                <h3>parking</h3>
            </div>
            <div>
                <img style="height: 200px;" src="./img/more3/Clean and Well Maintained.jpg" alt="facility 4">
                <h3>Clean and Well Maintained</h3>
            </div>
        </div>
        <h2>Rating</h2>
            <div class="rating">
                <span class="star" onclick="rate(1)">★</span>
                <span class="star" onclick="rate(2)">★</span>
                <span class="star" onclick="rate(3)">★</span>
                <span class="star" onclick="rate(4)">★</span>
                <span class="star" onclick="rate(5)">★</span>
            </div>
            <p id="ratingResult"></p>
        </div>
        
        <button><a href="index.html">Back to Listings</a></button>
    </div>

    <script>
        function rate(rating) {
            const ratingResult = document.getElementById("ratingResult");
            ratingResult.textContent = "You rated this venue: " + rating + " star" + (rating > 1 ? "s" : "");
        }
    </script>
</body>
</html>
