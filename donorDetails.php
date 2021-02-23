<!DOCTYPE html>
<html>
<head>    
    <?php 
        include_once("components/header.php");
    ?>
    <title>Donor</title>
</head>

<body>
    <?php include_once('components/navigation.php')?>
    <?php include_once('components/navbar.php')?>
 
    <?php 
        include_once('databaseConn.php'); 
        $sql = "SELECT * FROM donordetails";
        $stmt = $pdo->query($sql);
    ?>

    <div class="container-fluid">
          <?php 
                session_start();
                if(isset($_SESSION['successdonor'])){
                    echo '<p style="color:green">' . $_SESSION['successdonor'] . '</p>';
                    unset($_SESSION['successdonor']);
                }
                if(isset($_SESSION['errordonor'])){
                    echo '<p style="color:red">' . $_SESSION['errordonor'] . '</p>';
                }
            ?>
    <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
            <h2 id="donor">Donor</h2>
            <thead class="thead-dark">
                <tr>
                    <th>DonorID</th>
                    <th>Fullname</th>
                    <th>Address</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Contact</th>
                    <th>Password</th>
                    <th>DELETE</th>
                </tr>
                <tbody>

                <?php
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo "<tr><td>";
                        echo(htmlentities($row['donorID']));
                        echo ("</td><td>");
                        echo(htmlentities($row['donorFname']));
                        echo ("</td><td>");
                        echo(htmlentities($row['donorAddress']));
                        echo ("</td><td>");
                        echo(htmlentities($row['donorUname']));
                        echo ("</td><td>");
                        echo(htmlentities($row['donorEmail']));
                        echo ("</td><td>");
                        echo(htmlentities($row['donorAge']));
                        echo ("</td><td>");
                        echo(htmlentities($row['donorContact']));
                        echo ("</td><td>");
                        echo(htmlentities($row['donorPassword']));
                        echo ("</td><td>");
                       
                        echo ('<a class="btn btn-danger" href="deleteDon.php?donorID='  .$row['donorID'] . '">DELETE</a> ');
                        echo ("</td></tr>");

                    }
                  
                ?>
                 </tbody>
           
        </table>
        <table id="dataTablefood" class="table table-striped table-bordered" style="width:100%">
            <h2 id="donor">Food Donations</h2>
            <thead class="thead-dark">
                <tr>
                    <th>DonorID</th>
                    <th>FoodDonID</th>
                    <th>FoodType</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>102</td>
                    <td>Noodles</td>
                    <td>23</td>
                    <td>Pending</td>
                    <td>1/23/2020</td>
                </tr>
                <tr>
                    <th>2</th>
                    <td>104</td>
                    <td>Can Tuna</td>
                    <td>13</td>
                    <td>Completed</td>
                    <td>1/2/2020</td>
                </tr>
                <tr>
                    <th>3</th>
                    <td>107</td>
                    <td>555 sardines</td>
                    <td>4</td>
                    <td>Pending</td>
                    <td>4/2/2020</td>
                </tr>
                <tr>
                    <th>4</th>
                    <td>109</td>
                    <td>555 sardines and tuna</td>
                    <td>4</td>
                    <td>Completed</td>
                    <td>9/4/2020</td>
                </tr>
            </tbody>
        </table>
         <table id="dataTableitem" class="table table-striped table-bordered" style="width:100%">
            <h2 id="donor">Item Donations</h2>
            <thead class="thead-dark">
                <tr>
                    <th>DonorID</th>
                    <th>ItemID</th>
                    <th>ItemType</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>102</td>
                    <td>Shirt</td>
                    <td>10</td>
                    <td>Pending</td>
                    <td>1/23/2020</td>
                </tr>
                <tr>
                    <th>2</th>
                    <td>104</td>
                    <td>Bag and school supplies</td>
                    <td>13</td>
                    <td>Completed</td>
                    <td>1/2/2020</td>
                </tr>
                <tr>
                    <th>3</th>
                    <td>107</td>
                    <td>555 sardines</td>
                    <td>4</td>
                    <td>Pending</td>
                    <td>4/2/2020</td>
                </tr>
                <tr>
                    <th>4</th>
                    <td>109</td>
                    <td>555 sardines and tuna</td>
                    <td>4</td>
                    <td>Pending</td>
                    <td>9/4/2020</td>
                </tr>
            </tbody>
        </table>
    </div>

  

    <!-- /#page-content-wrapper -->

  
    <?php include_once('components/myscript.php'); ?>

    <script>  
        //this is table Javascript
        $(document).ready(function () {
            $('#dataTablefood').DataTable();
        });
    </script>
    <script>  
        //this is table Javascript
        $(document).ready(function () {
            $('#dataTableitem').DataTable();
        });
    </script>
   
</body>

</html>