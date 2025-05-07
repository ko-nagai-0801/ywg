// js/main.js

// ヘッダー透過切り替え
// (function() {
//   const header = document.querySelector('header');

//   function toggleHeaderBg() {
//     if (window.scrollY > 0) {
//       header.classList.add('scrolled');
//     } else {
//       header.classList.remove('scrolled');
//     }
//   }

//   window.addEventListener('scroll', toggleHeaderBg, { passive: true });
//   window.addEventListener('resize', toggleHeaderBg);
//   // 初期状態判定
//   document.addEventListener('DOMContentLoaded', toggleHeaderBg);
// })();

document.addEventListener("DOMContentLoaded", () => {
  const btn = document.querySelector(".hamburger");
  const nav = document.querySelector(".mobile-nav");

  if (!btn || !nav) return;

  btn.addEventListener("click", () => {
    const expanded = btn.getAttribute("aria-expanded") === "true";
    btn.setAttribute("aria-expanded", String(!expanded));
    btn.classList.toggle("active");
    nav.classList.toggle("open");
  });
});


/* =====================================
  パララックス + IntersectionObserver
   ===================================== */
document.addEventListener("DOMContentLoaded", () => {
  const banners = document.querySelectorAll(".section-banner");

  /* 1) 画面内外を判定（1px 入ったら is-active 付与） */
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        entry.target.classList.toggle("is-active", entry.isIntersecting);
      });
    },
    { threshold: 0 } // 0 = 1px でも入れば true
  );

  banners.forEach((banner) => observer.observe(banner));

  /* 2) スクロール時に背景位置を更新 */
  const parallax = () => {
    banners.forEach((banner) => {
      if (!banner.classList.contains("is-active")) return; // 画面外なら何もしない

      /* スクロール量に応じて背景をずらす */
      const speed = 0.4; // 0〜1 で調整
      const offset = window.scrollY - banner.offsetTop;
      banner.style.backgroundPositionY = `${offset * speed}px`;
    });
    requestAnimationFrame(parallax);
  };

  requestAnimationFrame(parallax);
});


document.addEventListener("DOMContentLoaded", () => {
  const btn = document.getElementById("scrollTopBtn");
  if (!btn) return;

  // スクロール量によってボタンを表示/非表示
  window.addEventListener("scroll", () => {
    if (window.scrollY > 200) {
      btn.classList.add("show");
      btn.classList.remove("hide");
    } else {
      btn.classList.add("hide");
      btn.classList.remove("show");
    }
  }, { passive: true });

  // クリックでスムーススクロールトップ
  btn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
});
