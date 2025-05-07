// js/contact.js
// Bootstrap のカスタムバリデーション利用
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
  
  document.getElementById('contactForm').addEventListener('submit', function(e) {
    // ネイティブバリデーション
    if (!this.checkValidity()) {
      e.preventDefault();
      e.stopPropagation();
      this.classList.add('was-validated');
      return;
    }
    // ここから reCAPTCHA 処理
    e.preventDefault();
    grecaptcha.ready(function() {
      grecaptcha.execute('6LdocCsrAAAAAJHKgjBmytcmNG6ciRQH7hddnkWd', {action: 'contact'}).then(function(token) {
        document.getElementById('g-recaptcha-response').value = token;
        e.target.submit();
      });
    });
  });
  