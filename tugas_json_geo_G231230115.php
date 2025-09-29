<?php
// ===== ENCODE =====
// Buat array PHP dengan identitas mahasiswa
$data = [
    "nama" => "Geovivamay Firsteta",
    "nim" => "231230115",
    "kelas" => "TI-B Sore",
    "usia" => 20,
    "hobi" => ["Coding", "Gaming", "Musik"]
];

// Encode array ke JSON
$jsonData = json_encode($data);
echo "<h2>Hasil JSON Encode</h2>";
echo $jsonData;
echo "<hr>";

// ===== DECODE =====
// Variabel JSON (bisa pakai hasil encode di atas)
$jsonString = '{"nama":"Geovivamay Firsteta","nim":"231230115","kelas":"TI-B Sore","usia":20,"hobi":["Coding","Gaming","Musik"]}';

// Decode ke PHP Object
$obj = json_decode($jsonString);

// Decode ke PHP Array
$arr = json_decode($jsonString, true);

// Akses nilai dari Object
echo "<h2>JSON Decode ke Object</h2>";
echo "Nama: " . $obj->nama . "<br>";
echo "NIM: " . $obj->nim . "<br>";
echo "Kelas: " . $obj->kelas . "<br>";
echo "Usia: " . $obj->usia . "<br>";
echo "Hobi Pertama: " . $obj->hobi[0] . "<br>";
echo "<hr>";

// Akses nilai dari Array
echo "<h2>JSON Decode ke Array</h2>";
echo "Nama: " . $arr["nama"] . "<br>";
echo "NIM: " . $arr["nim"] . "<br>";
echo "Kelas: " . $arr["kelas"] . "<br>";
echo "Usia: " . $arr["usia"] . "<br>";
echo "Hobi Pertama: " . $arr["hobi"][0] . "<br>";
?>
