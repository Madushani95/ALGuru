   <?php
require __DIR__ . '/vendor/autoload.php';

                
$client = getClient();
$service = new Google_Service_Calendar($client);
$event = new Google_Service_Calendar_Event(array(
          'summary' => $summary ,
          //'location' => '800 Howard St., San Francisco, CA 94103',
          'description' => $description ,
          'start' => array(
            'dateTime' => $start ,
            'timeZone' => 'Asia/Colombo',
          ),
          'end' => array(
            'dateTime' => $end ,
            'timeZone' => 'Asia/Colombo',
          ),
         
          
          'reminders' => array(
            'useDefault' => FALSE,
            'overrides' => array(
              array('method' => 'email', 'minutes' => 24 * 60),
              array('method' => 'popup', 'minutes' => 10),
            ),
          ),
));

        $calendarId = 'primary';
        $event = $service->events->insert($calendarId, $event);
        echo '<script type="text/javascript">';
        echo ' alert("Program successfully added to your calendar!");'; 
        echo 'window.location.href = "http://localhost/ALGuru/physics.php";';
        echo '</script>';

    ?>        
      