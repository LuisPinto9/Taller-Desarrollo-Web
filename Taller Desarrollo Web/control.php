<?php

require './model/Participant.php';

$option = $_GET['option'];
if ($option == 1) {
    $file = "./source/participants.json";
    $fp = fopen($file, "r");
    $data = fread($fp, filesize($file));

    $object = json_decode($data);

//$participant = new Participant($object["name"], $object["id"], $object["discipline"], $object["disciplineType"], $object["events"]);
//$events = $object["events"];

    fclose($fp);

    echo json_encode($object);

} elseif ($option == 3) {

    $newParticipant = array("name" => $_GET['name'], "id" => $_GET['id'], "discipline" => $_GET['discipline'], "disciplineType" => $_GET['disciplineType'], "event" => $_GET['event'], "eventPosition" => $_GET['eventPosition']);
    if (file_exists('source\participants.json')) {
        $data = file_get_contents('source\participants.json');
        $newData = json_decode($data);
        array_push($newData, $newParticipant);
        file_put_contents('source\participants.json', json_encode($newData));
    }
} elseif ($option == 4) {

    /* $data= file_get_contents('source\participants.json');

     $json = json_decode($data);
     foreach($json as $id=>$val)
     {
         if($val['id']==$id)
         {
             unset($json[$id]);
         }
     }
     file_put_contents('source\participants.json', json_encode($json, JSON_FORCE_OBJECT));*/

    $idDelete = $_GET["id"];
    $status = false;
    while ($status != true) {
        if (file_exists('source\participants.json')) {
            $data = file_get_contents('source\participants.json');
            $newData = json_decode($data);

            foreach ($newData as $participant => $idSearch) {

                if ($idSearch->id == $idDelete) {
                    unset($newData[$participant]);
                    $status = true;
                }

            }
        }

    }
    file_put_contents('source\participants.json', json_encode($newData, false));
}
