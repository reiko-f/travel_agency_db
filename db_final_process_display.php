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
                    background-color: #FFFFC2;
                    padding: 20px;
                    margin: 20px;
                    font-size: 1.6em;
                }

                table, th, td {
                    border: 2px solid #F660AB;
                    background-color: snow;
                }
                


            </style>
        <title>Display Form Processing</title>
    </head>
    <body>       

        <?php
            
            $connect = mysqli_connect('localhost', 'root', '', 'travel_agency') or die('Unable to connect' . mysqli_connect_error());

            if (isset($_POST['display'])) {
                $cust_id = $_POST['CUST_ID'];
           
                $sql = "SELECT * FROM customer WHERE CUST_ID = '$cust_id';";

                $result = mysqli_query($connect, $sql) or die("Record Not Found . $sql");

                $count=mysqli_num_rows($result);

                if ($count>=1) {
            
                echo "<h1>Display Customer Info</h1>Customer ID => $cust_id<br><br>";
        ?>            

            <table>
                <tr>
                    <th>cust_id</th>
                    <th>first_name</th>
                    <th>last_name</th>
                    <th>email</th>
                    <th>address</th>
                    <th>city</th>
                    <th>state</th>
                    <th>phone</th>
                    <th>agent_id</th>
                    <th>memberhip</th>                            
                </tr>

        <?php 
                while($row = mysqli_fetch_assoc($result)) {                        
                    echo "<tr>";
                    echo "<td>{$row['CUST_ID']}</td>";
                    echo "<td>{$row['FIRST_NAME']}</td>";
                    echo "<td>{$row['LAST_NAME']}</td>";
                    echo "<td>{$row['EMAIL']}</td>";
                    echo "<td>{$row['ADDRESS']}</td>";
                    echo "<td>{$row['CITY']}</td>";
                    echo "<td>{$row['STATE']}</td>";
                    echo "<td>{$row['PHONE']}</td>";
                    echo "<td>{$row['AGENT_ID']}</td>";
                    echo "<td>{$row['MEMBERSHIP']}</td>";
                    echo "</tr>";                 
                } 

                } else {
                    echo "Record Not Found";
                }   
            } 
        
        ?>

        </table>
    </body>
</html>