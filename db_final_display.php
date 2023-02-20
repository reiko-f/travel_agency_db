<?php include_once 'db_final_process_display.php';?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Manrope&display=swap');

            body {
                font-family: 'Manrope', sans-serif;
                color: gray;
                background-color: #DBF9DB;
            }

            h1 {
                margin: 20px;
            }

            form {
                width: 300px;
                background-color: snow;
                padding: 20px;
                margin: 20px;
                border-radius: 15px;
            }

            .material-symbols-outlined {
                font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 48
            }
            
            span {
                background-color: palegoldenrod;
            }

            label {
                font-size: 1.1em;
            }

            input {
                border-radius: 15px;
                height: 45px;
            }

            button {
                width: 150px;
                height: 45px;
                background-color: hotpink;
                border-radius: 15px;
                font-size: 1.1em;
            }

        </style>
        <title>DB_Final_Display</title>
    </head>    
    <body>
        <h1>Display Customer Info</h1>
        <form action="db_final_process_display.php" method="POST">
            
            <label for="CUST_ID"><span class="material-symbols-outlined">star</span>Cust_ID</label><br>
            <input type="number" name="CUST_ID"><br><br>                      
            
            <button type="submit" name="display">display</button>
        </form>
    </body>
</html>