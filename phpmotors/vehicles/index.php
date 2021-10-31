<?php

//Vehicles Controller

 // Get the database connection file
 require_once '../library/connections.php';
 // Get the PHP Motors model for use as needed
 require_once '../model/main-model.php';
  // Get the vehicle model for use as needed
 require_once '../model/vehicle-model.php';
  // Get the functions library
 require_once '../library/functions.php';

// Get the array of classifications

$classifications = getClassificationID();

$navList = buildNav();

// Build a navigation bar using the $classifications array
 //$navList = '<ul>';
// $navList .= "<li><a href='/phpmotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
 //foreach ($classifications as $classification) {
  //$navList .= "<li><a href='/phpmotors/index.php?action=".urlencode($classification['classificationName'])."' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
 //}
 //$navList .= '</ul>';

//Buil classification list
//$classList = "<select name='classificationId' id='classificationId'>";
//$classList .= '<option value ="">Please Choose</option>';
//foreach ($classifications as $classification) {
  // $classList .= "<option value='$classification[classificationId]'";
   //if(isset($classificationId)){
   
//   if($classId['classificationId'] === $classificationId){
    // $classList .= ' selected ';
 //}
//}   
  // $classList .= ">$classification[classificationName]</option>";
//}
// $classList .= "</select>";

 
 


$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }


 switch ($action){

    
    case 'addClass':
    // Filter and store the data
    $classificationName = filter_input(INPUT_POST, 'classificationName', FILTER_SANITIZE_STRING);

    
        // Check for missing data
        if (empty($classificationName)) {
            $message = '<p>Field empty. Please provide information.</p>';
            include '../view/addClassification.php';
            exit;
        }

    //Send data to the model
    $newClass = newClassification($classificationName);

         // Check and report the result
        if ($newClass === 1) {
            header('Location:/phpmotors/vehicles/index.php');
            exit;
        } else {
            $message = "<p>Ops! $classificationName failed to be added. Please try again.</p>";
        }
        include '../view/addClassification.php';
    
    break;

    case 'addVehicle':
        
    include '../view/addVehicle.php';
    break;

    case 'addNewVehicle':
    // Filter and store the data
    $invMake = trim(filter_input(INPUT_POST, 'invMake', FILTER_SANITIZE_STRING));
        $invModel = trim(filter_input(INPUT_POST, 'invModel', FILTER_SANITIZE_STRING));
        $invDescription = trim(filter_input(INPUT_POST, 'invDescription', FILTER_SANITIZE_STRING));
        $invImage = trim(filter_input(INPUT_POST, 'invImage', FILTER_SANITIZE_STRING));
        $invThumbnail = trim(filter_input(INPUT_POST, 'invThumbnail' ,FILTER_SANITIZE_STRING));
        $invPrice = trim(filter_input(INPUT_POST, 'invPrice', FILTER_SANITIZE_NUMBER_FLOAT));
        $invStock = trim(filter_input(INPUT_POST, 'invStock', FILTER_SANITIZE_NUMBER_INT));
        $invColor = trim(filter_input(INPUT_POST, 'invColor', FILTER_SANITIZE_STRING));
        $classificationId = trim(filter_input(INPUT_POST, 'classificationId', FILTER_SANITIZE_STRING));
       
        // Check for missing data
        if (empty($invMake) || empty($invModel) || empty($invDescription) || empty($invImage) || empty($invThumbnail) || empty($invPrice) || empty($invStock) || empty($invColor) || empty($classificationId)) {
            $message = '<p>Provide information for all empty form fields.</p>';
            include '../view/addVehicle.php';
            exit;
        }

        //Send data to the model
        $newVeh = newVehicle($invMake, $invModel, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invColor, $classificationId);

        // Check and report the result
        if ($newVeh === 1) {
            $message = "<p>$invMake $invModel added to the inventory.</p>";
        } else {
            $message = "<p>Sorry! $invMake $invModel has failed to be added. Please try again.</p>";
        }
       include '../view/addVehicle.php';
        exit;

    

    case 'login':
    include '../view/login.php';
    break;

     
        
        
 
    default: 
    include '../view/vehicle-management.php';
   

  exit;
}
?>