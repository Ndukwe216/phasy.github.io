<?php include "../config/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user requests</title>
    <style>
        h1{
            text-align:center;
            font-size:30px;
            font-weight:bolder;
            padding:10px 0 ;
        }
        table{
            width:700px;
            height:500px;
            margin:auto;
            border:1px solid black; 
            border-collapse:collapse;  
        }
        th,td{
            border:1px solid black;
            width:300px;
            text-align:center;
            
        }
    </style>
</head>
<body>
    <h1>USER REQUESTS</h1>
    <table>
        <tr>
            <th>s/n</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Language</th>
            <th>Area</th>
            <th>Date</th>
        </tr>
        <?php 
        $sql = "select * from `booking` order by date desc";
        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['user_id'];
            $lang = $row['language'];
            $area = $row['area'];
            $date = $row['date'];
            $e_sql = "select * from `users` where user_id = $id";
            $rex = mysqli_query($con,$e_sql);
            while($num = mysqli_fetch_assoc($rex)){
                $fname = $num['firstname'];
                $lname = $num['lastname'];
                $email = $num['email'];

                echo "
                <tr>
                <td> $id </td>
                <td> $fname </td>
                <td> $lname</td>
                <td> $email</td>
                <td> $lang</td>
                <td> $area </td>
                <td> $date </td>
                </tr>
                ";
            }
          
        }
        ?>
    </table>
    
</body>
</html>