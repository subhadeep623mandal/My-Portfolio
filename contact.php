<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'db.php';
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Message sent successfully!');</script>";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}
header("Location: index.html#contact");
exit;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Me</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <section class="contact">
    <h2>Contact Me</h2>
    <form method="POST" action="contact.php">
      <input type="text" name="name" placeholder="Your Name" required /><br>
      <input type="email" name="email" placeholder="Your Email" required /><br>
      <textarea name="message" placeholder="Your Message" required></textarea><br>
      <button type="submit">Send Message</button>
    </form>
  </section>
</body>
</html>
