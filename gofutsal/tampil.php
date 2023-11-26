<?php
include "koneksi.php";

$tampil = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE status = 'lunas' ORDER BY id_book");

$dataArr = array();
while ($data = mysqli_fetch_array($tampil)) {
    // Assuming you have a column `id_lapangan` in your `transaksi` table
    $idLapangan = $data['id_lap'];
    $startDateTime = date('c', strtotime($data['tgl_main'] . ' ' . $data['jam_mulai']));
    $endDateTime = date('c', strtotime($data['tgl_main'] . ' ' . $data['jam_berakhir']));

    $dataArr[] = array(
        'id' => $data['id_book'],
        'title' => $data['username_member'] . ' - Studio: ' . $idLapangan, // Concatenate the field ID with the member username
        'start' => $startDateTime,
        'end' => $endDateTime,
        'id_lap' => $idLapangan // Store the field ID in the event object
    );
}

echo json_encode($dataArr);
?>