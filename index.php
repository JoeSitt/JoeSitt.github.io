<!DOCTYPE html>
<html>
<body>

    <?php
    $servername = "sql3.freesqldatabase.com";
    $username = "sql3321292";
    $password = "buZ98FPqwl";
    $dbname = "sql3321292";

    $name = $_POST["Av"];
    $Id = $_POST["Id"];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO resuts (id, deaths, wins, icon)
    VALUES ('John', 666, 4,'john@example.com')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>

</body>
</html>
