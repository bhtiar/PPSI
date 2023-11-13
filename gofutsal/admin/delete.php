<?php
include("../koneksi.php");

if (isset($_REQUEST['username_member'])) {
    $username_member = $_REQUEST['username_member'];
    
    // Perform any necessary checks or validation on $username_member

    // Example: Generate a new ver_code (you can replace this with your logic)
    $new_ver_code = generateNewVerCode();

    // Update ver_code in the member table
    $sql = "UPDATE member SET ver_code = '$new_ver_code' WHERE username_member = '$username_member'";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        echo "<script>alert('Verifikasi code berhasil diubah!');</script>";
        header("Location: opt_profil.php");
        exit();
    } else {
        echo "<script>alert('Verifikasi code gagal diubah!');</script>";
        header("Location: opt_profil.php");
        exit();
    }
} else {
    echo "Invalid request.";
}

// Function to generate a new ver_code (you can customize this based on your requirements)
function generateNewVerCode() {
    // Your logic to generate a new ver_code, for example:
    return md5(uniqid(rand(), true));
}
?>
