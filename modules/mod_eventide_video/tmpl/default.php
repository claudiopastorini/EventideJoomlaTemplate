<?php 
// No direct access
defined('_JEXEC') or die; ?>

<div class="promotional-block container">
  <div class="clear">
  <?php echo '<div class="col-5-l ' .(($text_position == 1) ? 'right-l' : 'left-l'). ' pad-top-30 pad-bottom-30 pad-top-0-l pad-bottom-0-l">'; ?>
    <h2 class="uppercase pad-bottom-10"><?php echo $title; ?></h2>
    <p class="fs-4">
      <?php echo $subtitle; ?>
    </p>
    <p>
      <?php echo $body; ?>
    </p>
    <?php 
      if ($channel_url != "https://www.youtube.com/channel/") {
        echo '<p>
          <a class="icon icon-right arrow-right uppercase" href="' .$channel_url. '">Youtube channel</a>
        </p>';
      }
    ?>
    </div>
    <div class="col-6-l">
      <div class="video-responsive">
        <iframe width="560" height="315" src="<?php echo 'https://www.youtube.com/embed/' .$video_code. ''; ?>" frameborder="0" allowfullscreen=""></iframe>
      </div>
    </div>
  </div>
</div>