<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>

        th{
            padding: 8px 30px;
            background-color: black;
            color: white;
            text-align: center;
            border: 1px solid #fff;
            font-size: 20px
        }
        td{
            padding:6px 15px ;
            background-color: skyblue;
            text-align: center;
             border: 1px solid black;
             font-size: 18px
        }
    </style>
</head>
<body>
    <?php
        include('connection.php');
        $select="SELECT * FROM `contact`";
        $select_res=mysqli_query($con,$select);
    
    ?>
    <h1 class="text-center my-4"> Database contact list</h1>
<table border=1 cellspacing=0 align=center>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
    </tr>

    <?php
        while($res=mysqli_fetch_array($select_res)){
            $id=$res['Id'];
            // echo $id;

            echo "<tr>";
            echo "<td>".$res['Id']."</td>";
            echo "<td>".$res['Name']."</td>";
            echo "<td>".$res['Email']."</td>";
            echo "<td>".$res['Phone']."</td>";
            echo "<td>".$res['Message']."</td>";
            echo "</tr>";

        }
    
    ?>


</table>
  
</body>
</html>