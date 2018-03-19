<html>
    <head>
        <title>My first PHP Website</title>
    </head>
    <body>
        <?php
            echo "<p>Hello World!</p>";
        ?>
        <a href="login.php"> Click here to login </a></br>
        <a href="register.php"> Click here to register </a></br>
    </body>
    <br/>
    <h2 align="center">My list</h2>
        <table border="1px" width="100%">
            <tr>
                <th>ID</th>
                <th>Details</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
                $con=mysqli_connect("localhost","root","");
                mysqli_select_db($con,"first_db");
                $query = mysqli_query($con,"SELECT * FROM list WHERE public='yes'");
                while($row= mysqli_fetch_array($query))
                    {
                        Print "<tr>";
                        Print '<td align="center">'. $row['id'] ."</td>";
                        Print '<td align="center">'. $row['details'] ."</td>";
                        Print '<td align="center">'. $row['date_posted']. " - ". $row['time_posted'] . "</td>";
                        Print '<td align="center">'. $row['date_edited']. " - ".$row['time_edited']. "</td>";
                        Print "</tr>";
                    }
            ?>
        </table>
</html> 