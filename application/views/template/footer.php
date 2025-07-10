<!-- BOTTOM BAR -->
<div class="bottom-bar">
  <div class="copyright">
    © <?= date('Y') ?> Andika Attar Fizrah - All Rights Reserved
  </div>
</div>

<!-- Script JavaScript -->
<script>
  // JAM
  function updateClock() {
    const now = new Date();
    const options = { weekday: 'long', year: 'numeric', month: '2-digit', day: '2-digit' };
    const time = now.toLocaleTimeString('id-ID');
    const date = now.toLocaleDateString('id-ID', options);
    document.getElementById("clock").textContent = `${date} | ${time} WIB`;
  }
  setInterval(updateClock, 1000);
  updateClock();

  // Agenda
  const AGENDA_URL = "https://docs.google.com/spreadsheets/d/e/2PACX-1vQjTQQAymOEt1V1cLCrNeLTHmzlUg3bdd4ImvVD7Cd8D4iC8XF9PwLtZPDNOFI_5g/pub?output=csv";
  async function fetchAgenda() {
    try {
      const res = await fetch(AGENDA_URL);
      const text = await res.text();
      const rows = text.split("\n").slice(1); // skip header
      let html = "";
      rows.forEach(row => {
        const cols = row.replace(/"/g, "").split(",");
        if (cols.length >= 4) {
          html += `
            <tr>
              <td>${cols[0]}</td>
              <td>${cols[1]}</td>
              <td>${cols[2]}</td>
              <td>${cols[3]}</td>
            </tr>`;
        }
      });
      document.getElementById("agendaBody").innerHTML = html;
    } catch (e) {
      document.getElementById("agendaBody").innerHTML = "<tr><td colspan='4'>Gagal memuat agenda</td></tr>";
    }
  }
  fetchAgenda();
  setInterval(fetchAgenda, 60000);

  // Slideshow
  const images = ["dishub1.jpg", "dishub2.jpg", "dishub3.jpg"];
  let index = 0;
  const slideshow = document.getElementById("slideshowImage");
  const dotsContainer = document.getElementById("dotsContainer");

  images.forEach((img, i) => {
    const dot = document.createElement("div");
    dot.classList.add("dot");
    if (i === 0) dot.classList.add("active");
    dotsContainer.appendChild(dot);
  });

  const dots = document.querySelectorAll(".dot");

  function showSlide(i) {
    slideshow.src = "<?= base_url('assets/img/') ?>" + images[i];
    dots.forEach(dot => dot.classList.remove("active"));
    dots[i].classList.add("active");
  }

  function nextSlide() {
    index = (index + 1) % images.length;
    showSlide(index);
  }

  setInterval(nextSlide, 5000);
</script>

</body>
</html>
