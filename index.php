<?php
include 'koneksi.php';

// Ambil data dari database
$query = "SELECT * FROM tb_kgtn";
$result = mysqli_query($koneksi, $query);

$no = 1;
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portofolio Vera</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<style>
body { 
  font-family: Arial, sans-serif; 
  margin: 20px; 
}
table { 
  border-collapse: collapse; 
  width: 100%; 
  margin-top: 20px; 
  margin-left: 2px;
}
th, td { 
  border: 1px solid #ddd; 
  padding: 8px; 
  text-align: left; 
}
th { 
  background-color: #f2f2f2; 
}
tr:nth-child(even) { 
  background-color: #f9f9f9; 
}
.btn { 
  padding: 5px 10px; 
  cursor: pointer; 
  text-decoration: none; 
  display: inline-block; 
}
.btn-danger { 
  background-color: #f44336; 
  color: white; 
  border: none; 
}
.btn-danger:hover { 
  background-color: #d32f2f; 
}
.btn-primary { 
  background-color: #4CAF50; 
  color: white; 
  border: none; 
}
.btn-primary:hover { 
  background-color: #45a049; 
}
        
.form-group { 
  margin-bottom: 15px; 
}
.form-control { 
  width: 100%; 
  padding: 8px; 
  box-sizing: border-box; 
}
</style>
<body>
  <!-- Navigasi -->
  <nav>
    <div class="logo"><span>VeLiSa</span></div>
    <a href="#beranda">Beranda</a>
    <a href="#tentang">Tentang Saya</a>
    <a href="#portofolio">Portofolio</a>
    <a href="#kontak">Kontak</a>
  </nav>

  <!-- Beranda -->
  <section id="beranda">
    <a href="images/vera.png" target="_blank"><img src="images/vera.png" alt="Foto Vera"></a>
    <div class="beranda-text">
      <div class="beranda-h1">
        <h1>Halo, Aku Vera Amelia Safitri!</h1>
      </div>
        <p>Seorang Mahasiswa Teknik Informatika yang suka ngoding dan desain web.</p>
    </div>
  </section>

  <!-- Tentang Saya -->
  <section id="tentang">
    <h2>Tentang Saya</h2>
    <div class="container">
        <div class="text">
        <p>Saya adalah mahasiswi program studi Informatika yang sedang dalam proses membangun pengetahuan dan keterampilan di bidang teknologi, khususnya dalam pemrograman dan pengembangan solusi digital. Meskipun saya belum memiliki banyak pengalaman di luar kegiatan akademik, saya memiliki semangat belajar yang tinggi dan komitmen untuk terus berkembang, baik secara teknis maupun pribadi.
        </p>
        <p>Saya percaya bahwa setiap perjalanan besar dimulai dari langkah kecil yang konsisten. Oleh karena itu, saya berusaha memanfaatkan waktu kuliah sebaik mungkin untuk memperkuat dasar-dasar keilmuan saya, sambil perlahan mulai mencari peluang untuk terlibat dalam proyek-proyek yang relevan, baik secara individu maupun bersama tim.
        </p>
        <p>Sebagai pribadi yang terbuka terhadap tantangan baru, saya memiliki ketertarikan untuk berkontribusi dalam bidang teknologi yang bermanfaat luas bagi masyarakat. Saya juga percaya bahwa karakter, etika, dan niat yang baik adalah fondasi penting dalam dunia profesional, terutama dalam menghadapi dinamika industri teknologi yang terus berkembang.
        </p>
        </div>
        <div class="image">
          <a href="images/berbayang.png" target="_blank"><img src="images/berbayang.png"></a>
        </div>
    </div>
  </section>

  <!-- Portofolio -->
  <section id="portofolio">
    <h2>Portofolio</h2>
  </section>
  <h2>Daftar Kegiatan</h2>
        <!-- Form Tambah Data -->
    <h3>Tambah Daftar Kegiatan</h3>
    <form action="tambah.php" method="POST">
        <div class="form-group">
            <label>Nama Kegiatan:</label>
            <input type="text" name="nama_kegiatan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Waktu Kegiatan:</label>
            <input type="date" name="waktu_kegiatan" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Kegiatan</th>
            <th>Waktu Kegiatan</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nama_kegiatan']; ?></td>
            <td><?php echo $row['waktu_kegiatan']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>"
                  class="btn btn-primary">Edit
                </a>
                <a href="hapus.php?id=<?php echo $row['id']; ?>" 
                   class="btn btn-danger" 
                   onclick="return confirm('Yakin ingin menghapus data ini?')">
                    Hapus
                </a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
  <!-- Kontak -->
  <section id="kontak">
    <h2>Kontak</h2>
    <div class="sosmed-container">
      <a class="sosmed-item email" href="https://mail.google.com/mail/?view=cm&to=veraameliasafitri988@gmail.com" target="_blank">
        <i class="fas fa-envelope"></i>
        <span>veraameliasafitri988@gmail.com</span>
      </a>
      <a class="sosmed-item instagram" href="https://instagram.com/vrls_qk" target="_blank">
        <i class="fab fa-instagram"></i>
        <span>@vrls_qk</span>
      </a>
      <a class="sosmed-item tiktok" href="https://www.tiktok.com/@vermel99" target="_blank">
        <i class="fab fa-tiktok"></i>
        <span>@vermel99</span>
      </a>
    </div>
  </section>

  <!--Opini-->
  <h2 class="judul-opini">Opini</h2>
  <section class="opini-section">
    <a href="#opini1" class="opini-card">
      <img src="images/gmbr-1.jpg" alt="Opini 1">
      <div class="judul">Pengembangan AI Harus Diiringi Etika Yang Kuat</div>
    </a>
    <a href="#opini2" class="opini-card">
      <img src="images/gmbr-2.jpg" alt="Opini 2">
      <div class="judul">Industri IT Indonesia Harus Berani Lepas dari Ketergantungan Luar Negeri</div>
    </a>
    <a href="#opini3" class="opini-card">
      <img src="images/gmbr-3.jpg" alt="Opini 3">
      <div class="judul">Teknologi Harus Memanusiakan, Bukan Mengasingkan</div>
    </a>
  </section>
  
  <!-- Modal Opini 1 -->
  <div id="opini1" class="modal">
    <div class="modal-box">
      <a href="#" class="close">&times;</a>
      <h3>Pengembangan AI Harus Diiringi Etika Yang Kuat</h3>
      <p>Kecerdasan buatan (AI) telah menjadi bagian dari kehidupan modern dari rekomendasi belanja
        hingga analisis kesehatan. Namun, sseiring dengan manfaatnya, muncul pula kekhawatiran mengenai
        privasi, bias algoritma, dan penggantian tenaga kerja manusia. Oleh karena itu, pengembangan AI 
        tidak boleh hanya fokus pada kecanggihan teknis, tetapi juga harus mempertimbangkan nilai-nilai 
        etika. Tanpa pengawasan dan regulasi yang memadai, AI bisa memperluas ketimpngan sosial dan memperburuk
        diskriminasi yang sudah ada.
      </p>
    </div>
  </div>
  
  <!-- Modal Opini 2 -->
  <div id="opini2" class="modal">
    <div class="modal-box">
      <a href="#" class="close">&times;</a>
      <h3>Industri IT Indonesia Harus Berani Lepas dari Ketergantungan Luar Negeri</h3>
      <p>Sebagian besar teknologi yang digunakan di Indonesia masih bergantung pada produk luar negeri, baik dari segi 
        perangkat lunak maupun perangkat keras. Hal ini membuat ekosistem digital kita rentan terhadap perubahan global 
        dan sulit brkembang secara mandiri. Indonesia sebenarnya memiliki potensi besar, baik dari sisi SDM maupun pasar. 
        Jika pemerintah dan pelaku industri serius membangun infrastruktur dan mendukung riset lokal, Indonesia bisa menjadi 
        pemain utama, bukan hanya konsumen dalam dunia IT global.
      </p>
    </div>
  </div>
  
  <!-- Modal Opini 3 -->
  <div id="opini3" class="modal">
    <div class="modal-box">
      <a href="#" class="close">&times;</a>
      <h3>Teknologi Harus Memanusiakan, Bukan Mengasingkan</h3>
      <p>Kemajuan teknologi informasi seharusnya menjadi alat untuk mempermudah hidup manusia, bukan menjauhkan mereka dari nilai-nilai kemanusiaan. 
        Saat ini, banyak orang lebih sibuk membangun identitas digital daripada membangun relasi nyata. Ironisnya, teknologi yang diciptakan untuk 
        menghubungkan justru sering menciptakan jarak emosional. Maka, para pengembang IT perlu memiliki kesadaran sosial bahwa produk digital bukan 
        hanya soal fungsi, tapi juga dampaknya terhadap kehidpan sehari-hari. Teknologi terbaik adalah yang tidak hanya canggih, tapi juga peduli pada 
        manusia sebagai pusatnya.
      </p>
    </div>
  </div>

  <!--hubungi saya-->
  <div class="hubungi-container">
    <div class="form-kontak">
      <h2>Hubungi Saya</h2>
      <form action="#" method="post">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" required>

        <label for="subjek">Subjek</label>
        <input type="text" id="subjek" name="subjek" required>

        <label for="pesan">Pesan</label>
        <textarea id="pesan" name="pesan" rows="5" required></textarea>

        <button type="submit">Kirim</button>
      </form>
    </div>
    <div class="kontak-kanan">
      <iframe 
      src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d15835.579403827536!2d111.91955924034121!3d-7.138156729051145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sid!2sid!4v1746268625307!5m2!1sid!2sid"
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Vera Amelia Safitri</p>
  </footer>
</body>
</html>