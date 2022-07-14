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
    $Declaration = $_POST['Declaration'];
    $DeclarationText = $_POST['DeclarationText'];
    
    $sql = "INSERT INTO audit_main (AuditorID, AuditType, AuditDate, StoreName, StoreOpTime, StoreOpImg, ScanningStartTime, ScanningEndTime, BackroomEndTime, UntagGarmentQty, UnscanGarmentQty, ObservationImg, ObservationText, Declaration, DeclarationText) VALUES ('$AuditorID', '$AuditType', '$AuditDate', '$StoreName', '$StoreOpTime', '$StoreOpImg', '$ScanningStartTime', '$ScanningEndTime', '$BackroomEndTime', '$UntagGarmentQty', '$UnscanGarmentQty', '$ObservationImg', '$ObservationText', '$Declaration', '$DeclarationText')";
    
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
