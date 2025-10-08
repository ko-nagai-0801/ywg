// js/contact_confirm.js
// 送信直前に reCAPTCHA v3 を再実行して新しいトークンで送る
document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelector('form[action="contact_send.php"]');
  if (!form) return;

  form.addEventListener("submit", (e) => {
    e.preventDefault(); // 先に止める
    grecaptcha.ready(() => {
      grecaptcha
        .execute("6LcoJOIrAAAAAFFzgasORDsKEat0p7mEoAjVr2z-", {
          action: "contact",
        })
        .then((token) => {
          let input = form.querySelector('input[name="g-recaptcha-response"]');
          if (!input) {
            input = document.createElement("input");
            input.type = "hidden";
            input.name = "g-recaptcha-response";
            form.appendChild(input);
          }
          input.value = token; // 新しいトークンで上書き
          form.submit();
        });
    });
  });
});
