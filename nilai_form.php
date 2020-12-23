<!DOCTYPE html>
<html>
<head>
    <title> Input Data Nilai </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php 
    include 'config.php';
    $kd_matpel = $_GET['kd'];
    $sqlmp = "select * from mapel where kd_mapel = 'kd_mapel'";
    $resmp = mysqli_query($koneksi, $sqlmp);
    $datamp = mysqli_fetch_array($resmp);
    ?>
    <h2> Input Data Nilai Mata Pelajaran : <?= $datamp['mapel'] ?> </h2>
    <table width="600" cellpadding="5" cellspacing="1">
        <tr>
            <th width="30"> No. </th>
            <th width="70"> NIS </th>
            <th> Nama Siswa </th>
            <th width="70"> UTS </th>
            <th width="70"> UAS </th>
            <th width="70"> TUGAS </th>
            <th width="50"> NILAI AKHIR </th>
        </tr>
        <form method="POST" action="nilai_guru_simpan.php">
            <?php 
            $sql = "select * from siswa order by nis asc";
            $result = mysqli_query($koneksi,$sql);
            $no = 1;
            while ($data = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?= $no?>.</td>
                    <td><?= $data['nis']?>
                    <input type="hidden" name="nis[]" value="<?= $data['nis']?>">
                    <input type="hidden" name="kd_mapel[]" value="<?= $datamp['kd_mapel']?>"></td>
                    <td><?= $data['nama_siswa']?></td>
                    <td><input type="number" name="uts[]"></td>
                    <td><input type="number" name="uas[]"></td>
                    <td><input type="number" name="tugas[]"></td>
                  
                   
                </tr>
                <?php 
                $no++;
            }
            ?>
        </table>
        <p>
            <input type="submit" name="simpan" value="Simpan">
        </p>
    </form>
</body>
</html>