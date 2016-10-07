<?php 
// No direct access
defined('_JEXEC') or die; ?>

<div class="introduction-block pad-top-60 pad-bottom-60 container">
  <div class="clear pad-top-20 pad-bottom-20">
    <div class="col-6-l">
      <div class="col-11 no-float no-padding">
        <h2 class="uppercase pad-bottom-10"><?php echo nl2br($title); ?></h2>
        <p class="fs-4">
          <?php echo nl2br($subtitle); ?>
        </p>
        <p>
          <?php echo nl2br($body); ?>
        </p>
      </div>
    </div>
      <div class="col-6-l">
        <div class="tabs tabs-primary">
          <ul class="tabs-list clear">

            <?php
            
            $counter = 1;
            foreach ($news as $new) {

              echo '<li class="col-6-m block text-center no-padding tab ' .(($counter == 1) ? 'active' : ''). '"><a href="#news-' .$counter. '" data-toggle="tab" aria-expanded="true">' .nl2br($new->title). '</a></li>';
              
              $counter++;
            }
          ?>

          </ul>
          <div class="tab-content">

            <?php 
            $counter = 1;
            foreach ($news as $new) {

            echo '<div class="tab-pane ' .(($counter == 1) ? 'active' : ''). '" id="news-' .$counter. '" style="text-align: center;">';

            if ($new->image != null) {
              if ($new->text_position == 1) {
                echo '<a class="image-popup-fit-width" href="' .$new->image. '" title="' .$new->title. '"><img src="' .$new->image. '" width="480" height="200" style="object-fit: cover;"></a><p style="text-align: start; margin-top: 10px; margin-bottom: 10px;">' .nl2br($new->description). '</p>';  
              } else {
                echo '<p style="text-align: start; margin-top: 10px; margin-bottom: 10px;">' .nl2br($new->description). '</p><a class="image-popup-fit-width" href="' .$new->image. '" title="' .$new->title. '"><img src="' .$new->image. '" width="480" height="200" style="object-fit: cover;"></a>';
              }
  
            } else {
              echo '<p>' .nl2br($new->description). '</p></div>';  
            }

              $counter++;

              echo '</div>';
            }
              ?>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>