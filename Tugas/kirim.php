<?php
include 'koneksi.php';
// menyimpan data
$jenisdaftar		=$_POST['jenisdaftar'];
$tglmasuk			=$_POST['tglmasuk'];
$nis				=$_POST['nis'];
$noujian			=$_POST['noujian'];
$paud				=$_POST['paud'];
$tk					=$_POST['tk'];
$noskhun			=$_POST['noskhun'];
$noijazah			=$_POST['noijazah'];
$hobi				=$_POST['hobi'];
$citacita			=$_POST['citacita'];
$namalengkap		=$_POST['namalengkap'];
$jeniskelamin		=$_POST['jeniskelamin'];
$nisn				=$_POST['nisn'];
$nik				=$_POST['nik'];
$tempatlahir		=$_POST['tempatlahir'];
$tgllahir			=$_POST['tgllahir'];
$agama				=$_POST['agama'];
$kebutuhankhusus	=$_POST['kebutuhankhusus'];
$alamatjalan		=$_POST['alamatjalan'];
$rt					=$_POST['rt'];
$rw					=$_POST['rw'];
$dusun				=$_POST['dusun'];
$kelurahan			=$_POST['kelurahan'];
$kecamatan			=$_POST['kecamatan'];
$kodepos			=$_POST['kodepos'];
$tinggal			=$_POST['tinggal'];
$transportasi		=$_POST['transportasi'];
$nohp				=$_POST['nohp'];
$notelp				=$_POST['notelp'];
$email				=$_POST['email'];
$penerimakps		=$_POST['penerimakps'];
$nokps				=$_POST['nokps'];
$kwn		        =$_POST['kwn'];
// perintah untuk input data kedalam database
$query="INSERT INTO pesertadidik SET jenisdaftar='$jenisdaftar',tglmasuk='$tglmasuk',nis='$nis',noujian='$noujian',paud='$paud', tk='$tk',noskhun='$noskhun',noijazah='$noijazah',hobi='$hobi',citacita='$citacita', namalengkap='$namalengkap',jeniskelamin='$jeniskelamin',nisn='$nisn',nik='$nik',tempatlahir='$tempatlahir', tgllahir='$tgllahir',agama='$agama',kebutuhankhusus='$kebutuhankhusus',alamatjalan='$alamatjalan',rt='$rt', rw='$rw',dusun='$dusun',kelurahan='$kelurahan',kecamatan='$kecamatan',kodepos='$kodepos', tinggal='$tinggal',transportasi='$transportasi',nohp='$nohp',notelp='$notelp',email='$email', penerimakps='$penerimakps',nokps='$nokps',kwn='$kwn' ";
mysqli_query($konek,$query);
?>