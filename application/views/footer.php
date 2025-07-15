<!-- BOTTOM BAR -->
<div class="bottom-bar">
  <div class="copyright">
    © <?= date('Y') ?> Andika Attar Fizrah - All Rights Reserved
  </div>
</div>

<!-- Script JavaScript -->
<script>
  document.addEventListener("DOMContentLoaded", function () {

    // =====================
    // SCROLL OTOMATIS AGENDA
    // =====================
    const scrollContainer = document.querySelector(".scroll-wrapper");
    if (scrollContainer) {
      let scrollPos = 0;
      const speed = 0.5;
      scrollContainer.scrollTop = 0;

      function scrollStep() {
        scrollPos += speed;

        if (scrollPos >= scrollContainer.scrollHeight - scrollContainer.clientHeight) {
          setTimeout(() => {
            scrollPos = 0;
            scrollContainer.scrollTop = scrollPos;
            requestAnimationFrame(scrollStep);
          }, 1000);
        } else {
          scrollContainer.scrollTop = scrollPos;
          setTimeout(() => requestAnimationFrame(scrollStep), 30);
        }
      }

      requestAnimationFrame(scrollStep);
    }



    // =====================
    // SLIDESHOW GAMBAR
    // =====================
    const images = ["dishub1.jpg", "dishub2.jpg", "dishub3.jpg"];
    let index = 0;
    const slideshow = document.getElementById("slideshowImage");
    const dotsContainer = document.getElementById("dotsContainer");

    if (slideshow && dotsContainer) {
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
    }
  });
</script>
