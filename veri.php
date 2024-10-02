<?php
// ESP8266'dan gelen veri
if (isset($_GET['Temp'])) {
    $temp = $_GET['Temp'];

    // Veriyi bir dosyaya yazıyoruz (veri.txt)
    $file = 'veri.txt';
    file_put_contents($file, $temp);

    // Başarılı mesajı
    echo "Veri kaydedildi: " . $temp;
} else {
    echo "Veri gelmedi!";
}
?>
