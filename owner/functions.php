<?php 
session_start();

if($_SESSION){
    if($_SESSION['role'] == 'owner'){

    }else{
        header('location:../dashboard.php');
    }
}else{
    header('location:../dashboard.php');
}

$conn = mysqli_connect('localhost','root','','ujikom_laundry');

function ambildata($conn,$query){
    $data = mysqli_query($conn,$query);
    if (mysqli_num_rows($data) > 0) {
        while($row = mysqli_fetch_assoc($data)){
        $hasil[] = $row;
    }

    return $hasil;
    }
}

function bisa($conn,$query){
    $db = mysqli_query($conn,$query);

    if($db){
        return 1;
    }else{
        return 0;
    }
}



function ambilsatubaris($conn,$query){
    $db = mysqli_query($conn,$query);
    return mysqli_fetch_assoc($db);
}

function hapus($where,$table,$redirect){
    $query = 'DELETE FROM ' . $table . ' WHERE ' . $where;
    echo $query;
}

?>