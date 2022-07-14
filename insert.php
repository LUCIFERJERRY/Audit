<?php
if (isset($_POST['submit'])) {

    $con = mysqli_connect('localhost', 'root', '','audit');

    $AuditorID = $_POST['AuditorID'];
    $AuditType = $_POST['AuditType'];
    $AuditDate = $_POST['AuditDate'];
    $StoreName = $_POST['StoreName'];
    $StoreOpTime = $_POST['StoreOpTime'];
    $StoreOpImg = $_POST['StoreOpImg'];
    $ScanningStartTime = $_POST['ScanningStartTime'];
    $ScanningEndTime = $_POST['ScanningEndTime'];
    $BackroomEndTime = $_POST['BackroomEndTime'];
    $UntagGarmentQty = $_POST['UntagGarmentQty'];
    $UnscanGarmentQty = $_POST['UnscanGarmentQty'];
    $ObservationImg = $_POST['ObservationImg'];
    $ObservationText = $_POST['ObservationText'];
    $Annexture1 = $_POST['Annexture1'];
    $Annexture2 = $_POST['Annexture2'];
    $Annexture3 = $_POST['Annexture3'];
    $Annexture4 = $_POST['Annexture4'];
    $Annexture5 = $_POST['Annexture5'];
    $Annexture6 = $_POST['Annexture6'];
    $Annexture7 = $_POST['Annexture7'];
    $Annexture8 = $_POST['Annexture8'];
    $Annexture9 = $_POST['Annexture9'];
    $Annexture10 = $_POST['Annexture10'];
    $Declaration = $_POST['Declaration'];
    $DeclarationText = $_POST['DeclarationText'];
    
    $sql = "INSERT INTO audit_main1 (AuditorID, AuditType, AuditDate, StoreName, StoreOpTime, StoreOpImg, ScanningStartTime, ScanningEndTime, BackroomEndTime, UntagGarmentQty, UnscanGarmentQty, ObservationImg, ObservationText, Annexture1, Annexture2, Annexture3, Annexture4, Annexture5, Annexture6, Annexture7, Annexture8, Annexture9, Annexture10, Declaration, DeclarationText) VALUES ('$AuditorID', '$AuditType', '$AuditDate', '$StoreName', '$StoreOpTime', '$StoreOpImg', '$ScanningStartTime', '$ScanningEndTime', '$BackroomEndTime', '$UntagGarmentQty', '$UnscanGarmentQty', '$ObservationImg', '$ObservationText', '$Annexture1', '$Annexture2', '$Annexture3', '$Annexture4', '$Annexture5', '$Annexture6', '$Annexture7', '$Annexture8', '$Annexture9', '$Annexture10', '$Declaration', '$DeclarationText')";
    
    $rs = mysqli_query($con, $sql);
    
    if($rs)
    {
        echo "Audit Entry Done";
   }
}
else {
    echo "Submit button is not set";
}


?><bt><br>
 <!DOCTYPE html>  
 <html>  
      <head>  
      <link rel="stylesheet" href="form1.css">
</head>
<body>
<script src="form1.js"></script>

<div class="form__item">
<a href  = "form1.php"><button class="form__btn">Submit Another Audit Entry</button></a>
</div>

<div class="form__item">
<a href  = "visualization.php"><button class="form__btn">Admin Panel</button></a>
</div>
</body>
</html>
