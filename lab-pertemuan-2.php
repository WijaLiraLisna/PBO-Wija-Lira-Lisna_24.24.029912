<?php
// LAB 2 — Class, object, constructor
// Spesifikasi:
//  - Mahasiswa(string $nim, string $nama, string $prodi, float $ipk)
//      info(): string
//      predikat(): string  -> ipk >= 3.51 'Cumlaude', ipk >= 3.01 'Sangat Memuaskan', selain itu 'Memuaskan'
//  - Produk(string $nama, int $harga, int $stok)
//      totalNilai(): int   -> harga x stok

class Mahasiswa
{
    public function __construct(
        private string $nim,
        private string $nama,
        private string $prodi,
        private float $ipk
    ){
    }
            public function info(): string
            {
        return "$this->nim | $this->nama | $this->prodi | IPK $this->ipk";
    }
    public function predikat(): string 
    {
        return match (true) {
            $this->ipk >= 3.51=> 'Cumlaude',
            $this->ipk >= 3.01=> 'Sangat Memuaskan',
            default => 'Memuaskan',
        };
    }
}

class Produk
{
    public function __construct(
        private string $nama,
        private int $harga,
        private int $stok
        ) {
    }
        public function totalNilai(): int
        {
            return $this->harga * $this->stok;
        }
}

// TODO: buat 3 object Mahasiswa dan tampilkan info() + predikat()
 foreach ([3.80, 3.20, 2.90] as $i => $ipk) {
     $m = new Mahasiswa('250100' . ($i + 1 ), 'Mhs' . ($i + 1), 'Informatika', $ipk);
     echo $m->info() . '->' . $m->predikat() . PHP_EOL;
 }
 echo (new Produk('pulpen' , 5000, 3))->totalNilai() . PHP_EOL;
