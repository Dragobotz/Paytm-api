<?php
if(isset($_GET['mid']) && isset($_GET['oid'])) {
  $mid = $_GET['mid'];
  $oid = $_GET['oid'];
  if (!empty($mid) && !empty($oid)) {
    $url = "https://paytm-api-js.onrender.com/?mid=$mid&oid=$oid";
    $response = file_get_contents($url);

    if ($response !== false) {
      print_r($response);
    } else {
      echo "Error: Failed to retrieve response from API";
    }
  } else {
    echo '{"RESPCODE":"335","RESPMSG":"Mid is invalid"}';
  }
} else {
  echo "Error: Missing GET parameters";
}
?>
