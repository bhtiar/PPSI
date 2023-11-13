<?php
include("../koneksi.php");

// Proses jika ada permintaan untuk menghapus 'ver_code'
if (isset($_POST['delete_vercode']) && isset($_POST['username_member'])) {
    $username_member = $_POST['username_member'];

    // Lakukan update pada 'ver_code' menjadi NULL
    $sql = "UPDATE member SET ver_code = '' WHERE username_member = '$username_member'";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        echo "<script>alert('Verifikasi code berhasil dihapus!');</script>";
        // header("Location: adm_data_member.php");
    } else {
        echo "<script>alert('Verifikasi code gagal dihapus!');</script>";
    }
}

// Proses jika ada permintaan untuk mengedit 'ver_code'
if (isset($_POST['edit_vercode']) && isset($_POST['username_member'])) {
    $username_member = $_POST['username_member'];

    // Generate a random ver_code using uniqid
    $new_ver_code = uniqid();

    // Lakukan update pada 'ver_code' berdasarkan username_member
    $sql = "UPDATE member SET ver_code = '$new_ver_code' WHERE username_member = '$username_member'";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        echo "<script>alert('Verifikasi code berhasil diubah menjadi: $new_ver_code');</script>";
        // header("Location: adm_data_member.php");
        // exit();
    } else {
        echo "<script>alert('Verifikasi code gagal diubah!');</script>";
    }
}
?>

<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Member</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a></li>
                                    <li><a href="#">Settings 2</a></li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- Tabel Data Member -->
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>vercode</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require "../koneksi.php";
                                $query = mysqli_query($koneksi, "select * from member");
                                while ($sql = mysqli_fetch_array($query)) {
                                    ?>
                                    <tr>
                                        <td><img align="middle"
                                                src="../member/assets/foto_member/<?php echo $sql['foto']; ?>"
                                                style="width:50px; height:50px;" /></td>
                                        <td>
                                            <?php echo $sql['username_member']; ?>
                                        </td>
                                        <td>
                                            <?php echo $sql['nama']; ?>
                                        </td>
                                        <td>
                                            <?php echo $sql['tgl_lahir']; ?>
                                        </td>
                                        <td>
                                            <?php echo $sql['jk']; ?>
                                        </td>
                                        <td>
                                            <?php echo $sql['email']; ?>
                                        </td>
                                        <td>
                                            <?php echo $sql['password']; ?>
                                        </td>
                                        <td>
                                            <?php echo $sql['ver_code']; ?>
                                        </td>
                                        <td>
                                            <form method="post" action="">
                                                <input type="hidden" name="username_member"
                                                    value="<?php echo $sql['username_member']; ?>">
                                                <button type="submit" name="edit_vercode"
                                                    class="btn btn-warning btn-xs">Block</button>
                                            </form>

                                            <form method="post" action="">
                                                <input type="hidden" name="username_member"
                                                    value="<?php echo $sql['username_member']; ?>">
                                                <button type="submit" name="delete_vercode"
                                                    class="btn btn-success btn-xs">Confirm</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Check if the session variable is set (indicating a successful update)
    <?php if (isset($_SESSION['vercode_update_success'])): ?>
        alert("Verifikasi code berhasil diubah!");
        // Redirect back to adm_data_member.php
        window.location = "adm_data_member.php";
    <?php endif; ?>
</script>