<?php
function register_user($data) {
    $json_path = "../config/credentials.json";
    require "./db.php";
    
    if (count($data) == 21) {
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
    $ref = $database->getReference('app/MedSync/' . "/password")->set($password);   
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