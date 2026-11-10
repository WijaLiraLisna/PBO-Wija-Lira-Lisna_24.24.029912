<?php
// LAB 1 — Gaya prosedural vs OOP
// Spesifikasi: class Buku dengan constructor(string $judul, string $penulis, int $tahun)
//              dan method info(): string yang memuat judul & tahun.

// 1) Versi prosedural
$buku = [
    ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'tahun' => 2005],
    ['judul' => 'Ditto', 'penulis' => 'NewJeans', 'tahun' => 2022],
    ['judul' => 'Attention', 'penulis' => 'NewJeans', 'tahun'=> 2022],
];
    // TODO: tambahkan 2 buku lagi
foreach ($buku as $b) {
    echo "{$b['judul']} - {$b['penulis']} ({$b['tahun']})\n";
}

// 2) Versi OOP
class Buku
{
    public string $judul;
    public string $penulis;
    public int $tahun;
    
    public function __construct(string $judul, string $penulis, int $tahun)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
    }
    
    public function info() : string
    {
        return "{$this->judul} - {$this->penulis} ({$this->tahun})";
    }
}

// TODO: properti, constructor, dan method info()
$daftar = [
    new Buku('Laskar Pelangi', 'Andrea Hirata', 2005),
    new Buku('Ditto', 'NewJeans', 2022),
    new Buku('Attention', 'NewJeans', 2022),
];

// TODO: buat 3 object Buku lalu tampilkan info()-nya
foreach ($daftar as $obj) {
    echo $obj->info() . "\n";
}
