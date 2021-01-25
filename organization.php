<!DOCTYPE html>
<html>
<head>
    <?php 
        include_once("components/header.php");
    ?>
    <title>Organization</title>
</head>
<body>
    <?php include_once('components/navigation.php')?>
    <?php include_once('components/navbar.php')?>
    <div class="container-fluid"><br>
        <a href="organizationRegister.php" class="btn btn-primary">Register</a>
        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
            <h2 id="donor">Organization</h2>
            <thead class="thead-dark">
                <tr>
                    <th>OrganizationID</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>TIN No.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1001</th>
                    <td>Charity CDO</td>
                    <td>093748293</td>
                    <td>Zone-1 Balulang CDO</td>
                    <td>cdocharity@gmail.com</td>
                    <td>12031231201</td>
                </tr>
                <tr>
                    <th>1002</th>
                    <td>Barangay 2 Lapasan</td>
                    <td>0938371234</td>
                    <td>Zone-9 Lapasan CDO</td>
                    <td>barangayLapasan@gmail.com</td>
                    <td>4352312313</td>
                </tr>
                <tr>
                    <th>1003</th>
                    <td>Barangay Bulua</td>
                    <td>093928832</td>
                    <td>Zone-2 Bulua CDO</td>
                    <td>barangaybulua@gmail.com</td>
                    <td>2131299920</td>
                </tr>
                <tr>
                    <th>1004</th>
                    <td>Save the children</td>
                    <td>0938371234</td>
                    <td>Zone-4 Patag CDO</td>
                    <td>savetheChildren@gmail.com</td>
                    <td>32423423423</td>
                </tr>
            </tbody>
        </table>    
        <table id="dataTableOrgRequest" class="table table-striped table-bordered" style="width:100%">
            <h2 id="donor">Organization Request</h2>
            <thead class="thead-dark">
                <tr>
                    <th>RequestID</th>
                    <th>OrganizationID</th>
                    <th>Food Name</th>
                    <th>Food Quantity</th>
                    <th>Item Name</th>
                    <th>Item Quantity</th>
                    <th>Urgent</th>
                    <th>images_dir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>3001</th>
                    <td>1001</td>
                    <td>Tinapa</td>
                    <td>20</td>
                    <td>Bag</td>
                    <td>12</td>
                    <td>TRUE</td>
                    <td>000000000</td>
                </tr>
                <tr>
                   <th>3002</th>
                    <td>1001</td>
                    <td>CornedBeef</td>
                    <td>34</td>
                    <td>School Supplies</td>
                    <td>44</td>
                    <td>False</td>
                    <td>000010000</td>
                </tr>
                <tr>
                 <th>3004</th>
                    <td>1002</td>
                    <td>Corned Tuna</td>
                    <td>23</td>
                    <td>shoes</td>
                    <td>12</td>
                    <td>false</td>
                    <td>000000000</td>
                </tr>
               <tr>
                    <th>3005</th>
                    <td>1001</td>
                    <td>Noodles and water</td>
                    <td>23</td>
                    <td>Bag</td>
                    <td>12</td>
                    <td>TRUE</td>
                    <td>000000000</td>
                </tr>
            </tbody>
        </table>

    </div>
    <?php include_once('components/myscript.php'); ?>
     <script>
      $(document).ready(function () {
            $('#dataTableOrgRequest').DataTable();
        });
    </script>
</body>

</html>