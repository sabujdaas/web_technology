<?php
    $connect = mysqli_connect("localhost", "root", "", "try");

    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];


    $insert = mysqli_query($connect, "insert into users (name, email, phone, address) values('$name', '$email','$phone', '$address') ");
    if($insert){
        echo '<script>
                alert("Submit successfull!");
                
                    window.location = "form.html";
                
            </script>';
    }
    else{
            echo"Go to a error:".mysqli_errno($connect);
        }
    
?>

