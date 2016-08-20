<?php 
// No direct access
defined('_JEXEC') or die; ?>

<div class="event-sponsors-block pad-top-60 pad-bottom-60 container text-center">
    <h2 class="uppercase none-l">Event Sponsors</h2>
    <ul class="event-sponsor-list">
      <?php 
        foreach ($sponsors as $sponsor) {
          echo '<li class="pad-top-10 pad-bottom-10 pad-top-0-l pad-bottom-0-l"><a href="' .$sponsor->link. '" class="sponsor" style="background-image: url(' .$sponsor->logo. '");"><span class="sr">' .$sponsor->name. '</span></a></li>';
        }
      ?>
    </ul>
  </div>