<?php //SDK PHP HTLeads
function htlADDLEAD ($uid_lista, $email, $nome, $sobrenome, $tag) {
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => $endpoint.'/subscribers?api_token='.$token.'&list_uid='.$uid_lista.'&EMAIL='.$email.'&FIRST_NAME='.$nome.'&LAST_NAME='.$sobrenome.'&tag='.$tag,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
  ));
  $response = curl_exec($curl);
  curl_close($curl);
  return $response;
}
