<?php 
$hasil = 0;
switch ($_POST['operasi']) {
    case '+':
        $hasil = $_POST['angka1'] + $_POST['angka2'];
        break;
    default:
        # code...
        break;
}


?>