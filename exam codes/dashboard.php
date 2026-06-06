<html lang="en">
<head>
    <style>
        h1{
            color:white;
        }
        h2{
            color:white;
        }
        th{
            color:white;
            background-color:brown;
        }
        td{
            color:white;
        }
        a{
            color:brown;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5">
    <title>TONI</title>
</head>
<body>
    <center>
        <body bgcolor=black>
            <h1>WELCOME TO THE DASHBOARD</h1>
            <h2><u>SENSOR DATA</u></h2>
            <table border=5px>
                <th>id</th><th>Distance_detected</th><th>Event_Status</th><th>Timestamp</th><th>delete</th>
                <?php
                include "connect.php";
                $result=$conn->query("SELECT * FROM sensor_data ORDER BY id DESC");
                while($row=$result->fetch_assoc()){
                    echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['distance']}</td>
                    <td>{$row['status']}</td>
                    <td>{$row['recorded_at']}</td>
                    <td><a href='delete.php?id={$row['id']}'
                       onclick=\"return confirm('Are you sure you want to delete this record?')\">
                       Delete
                    </a>
                    </td>
                    </tr>";
                }
                ?>
            </table>
            
        </body>
    </center>
</body>
</html>