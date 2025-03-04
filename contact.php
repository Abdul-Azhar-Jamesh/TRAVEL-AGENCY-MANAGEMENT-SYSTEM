<?php include("project.html")?>
<body>
<div class="contact">
    <div class="content1">
        <h1>Contact Information</h1>
        <p>
            <strong>Get in Touch with Us</strong><br>
            At My Trip, we are here to make your travel experience seamless and memorable. Reach out to us for inquiries, bookings, or assistance.
        </p>
        <h2>Head Office:</h2>
        <p>
            My Trip Pvt. Ltd.<br>
            1234 Wanderlust Avenue,<br>
            Delhi City, Delhi
        </p>
        <h2>Phone Numbers:</h2>
        <p>
            Customer Support: +91 8005551234<br>
            International Queries: +91 8005555678<br>
            Domestic Queries: +91 8005559012
        </p>
        <h2>Email Us:</h2>
        <p>
            General Inquiries: info@ddtravels.com<br>
            Bookings: bookings@ddtravels.com<br>
            Support: support@ddtravels.com
        </p>
        <h2>Working Hours:</h2>
        <p>
            Monday to Friday: 9:00 AM to 8:00 PM<br>
            Saturday: 10:00 AM to 5:00 PM<br>
            Sunday: Closed
        </p>
    </div>
    <div class="contentr">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15433610.340305625!2d71.77098249233657!3d19.19645695858312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52f78bc29b016d%3A0x9170d376897ea1d9!2sDD%20Yatra%20Tours%20and%20Travels!5e0!3m2!1sen!2sin!4v1733061004302!5m2!1sen!2sin" 
            width="600" 
            height="450" 
            class="map-iframe" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <form action="contact_process.php" method="POST">
            <label for="name">Full Name:</label><br>
            <input type="text" id="name" name="name" placeholder="Enter your name" required><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" placeholder="Enter your email" required><br>

            <label for="phone">Phone Number:</label><br>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number"><br>

            <label for="message">Your Message:</label><br>
            <textarea id="message" name="message" rows="5" placeholder="How can we help you?" required></textarea><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>
</body>
<?php include("footer.html")?>


