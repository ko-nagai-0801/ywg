// js/contact.js

// Bootstrap のカスタムバリデーション
document.addEventListener('DOMContentLoaded', () => {
  const forms = document.querySelectorAll('.needs-validation');
  Array.prototype.slice.call(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
});

// reCAPTCHA を含む送信処理（index.php のインラインは削除し、本ファイルに統一）
document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('contactForm');
  if (!form) return;

  form.addEventListener('submit', function (e) {
    // ネイティブバリデーション
    if (!this.checkValidity()) {
      e.preventDefault();
      e.stopPropagation();
      this.classList.add('was-validated');
      return;
    }

    // reCAPTCHA v3
    e.preventDefault();
    grecaptcha.ready(function () {
      grecaptcha.execute('6LcoJOIrAAAAAFFzgasORDsKEat0p7mEoAjVr2z-', { action: 'contact' })
        .then(function (token) {
          document.getElementById('g-recaptcha-response').value = token;
          form.submit();
        });
    });
  });
});
