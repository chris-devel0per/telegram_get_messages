<?php
$bot_token=''; //ENTER BOT ID HERE 
if(empty($bot_token)||$bot_token==''){
  echo 'BOT_TOKEN IS EMPTY CHANGE LINE 2 OR THE SCRIPT WONT WORK ';
  exit();
}

//
//SEE https://core.telegram.org/bots/api#getupdates for more information!!!!
//

$data = file_get_contents('https://api.telegram.org/bot'.$bot_token.'/getUpdates');
// echo $homepage;
$data=str_replace(array("\r", "\n"), '', $data);

$data=json_decode($data);

for ($i = 0; $i < count($data->result); $i++){
    echo $data->result[$i]->message->text.'<br>';//Get message
    echo $data->result[$i]->message->message_id.'<br>';//Get message_id
    echo $data->result[$i]->message->from->id.'<br>';//Get userid
    echo $data->result[$i]->message->from->username.'<br>';//Get username
    echo $data->result[$i]->message->from->first_name.'<br>';//Get firstname
        
}

?>
