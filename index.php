<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("components/header.php");?>
    <link rel="stylesheet" href="style/css/bootstrap.css">
    <title>Admin Login Page</title>
</head>
<body>
    
    <?php 
        require_once "databaseConn.php";
        session_start();
        // $stmt = $pdo->query("SELECT * FROM admin");
        // while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        //     print_r($row);
        // }
        if(isset($_POST['submit'])){

            if(empty($_POST['username']) || empty($_POST['password']))
            {
                $message = "<label>All fields are required</label>";   
            }else {
                $sql = "SELECT * FROM admin WHERE username = :username and password = :password";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(
                    ':username' => $_POST['username'],
                    ':password' => $_POST['password']));
                $count = $stmt->rowCount();
                
                if($count > 0){
                    $_SESSION["username"] =  $_POST["username"];
                    header("location:dashboard.php");
                }else {
                    $message = "<label>Invalid Credentials</label>";
                }
            }
           
        }

    ?>
    <div class="container vh-100">
        <div class="row justify-content-center h-100">
            <div class="card w-25 my-auto shadow">
                <div class="card-header text-center bg-primary text-white">
                    <h2>Login Form</h2>
                </div>
                <div class="card-body">
                    <?php 
                        if(isset($message)){
                            echo '<label class="text-danger">'.$message. '</label>';
                        }
                    ?>
                    <form action="index.php" method="POST" id="form">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary w-100" value="Login" name="submit">
                    </form>
                </div>
                <div class="card-footer text-right">
                    <small>&copy; FIDO</small>
                </div>
                
            </div>
            
        </div>
    </div>
    

    </div>
    
</body>

</html>