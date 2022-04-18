<?php
class bmiPasien
{
    public $tanggal,
        $kode,
        $nama,
        $berat,
        $tinggi,
        $umur,
        $jenisKelamin;

    public function hasilBMI()
    {
        return "<b>Tanggal Periksa : $this->tanggal  <br><br>
                Kode Pasien : $this->kode <br><br>
                Nama : $this->nama  <br><br>
                Berat Badan : $this->berat <br><br>
                Tinggi Badan : $this->tinggi <br><br>
                Umur : $this->umur <br><br>
                Jenis Kelamin : $this->jenisKelamin</b>";
    }
    public function statusBMI($BMI)
    {
        if ($BMI < 18.5){
           return "<td>Kekurangan Berat Badan</td>"; 
        }  elseif ($BMI >= 18.5 && $BMI <= 23.9) {
            return "<td>Normal (ideal)</td>";
        }  elseif ($BMI >= 24.0 && $BMI <= 26.9) {
            return "<td>Kelebihan Berat Badan</td>";
        }  else {
            return "<td>Kegemukan (Obesitas)</td>";
        }
    }
}

if (isset($_GET["nama_lengkap"])) {
    $bmi = new bmiPasien;
    $bmi->tanggal = $_GET["tanggal"];
    $bmi->kode = $_GET["kode"];
    $bmi->nama = $_GET["nama_lengkap"];
    $bmi->berat = $_GET["berat"];
    $bmi->tinggi = $_GET["tinggi"];
    $bmi->umur = $_GET["umur"];
    $bmi->jenisKelamin = $_GET["jenis_kelamin"];
}
$pasien1 = ["tanggal" => "2022-01-10" , "kode" => "P001", "nama" => "Ahmad", "kelamin" => "Laki Laki", "umur" => 20, "berat" => 69.8, "tinggi" => 169];
$pasien2 = ["tanggal" => "2022-01-10" , "kode" => "P002", "nama" => "Rina", "kelamin" => "Perempuan", "umur" => 21, "berat" => 55.3, "tinggi" => 165];
$pasien3 = ["tanggal" => "2022-01-11" , "kode" => "P003", "nama" => "Lutfi", "kelamin" => "Laki Laki", "umur" => 22, "berat" => 45.2, "tinggi" => 171];
$pasien4 = ["tanggal" => $bmi->tanggal, "kode" => $bmi->kode, "nama" => $bmi->nama, "kelamin" => $bmi->jenisKelamin, "umur" => $bmi->umur, "berat" => $bmi->berat, "tinggi" => $bmi->tinggi];

$ar_pasien = [$pasien1, $pasien2, $pasien3, $pasien4];

?>