<?php $this->load->view('header'); ?>

<div class="grid-container">

  <!-- Box Selamat Datang -->
  <div class="grid-item">
    <div class="header-box">
      <div class="header-logos">
        <img src="<?= base_url('assets/img/logo dishub.png') ?>" alt="Logo Dishub">
      </div>
      <h2>Selamat Datang di SIGAP</h2>
      <h5>Sistem Informasi Agenda Rapat Dinas Perhubungan Provinsi Jawa Barat</h5>
      <div class="jam"><?= date('l, d/m/Y') ?> | <span id="jam"></span> WIB</div>
    </div>
  </div>

  <!-- Box Agenda -->
  <div class="grid-item">
    <div class="agenda-table-scroll">
      <div class="scroll-wrapper">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Perihal</th>
              <th scope="col">Penyelenggara</th>
              <th scope="col">Tempat</th>
              <th scope="col">Disposisi/ Peserta Rapat</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Pukul</th>
            </tr>
          </thead>
          <tbody>
            <!-- (isi tabel agenda seperti sebelumnya, tidak diubah) -->
            <tr>
              <th scope="row">1</th>
              <td>Undangan Geladi Penanggulangan Bencana Erupsi Gunung Guntur</td>
              <td>Badan Penanggulangan Bencana Daerah Provinsi Jawa Barat</td>
              <td>Lapang Sepak Bola Yayasan SMK Al Farizi Desa Mekarjaya, Kec. Tarogong Kaler, Kab. Garut</td>
              <td>UPTD PPP LLAJ Wilayah III</td>
              <td>10 Juli 2025</td>
              <td>08:00 WIB</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Pembahasan Hasil Audit atas LKPD Provinsi Jawa Barat Tahun 2024</td>
              <td>Badan Pengelolaan Keuangan dan Aset Daerah Provinsi Jawa Barat</td>
              <td>Badan Pengelolaan Keuangan dan Aset Daerah Provinsi Jawa Barat</td>
              <td>Kasubbag TU</td>
              <td>10 Juli 2025</td>
              <td>08:00 WIB</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Rapat Koordinasi Dwimingguan ke-10 Pengendalian Inflasi Daerah Provinsi dan Kabupaten/Kota se-Jawa Barat Tahun 2025</td>
              <td>Sekretariat Daerah Provinsi Jawa Barat</td>
              <td>Daring/Zoom</td>
              <td>Bidang Lalu Lintas Jalan</td>
              <td>10 Juli 2025</td>
              <td>08:30 WIB</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Kunjungan Kerja Komisi IV DPRD Provinsi Jawa Barat ke UPTD PPP LLASDP</td>
              <td>Sekretariat Dewan Perwakilan Rakyat Daerah Provinsi Jawa Barat</td>
              <td>Kantor UPTD PPPLLASDP Kab. Bandung</td>
              <td>Kepala Dinas, Sekretaris Dinas, Seluruh Bidang dan Tim Perencanaan</td>
              <td>10 Juli 2025</td>
              <td>09:00 WIB</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Undangan Pembukaan Orientasi PPPK dan Latsar CPNS Tahun 2025</td>
              <td>Badan Pengembangan Sumber Daya Manusia Provinsi Jawa Barat</td>
              <td>Daring/Zoom</td>
              <td>Kepegawaian (Sebar ke CASN)</td>
              <td>10 Juli 2025</td>
              <td>09:00 WIB</td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td>Rapat Konsultasi Hasil Verifikasi Subsidi BRT Tahun 2026</td>
              <td>Dinas Perhubungan Provinsi Jawa Barat</td>
              <td>Kantor Inspektorat Provinsi Jawa Barat</td>
              <td>Bidang Angkutan Jalan dan Unsur Terkait</td>
              <td>10 Juli 2025</td>
              <td>13:00 WIB</td>
            </tr>
            <tr>
              <th scope="row">7</th>
              <td>Pembahasan Progres Pelaksanaan Fasilitas Penyiapan dan Transaksi Proyek KPBU Perkeretaapian Metropolitan Bandung</td>
              <td>Dinas Perhubungan Provinsi Jawa Barat</td>
              <td>Ruang Rapat Integrasi Moda (N250)</td>
              <td>Bidang PPT dan Unsur terkait</td>
              <td>10 Juli 2025</td>
              <td>13:00 WIB</td>
            </tr>
            <tr>
              <th scope="row">8</th>
              <td>Undangan Rapat Koordinasi Bidang Perhubungan di wilayah kerja UPTD PPP LLAJ Wilayah II</td>
              <td>Dinas Perhubungan Provinsi Jawa Barat</td>
              <td>Graha Perhubungan Cinunuk Bandung</td>
              <td>Pejabat Struktural, Pejabat Fungsional, Tim Humas dan Unsur terkait</td>
              <td>11 Juli 2025</td>
              <td>08:00 WIB</td>
            </tr>
            <tr>
              <th scope="row">9</th>
              <td>Undangan Pembukaan Orientasi PPPK dan Latsar CPNS Tahun 2025</td>
              <td>Badan Pengembangan Sumber Daya Manusia Provinsi Jawa Barat</td>
              <td>Daring/Zoom</td>
              <td>Kepegawaian (Sebar ke CASN)</td>
              <td>11 Juli 2025</td>
              <td>09:00 WIB</td>
            </tr>
            <tr>
              <th scope="row">10</th>
              <td>Undangan Koordinasi Teknis Rencana Pengaturan Kelas Jalan Daerah dan Peninjauan Jembatan Timbang dan Lokasi Uji KIR</td>
              <td>Kementerian Koordinator Bidang Infrastruktur dan Pembangunan Kewilayahan</td>
              <td>Ruang Rapat Multimoda (Airbus)</td>
              <td>Bidang Angkutan Jalan</td>
              <td>11 Juli 2025</td>
              <td>14:00 WIB</td>
            </tr>
            <!-- Tambahkan baris lainnya sesuai kebutuhan -->
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Video -->
  <div class="grid-item">
    <iframe src="https://www.youtube.com/embed/wKIQ0eQFnTQ?si=0Ehg8fMk3mQFRe1g" allowfullscreen></iframe>
  </div>

  <!-- Slideshow Gambar Rolling -->
  <div class="grid-item">
    <div class="slideshow-wrapper">
      <img id="slideshowImage" class="slideshow" src="<?= base_url('assets/img/dishub1.jpg') ?>" alt="Slideshow">
      <div id="dotsContainer" class="dots"></div>
    </div>
  </div>

</div>

<?php $this->load->view('footer'); ?>

<!-- Jam -->
<script>
  function updateJam() {
    const jam = new Date();
    document.getElementById("jam").textContent = jam.toLocaleTimeString('id-ID', { hour12: false });
  }
  setInterval(updateJam, 1000);
  updateJam();
</script>
