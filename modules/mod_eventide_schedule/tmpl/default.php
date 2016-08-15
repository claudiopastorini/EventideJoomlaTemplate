<?php 
// No direct access
defined('_JEXEC') or die; ?>

<?php 

  
  class Event {
    
    public $place;
    public $start_time;
    public $end_time;
    public $description;
    public $date;
  }

  $events = [];
  $dates = [];

  foreach ($schedule as $event) {

    $event_obj = new Event();

    $date = DateTime::createFromFormat('d/n/Y', $event->date);
    $event_obj->date = $date;
    
    $start_time = DateTime::createFromFormat('G:i', $event->start_time);
    $event_obj->start_time = $start_time;
    
    $end_time = DateTime::createFromFormat('G:i', $event->end_time);
    $event_obj->end_time = $end_time;

    $event_obj->description = $event->description;
    $event_obj->place = $event->place;

    $date_formatted = $date->format('F d');

    if (!in_array($date_formatted , array_keys($events))) {
      $events = array_merge($events, array($date_formatted => array($event_obj)));
    } else {
      array_push($events[$date_formatted], $event_obj);
    }
  }

  function keycmp($a, $b) {
    $a_date = DateTime::createFromFormat('F d', $a);
    $b_date = DateTime::createFromFormat('F d', $b);

    if ($a_date == $b_date) {
      return 0;
    }

    return ($a_date < $b_date) ? -1 : 1;
  }

  function cmp($a, $b) {
    if ($a->date == $b->date) {
      if ($a->start_time == $b->start_time) {
        return 0;
      }

      return ($a->start_time < $b->start_time) ? -1 : 1;
    }

    return ($a->date < $b->date) ? -1 : 1;
  }
  
  uksort($events, keycmp);

  foreach (array_keys($events) as $key) {
    usort($events[$key], 'cmp');
  }
?>

<div class="schedule-block pad-top-60 pad-bottom-60 container">
<div class="clear pad-top-20 pad-bottom-20">
  <div class="col-6-l">
    <div class="col-11 no-float no-padding">
      <h2 class="uppercase pad-bottom-10"><?php echo $title; ?></h2>
      <p class="fs-4">
        <?php echo $subtitle; ?>
      </p>
      <p>
        <?php echo $body; ?>
      </p>
      <p>
        <a class="icon icon-left arrow-down uppercase" href="<?php echo $schedule_pdf; ?>">All schedule (PDF)</a>
      </p>
    </div>
  </div>
  <div class="col-6-l">
    <div class="tabs tabs-secondary">
      <ul class="tabs-list clear">
        <?php
          
          $counter = 1;
          foreach (array_keys($events) as $key) {

            echo '<li class="inline-block text-center no-padding tab tab-secondary ' .(($counter == 1) ? 'active' : ''). '"><a href="#event-group-' .$counter. '" data-toggle="tab">' .$key. '</a></li>';
            
            $counter++;
          }
        ?>
      </ul>
      <div class="tab-content tab-content-secondary">
        <?php 
            $counter = 1;
            foreach (array_keys($events) as $key) {

              echo '<div class="tab-pane ' .(($counter == 1) ? 'active' : ''). '" id="event-group-' .$counter. '">
          <div class="panel-group" id="event-' .$counter. '">
            <div class="panel panel-default">';

              $sub_counter = 1;
              foreach ($events[$key] as $event) {
                echo '<div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="event-schedule-title' .(($sub_counter != 1) ? ' collapsed' : ''). '" data-toggle="collapse" data-parent="#event-' .$counter. '" href="#event-' .$counter. '-' .str_replace(array(' '), array('-'), mb_strtolower($event->place)). '">
                      <span class="event-schedule-time">' .$event->start_time->format('G:i'). ' - ' .$event->end_time->format('G:i'). '</span>
                      <span class="event-schedule-name">' .$event->place. '</span>
                    </a>
                  </h4>
                </div>
                <div id="event-' .$counter. '-' .str_replace(array(' '), array('-'), mb_strtolower($event->place)). '" class="panel-collapse collapse' .(($sub_counter == 1) ? ' in' : ''). '">
                  <div class="panel-body">
                    ' .$event->description. '
                  </div>
                </div>';

                $sub_counter++;
              }
              
              echo '</div>
                </div>
              </div>';

              $counter++;
            }
        ?>


      </div>
    </div>
  </div>
</div>
</div>

