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
    <div class="container-fluid" >
            <form id="form" action="" class="form-group needs-validation" novalidate style="margin-top:20px;">
                <div class="row">
                    <div class="col-md-6">
                        <label for="orgname" class="form-label">Organization Name</label>
                        <input pattern=".{3,}" required title="3 characters minimum" type="text" 
                        name="orgname" id="orgname" class="form-control" required>
                        <div class="invalid-feedback">Please input value. Name must be 3 letters and above</div>

                        </div>
                    <div class="col-md-6">
                        <label for="orgincharge">Person In-charge</label>
                        <input placeholder="Example John Doe" pattern="(?=^.{0,40}$)^[a-zA-Z-]+\s[a-zA-Z-]+$" 
                        required title="Person in charge" type="text" name="orgincharge" id="orgincharge" class="form-control" required>
                        <div class="invalid-feedback">Please input Value. Name must be firstname and lastname, John Doe etc.</div>

                    </div>
                    <div class="col-md-6">
                        <label for="orgcontact">Contact</label>
                        <input type="text" name="orgcontact" pattern="^(09|\+639)\d{9}$" id="orgcontact" class="form-control" required>
                        <div class="invalid-feedback">Please input Value. Contact must be starts with +63 or 09</div>

                    </div>
                    <div class="col-md-6">
                        <label for="orgaddress">Address</label>
                        <input type="text" name="orgaddress" id="orgaddress" class="form-control" required>
                        <div class="invalid-feedback">Invalid</div>
                    </div>

                     <div class="col-md-6">
                        <label for="orgbarangay">Barangay</label>
                        <select id="orgbarangay" class="custom-select form-control">
                            <option selected>Select Barangay</option>
                            <option>Barangay Agusan</option>
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
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="orgemail">Email</label>
                        <input type="email" name="orgemail" id="orgemail" class="form-control" required>
                        <div class="invalid-feedback">Please input value. Example email@gmail.com</div>
                    </div>
                    <div class="col-md-6">
                        <label for="orgtinNo">TIN No.</label>
                        <input placeholder="XXX-XXX-XXX-XXX" type="text" pattern="^[0-9]*$" minlength="9" name="orgtinNo" id="orgtinNo" class="form-control" required>
                        <div class="invalid-feedback">Invalid TIN No. Must have 9 numbers</div>
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlFile1">Upload File</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" required>
                    </div>      
                    <div class="col-md-2" style="margin-top:20px">
                        <button class="btn btn-primary" id="btnSumbmit" type="submit">Register form</button>
                    </div>
                </div>
            </form>
    </div>
    <?php include_once('components/myscript.php'); ?>
     <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);
        })();
</script>

</body>

</html>