<!-- footer with popup -->
  <footer class="footer">
    <h2 class="footer__title">Grow Your Company Faster
    Than Ever Before</h2>
    <button class="footer__button" data-modal-target="#modal"><span class="footer__button-text">Contact Us</span></button>
  </footer>
  <!-- popup -->
  <div class="contact modal" id="modal">
    <div class="header__contact">
      <h2 class="header__contact-title">Contact Us</h2>
      <button data-close-button class="close__btn close-button"> <img class="union" src="<?php bloginfo('template_url'); ?>/assets/images/union.svg" alt="+"></button>
    </div>
    <div class="contact__wrapper">
      <div class="contact__data">
        <input class="contact__input contact__input--1 contact__name" type="text" placeholder="First Name">
        <input class="contact__input contact__input--1 contact__lastname" type="text" placeholder="Last Name">
      </div>
      <input class="contact__input contact__input--2 contact__email" type="text" placeholder="Your email">
      <input class="contact__input contact__input--2 contact__company" type="text" placeholder="Company name (optional)">
      <input class="contact__input contact__input--2 contact__enqiry" type="text" placeholder="Enqiry">
      <label class="checkbox__label" for="highload0"><input class="contact__input-checkbox" type="checkbox" name="vehicle" id="highload0"><span class="fake"></span><span class="input__content">I agree to the <a href="#" class="label__link">Terms of Use</a> and <a href="#" class="label__link">Privacy Policy</a></span></label>
      <button class="contact__send">Send</button>
    </div>
  </div>
  <div id="overlay"></div>
  <!-- end popup -->
<!-- end footer with popup -->
  <?php wp_footer(); ?>
</body>
</html>