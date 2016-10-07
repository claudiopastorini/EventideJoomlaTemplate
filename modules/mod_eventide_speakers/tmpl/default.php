<?php 
// No direct access
defined('_JEXEC') or die; ?>
<hr class="hr">
<div class="speakers-block pad-top-60 pad-bottom-60 container">
	<div class="text-center pad-top-20">
		<h2 class="h2 uppercase"><?php echo nl2br($title); ?></h2>
		<p class="fs-4">
			<?php echo nl2br($subtitle); ?>
		</p>
	</div>
	<ul class="event-speakers clear">
		<?php 
		foreach ($speakers as $speaker) {
			echo '<li class="col-6-m col-3-l">
				<div class="col-12-m no-float">
					<a class="event-speaker" href="' .strtolower($speaker->siteURL). '">
						<img class="block" src="' .$speaker->photo. '" alt="' .$speaker->name. '">
					</a>
				<h3 class="uppercase fs-4 pad-top-20"><a class="event-speaker-name" href="' .strtolower($speaker->siteURL). '">' .$speaker->name. '</a></h3>
					<p>' .nl2br($speaker->description). '</p>
				</div>
			</li>';
		}
		?>
	</ul>
</div>
<hr class="hr">

