<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>
    <h3>Send Us a Message</h3>

    <form action="process1.php" method="POST">
        <label>Your Name</label><br>
        <input type="text" name="name" placeholder="Enter your name" required>
        <br><br>

        <label>Your Email</label><br>
        <input type="email" name="email" placeholder="Enter your email" required>
        <br><br>

        <label>Phone Number</label><br>
        <input type="tel" name="phone" placeholder="Enter Your phone number" required>
        <br><br>

        <label>Subject</label><br>
        <input type="text" name="subject" placeholder="Subject">
        <br><br>

        <label>Message</label><br>
        <textarea name="message" rows="5" placeholder="Write your message..." required></textarea>
        <br><br>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

</body>
</html>