<form method="POST" action="contact.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <button type="submit">Submit</button>
</form>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'db.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "INSERT INTO contacts (name, email) VALUES ('$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "Thank you, $name. We will contact you at $email.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>


