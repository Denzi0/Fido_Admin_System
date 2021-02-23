<!DOCTYPE html>
<html>
<head>
    <?php 
        include_once("components/header.php");
    ?>
    <title>Donations</title>
</head>
<body>
    <?php include_once('components/navigation.php')?>
    <?php include_once('components/navbar.php')?>
    <div class="container-fluid">
    <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
        <h2 id="donor">Donations</h2>
        <thead class="thead-dark">
            <tr>
                <th>DonationID</th>
                <th>OrganizationID</th>
                <th>FoodDonID</th>
                <th>ItemID</th>
                <th>DateGiven</th>
                <th>RequestID</th>
                <th>Feedback</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>102</th>
                <td>1004</td>
                <td>234</td>
                <td>2343</td>
                <td>1/2/2020</td>
                <td>22131</td>
                <td>Thank youu so mcuh</td>
            </tr>
            <tr>
                <th>104</th>
                <td>1006</td>
                <td>203</td>
                <td>2202</td>
                <td>6/2/2013</td>
                <td>223211</td>
                <td>Amazing </td>
            </tr>
        
        </tbody>
    </table>    

         
    </div>

   
    
    

    <?php include_once('components/myscript.php'); ?>
    
</body>

</html>