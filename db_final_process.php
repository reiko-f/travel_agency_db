<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Manrope&display=swap');

            body {
                font-family: 'Manrope', sans-serif;
                color: gray;
                background-color: #E3F9A6;
                padding: 20px;
                margin: 20px;
                font-size: 1.8em;
            }

        </style>
    <title>Form Processing</title>
</head>
<body>
    <?php
      
        $connect = mysqli_connect('localhost', 'root', '', 'travel_agency') or die('Unable to connect' . mysqli_connect_error());

        if (isset($_POST['submit'])) {
            $first_name = $_POST['FIRST_NAME'];
            $last_name = $_POST['LAST_NAME'];
            $email = $_POST['EMAIL'];
            $address = $_POST['ADDRESS'];
            $city = $_POST['CITY'];   
            $state = $_POST['STATE'];
            $phone = $_POST['PHONE'];
            $agent_id = $_POST['AGENT_ID'];
            $membership = $_POST['MEMBERSHIP'];
                            
            $sql = "INSERT INTO customer (FIRST_NAME, LAST_NAME, EMAIL, ADDRESS, CITY, STATE, PHONE, AGENT_ID, MEMBERSHIP) VALUES ('$first_name', '$last_name', '$email', '$address', '$city', '$state', '$phone', '$agent_id', '$membership');";

            $result = mysqli_query($connect, $sql);      
            echo 'Successfully recorded!';
            
        }       

    ?>
</body>
</html>