<div class="grid-container">
  <!-- KIRI ATAS -->
  <div class="grid-item header-box">
    <div class="header-logos">
      <img src="<?= base_url('assets/img/logo dishub.png') ?>" alt="Logo Dishub">
    </div>
    <h2>Selamat Datang di SIGAP</h2>
    <h5>Sistem Informasi Agenda Rapat Dinas Perhubungan Provinsi Jawa Barat</h5>
    <h5 id="clock" class="jam mt-3">00:00:00 WIB</h5>
  </div>

<!-- KANAN ATAS -->
<!-- KANAN ATAS -->
<div class="grid-item agenda-table-scroll">
  <div class="scroll-wrapper">
    <table class="table table-striped table-bordered table-sm mb-0">
      <thead class="table-primary sticky-top">
        <tr>
          <th>#</th>
          <th>Agenda</th>
          <th>Tanggal</th>
          <th>Waktu</th>
        </tr>
      </thead>
      <tbody id="agendaBody"></tbody>
    </table>
  </div>
</div>

  <!-- KIRI BAWAH -->
  <div class="grid-item">
    <iframe src="https://www.youtube.com/embed/wKIQ0eQFnTQ?si=L3X8sAvSs5RdM8i_" allowfullscreen></iframe>
  </div>

  <!-- KANAN BAWAH -->
  <div class="grid-item">
    <div class="slideshow-wrapper">
      <img id="slideshowImage" src="<?= base_url('assets/img/dishub1.jpg') ?>" alt="Slideshow" class="slideshow">
      <div class="dots" id="dotsContainer"></div>
    </div>
  </div>
</div>
