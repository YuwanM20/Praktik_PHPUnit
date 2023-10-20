<?php
class wordcount{
    public function countWords($sentence){

        // digunakan untuk memecah string ke dalam array, dengan pemisah yang diberikan.
        // digunakan untuk menghitung jumlah elemen dalam array. Dalam kasus ini, kita menghitung jumlah kata yang ada dalam array hasil dari explode.
        return count(explode(" ",$sentence));

        // Jadi, dengan menggunakan explode(" ", $sentence) untuk memecah kalimat atau string menjadi kata-kata, dan kemudian dengan count, lalu menghitung jumlah kata tersebut dan mengembalikan jumlahnya sebagai hasil. 
        // jadi metod countWords akan mengembalikan jumlah kata dalam string
    }
}
?>
