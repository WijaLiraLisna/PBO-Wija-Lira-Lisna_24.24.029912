<?php
// LAB 7 — Trait (bagian namespace & Composer dikerjakan lokal di Laragon,
//         kirim tautan repositori GitHub pada kolom tautan)
// Spesifikasi:
//  - trait Timestampable: touch(): void (isi createdAt), getCreatedAt(): ?string
//  - Buku(string $judul) dan Anggota(string $nama) memakai Timestampable

trait Timestampable
{
    // TODO
     private ?string $createdAt = null;

    public function touch(): void
    {
        $this->createdAt = date('Y-m-d H:i:s');
    }

    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }
}

class Buku
{
    // TODO
     use Timestampable;

    public function __construct(private string $judul) {}

    public function getJudul(): string
    {
        return $this->judul;
    }
}

class Anggota
{
    // TODO
    use Timestampable;

    public function __construct(private string $nama) {}

    public function getNama(): string
    {
        return $this->nama;
    }
}

// Uji coba
$buku = new Buku("Pemrograman Berorientasi Objek");
$anggota = new Anggota("Budi");

var_dump($buku->getCreatedAt());   // NULL (belum di-touch)
$buku->touch();
$anggota->touch();

echo $buku->getJudul() . " dibuat pada " . $buku->getCreatedAt() . "\n";
echo $anggota->getNama() . " dibuat pada " . $anggota->getCreatedAt() . "\n";
