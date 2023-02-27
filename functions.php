<?php
// koneksi database
$conn = mysqli_connect("localhost","root","","portfolio");
 

function contact($data){
    global $conn;
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $pesan = htmlspecialchars($data['pesan']);

    $query = "INSERT INTO contact VALUES ('','$nama','$email','$pesan')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

?>