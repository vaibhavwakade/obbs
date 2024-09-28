<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

/* Product Overview Section */
.product-overview {
    display: flex;
    justify-content: space-between;
    padding: 20px;
    background-color: #fff;
}

.product-details {
    width: 50%;
}

.product-details h1 {
    font-size: 36px;
    margin-bottom: 10px;
}

.product-details p {
    font-size: 16px;
    color: #555;
}

.rating {
    font-size: 18px;
    color: #e67e22;
}

.product-image {
    width: 45%;
}

.product-image img {
    width: 100%;
    height: auto;
}


/* Photo Gallery Section */

/* Enhanced Photo Gallery Section */
.gallery {
    padding: 20px;
    background-color: #fff;
    margin-top: 20px;
}

.gallery h2 {
    text-align: center;
    font-size: 28px;
    margin-bottom: 20px;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
}

/* Gallery Item Styling */
.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
}

.gallery-item img {
    width: 100%;
    height: auto;
    transition: transform 0.6s ease, opacity 0.5s ease, border 0.5s ease, box-shadow 0.5s ease;
    border: 4px solid transparent;
}

/* Hover Animation with Zoom and Rotate */
.gallery-item:hover img {
    transform: scale(1.2) rotate(2deg);
    opacity: 0.9;
    border: 4px solid #1abc9c;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
}

/* Fade-in Effect when the page loads */
.gallery-item {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 1s ease forwards;
}

.gallery-item:nth-child(1) { animation-delay: 0.1s; }
.gallery-item:nth-child(2) { animation-delay: 0.2s; }
.gallery-item:nth-child(3) { animation-delay: 0.3s; }
.gallery-item:nth-child(4) { animation-delay: 0.4s; }

/* Fade-in Animation */
@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Pop-up Image Overlay */
.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
}

.popup-img {
    max-width: 80%;
    max-height: 80%;
    border: 5px solid white;
    border-radius: 10px;
}

/* Contact Section */
.contact-section {
    padding: 20px;
    background-color: #fff;
    text-align: center;
    margin-top: 20px;
}

.contact-section h2 {
    font-size: 28px;
    margin-bottom: 10px;
}

.contact-section p {
    font-size: 16px;
    margin-bottom: 20px;
}

.contact-button {
    padding: 10px 20px;
    background-color: #1abc9c;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.contact-button:hover {
    background-color: #16a085;
}


/* About Section */
.about {
    padding: 20px;
    background-color: #fff;
    margin-top: 20px;
}

.about h2 {
    font-size: 28px;
    margin-bottom: 10px;
}

.about p {
    font-size: 16px;
    line-height: 1.6;
    color: #555;
}


/* Service Overview Section */
.service-overview {
    padding: 20px;
    text-align: center;
    background-color: #1abc9c;
    color: white;
}

.service-overview h1 {
    font-size: 36px;
}

.service-overview p {
    font-size: 18px;
    margin-top: 10px;
}

/* Top Services Section */
.top-services {
    padding: 20px;
    background-color: #fff;
    margin-top: 20px;
}

.top-services h2 {
    text-align: center;
    font-size: 28px;
    margin-bottom: 20px;
}

.service-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    gap: 20px;
}

.service-card {
    background-color: #f9f9f9;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    width: 30%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.service-card h3 {
    font-size: 22px;
    margin-bottom: 10px;
}

.service-card p {
    font-size: 16px;
    color: #555;
}

.rating {
    font-size: 16px;
    color: #e67e22;
}

/* Contact Section */
.contact-section {
    padding: 20px;
    background-color: #fff;
    text-align: center;
    margin-top: 20px;
}

.contact-section h2 {
    font-size: 28px;
    margin-bottom: 10px;
}

.contact-section p {
    font-size: 16px;
    margin-bottom: 20px;
}

.contact-button {
    padding: 10px 20px;
    background-color: #1abc9c;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.contact-button:hover {
    background-color: #16a085;
}

    </style>
</head>
<body>

<!-- Product Overview Section -->
<section class="product-overview">
    <div class="product-details">
        <h1>Modern Chair Design</h1>
        <p>A modern and comfortable chair designed with style and functionality in mind.</p>
        <div class="rating">
            <p>Rating: ⭐⭐⭐⭐⭐ (4.8/5)</p>
        </div>
    </div>

    <div class="product-image">
        <img src="images/chair.jpg" alt="Modern Chair Design">
    </div>
</section>


<!-- Photo Gallery Section with Animation -->
<!-- Enhanced Photo Gallery Section -->
<section class="gallery">
    <h2>Photo Gallery</h2>
    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="images/photo1.jpg" alt="Photo 1">
        </div>
        <div class="gallery-item">
            <img src="images/photo2.jpg" alt="Photo 2">
        </div>
        <div class="gallery-item">
            <img src="images/photo3.jpg" alt="Photo 3">
        </div>
        <div class="gallery-item">
            <img src="images/photo4.jpg" alt="Photo 4">
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <h2>Contact Us for More Information</h2>
    <p>If you’re interested in any of our services or need custom solutions, feel free to reach out!</p>
    <button class="contact-button">Contact Us</button>
</section>

<!-- JavaScript for Pop-Up Effect -->

</script>

<!-- About Section -->
<section class="about">
    <h2>About This Product</h2>
    <p>This modern chair is crafted with precision and attention to detail. It combines style, comfort, and functionality, making it perfect for both home and office use. The ergonomic design ensures maximum comfort, while the sleek lines and high-quality materials make it a stylish addition to any room.</p>
</section>


<!-- Service Overview Section -->
<section class="service-overview">
    <h1>Our Top 5 Services</h1>
    <p>Explore our premium services, designed to offer the best quality and customer satisfaction.</p>
</section>

<!-- Top 5 Services Section -->
<section class="top-services">
    <h2>Top 5 Services We Provide</h2>
    <div class="service-list">
        <!-- Service 1 -->
        <div class="service-card">
            <h3>1. Event Engineering</h3>
            <p>We design and manage engineering for large-scale events, providing technical support and infrastructure.</p>
            <div class="rating">Rating: ⭐⭐⭐⭐⭐ (5/5)</div>
        </div>

        <!-- Service 2 -->
        <div class="service-card">
            <h3>2. Engineering Consultancy</h3>
            <p>Our team of experts offers consultancy for a wide range of engineering projects, ensuring seamless execution.</p>
            <div class="rating">Rating: ⭐⭐⭐⭐☆ (4.5/5)</div>
        </div>

        <!-- Service 3 -->
        <div class="service-card">
            <h3>3. Product Manufacturing</h3>
            <p>We manufacture top-quality products tailored to your needs, from small components to large machinery.</p>
            <div class="rating">Rating: ⭐⭐⭐⭐☆ (4.7/5)</div>
        </div>

        <!-- Service 4 -->
        <div class="service-card">
            <h3>4. Maintenance & Repair</h3>
            <p>We offer maintenance and repair services to ensure your equipment operates at peak performance.</p>
            <div class="rating">Rating: ⭐⭐⭐⭐☆ (4.6/5)</div>
        </div>

        <!-- Service 5 -->
        <div class="service-card">
            <h3>5. Custom Engineering Solutions</h3>
            <p>We provide tailored solutions for unique engineering challenges, designed specifically for your project.</p>
            <div class="rating">Rating: ⭐⭐⭐⭐⭐ (5/5)</div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <h2>Contact Us for More Information</h2>
    <p>If you’re interested in any of our services or need custom solutions, feel free to reach out!</p>
    <button class="contact-button">Contact Us</button>
</section>

</body>
</html>
