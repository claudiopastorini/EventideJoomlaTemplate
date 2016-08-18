<?php 
// No direct access
defined('_JEXEC') or die; ?>

<div class="gallery-block content-block container pad-top-50-m pad-bottom-50-m">
  <div class="clear">
    <?php echo '<div class="col-5-l ' .(($text_position == 0) ? 'right-l' : 'left-l'). ' pad-top-30 pad-bottom-30 pad-top-0-l pad-bottom-0-l">'; ?>
      <div class="carousel slide" id="carousel-gallery">
        <ol class="carousel-indicators">
        <?php 
          for ($i=0; $i < count($photos) + 1 ; $i++) { 
            echo '<li data-target="#carousel-gallery" data-slide-to="' .$i. '" class="' .(($i == 0) ? 'active' : ''). '"></li>';
          }
        ?>
        </ol>
        <div class="carousel-inner">
          <?php 
            $counter = 0;
            foreach ($photos as $photo) {
              echo '<div class="item' .(($counter == 0) ? ' active' : ''). '">
                <img src="' .$photo->photo. '" alt="' .$photo->title. '">
              </div>';
              $counter++;
            }
          ?>
        </div>
      </div>
    </div>
    <div class="col-6-l">
        <h2 class="uppercase"><?php echo $title; ?></h2>
        <p class="fs-4">
          <?php echo $subtitle; ?>
        </p>
        <p>
          <?php echo $body; ?>
        </p>
        <?php 
        if ($album_url != "https://www.flickr.com/photos/flickr/albums/") {
          echo '<p>
            <a class="icon icon-right arrow-right uppercase" href="' .$album_url. '">Flickr stream</a>
          </p>';
        }
      ?>
    </div>
  </div>
</div>