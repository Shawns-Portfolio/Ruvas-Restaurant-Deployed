<?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "ruva restaurant");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $surname = $_REQUEST['surname'];
        $date =  $_REQUEST['date'];
        $phone = $_REQUEST['phone'];
    
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO bookings VALUES ('$name', s
            '$surname','$date','$phone')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>"; 
 
            echo nl2br("\n$name\n $surname\n "
                . "$date\n $phone");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>