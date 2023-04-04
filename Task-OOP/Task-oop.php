<?php

class Lingkaran{
    public function nama_bangun(){
        return "Lingkaran";
    }
    public function luas_lingkaran(float $phi, int $r){
        return $phi * $r * $r;
    }

    public function keliling_lingkaran(float $phi, int $r){
        return $phi * 2 * $r;
    }
}

class Persegi{
    public function nama_bangun(){
        return "Persegi";
    }
    public function luas_persegi(int $s){
        return $s * $s;
    }

    public function keliling_persegi(int $s){
        return 4 * $s;
    }
}

class Persegi_Panjang{
    public function nama_bangun(){
        return "Persegi Panjang";
    }
    public function luas_persegi_panjang(int $p, int $l){
        return $p * $l;
    }

    public function keliling_persegi_panjang(int $p, int $l){
        return 2 * ($p + $l);
    }
}

$lingkaran = new Lingkaran();
echo "Bangun datar ini adalah ".$lingkaran->nama_bangun()," yang memiliki luas ".$lingkaran->luas_lingkaran(3.14, 7)," dan keliling ".$lingkaran->keliling_lingkaran(3.14, 7)."<br/>";
$persegi = new Persegi();
echo "Bangun datar ini adalah ".$persegi->nama_bangun()," yang memiliki luas ".$persegi->luas_persegi(10)," dan keliling ".$persegi->keliling_persegi(10)."<br/>";
$P_panjang = new Persegi_Panjang();
echo "Bangun datar ini adalah ".$P_panjang->nama_bangun()," yang memiliki luas ".$P_panjang->luas_persegi_panjang(8,5)," dan keliling ".$P_panjang->keliling_persegi_panjang(8,5);


?>