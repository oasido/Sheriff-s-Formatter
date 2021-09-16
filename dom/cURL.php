<?php
include('simple_html_dom.php');
// LOGIN SYS
function curlRequest($url, $cookieJar, $post = NULL, $referer = NULL, $useragent = NULL)
{   
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_COOKIE, $cookieJar);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieJar);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    if (isset($useragent)) {

        curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    } else {

        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    }

    if (isset($referer)) {

        curl_setopt($ch, CURLOPT_REFERER, $referer);
    }

    if (isset($post)) {

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }

    $result = curl_exec($ch);

    curl_close($ch);
    unset($ch);

    return $result;
}

// SITE INFORMATION
$url = 'https://sd.lsgov.us/forum/ucp.php?mode=login';
$cookieJar = 'cookie.tmp';
$result = curlRequest($url, $cookieJar);

// Get the SID
preg_match('/name\=\"sid\" value\=\"([a-z0-9]+)\"/u', $result, $daSid);
$sid = $daSid[1];
$referer = $url;
$url = $url . '&sid=' . $sid;
$post = "username=Sheriff%27s+Formatter&password=N4u6%40Q9F&autologin=on&viewonline=on&redirect=index.php&sid=" . $sid . "&login=Login";


// THE ACTUAL LOGIN
// $result = curlRequest($url, $cookieJar, $post, $referer); // ENABLE ON SD FORUMS

// THE LOGGED IN USER'S BADGE NUMBER
$userBadgeNumber = $_SESSION['user']->badge_no;

// GET INTO THE PROFILE BASED ON BADGE NUMBER, CHECK THE "u=$userBadgeNumber" AT THE END, AYE.
$urlprofile = "https://sd.lsgov.us/forum/memberlist.php?mode=viewprofile&u=" . $userBadgeNumber;

// ENTER THE PROFILE URL TO GET THE DETAILS.
$result2 = curlRequest($urlprofile, $cookieJar, $post, $referer);

// PARSE SD FORUMS
$html = str_get_html($result2);
// print $html;


// ** RETRIEVE ACCOUNT INFORMATION **
//  IN GAME NAME
$userIGN = str_replace("_", " ", $html->find('dl.details dd span')[0]->plaintext);

//  GROUPS
$groups = $html->find('select[name="g"]')[0];
$groups = str_replace('<select name="g">', '', $groups);
$groups = str_replace('</select>', '', $groups);
// $groupNames = array();
$groupArray = array();

// echo $group;
$groups = preg_replace("/(>[[:alnum:]\-\:\s]+<\/option>)/", "", $groups);
preg_match_all('!\d+!', $groups, $groupArray);
// preg_grep("!\d+!", $groupArray);
// $userGroups = json_encode($groupArray);


// $test='';
// while($groups != '') {
//     $index = strpos($groups, "</option>");
//     // Check if the index was found.
//     if($index == false) break;
//     // We found the index. Substring accordingly.
//     $current = substr($group, 0, $index);
//     // Find the value of the current option, and the name of it.
//     // We need to use the find values with strings in php to look for value="
//     // We then substring according to the index of the value
//     // TODO: Complete logic
//     array_push($groupNames, $current);
//     $test = json_encode($current);
//     // TODO: TEST RETURNS EMPTY
//     $groups = substr($groups, $index+1);
// }

// RANK VALUES
// $rankGuest = 2;
// $rankDST = 7;
// $rankDS = 8;
// $rankDSI = 10;
// $rankDSII = 11;
// $rankSGT = 12;
// $rankLT = 218;
// $rankCPT = 17;
// $rankCMDR = 18;
// $rankDC = 288;
// $rankAS = 13;
// $rankS = 14;
$rankArrays = array(7, 8, 10, 11, 12, 218, 17, 18, 288, 13, 55, 14);

// // RANKS
// $html->find('select option[value="2"]')[0]->plaintext;     // (GUEST/REMOVE) REGISTERED
// $html->find('select option[value="7"]')[0]->plaintext;     // DST
// $html->find('select option[value="8"]')[0]->plaintext;     // DS
// $html->find('select option[value="10"]')[0]->plaintext;    // DSI
// $html->find('select option[value="11"]')[0]->plaintext;    // DSII
// $html->find('select option[value="12"]')[0]->plaintext;    // SGT
// $html->find('select option[value="218"]')[0]->plaintext;    // LT
// $html->find('select option[value="17"]')[0]->plaintext;    // CAPTAIN
// $html->find('select option[value="18"]')[0]->plaintext;    // COMMANDER
// $html->find('select option[value="288"]')[0]->plaintext;    // DIVISION CHIEF
// $html->find('select option[value="13"]')[0]->plaintext;    // ASSISTANT SHERIFF
// $html->find('select option[value="14"]')[0]->plaintext;    // SHERIFF

// //  USERGROUPS
// $html->find('select option[value="25"]')[0]->plaintext;    // AERO BUREAU
// $html->find('select option[value="49"]')[0]->plaintext;    // AERO BUREAU COMMAND
// $html->find('select option[value="42"]')[0]->plaintext;   // (SEB) SOD: SWT
// $html->find('select option[value="253"]')[0]->plaintext;   // (SEB) SOD: TET -- Do they need SEB usergroups?
