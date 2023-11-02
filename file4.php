<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $branch = $_POST["branch"];
    $passout_year = $_POST["passout_year"];
    $post = $_POST["post"];
    $experience = $_POST["experience"];

$con = new mysqli('localhost','root','','club');

if($con)
{
    // echo "Connection Successful";
    $sql = "INSERT INTO students (name , gender, email, contact, branch, passout_year, post, experience) 
            VALUES ('$name', '$gender', '$email', '$contact', '$branch', '$passout_year', '$post', '$experience')";

$query = "CALL CopyPresidentStudents()";

    
    
    $result = mysqli_query($con,$sql);
    if($result)
    {
        echo "Data inserted successfully";
    }
    else
    {
        die(mysqli_error($con));
    }
}
else{
    die(mysqli_error($con));
}

}


?>