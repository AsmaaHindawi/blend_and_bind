<!DOCTYPE html>
<html>
<head>
    <title>Contact Confirmation</title>
</head>
<body>
    <h1>Thank You for Contacting Us, {{ is_array($name) ? implode(' ', $name) : $name }}!</h1>
    <p>We are so happy that you have become part of our family.</p>
    <p>If you have any further questions, feel free to reach out to us.</p>
</body>
</html>
