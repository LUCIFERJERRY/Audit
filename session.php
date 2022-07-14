<?php
  
// Initialize the session
session_start();
       
// Store the submitted data sent
// via POST method, stored 
  
// Temporarily in $_POST structure.
$_SESSION['AuditorID'] = $_POST['AuditorID'];
  
$_SESSION['AuditType']
        = $_POST['AuditType'];
  
$_SESSION['AuditDate']
        = $_POST['AuditDate'];

$_SESSION['StoreName']
        = $_POST['StoreName'];

$_SESSION['StoreOpTime']
        = $_POST['StoreOpTime'];

$_SESSION['StoreOpImg']
        = $_POST['StoreOpImg'];

$_SESSION['ScanningStartTime']
        = $_POST['ScanningStartTime'];

$_SESSION['ScanningEndTime']
        = $_POST['ScanningEndTime'];

$_SESSION['BackroomEndTime']
        = $_POST['BackroomEndTime'];

        $_SESSION['UntagGarmentQty']
        = $_POST['UntagGarmentQty'];

        $_SESSION['UnscanGarmentQty']
        = $_POST['UnscanGarmentQty'];

        $_SESSION['ObservationImg']
        = $_POST['ObservationImg'];

        $_SESSION['ObservationText']
        = $_POST['ObservationText'];

        $_SESSION['Annexture1']
        = $_POST['Annexture1'];

        $_SESSION['Annexture2']
        = $_POST['Annexture2'];

        $_SESSION['Annexture3']
        = $_POST['Annexture3'];

        $_SESSION['Annexture4']
        = $_POST['Annexture4'];

        $_SESSION['Annexture5']
        = $_POST['Annexture5'];

        $_SESSION['Annexture6']
        = $_POST['Annexture6'];

        $_SESSION['Annexture7']
        = $_POST['Annexture7'];

        $_SESSION['Annexture8']
        = $_POST['Annexture8'];

        $_SESSION['Annexture9']
        = $_POST['Annexture9'];

        $_SESSION['Annexture10']
        = $_POST['Annexture10'];
           
?>