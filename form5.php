

<!DOCTYPE HTML>
<html>
<head>
  <title>Audit Modular 1</title>
  <link rel="stylesheet" href="form1.css">
</head>
<body style="padding-left: 25px;">

    <script src="form1.js"></script>

    <form class="form" action="form6.php" method="POST">
    <div class="form__title">Audit Modular</div>
    <p class="form__desc">
      Fill out the following details for carrying out the audit.
    </p>



    <div class="form__item">
        <label for="ObservationImg" class="form__label">Observation Image</label>
        <input class="form__input form__input--small" type="file"  id="ObservationImg" name="ObservationImg" onchange="readURL(this)" accept="Image/*" placeholder="Store Opening Image" required>
        <span class="form__error">A sample error message</span>
    </div>

   
  
    <div class="form__item">
      <label for="ObservationText" class="form__label">Observations</label>
      <textarea maxlength="500" class="form__input" name="ObservationText" id="ObservationText" placeholder="Enter a detailed Observation. (Max. 500 chars)" required></textarea>
      <span class="form__error">A sample error message</span>
    </div>


    <input type="hidden" name="AuditorID" 
    value="<?php echo $_POST['AuditorID']; ?>">

    <input type="hidden" name="AuditType" 
    value="<?php echo $_POST['AuditType']; ?>">

    <input type="hidden" name="AuditDate" 
    value="<?php echo $_POST['AuditDate']; ?>">

    <input type="hidden" name="StoreName" 
    value="<?php echo $_POST['StoreName']; ?>">

    <input type="hidden" name="StoreOpTime" 
    value="<?php echo $_POST['StoreOpTime']; ?>">

    <input type="hidden" name="StoreOpImg" 
    value="<?php echo $_POST['StoreOpImg']; ?>">

    <input type="hidden" name="ScanningStartTime" 
    value="<?php echo $_POST['ScanningStartTime']; ?>">

    <input type="hidden" name="ScanningEndTime" 
    value="<?php echo $_POST['ScanningEndTime']; ?>">

    <input type="hidden" name="BackroomEndTime" 
    value="<?php echo $_POST['BackroomEndTime']; ?>">

    <input type="hidden" name="UntagGarmentQty" 
    value="<?php echo $_POST['UntagGarmentQty']; ?>">

    <input type="hidden" name="UnscanGarmentQty" 
    value="<?php echo $_POST['UnscanGarmentQty']; ?>">

    <div class="form__item">
      <a href="form6.php"><button class="form__btn" type="submit">Annextures</button></a>
    </div>
    
  </form>
  </body>
  </html>