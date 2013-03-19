<?php
/*TODO
check if password is empty, if not compare passwords and update. Else do nothing -done
Add basic checks performed in the register page here -done
Construct a string and update in a single mysqli call. Do not use one for each 
Do not display id card/passport details  
*/
include_once("../includes/common.lib.php");
include_once("../includes/config.php");

//check if user is valid
if(!isLoggedIn()) { header("location: ../login.php"); exit;}


$processableFields = array(
        "phonenumber" => "homephone",
        "baddress1" => "baddress1",
        "baddress2" => "baddress2",
        "bcity" => "bcity",
        "bpostcode" => "bpostalcode",
        "bcountry" => "bcountry",
        "bcounty" => "bcounty",
        "daddress1" => "daddress1",
        "daddress2" => "daddress2",
        "dcity" => "dcity",
        "dpostcode" => "dpostalcode",
        "dcountry" => "dcountry",
        "dcounty" => "dcounty",
    );

$query1 = "";
$result = "";
foreach( $processableFields as $fieldName => $fieldValue ) { 
		if( isset($_REQUEST[$fieldName]) && $_REQUEST[$fieldName] != "" ) 
			$query1 .= "`{$fieldName}`='".mysqli_real_escape_string($link, $_REQUEST[$fieldName])."' ,";
			
}			


if( $query1 != "" ) {

    foreach ( $processableFields as $key => $value ) {
        if ((isset($_POST[$key]) && ($_POST[$key] != ""))) {
            $_POST[$key] = mysqli_real_escape_string($link, $_POST[$key]);
            $query1 .= "`{$value}`='{$_POST[$key]}' ,";
        }
	$query1 = substr($query1, 0, strrpos($query1, ','));
    $query = "UPDATE `users` SET $query1 WHERE `userid`={$_SESSION['user_id']}";
	//echo $query; exit;
    if( mysqli_query($link, $query) === FALSE ) {
		$_SESSION["class"] = "alert-erros";
		$_SESSION["msg"]   = "Fields were added successfully";
	}
	else {
		$_SESSION["class"] = "alert-sucess";
		$_SESSION["msg"]   = "Fields were not added successfully";
	}
    }
}		
	
/****   Fetch the user detaill to display it. This code should be run after the information is updated so that we have the updated profile info ****/

$query_user_details = mysqli_query($link,"SELECT * FROM `users` WHERE userid={$_SESSION['user_id']}");
$user = mysqli_fetch_assoc($query_user_details);
mysqli_free_result($query_user_details);


$query_parent_details = mysqli_query($link,"SELECT * FROM `users` WHERE userid={$user['referredby']}");
$parent = mysqli_fetch_assoc($query_parent_details);
mysqli_free_result($query_parent_details);

/****  END  ****/

include('../templates/en/header_acc.php');
include('../templates/en/profile.php');


?>