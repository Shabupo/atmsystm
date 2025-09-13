<?php
    require_once './database/config.php';
$is_validate = false;
// print_r($_POST);
$database = new Database();
$connection = $database->GetConnection();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // print_r($_POST);
    $cheackifexixt = sprintf("SELECT * FROM useraccounts WHERE email = '%s'",
                    $connection->real_escape_string($_POST['email']));
    $result = $connection->query($cheackifexixt);
    $userAccounts = $result->fetch_assoc();
    if($userAccounts)
    {
        if (password_verify($_POST["password"], $userAccounts['password']))


        {
            
            
            session_start();
            session_regenerate_id();

            
            $_SESSION['user_email'] = $userAccounts['email'];
            
            header("Location: ./dashbord/index.php");
            
            exit();
        }
    }
$is_validate = true;
    
}


?>






