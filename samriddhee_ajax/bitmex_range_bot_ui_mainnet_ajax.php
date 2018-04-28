<?php
/**
 * Created by PhpStorm.
 * User: neerajudai
 * Date: 28/4/18
 * Time: 1:07 PM
 */

require_once(__DIR__ . '/../samriddhee_db/classes/botStatusDAO.php');

//$_GET['command'] = 'change_testnet_status'; // For Debugging

if($_GET['command'] == 'change_range_details'){
    $return_array = botStatusDAO::updateBitmexRangeBotDetails($_GET);
}else if($_GET['command'] == 'change_mainnet_status'){
    $return_array = botStatusDAO::toggleBitmexMainnetStatus();
}

if($return_array['return_code'] == 200)
    $output = json_encode($return_array);
else
    $output = json_encode(500);

echo $output;