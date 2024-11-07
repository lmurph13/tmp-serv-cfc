<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <p>Name: {{ $formDetails['name'] }}</p>
    <p>Phone: {{ $formDetails['phone'] }}</p> 
    <p>Email: {{ $formDetails['email'] }}</p>
    <p>Message: {{ $formDetails['message'] }}</p>
</body>
</html>