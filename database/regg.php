<?php
    global $con;
    session_start();
    include('config.php');
    if (isset($_POST['login'])) {
        $htno = strtoupper(trim($_POST['htno']));
        $password = $_POST['password'];
        $query = $con->prepare("SELECT * FROM users WHERE htno=:htno");
        $query->bindParam("htno", $htno, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            echo '<p class="error">Username password combination is wrong!</p>';
        } else {
            if (password_verify($password, $result['password'])) {
                $_SESSION['htno'] = $result['htno'];
                $_SESSION['percentage'] = $result['percentage'];
                $_SESSION['name'] = $result['name'];
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $result['email'];
                $_SESSION['branch'] = $result['branch'];
                $_SESSION['phone'] = $result['mobile'];

                header( 'Location: ../placements.php' );
            } else {
                echo '<p class="error">Username password combination is wrong!</p>';
            }
        }
    }
?>