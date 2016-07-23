<?php

use Illuminate\Database\Seeder;
use App\Buku;

class BookSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Buku::create([
      'judul'   => 'Biologi 2 Kelas XI SMA dan MA',
      'penulis' => 'Eva Latifah H, et al.',
      'thumb_cover_ptr' => 'img/cover-thumbs/xbiologi.jpg',
      'penerbit'=> 'Buku Sekolah Elektronik',
      'tahun_terbit'  => 2009,
      'abstrak' => 'Buku BSE yang berisi tentang materi Biologi untuk Kelas XI ini cocok untuk dimiliki oleh setiap siswa kelas XI, disamping gratis juga bahan ajar yang terdapat dalam buku ini sangat bagus',
      'ebook_ptr' => 'pdf-ebook/20120304 094215-xibiologi.pdf'
    ]);

    Buku::create([
        'judul'   => 'Developing English Competencies for Senior High School Grade X',
        'penulis' => 'Achmad Doddy, Achmad Sugeng, Effendi',
        'thumb_cover_ptr' => 'img/cover-thumbs/xenglish.jpg',
        'penerbit'=> 'Buku Sekolah Elektronik',
        'tahun_terbit'  => 2008,
        'abstrak' => 'Miliki buku ini karena buku ini sangat lengkap akan semua materi-materi Bahasa Inggris untuk kelas X',
        'ebook_ptr' => 'pdf-ebook/20120304 091301-xenglish.pdf'
    ]);
  
    Buku::create([
        'judul'   => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
        'penulis' => 'Faridha Isnaini, Sri Santoso Sabarini',
        'thumb_cover_ptr' => 'img/cover-thumbs/xpenjaskes.jpg',
        'penerbit'=> 'Buku Sekolah Elektronik',
        'tahun_terbit'  => 2008,
        'abstrak' => 'Latih dan Kembangkan kemampuan jasmani anda dengan mengacu pada buku ini',
        'ebook_ptr' => 'pdf-ebook/20120304 085146-xpenjaskes.pdf'
    ]);

    Buku::create([
        'judul'   => 'Memahami Kimia SMA/MA 1',
        'penulis' => 'Irvan Permana',
        'thumb_cover_ptr' => 'img/cover-thumbs/xkimia.jpg',
        'penerbit'=> 'Buku Sekolah Elektronik',
        'tahun_terbit'  => 2009,
        'abstrak' => 'Buku BSE Kimia ini berisi tentang materi-materi Kimia untuk Kelas X',
        'ebook_ptr' => 'pdf-ebook/20120304 084622-xkimia.pdf'
    ]);

    Buku::create([
        'judul'   => 'Teknologi Informasi dan Komunikasi Untuk SMA/MA/SMK Kelas X',
        'penulis' => 'Osdirwan Osman dan Adhi Susano',
        'thumb_cover_ptr' => 'img/cover-thumbs/xtik.jpg',
        'penerbit'=> 'Buku Sekolah Elektronik',
        'tahun_terbit'  => 2010,
        'abstrak' => 'Dalam buku ini kaya akan pembelajaran-pembelajaran tentang pengolahan gambar menggunakan photoshop, sangat cocok untuk pemula yang baru belajar menggunakan photoshop',
        'ebook_ptr' => 'pdf-ebook/20120304 083904-xtik.pdf'
    ]);

    Buku::create([
        'judul'   => 'Matematika 2 Untuk SMA/MA Program Studi IPS Kelas XI',
        'penulis' => 'Sri Lestari dan Diah Ayu Kurniasih',
        'thumb_cover_ptr' => 'img/cover-thumbs/ximatematika.jpg',
        'penerbit'=> 'Buku Sekolah Elektronik',
        'tahun_terbit'  => 2009,
        'abstrak' => 'Miliki buku ini karena buku ini sangat lengkap akan semua materi-materi matematika untuk kelas XI',
        'ebook_ptr' => 'pdf-ebook/20120304 082707-ximatematika.pdf'
    ]);

    Buku::create([
        'judul'   => 'Fisika Untuk SMA/MA Kelas XI',
        'penulis' => 'Sri Handayani dan Ari Damari',
        'thumb_cover_ptr' => 'img/cover-thumbs/xifisika.jpg',
        'penerbit'=> 'Buku Sekolah Elektronik',
        'tahun_terbit'  => 2009,
        'abstrak' => 'Buku ini berisi tentang Materi Fisika Kelas XI, dimana dalam buku ini semua Kompetensi Dasar sudah terangkum dalam buku ini. Ini merupakan buku Elektronik dan dapat di download secara gratis tanpa dipungut biaya ',
        'ebook_ptr' => 'pdf-ebook/20120304 081958-xifisika.pdf'
    ]);

    Buku::create([
        'judul'   => 'Fisika Untuk SMA/MA Kelas X',
        'penulis' => 'Karyono, Dwi Satya Palupi, dan Suharyanto',
        'thumb_cover_ptr' => 'img/cover-thumbs/xfisika.jpg',
        'penerbit'=> 'Buku Sekolah Elektronik',
        'tahun_terbit'  => 2009,
        'abstrak' => 'Buku ini berisi tentang Materi Fisika Kelas X, dimana dalam buku ini semua Kompetensi Dasar sudah terangkum dalam buku ini. Ini merupakan buku Elektronik dan dapat di download secara gratis tanpa dipungut biaya ',
        'ebook_ptr' => 'pdf-ebook/20120304 081158-xfisika.pdf'
    ]);

    Buku::create([
        'judul'   => 'Ekonomi Untuk SMA/MA Kelas X',
        'penulis' => 'Yuli Eko',
        'thumb_cover_ptr' => 'img/cover-thumbs/xekonomi.jpg',
        'penerbit'=> 'Buku Sekolah Elektronik',
        'tahun_terbit'  => 2009,
        'abstrak' => 'Buku BSE yang berisi tentang materi Ekonomi untuk Kelas X ini cocok untuk dimiliki oleh setiap siswa kelas X, disamping gratis juga bahan ajar yang terdapat dalam buku ini sangat bagus',
        'ebook_ptr' => 'pdf-ebook/20120304 081010-xekonomi.pdf'
    ]);
  
    Buku::create([
        'judul'   => 'Biologi 1 Kelas X SMA/MA',
        'penulis' => 'Riana Yani, et al.',
        'thumb_cover_ptr' => 'img/cover-thumbs/xbiologi1.jpg',
        'penerbit'=> 'Buku Sekolah Elektronik',
        'tahun_terbit'  => 2009,
        'abstrak' => 'Dalam buku ini dijelaskan tentang Reproduksi Manusia',
        'ebook_ptr' => 'pdf-ebook/20120304 080536-xbiologi.pdf'
    ]);

    Buku::create([
        'judul'   => 'Praktis Belajar Seni Tari untuk kelas X, XI, dan XII SMA/MA',
        'penulis' => 'Elly Laelasari dan Ria Sabaria',
        'thumb_cover_ptr' => 'img/cover-thumbs/xseni.jpg',
        'penerbit'=> 'Buku Sekolah Elektronik',
        'tahun_terbit'  => 2010,
        'abstrak' => 'Buku ini mengajarkan tentang keberangaman seni tari yang ada di Indonesia',
        'ebook_ptr' => 'pdf-ebook/20120304 080404-allseni.pdf'
    ]);
  }
}
