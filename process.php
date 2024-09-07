

<?php
    include 'koneksi/koneksi.php';
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
        $query = mysqli_query($koneksi, $sql);
        if($query){
            header("Location:index.php?notif=kirimberhasil");
        }else{
            header("Location:index.php?notif=kirimgagal");
        }
    }       
?>