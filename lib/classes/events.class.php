<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/lib/secret/conf.inc.php');

class events{

  public function create_event(){
    global $pdo, $config;

      $query = $pdo->prepare('
      INSERT INTO `event`
      ()
      VALUES
      ()
      ');
    }

    public function create_eventpage(){
      global $pdo, $config;

        $eventcode = $this->gen_code();
        $query = $pdo->prepare('
        INSERT INTO `eventbind`
        (eventbind.user_id, eventbind.event_code)
        VALUES
        (:uid, :eco)
        ');
        $query->bindValue(":uid", $userid, PDO::PARAM_STR);
        $query->bindValue(":eco", $eventcode, PDO::PARAM_STR);
        $query->execute();


      }


  public function get_event($eventid){
    global $pdo, $config;

    $query = $pdo->prepare('
    SELECT events.event_id, events.event_title, events.event_description, events.event_start, events.event_end, events.event_start, events.event_plus, events.event_status, events.event_code
    FROM (events)
    WHERE event_code = :ecd
    ORDER BY events.event_id');
    $query->bindValue(":ecd", $eventid, PDO::PARAM_STR);
    if ($query->execute()) {
      $events = $query->fetchAll();
      return array("status" => TRUE, "message" => "success", "content" => $events);
		} else {
			return array("status" => FALSE, "message" => "sql_error");
		}
  }

  public function edit_event(){

    $query = $pdo->prepare("
    UPDATE `events`
    WHERE ");
  }

  public function remove_event(){

    $query = $pdo->prepare("
    UPDATE `events`
    WHERE
    ");
  }

  public function update_event(){

    $query = $pdo->prepare("
    UPDATE
    WHERE
    ");
  }

  public function extend_event(){
    $query = $pdo->prepare("
    UPDATE
    WHERE
    ");
  }
  private function gen_code() {
    global $pdo, $config;

    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $newcode = '';
    for ($i = 0; $i < 6; $i++) {
      $newcode .= $characters[rand(0, $charactersLength - 1)];
    }

   $query = $pdo->prepare('
   SELECT eventbind.id
   FROM eventsbind
   WHERE eventbind.event_code = :eco');
   $query->bindValue(":eco", $newcode, PDO::PARAM_STR);
   $query->execute();

   if ($query->fetch() == NULL) {
     return $newcode;
   } else {
     for ($i = 0; $i < 6; $i++) {
       $newcode .= $characters[rand(0, $charactersLength - 1)];
     }
   }
 }
}
?>
