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

    <div class="container-fluid">
    <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
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
       
    </div>

  

    <!-- /#page-content-wrapper -->

  
    


    <?php include_once('components/myscript.php'); ?>
   
</body>

</html>