<!DOCTYPE html>
<html>
<head>
    <?php 
        include_once("components/header.php");
    ?>
    <title>Dashboard</title>
</head>
<body >
      <?php include_once('components/navigation.php')?>
      <?php include_once('components/navbar.php')?>
    
    <!-- Login STATE -->
      <?php 
        require_once("databaseConn.php");
        session_start();
        if(isset($_SESSION['username'])){
            $message = '<p class="text-success">Login Success , Welcome - ' .$_SESSION['username'] . '</p>'; 
        }else { 
            header('Location: index.php');
        }
        // Dashboard count the Registered Organization
        $sql = "SELECT * FROM orgdetails";
        $stmt = $pdo->query($sql);
        $orgCount = $stmt->rowCount();
        //
      ?>
      
      <div class="container-fluid">
        <?php echo $message ?>
        <div class="cards" style="margin-top:20px;">
            <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header bg-secondary text-white">
                        <h2>Donor</h2>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">0</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header bg-warning text-white">
                        <h2>Organization</h2>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><?= $orgCount ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header bg-success text-white">
                        <h2>Donations</h2>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">0</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
    <?php include_once('components/myscript.php'); ?>
    <script>
    
      $(document).ready(function () {
            $('#dataTableDonor').DataTable();
        });
    </script>
</body>

</html>