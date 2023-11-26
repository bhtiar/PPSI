<?php
include("../koneksi.php");

// Proses jika ada permintaan untuk menghapus 'ver_code' pada operator
if (isset($_POST['delete_vercode']) && isset($_POST['username'])) {
  $username = $_POST['username'];

  // Lakukan update pada 'ver_code' menjadi NULL
  $sql = "UPDATE operator SET ver_code = '' WHERE username = '$username'";
  $query = mysqli_query($koneksi, $sql);

  if ($query) {
    echo "<script>alert('Verifikasi code berhasil dihapus untuk operator!');</script>";
    // header("Location: adm_data_operator.php");
  } else {
    echo "<script>alert('Verifikasi code gagal dihapus untuk operator!');</script>";
  }
}

// Proses jika ada permintaan untuk mengedit 'ver_code' pada operator
if (isset($_POST['edit_vercode']) && isset($_POST['username'])) {
  $username = $_POST['username'];

  // Generate a random ver_code using uniqid
  $new_ver_code = uniqid();

  // Lakukan update pada 'ver_code' berdasarkan username_opt
  $sql = "UPDATE operator SET ver_code = '$new_ver_code' WHERE username = '$username'";
  $query = mysqli_query($koneksi, $sql);

  if ($query) {
    echo "<script>alert('Verifikasi code berhasil diubah menjadi: $new_ver_code untuk operator');</script>";
    // header("Location: adm_data_operator.php");
    // exit();
  } else {
    echo "<script>alert('Verifikasi code gagal diubah untuk operator!');</script>";
  }
}

// Proses jika ada permintaan untuk menghapus operator
if (isset($_POST['delete_operator']) && isset($_POST['username'])) {
  $username = $_POST['username'];

  // Hapus operator berdasarkan username_opt
  $sql_delete = "DELETE FROM operator WHERE username = '$username'";
  $query_delete = mysqli_query($koneksi, $sql_delete);

  if ($query_delete) {
    echo "<script>alert('Operator berhasil dihapus!');</script>";
    // header("Location: adm_data_operator.php");
  } else {
    echo "<script>alert('Gagal menghapus operator!');</script>";
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
            <h2>Data Operator</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                    class="fa fa-wrench"></i></a>
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
            <!-- Isi disini -->
            <!-- Tabel Data Operator -->
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
              cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Foto</th>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Nama Futsal</th>
                  <th>Alamat Futsal</th>
                  <th>Kota</th>
                  <th>Email</th>
                  <th>Ver Code</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                <?php
                require "../koneksi.php"; // Include the connection file
                $query = mysqli_query($koneksi, "select * from operator"); // Select data from the operator table
                while ($sel = mysqli_fetch_array($query)) { // Loop through the data array
                  ?>
                  <tr>
                    <!-- Display operator data -->
                    <td><img align="middle" src="../operator/assets/foto_opt/<?php echo $sel['foto']; ?>"
                        style="width:50px; height:50px;" /></td>
                    <td>
                      <?php echo $sel['username']; ?>
                    </td>
                    <td>
                      <?php echo $sel['nama_opt']; ?>
                    </td>
                    <td>
                      <?php echo $sel['nama_futsal']; ?>
                    </td>
                    <td>
                      <?php echo $sel['alamat_futsal']; ?>
                    </td>
                    <td>
                      <?php echo $sel['kota']; ?>
                    </td>
                    <td>
                      <?php echo $sel['email']; ?>
                    </td>
                    <td>
                      <?php echo $sel['ver_code']; ?>
                    </td>
                    <td>
                      <form method="post" action="">
                        <input type="hidden" name="username" value="<?php echo $sel['username']; ?>">
                        <button type="submit" name="edit_vercode" class="btn btn-warning btn-xs">Block</button>
                      </form>

                      <form method="post" action="">
                        <input type="hidden" name="username" value="<?php echo $sel['username']; ?>">
                        <button type="submit" name="delete_vercode" class="btn btn-success btn-xs">Confirm</button>
                      </form>

                      <form method="post" action="">
                        <input type="hidden" name="username" value="<?php echo $sel['username']; ?>">
                        <button type="submit" name="delete_operator" class="btn btn-danger btn-xs">Delete</button>
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