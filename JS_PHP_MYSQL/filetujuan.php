<?php
parse_str($_POST['dataform'], $hasil);

echo 'NamaLengkap : ' . $hasil['NamaLengkap'];
echo 'TempatLahir  : ' . $hasil['TempatLahir'];
echo 'TanggalLahir  : ' . $hasil['TanggalLahir'];
echo 'AnakKe : ' . $hasil['AnakKe'];
echo 'Dari : ' . $hasil['Dari'];
echo 'AlamatDomisili  : ' . $hasil['AlamatDomisili'];
echo 'Kota : ' . $hasil['Kota'];
echo 'Provinsi : ' . $hasil['Provinsi'];
echo 'Zip : ' . $hasil['Zip'];
echo 'AlamatSekarang : ' . $hasil['AlamatSekarang'];
echo 'KotaSekarang  : ' . $hasil['KotaSekarang'];
echo 'ProvinsiSekarang : ' . $hasil['ProvinsiSekarang'];
echo 'ZipSekarang : ' . $hasil['ZipSekarang'];
echo 'Email : ' . $hasil['Email'];
echo 'Password : ' . $hasil['Password'];


$ConnDB = mysqli_connect("localhost","root","","biodata");

$sql = "INSERT INTO `data_diri`(`Nama_Lengkap`, `Tempat_Lahir`, `Tanggal_Lahir`,  `Anak_Ke`, `Dari`, `Alamat_Domisili`, `Kota`, `Provinsi`. `Zip`, `Alamat_Sekarang`, `Kota_Sekarang`, `Provinsi_Sekarang`. `Zip_Sekarang`,  `email`, `Password`) VALUES ('$hasil[NamaLengkap]','$hasil[TempatLahir]', '$hasil[TanggalLahir]','$hasil[AnakKe]','$hasil[Dari]','$hasil[AlamatDomisili]','$hasil[Kota]','$hasil[Provinsi]','$hasil[Zip]','$hasil[AlamatSekarang]','$hasil[KotaSekarang]','$hasil[ProvinsiSekarang]','$hasil[ZipSekarang]','$hasil[Email]','$hasil[Password]')";

if(mysqli_query($ConnDB,$sql))
{
  echo "records added successfully.";}
  else
  {
    echo "ERROR: Could not able to execute $sql.".
    mysqli_error($ConnDB);
  }
mysqli_close($ConnDB);
?>
