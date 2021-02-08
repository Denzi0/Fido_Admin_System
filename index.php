<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("components/header.php");?>
    <link rel="stylesheet" href="style/css/bootstrap.css">
    <title>Admin Login Page</title>
</head>

<body style="background-color:#f6f5f5">

    <?php 
        require_once("databaseConn.php");
        session_start();
        // $stmt = $pdo->query("SELECT * FROM admin");
        // while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        //     print_r($row);
        // }
        if(isset($_POST['submit'])){
            if(empty($_POST['username']) || empty($_POST['password'])){
                $message = "<label>All fields are required</label>";   
            }else {
                $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(
                    'username' => $_POST['username'],
                    'password' => $_POST['password'])
                );
                $count = $stmt->rowCount();
                
                if($count > 0){
                    $_SESSION["username"] =  $_POST["username"];
                    header("Location: dashboard.php");
                }else {
                    $message = "<label>Invalid Credentials</label>";
                }
            }
           
        }

    ?>

    <div class="container vh-100">
        <div class="d-flex justify-content-center align-items-md-center h-100">
            <div class="card my-auto shadow row p-3">
                <div class="card-header text-center">
                    <img src="assets/images/appname.svg" style="height:60px;width:60px"><br>
                </div>
                <div class="card-body">
                    <?php 
                        if(isset($message)){
                            echo '<label class="text-danger">'.$message. '</label>';
                        }
                    ?>
                    <form action="" method="POST" id="form" >
                        <div class="form-group">
                            <label for="username" class="text-dark">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-user"></i></span>
                                </div>                           
                                 <input type="text" name="username" id="username" class="form-control">      
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-dark">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary w-100 text-white" value="Login" name="submit">
                    </form>
                </div>
                <div class="card-footer text-right">
                    <small class="text-dark">&copy; FIDO</small>
                </div>
            </div>
        </div>

    </div>








    
    <!-- <div class="container vh-100" >
        <div class="d-flex justify-content-center align-items-md-center h-100">
           
            <div class="card my-auto shadow row">
                <div class="card-header text-center ">
                    <h2 class="text-dark">FIDO</h2>
                    <small class="text-dark">Login</small>
                </div>
                <div class="card-body"> -->
                    
                            <!-- if(isset($message)){
                                echo '<label class="text-danger">'.$message. '</label>';
                            } -->
                    
                    <!-- <form method="POST" id="form" autocomplete="off">
                        <div class="form-group">
                            <label for="username" class="text-dark">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-user"></i></span>
                                </div>                           
                                 <input type="text" name="username" id="username" class="form-control">      
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-dark">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-secondary w-100 text-white mt-2 p-2 rounded-pill" value="Login" name="submit">
                    </form>
                </div>
                
                <div class="card-footer text-right">
                    <small class="text-white">&copy; FIDO</small>
                </div>
            </div>

        </div>
    </div>

     -->

</body>

</html>