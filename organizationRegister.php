<!DOCTYPE html>
<html>

<head>
    <?php 
        include_once("components/header.php");
    ?>
    <title>Organization Register</title>
</head>

<body>
    <?php include_once('components/navigation.php');?>
    <?php include_once('components/navbar.php');?>

    <?php 

        require_once('databaseConn.php');
        session_start();

        if(isset($_POST['orgname']) && isset($_POST['orgincharge']) && isset($_POST['orgcontact']) && isset($_POST['orgaddress'])
        && isset($_POST['orgemail']) && isset($_POST['orgtinNo']) && isset($_POST['orgpassword'])){
            $sql = "INSERT INTO orgdetails (orgName, orgPersonInCharge,orgContact,orgAddress,orgEmail,orgTinNumber,orgPassword)
             VALUES(:orgname , :orgincharge , :orgcontact, :orgaddress,:orgemail ,:orgtinNo ,:orgpassword)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
            ':orgname' => $_POST['orgname'],
            ':orgincharge' => $_POST['orgincharge'],
            ':orgcontact' => $_POST['orgcontact'],
            ':orgaddress' => $_POST['orgaddress'],
            ':orgemail' => $_POST['orgemail'],
            ':orgtinNo' => $_POST['orgtinNo'],
            ':orgpassword' => $_POST['orgpassword'])); 
            $_SESSION['success'] = 'Record Added';
        
            // delay the code excution for 2 seconds for the javascript alert pop up
            sleep(2);
            header("Location: organization.php");
            return;
        }
    ?>
    <div class="container-fluid">
        
        <form id="form" autocomplete="off" method="POST" class="form-group needs-validation mt-3" novalidate
        oninput='orgconfirmpass.setCustomValidity(orgconfirmpass.value != orgpassword.value ? "Passwords do not match." : "")'>
            <div class="row justify-content-center">
                <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-center text-white shadow">
                        <h3>Register Organization</h3>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                        <!--input Organization name --->
                        <div>
                            <label for="orgname" class="form-label">Organization Name</label>
                            <input pattern=".{3,}" type="text" name="orgname" id="orgname"
                                class="form-control" required>
                            <div class="invalid-feedback">Please input value. Name must be 3 letters and above</div>
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="orgincharge">Person In-charge</label>
                        <input placeholder="Example John Doe"
                            title="Person in charge" type="text" name="orgincharge" id="orgincharge" class="form-control"
                            required>
                        <div class="invalid-feedback">Please input Value. Name must be firstname and lastname, John Doe etc.
                        </div>
                    </div>
      
                    <div class="form-group">
                        <label for="orgcontact">Contact</label>
                        <input type="text" name="orgcontact" pattern="^(09|\+639)\d{9}$" id="orgcontact"
                            class="form-control" required>
                        <div class="invalid-feedback">Please input Value. Contact must be starts with +63 or 09</div>
                    </div>
                    <div class="form-group">
                        <label for="orgaddress">Address</label>
                        <input type="text" name="orgaddress" id="orgaddress" class="form-control" required>
                        <div class="invalid-feedback">Please input Value</div>
                    </div> 
                    <!-- <label for="orgbarangay">Barangay</label>
                    <select id="orgbarangay" class="custom-select form-control">
                        <option selected>Select Barangay</option>
                        <option value="Barangay Agusan">Barangay Agusan</option>
                        <option>Barangay Balubal</option>
                        <option>Barangay Baikingon</option>
                        <option>Barangay Balulang</option>
                        <option>Barangay Bayabas</option>
                        <option>Barangay Bayanga</option>
                        <option>Barangay Besigan</option>
                        <option>Barangay Bugo</option>
                        <option>Barangay BonBon</option>
                        <option>Barangay Bulua</option>
                        <option>Barangay Camaman-an</option>
                        <option>Barangay Canitoan</option>
                        <option>Barangay Carmen</option>
                        <option>Barangay Cugman</option>
                        <option>Barangay Dansolihon</option>
                        <option>Barangay F.S. Catanico</option>
                        <option>Barangay Gusa</option>
                        <option>Barangay Iponan</option>
                        <option>Barangay Kauswagan</option>
                        <option>Barangay Lapasan</option>
                        <option>Barangay Lumbia</option>
                        <option>Barangay Macabalan</option>
                        <option>Barangay Macasandig</option>
                        <option>Barangay Nazareth</option>
                        <option>Barangay Pagalungan</option>
                        <option>Barangay Pagatpat</option>
                        <option>Barangay Patag</option>
                        <option>Barangay Pigsaan</option>
                        <option>Barangay Puerto</option>
                        <option>Barangay Puntod</option>
                        <option>Barangay San Simon</option>
                        <option>Barangay Tablon</option>
                        <option>Barangay Taglimao</option>
                        <option>Barangay Tagapangi</option>
                        <option>Barangay Tignapaloan</option>
                        <option>Barangay Tuburan</option>
                        <option>Barangay Tumpagon</option>
                    </select> -->
                    <div class="form-group">
                        <label for="orgemail">Email</label>
                        <input type="email" name="orgemail" id="orgemail" class="form-control" required>
                        <div class="invalid-feedback">Please input value. Example email@gmail.com</div>
                    </div>

                    <div class="form-group">
                        <label for="orgtinNo">TIN No.</label>
                        <input placeholder="XXX-XXX-XXX-XXX" type="text"
                            id="orgtinNo" class="form-control" name="orgtinNo" required>
                        <div class="invalid-feedback">Invalid TIN No. Must have 9 numbers</div>
                    </div>
                    <div class="form-group">
                        <label for="orgpassword">Password</label>
                        <input type="text" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{5,}$" minlength="5"
                            id="orgpassword" class="form-control" name="orgpassword" required>
                        <div class="invalid-feedback">Please input field</div>
                    </div>
                    <div class="form-group">
                        <label for="orgconfirmpass">Confirm Password</label>
                        <input type="text" id="orgconfirmpass" class="form-control" name="orgconfirmpass" required>
                        <div class="invalid-feedback">Password doesn't match</div>

                    </div>
                    
                    <!-- <div class="form-group">
                        <label for="exampleFormControlFile1">Upload File</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" required>
                    </div> -->
                    <button class="btn btn-primary" type="submit" name="submit" id="subm">Add User</button>
                    </div>
                </div>
                </div>
        </form>
        
    </div>
    
    <?php include_once('components/myscript.php'); ?>
    <script>
      
       

        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault(); 
                            event.stopPropagation();
                        }
                        if(form.checkValidity() === true){
                            swal({
                                title: "Organization Added!",
                                text: "Congratulations",
                                icon: "success",
                                });
                        }

                        form.classList.add('was-validated');
                    }, false);
                });

            }, false);
        })();
    </script>

</body>

</html>