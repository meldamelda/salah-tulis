<?php
    require_once("../backend/config/config.php");
    // echo str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
    $_POST['password'] = md5($_POST['password']);
    $array_key = ['id','nama','jenis_kelamin','alamat','kontak','username','password'];
    $sql = "INSERT INTO user(id,nama,jenis_kelamin,alamat,kontak,username,password) values(:id,:nama,:jenis_kelamin,:alamat,:kontak,:username,:password)";
    $db->query($sql);
    foreach($array_key as $a){
        $db->bind(":$a", $_POST["$a"]);
    }
    $db->execute();
    if($db->rowCount() > 0){
        echo "<script>alert('Data berhasil disimpan);</script>";
    }
?>