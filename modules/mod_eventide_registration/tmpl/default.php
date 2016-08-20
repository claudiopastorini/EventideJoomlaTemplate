<?php 
// No direct access
defined('_JEXEC') or die; ?>

  <div id="register" class="grey-row pad-top-60 pad-bottom-60">
    <div class="register-block pad-top-20 pad-bottom-20 container text-center">
      <h2 class="uppercase pad-bottom-10"><?php echo $title; ?></h2>
      <div class="col-10-m no-float-m col-8-l no-float-l center">
        <p class="fs-4">
          <?php echo $body; ?>
        </p>
      </div>
      <form action="<?php echo $post_url; ?>" class="register-form col-10-l col-8-xl no-float center">
        <fieldset class="register-form-wrap">
          <legend class="sr"><?php echo $legend; ?></legend>
          <div class="clear">
            <div class="col-3-m pad-top-10 pad-bottom-10 pad-top-0-m pad-bottom-0-m">
              <label for="name" class="sr">Full Name</label>
              <input type="text" class="field" name="name" id="name" placeholder="Full Name">
            </div>
            <div class="col-3-m pad-top-10 pad-bottom-10 pad-top-0-m pad-bottom-0-m">
              <label for="email" class="sr">Email Address</label>
              <input type="email" class="field" name="email" id="email" placeholder="Email Address">
            </div>
              </span>
            <div class="col-3-m pad-top-10 pad-bottom-10 pad-top-0-m pad-bottom-0-m right-m">
              <button class="button button-primary button-register"><span class="icon icon-right chevron-right"><?php echo $button_text; ?></span></button>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
  </div>