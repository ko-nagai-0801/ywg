<!-- ================================
    contact-cta.php
================================ -->
<div id="contact-cta"
  class="section-banner section-banner--cta footer-separator">
  <div class="section-banner__box container text-center py-5">
    <h3 class="section-banner__h3">Contact</h3>
    <h2 class="section-banner__heading mb-3">
      <i class="bi bi-envelope-fill me-2" aria-hidden="true"></i>
      ご相談・お問い合わせ
    </h2>
    <p>ご相談やご質問がある方は、下記よりご連絡ください。</p>

    <div class="contact-item-box">

      <a href="tel:045-341-4806" class="btn btn-primary btn-tel">
      <i class="bi bi-telephone"></i> 045-341-4806
      </a>

      <a href="<?php echo htmlspecialchars((dirname($_SERVER['SCRIPT_NAME']) === '/' ? './' : '../') . 'contact/'); ?>"
      class="btn btn-primary">
      <i class="bi bi-envelope"></i> お問い合わせフォームへ
      </a>

    </div>
  </div>
</div>