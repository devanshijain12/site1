 <?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $name = isset($_POST['Name']) ? $_POST['Name'] : '';
    $contact = isset($_POST["Contact"]) ? $_POST["Contact"] : '';
    $mail = isset($_POST["Mail"]) ? $_POST["Mail"] : '';

    $con = mysqli_connect($server, $username, $password);

    if (!$con){
        die("Connection to database failed due to " . mysqli_connect_error());
    }

    $sql = "INSERT INTO `form_info`.`details` (`Name`, `Contact`, `Mail`) VALUES ('$name', '$contact', '$mail');";

    if (mysqli_query($con, $sql)) {} 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
?> 

