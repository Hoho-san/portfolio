<?php require_once('header.php'); ?>

<?php 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $message = $_POST['message'];

    // Insert data into the portfolio table
    $sql = "INSERT INTO contact (username, email, message) VALUES ('$username', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message sent successfully')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

?>

<section class="contact section" id="contact">
            <h2 class="section_title">Contact Us</h2>

            <div class="contact_container bg-grid">
                <form method="post" action="" class="contact_form">
                    <input type="text" placeholder="username" class="contact_input" name="username" required>
                    <input type="email" placeholder="Email" class="contact_input" name="email" required>
                    <textarea name="message" id="message" cols="30" rows="10" class="contact_input" required></textarea>
                    <input type="submit" value="Submit" class="contact_button button" name="submit">
                </form>
            </div>
        </section>

<?php require_once('footer.php'); ?>