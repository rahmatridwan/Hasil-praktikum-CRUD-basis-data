<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DATA SISWA</h1>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama Siswa</td>
            <td>Alamat</td>
            <td>Agama</td>
            <td>Asal Sekolah</td>
            <td>Aksi</td>
        </tr>
<?php
$no = 1;
$query = mysqli_query($koneksi, "SELECT * FROM siswa");
while ($data = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td>" . $no++ . "</td>";
    echo "<td>" . $data['nama'] . "</td>";
    echo "<td>" . $data['alamat'] . "</td>";
    echo "<td>" . $data['jenis_kelamin'] . "</td>";
    echo "<td>" . $data['agama'] . "</td>";
    echo "<td>" . $data['asal'] . "</td>";
    echo "</tr>";
}
?>
    </table>
</body>
</html>
