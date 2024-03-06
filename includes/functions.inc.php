<?php

use Kreait\Firebase\Factory;

function register_user($data) {
    $json_path = "../config/credentials.json";
    require "../db.php";
    
    if (count($data) == 23) {
        $full_name = $data[0];
        $first_name = $data[1];
        $last_name = $data[2];
        $gender = $data[3];
        $dob = $data[4];
        $nic = $data[5];
        $blood = $data[6];
        $address_l1 = $data[7];
        $address_l2 = $data[8];
        $district = $data[9];
        $phone= $data[10];
        $email = $data[11];
        $emg_name = $data[12];
        $rel_name = $data[13];
        $emg_phone = $data[14];
        $emg_address_l1 = $data[15];
        $emg_address_l2 = $data[16];
        $emg_district = $data[17];
        $med_allergy = $data[18];
        $med_surgery = $data[19];
        $med_chronic = $data[20];
        $password = $data[21];
        $password_rep = $data[22];
        $uid = get_UID();

        
        // Create an associative array with the data
        $user_data = array(
            'full_name' => $full_name,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'gender' => $gender,
            'dob' => $dob,
            'nic' => $nic,
            'blood' => $blood,
            'address_l1' => $address_l1,
            'address_l2' => $address_l2,
            'district' => $district,
            'phone' => $phone,
            'email' => $email,
            'emg_name' => $emg_name,
            'rel_name' => $rel_name,
            'emg_phone' => $emg_phone,
            'emg_address_l1' => $emg_address_l1,
            'emg_address_l2' => $emg_address_l2,
            'emg_district' => $emg_district,
            'med_allergy' => $med_allergy,
            'med_surgery' => $med_surgery,
            'med_chronic' => $med_chronic,
            'uid' => $uid,
            'password' => $password
        );
       
        
    $ref = $database->getReference('app/MedSync/users/' . $uid)->set($user_data);
     
}
}

function generateUID() {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $uid = '';
    $max = strlen($characters) - 1;
    for ($i = 0; $i < 8; $i++) {
        $uid .= $characters[mt_rand(0, $max)];
    }
    return $uid;
}
function get_UID() {
    $json_path = "../config/credentials.json";
    require "../db.php";

    $uid = generateUID();
    $data = $database->getReference('app/MedSync/users/' . $uid . '/user_id' )->getValue();
    if ($data) {
        get_UID();
    }
    else {
        return $uid;
    }
}

function check_login($username, $password) {
    $json_path = "../config/credentials.json";
    require "../db.php";

    $data = $database->getReference('app/MedSync/users/' . $username)->getValue();
    if ($data) {
        if (($data["uid"] == $username) && ($data["password"] == $password)) {
            unset($array['password']);
            session_start();
            $_SESSION["user"] = $data;
            header("Location: ../dashboard.php");
            exit();
        } 
        else {
            header("Location: ../login.php?err=Incorrect Username or Password");
            exit();
        }
    }
    else {
        header("Location: ../login.php?err=Incorrect Username or Password");
        exit();
    }
}