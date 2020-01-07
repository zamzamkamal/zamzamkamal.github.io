<?php
@$page = $_GET['page']; 
switch ($page) {
	
	case 'pasien':
		include '../pages/pasien/pasien.php';
		break;
	case 'pasien_tambah':
		include '../pages/pasien/tambah.php';
		break;
    case 'pendaftar':
		include '../pages/pendaftar/pendaftar.php';
		break;
    case 'pegawai':
		include '../pages/pegawai/pegawai.php';
		break;
    case 'jadwal':
		include '../pages/jadwal/jadwal.php';
		break;
    case 'poli':
		include '../pages/poli/poli.php';
		break;
	case 'dokter':
		include '../pages/dokter/dokter.php';
		break;	
    case 'obat':
		include '../pages/obat/obat.php';
		break;
    case 'biaya':
		include '../pages/biaya/biaya.php';
		break;
    case 'resep':
		include '../pages/resep/resep.php';
		break;
    case 'periksa':
		include '../pages/periksa/periksa.php';
		break;
    case 'medis':
		include '../pages/medis/medis.php';
		break;
	case 'rincian_biaya':
		include '../pages/rincian_biaya/rincian_biaya.php';
		break;
	case 'profil':
		include '../pages/profil/profil.php';
		break;
	case 'pengaturan':
		include '../pages/profil/pengaturan.php';
		break;
	case 'info':
		include '../pages/info/info.php';
		break;
	case 'database':
		include '../pages/database/database.php';
		break;					
	default:
		include '../pages/dashboard.php';
		break;
}


?>
