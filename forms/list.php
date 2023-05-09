<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>contact</title>
</head>

<body>
    <header>
        <h3></h3>
    </header>

   



    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM contact";
        $query = mysqli_query($db, $sql);
        $i=1;
        while($orang = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$i."</td>";
            echo "<td>".$orang['name']."</td>";
            echo "<td>".$orang['email']."</td>";
            echo "<td>".$orang['subject']."</td>";
            echo "<td>".$orang['message']."</td>";
            

        

            echo "</tr>";
            $i++;
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>