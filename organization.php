<!DOCTYPE html>
<html>
<head>
    <?php 
        include_once("components/header.php");
    ?>
    <title>Organization</title>
</head>
<body >

    <?php include_once('components/navigation.php')?>
    <?php include_once('components/navbar.php')?>
    <!-- model -->
    <?php 
        require_once("databaseConn.php");
        $stmt = $pdo->query("SELECT * FROM orgdetails");
        //  $stmt = $pdo->query("SELECT orgID,orgName,orgPersonInCharge,orgContact,orgAddress,
        // orgEmail,orgTinNumber,orgPassword FROM orgdetails");
        $stmtRequest = $pdo->query("SELECT * FROM orgrequest");
    ?>
    <!-- //VIew -->
    
    <div class="container-fluid"><br>
        <a href="organizationRegister.php" class="btn btn-primary"><i class="fas fa-plus-circle"></i>
        Add User</a>
       
        <!-- <a href="barangayRegister.php" class="btn btn-primary">Register Barangay</a> -->
        <?php 
                session_start();
                if(isset($_SESSION['success'])){
                    echo '<p style="color:green">' . $_SESSION['success'] . '</p>';
                    unset($_SESSION['success']);
                }
                if(isset($_SESSION['error'])){
                    echo '<p style="color:red">' . $_SESSION['error'] . '</p>';
                }
            ?>
        <h2 id="donor">Organization</h2>

        <div class="table-responsive"> <!--table Responsive make the table have scroll on bottom -->
            <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
            
                <thead class="thead-dark">
                    <tr>
                        <th>OrganizationID</th>
                        <th>Organization Name</th>
                        <th>Person-in-charge</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>TIN No.</th>
                        <th>Password</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

                    echo "<tr><td>";
                    echo(htmlentities($row['orgID']));
                    echo ("</td><td>");
                    echo(htmlentities($row['orgName']));
                    echo ("</td><td>");
                    echo(htmlentities($row['orgPersonInCharge']));
                    echo ("</td><td>");
                    echo (htmlentities($row['orgContact']));
                    echo ("</td><td>");
                    echo (htmlentities($row['orgAddress']));
                    echo ("</td><td>");
                    echo (htmlentities($row['orgEmail']));
                    echo ("</td><td>");
                    echo (htmlentities($row['orgTinNumber']));
                    echo ("</td><td>");
                    echo (htmlentities($row['orgPassword']));
                    echo ("</td><td>");
                    echo ('<a class="btn btn-primary" href="editOrg.php?orgID=' .$row['orgID'] . '">EDIT</a>');
                    echo ("</td><td>");
                    echo ('<a class="btn btn-danger" href="deleteOrg.php?orgID='  .$row['orgID'] . '">DELETE</a> ');
                    echo ('</td></tr>');
                }
                ?>
                    
                </tbody>
            </table>    
        </div>
        <table id="dataTableOrgRequest" class="table table-striped table-bordered" style="width:100%">
            <h2 id="donor">Organization Request</h2>
            <thead class="thead-dark">
                <tr>
                    <th>RequestID</th>
                    <th>OrganizationID</th>
                    <th>Food Name</th>
                    <th>Food Type</th>
                    <th>Food Quantity</th>
                    <th>Item Name</th>
                    <th>Item Type</th>
                    <th>Item Quantity</th>
                    <th>Description</th>
                    <th>Urgent</th>
                    <th>Date Request</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($row = $stmtRequest->fetch(PDO::FETCH_ASSOC)){
                    echo "<tr><td>";
                    echo(htmlentities($row['requestID']));
                    echo ("</td><td>");
                    echo(htmlentities($row['orgID']));
                    echo ("</td><td>");
                    echo(htmlentities($row['foodname']));
                    echo ("</td><td>");
                    echo (htmlentities($row['foodtype']));
                    echo ("</td><td>");
                    echo (htmlentities($row['foodquantity']));
                    echo ("</td><td>");
                    echo (htmlentities($row['itemname']));
                    echo ("</td><td>");
                    echo (htmlentities($row['itemtype']));
                    echo ("</td><td>");
                    echo (htmlentities($row['itemquantity']));
                    echo ("</td><td>");
                    echo (htmlentities($row['description']));
                    echo ("</td><td>");
                    echo (htmlentities($row['isUrgent']));
                    echo ("</td><td>");
                    echo (htmlentities($row['daterequest']));
                    // echo ("</td><td>");
                    // echo ('<a class="btn btn-primary" href="editOrg.php?orgID=' .$row['orgID'] . '">EDIT</a>');
                    // echo ("</td><td>");
                    // echo ('<a class="btn btn-danger" href="deleteOrg.php?orgID='  .$row['orgID'] . '">DELETE</a> ');
                    echo ('</td></tr>');
                }
            ?>
            </tbody>
        </table> 

    </div>

    <?php include_once('components/myscript.php'); ?>
     <script>
      $(document).ready(function () {
            $('#dataTableOrgRequest').DataTable();
            
        });
      // pagelength edit to support 5 row count
      var table = $('#dataTableOrgRequest').DataTable({
            pageLength : 5,
            lengthMenu: [[5, 10, 20, 25], [5, 10, 20, 25]]
        })
    </script>
</body>

</html>