<?php 

class ContohStatic {
    public static $angka = 1;

    public static function CetakHalo() {
        return "Hello " . self::$angka++ . " Kali";
    }

}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::CetakHalo();
echo "<br>";
echo ContohStatic::CetakHalo();
echo "<br>";
echo ContohStatic::CetakHalo();
echo "<br>";
echo ContohStatic::CetakHalo();






