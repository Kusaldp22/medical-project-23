<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="./css/forms.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <div class="form_header">

        <h1 class="text-center mt-3">User Registration Forum</h1>
        <div class="alert alert-primary mb-3 mt-3 alert-default" role="alert">
            A simple primary alert—check it out!
        </div>
        <?php
if (isset($_GET["err"])) {
    ?>
        <div class="alert alert-danger alert-dismissible fade show alert-default" role="alert">
            <p style="text-align: center; margin: 0;"><strong>Warning! &nbsp;</strong><?=$_GET["err"]?></p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }
?>
    </div>
    <section class="user_info">
        <form novalidate method="post" action="./includes/user_register.inc.php">
            <h5 class="mb-2">Personal Information</h5>
            <div class="from_div_content row g-3 needs-validation">
                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label"><span style="color: red;">*</span> Full
                        Name</label>
                    <input type="text" class="form-control form-control-sm" id="validationCustom01" required
                        name="full-name" />
                </div>
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" class="form-control form-control-sm" id="validationCustom01" required
                        name="f-name" />
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <input type="text" class="form-control form-control-sm" id="validationCustom02" required
                        name="l-name" />
                </div>
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Gender</label>
                    <select style="border: 2px solid rgb(208, 161, 255)" class="form-select form-select-sm"
                        id="validationCustom04" required name="gender">
                        <option value="male" selected>Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Birthday</label>
                    <input type="date" class="form-control form-control-sm" id="validationCustom03" required
                        name="dob" />
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">NIC</label>
                    <input type="text" class="form-control form-control-sm" id="validationCustom03" required
                        name="nic" />
                </div>
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Blood Group</label>
                    <select style="border: 2px solid rgb(208, 161, 255)" class="form-select form-select-sm"
                        id="validationCustom04" required name="b-grp">
                        <option value="A+" selected>A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Address Line 1</label>
                    <input type="text" class="form-control form-control-sm" id="validationCustom03" required
                        name="address-1" />
                </div>
                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Address Line 2</label>
                    <input type="text" class="form-control form-control-sm" id="validationCustom03" required
                        name="address-2" />
                </div>
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">District</label>
                    <select style="border: 2px solid rgb(208, 161, 255)" class="form-select form-select-sm"
                        id="validationCustom04" required name="district">
                        <!-- add the districts -->
                        <option value="Colombo" selected>Colombo</option>
                        <option value="Gampaha">Gampaha</option>
                        <option value="Kaluthara">Kaluthara</option>
                        <option value="Kandy">Kandy</option>
                        <option value="Matale">Matale</option>
                        <option value="Nuwara Eliya">Nuwara Eliya</option>
                        <option value="Galle">Galle</option>
                        <option value="Matara">Matara</option>
                        <option value="Hambantota">Hambantota</option>
                        <option value="Jaffna">Jaffna</option>
                        <option value="Kilinochchi">Kilinochchi</option>
                        <option value="Mannar">Mannar</option>
                        <option value="Vavuniya">Vavuniya</option>
                        <option value="Mullaitivu">Mullaitivu</option>
                        <option value="Batticaloa">Batticaloa</option>
                        <option value="Ampara">Ampara</option>
                        <option value="Trincomalee">Trincomalee</option>
                        <option value="Kurunegala">Kurunegala</option>
                        <option value="Puttalam">Puttalam</option>
                        <option value="Anuradhapura">Anuradhapura</option>
                        <option value="Polonnaruwa">Polonnaruwa</option>
                        <option value="Badulla">Badulla</option>
                        <option value="Monaragala">Monaragala</option>
                        <option value="Ratnapura">Ratnapura</option>
                        <option value="Kegalle">Kegalle</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Phone number</label>
                    <input type="number" class="form-control form-control-sm" id="validationCustom03" required
                        name="p-num" />
                </div>
                <div class="col-md-6">
                    <label for="validationCustom05" class="form-label">Email Address</label>
                    <input type="email" class="form-control form-control-sm" id="validationCustom05" required
                        name="e-mail" />
                </div>
            </div>
            <h5 class="mt-5 pb-2">Emergency Contact Information</h5>
            <div class="from_div_content row g-3 needs-validation mb-4">
                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Name of Emergency Contact
                    </label>
                    <input type="text" class="form-control form-control-sm" id="validationCustom01" required
                        name="emerg-name" />
                </div>
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">Relationship to Patient
                    </label>
                    <input type="text" class="form-control form-control-sm" id="validationCustom01" required
                        name="rel-name" />
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Phone Number of Emergency Contact
                    </label>
                    <input type="number" class="form-control form-control-sm" id="validationCustom02" required
                        name="emerg-pnum" />
                </div>

                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Address Line 1</label>
                    <input type="text" class="form-control form-control-sm" id="validationCustom03" required
                        name="emerg-address-1" />
                </div>
                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Address Line 2</label>
                    <input type="text" class="form-control form-control-sm" id="validationCustom03" required
                        name="emerg-address-2" />
                </div>
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">District</label>
                    <select style="border: 2px solid rgb(208, 161, 255)" class="form-select form-select-sm"
                        id="validationCustom04" required name="emerg-district">
                        <!-- add the districts -->
                        <option value="Colombo" selected>Colombo</option>
                        <option value="Gampaha">Gampaha</option>
                        <option value="Kaluthara">Kaluthara</option>
                        <option value="Kandy">Kandy</option>
                        <option value="Matale">Matale</option>
                        <option value="Nuwara Eliya">Nuwara Eliya</option>
                        <option value="Galle">Galle</option>
                        <option value="Matara">Matara</option>
                        <option value="Hambantota">Hambantota</option>
                        <option value="Jaffna">Jaffna</option>
                        <option value="Kilinochchi">Kilinochchi</option>
                        <option value="Mannar">Mannar</option>
                        <option value="Vavuniya">Vavuniya</option>
                        <option value="Mullaitivu">Mullaitivu</option>
                        <option value="Batticaloa">Batticaloa</option>
                        <option value="Ampara">Ampara</option>
                        <option value="Trincomalee">Trincomalee</option>
                        <option value="Kurunegala">Kurunegala</option>
                        <option value="Puttalam">Puttalam</option>
                        <option value="Anuradhapura">Anuradhapura</option>
                        <option value="Polonnaruwa">Polonnaruwa</option>
                        <option value="Badulla">Badulla</option>
                        <option value="Monaragala">Monaragala</option>
                        <option value="Ratnapura">Ratnapura</option>
                        <option value="Kegalle">Kegalle</option>
                    </select>
                </div>
            </div>
            <h5 class="mt-5 pb-2">Medical Conditions</h5>
            <div class="from_div_content row g-3 needs-validation mb-4">
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Allergies</label>
                    <input type="text" class="form-control form-control-sm" id="validationCustom03" required
                        name="med-allergy" />
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Surgeries</label>
                    <input type="text" class="form-control form-control-sm" id="validationCustom03" required
                        name="med-surgery" />
                </div>
                <div class="col-md-12">
                    <label for="validationCustom03" class="form-label">Chronic Conditions</label>
                    <input type="text" class="form-control form-control-sm" id="validationCustom03" required
                        name="med-chronic" />
                </div>
            </div>
            <h5 class="mt-5 pb-2">Add a Password for your Account</h5>
            <div class="from_div_content row g-3 needs-validation mb-4">
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Password</label>
                    <input type="password" class="form-control form-control-sm" id="validationCustom03" required
                        name="password" />
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Repeat Password</label>
                    <input type="password" class="form-control form-control-sm" id="validationCustom03" required
                        name="password_rep" />
                </div>
            </div>
            <div class="from_div_content row g-3 needs-validation mt-4 mb-2">
                <div class="col-12">
                    <button class="btn btn-primary form-control" type="submit" name="user_submission">
                        Submit form
                    </button>
                </div>
            </div>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>