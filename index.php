<?php include_once 'koneksi/koneksi.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
    <div class="container">
        <h1>Get in Touch</h1>
        <p>Feel free to reach out with any questions or inquiries.</p>
        <form action="process.php" method="post">
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="message">Your Message:</label>
                <textarea id="message" name="message" placeholder="Write your message here" required></textarea>
            </div>
            <button type="submit">Send Message</button>     
        </form>
        <?php if(isset($_GET['notif'])): 
            if($_GET['notif'] == 'kirimberhasil'): ?>
                <p>Your message has been sent. Thank you!</p>
            <?php elseif($_GET['notif'] == 'kirimgagal'): ?>
                <p>Failed to send your message. Please try again.</p>
            <?php endif; 
        endif;?> 
    </div>
    

    <script src="script.js"></script> </body>
</html>
