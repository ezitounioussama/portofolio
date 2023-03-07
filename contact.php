<?
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$to = 'ezitounioussama@gmail.com'; // replace with your email address
$subject = 'New message from contact form';
$body = "Name: $name\nSurname: $surname\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";

$headers = array(
    'From: ' . $name . ' <' . $email . '>',
    'Reply-To: ' . $email,
    'X-Mailer: PHP/' . phpversion()
);

if (mail($to, $subject, $body, implode("\r\n", $headers))) {
    echo 'Message sent successfully!';
    header('location:./');
} else {
    echo 'An error occurred while sending the message.';
}
