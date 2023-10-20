<?php
// Menggunakan namespace PHPUnit dengan yang benar
use PHPUnit\Framework\TestCase; 

 // Mengimpor kelas "wordcount" pada file "wordcount.php"
 require_once "wordcount.php";

 // Mendefinisikan kelas "SimpleTest" yang merupakan tes unit dan turunan dari TestCase yang ada di framword
 class SimpleTest extends TestCase {

   // Membuat metod "testcountwords"
   public function testcountwords() { 

    // Membuat inisialisasi objek dari kelas "wordcount"
$wcc = new wordcount(); 

        // Menyiapkan beberapa kalimat untuk di uji coba
        $testsentence = "my name is Joko"; 

        // Memanggil metode "countWords" dari objek/variable $wcc
        $wordcount = $wcc->countWords($testsentence); 

       // jadi Memeriksa apakah jumlah kata yang akan dihasilkan sama dengan yang diharapkan yaitu 4
       $this->assertEquals(4, $wordcount); 
    }
}
?>
