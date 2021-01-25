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

      <div class="container-fluid">
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
    <table id="dataTableDonor" class="table table-striped table-bordered" style="width:100%">
        <h2 id="donor">Donor</h2>
        <thead class="thead-dark">
            <tr>
                <th>DonorID</th>
                <th>LastName</th>
                <th>FirstName</th>
                <th>MiddleName</th>
                <th>Email</th>
                <th>ContactNumber</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <td>Doe</td>
                <td>John</td>
                <td>Smith</td>
                <td>johndoe@gmail.com</td>
                <td>0902637482</td>
            </tr>
            <tr>
                <th>102</th>
                <td>Barangay 2 Lapasan</td>
                <td>0938371234</td>
                <td>Zone-9 Lapasan CDO</td>
                <td>barangayLapasan@gmail.com</td>
                <td>4352312313</td>
            </tr>
            <tr>
                <th>1</th>
                <td>Doe</td>
                <td>John</td>
                <td>Smith</td>
                <td>johndoe@gmail.com</td>
                <td>0902637482</td>
            </tr>
            <tr>
                <th>102</th>
                <td>Barangay 2 Lapasan</td>
                <td>0938371234</td>
                <td>Zone-9 Lapasan CDO</td>
                <td>barangayLapasan@gmail.com</td>
                <td>4352312313</td>
            </tr>
        </tbody>
    </table>

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
                <th>104</th>
                <td>Save the children</td>
                <td>0938371234</td>
                <td>Zone-4 Patag CDO</td>
                <td>barangaypatag@gmail.com</td>
                <td>32423423423</td>
            </tr>
        </tbody>
    </table>    
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