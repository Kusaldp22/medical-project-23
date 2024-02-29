<?php
$json_path = "../config/credentials.json";
require "../db.php";
require "functions.inc.php";

if (isset($_POST["user_submission"]))
{
    $full_name = $_POST["full-name"];
    $first_name = $_POST["f-name"];
    $last_name = $_POST["l-name"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $nic = $_POST["nic"];
    $blood = $_POST["b-grp"];
    $address_l1 = $_POST["address-1"];
    $address_l2 = $_POST["address-2"];
    $district = $_POST["district"];
    $phone= $_POST["p-num"];
    $email = $_POST["e-mail"];
    $emg_name = $_POST["emerg-name"];
    $rel_name = $_POST["rel-name"];
    $emg_phone = $_POST["emerg-pnum"];
    $emg_address_l1 = $_POST["emerg-address-1"];
    $emg_address_l2 = $_POST["emerg-address-2"];
    $emg_district = $_POST["emerg-district"];
    $med_allergy = $_POST["med-allergy"];
    $med_surgery = $_POST["med-surgery"];
    $med_chronic = $_POST["med-chronic"];
    $password = $_POST["password"];
    $password_rep = $_POST["password_rep"];

    $data = [$full_name, $first_name, $last_name, $gender, $dob, $nic, $blood, $address_l1, $address_l2, $district,$phone, $email, $emg_name, $rel_name, $emg_phone , $emg_address_l1, $emg_address_l2, $emg_district, $med_allergy, $med_surgery, $med_chronic, $password, $password_rep];
    $req_data = [$full_name, $first_name, $last_name, $gender, $dob, $nic, $blood, $address_l1, $address_l2, $district,$phone, $email, $emg_name, $rel_name, $emg_phone , $emg_address_l1, $emg_address_l2, $emg_district, $password, $password_rep];

    for ($i = 0; $i < count($req_data); $i++) {
        if ($req_data[$i] == "") {
            header("Location: ../user_register.php?err=Fill all required details");
            exit();
        }
    }
    if ($password != $password_rep) {
        header("Location: ../user_register.php?err=Password did not matched!");
        exit();
    }

    register_user($data);
    header("Location: ../user_register.php?ok=User Registered Successfully");
}
?>