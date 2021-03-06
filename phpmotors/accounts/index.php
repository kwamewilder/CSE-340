<?php

//Accounts Controller

 // Get the database connection file
 require_once '../library/connections.php';
 // Get the PHP Motors model for use as needed
 require_once '../model/main-model.php';
 // Get the Accounts model
 require_once '../model/accounts-model.php';
 // Get the functions library
 require_once '../library/functions.php';

// Get the array of classifications
$classifications = getClassifications();
$navList = buildNav();

// Build a navigation bar using the $classifications array
 //$navList = '<ul>';
 //$navList .= "<li><a href='/phpmotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
 //foreach ($classifications as $classification) {
  //$navList .= "<li><a href='/phpmotors/index.php?action=".urlencode($classification['classificationName'])."' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
 //}
 //$navList .= '</ul>';

 //echo $navList;

// var_dump($classifications);
    

$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }

 switch ($action){
 case 'login':
  include '../view/login.php';
  break;
 
 case 'register':
    // Filter and store the data
    $clientFirstname = trim(filter_input(INPUT_POST, 'clientFirstname'));
    $clientLastname = trim(filter_input(INPUT_POST, 'clientLastname'));
    $clientEmail = trim(filter_input(INPUT_POST, 'clientEmail'));
    $clientPassword = trim(filter_input(INPUT_POST, 'clientPassword'));
    
    $clientEmail = checkEmail($clientEmail);
    $checkPassword = checkPassword($clientPassword);

    // Check for missing data
    if(empty($clientFirstname) || empty($clientLastname) || empty($clientEmail) || empty($checkPassword)){
    $message = '<p>Please provide information for all empty form fields.</p>';
    include '../view/registration.php';
        exit; 
    }

    // Hash the checked password
    $hashedPassword = password_hash($clientPassword, PASSWORD_DEFAULT);

    // Send the data to the model
    $regOutcome = regClient($clientFirstname, $clientLastname, $clientEmail, $hashedPassword);

    // Check and report the result
    if($regOutcome === 1){
     $message = "<p>Thanks for registering $clientFirstname. Please use your email and password to login.</p>";
     include '../view/login.php';
     exit;
    } else {
     $message = "<p>Sorry $clientFirstname, but the registration failed. Please try again.</p>";
     include '../view/registration.php';
     exit;
}
break;

case 'Login':
    // Filter and store the data
    $clientEmail = trim(filter_input(INPUT_POST, 'clientEmail'));
    $clientPassword = trim(filter_input(INPUT_POST, 'clientPassword')); 

    $clientEmail = checkEmail($clientEmail);
    $checkPassword = checkPassword($clientPassword); 

    // Check for missing data
    if(empty($clientEmail) || empty($checkPassword)){
    $message = '<p>Please provide information for all empty form fields.</p>';
    include '../view/login.php';
        exit; 
    }      
 break;

   

 default:
  

  exit;
}
?>