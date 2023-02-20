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
                background-color: #C3FDB8;
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
                width: 250px;
                height:25px;
            }

            button {
                width: 260px;
                height: 35px;
                font-size: 1.1em;
            }

            #jump {
                background-color: hotpink;
                margin-left: 35px;
            }

            #submit {
                background-color: deepskyblue;
            }

        </style>
        <title>Database-Final</title>
    </head>
    <body>
        <a href="db_final_display.php"><button id="jump">to Display Customer Info</button></a>
        <h1>New Customer Entry Form</h1>
        <form action="db_final_process.php" method="POST">           
            <label for="FIRST_NAME"><span class="material-symbols-outlined">star</span> First Name</label><br>
            <input type="text" name="FIRST_NAME"><br>

            <label for="LAST_NAME"><span class="material-symbols-outlined">star</span> Last Name</label><br>
            <input type="text" name="LAST_NAME"><br>

            <label for="EMAIL"><span class="material-symbols-outlined">star</span> Email Address</label><br>
            <input type="email" name="EMAIL"><br>

            <label for="ADDRESS"><span class="material-symbols-outlined">star</span> Address</label><br>
            <input type="text" name="ADDRESS"><br>

            <label for="CITY"><span class="material-symbols-outlined">star</span> City</label><br>
            <input type="text" name="CITY"><br>

            <label for="STATE"><span class="material-symbols-outlined">star</span> State</label>
            <input type="text" name="STATE" placeholder="2-letter code"><br>

            <label for="PHONE"><span class="material-symbols-outlined">star</span> Phone</label><br>
            <input type="text" name="PHONE" placeholder="xxx-xxx-xxxx"><br>

            <label for="AGENT_ID"><span class="material-symbols-outlined">star</span> Agent_ID</label><br>
            <input type="number" name="AGENT_ID" min="1", max="6" placeholder="choose from 1 to 6"><br>

            <label for="MEMBERSHIP"><span class="material-symbols-outlined">star</span> Membership</label>
            <input type="number" name="MEMBERSHIP" min="0", max="1" placeholder="member: 1, non-member: 0"><br><br>

            <label for="button"></label>
            <button type="submit" name="submit" id="submit">Submit</button>
        </form>
        
    </body>
</html>