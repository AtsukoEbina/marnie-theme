document.body.classList.add('loading');

window.addEventListener('load', function () {
  setTimeout(() => {
    document.body.classList.remove('loading');
    document.body.classList.add('loaded');
  }, 2000); // インスタ読み込み待ち
});

document.addEventListener("DOMContentLoaded", function () {
  const heroBg = document.querySelector(".hero-background");

  // スライド用画像（お好みで差し替えてね）
  const images = [
    "/assets/img/Yarnandflower.jpg",
    "/assets/img/チューリップ.JPG",
  ];

  let index = 0;

  function changeBackground() {
    const themeUrl = window.themeUrl || ""; // 後述の functions.php で渡す
    heroBg.style.backgroundImage = `url('${themeUrl}${images[index]}')`;
    index = (index + 1) % images.length;
  }

  // 最初の画像をセットしてスライド開始
  changeBackground();
  setInterval(changeBackground, 5000);
});

document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.getElementById("hamburger");
  const menu = document.querySelector(".header-menu");

  hamburger.addEventListener("click", function () {
    menu.classList.toggle("active");
    hamburger.classList.toggle("open");
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("modal-overlay");
  const modalImg = document.getElementById("modal-image");
  const modalClose = document.querySelector(".modal-close");

  document.querySelectorAll(".modal-trigger").forEach(imgLink => {
    imgLink.addEventListener("click", function (e) {
      e.preventDefault();
      const imgSrc = this.getAttribute("href");
      modalImg.src = imgSrc;
      modal.style.display = "flex";
    });
  });

  modalClose.addEventListener("click", function () {
    modal.style.display = "none";
    modalImg.src = "";
  });

  modal.addEventListener("click", function (e) {
    if (e.target === modal) {
      modal.style.display = "none";
      modalImg.src = "";
    }
  });
});

