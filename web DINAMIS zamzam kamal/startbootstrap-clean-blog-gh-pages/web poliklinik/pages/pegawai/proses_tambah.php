 <?php
ob_start();
include '../../inc/koneksi.php';

$NIP             =$_POST['nip'];
$NAMA            =$_POST['nama_peg'];
$ALAMAT          =$_POST['alamat_peg'];
$TELEPON         =$_POST['telp_peg'];
$JENKEL          =$_POST['jenis_kelamin_peg'];
$USERNAME        =$_POST['username'];
$PASSWORD        =$_POST['password'];
$STATUS          =$_POST['status'];

if ($NIP=="" || $NAMA=="" ||  $ALAMAT=="" ||  $TELEPON=="" || $JENKEL=="" || $USERNAME=="" || $PASSWORD=="" ||$STATUS=="") {


    echo"<script>

        alert('GAGAL');
    
        </script>";




    }else{
        $QUERY1=mysqli_query($CONNECT,"INSERT INTO tb_pegawai SET
        nip                   ='$NIP',
        nama_peg              ='$NAMA',
        alamat_peg            ='$ALAMAT',
        telp_peg              ='$TELEPON',
        jenis_kelamin_peg     ='$JENKEL';")
        or die('Gagal Memasukan Data Baru'.mysqli_error($CONNECT) );

        $QUERY2=mysqli_query($CONNECT,"INSERT INTO tb_login SET
            username          ='$USERNAME',
            password          = md5('$PASSWORD'),
            type_user         ='$STATUS',
            nip               ='$NIP';")
        or die("Gagal memasukan data baru".mysqli_error($CONNECT) );





        }

    echo"<script>

        alert('BERHASIL ');
    
        </script>";





    header("location:../../Admin/index.php?page=pegawai");



?>
