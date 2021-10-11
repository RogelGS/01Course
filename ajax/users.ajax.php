<?php
    // Incluyendo conexion a base de datos
    require_once '../db.php';

    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        
        if($_POST['email'] === '' || $_POST['username'] === '' || $_POST['password'] == '') {
            echo 'fields_empty';
            exit();
        } else {

            if(!preg_match('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/', $_POST['email'])) {
                echo 'email_invalid';
                exit();
            } else if(!preg_match('/^([a-zA-Z0-9])+$/', $_POST['username'])) {
                echo 'username_invalid';
                exit();
            } else if(!preg_match('/^([a-zA-Z0-9])+$/', $_POST['password'])) {
                echo 'password_invalid';
                exit();
            }

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $description = '';
            $profile = '';
            $banner = '';
            $status = 0;
            $token = md5($email);
            
            $consult = sprintf("SELECT * FROM users WHERE username = %s", clean($username, "text"));
            $result = mysqli_query($connection, $consult);
            $row_cnt = mysqli_num_rows($result);
            
            if($row_cnt === 0) {
                $consultEmail = sprintf("SELECT * FROM users WHERE email = %s", clean($email, "text"));
                $resultEmail = mysqli_query($connection, $consultEmail);
                $row_cntEmail = mysqli_num_rows($resultEmail);

                if($row_cntEmail === 0) {
                    $stmt = $connection->prepare("INSERT INTO users(username, email, password, description, profile, banner, status, token) VALUES(?,?,?,?,?,?,?,?)");
                    $stmt->bind_param("ssssssis", $username, $email, $password, $description, $profile, $banner, $status, $token);
    
                    if($stmt->execute()) {
                        echo 'OK';
                    } else {
                        echo 'ERROR';
                    }
                    
                    $stmt->close();
                } else {
                    echo 'email_exist';
                }
                

                mysqli_free_result($resultEmail);
            } else {
                echo 'user_exist';
            }

            mysqli_free_result($result);
        }
    }
?>