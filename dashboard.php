<!DOCTYPE html>
<html>
<head>
    <?php 
        include_once("components/header.php");
    ?>
    <title>Dashboard</title>
</head>
<body>
      <?php include_once('components/navigation.php')?>
      <?php include_once('components/navbar.php')?>
    


    <!-- Login STATE -->
      <?php 
        session_start();
        if(isset($_SESSION['username'])){
            $message = '<p class="text-success">Login Success , Welcome - ' .$_SESSION['username'] . '</p>'; 
        }else { 
            header('location:index.php');
        }
      ?>
      
      <div class="container-fluid">
        <?php echo $message ?>
        <div class="cards" style="margin-top:20px;">
            <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header bg-primary text-white">
                        <h2>Donor</h2>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">5</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header bg-warning text-white">
                        <h2>Organization</h2>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">10</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header bg-success text-white">
                        <h2>Donations</h2>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">49</h3>
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