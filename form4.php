

<!DOCTYPE HTML>
<html>
<head>
  <title>Audit Modular 1</title>
  <link rel="stylesheet" href="form1.css">
</head>
<body style="padding-left: 25px;">

    <script src="form1.js"></script>

    <form class="form" action="form5.php" method="POST">
    <div class="form__title">Audit Modular</div>
    <p class="form__desc">
      Fill out the following details for carrying out the audit.
    </p>

    <div class="form__item">
      <label for="UntagGarmentQty" class="form__label">Untagged Garments Quantity</label>
      <input type="number" class="form__input form__input--small" name="UntagGarmentQty" id="UntagGarmentQty" placeholder="Enter untagged garments Qty" required>
      <span class="form__error">A sample error message</span>
    </div>

    <div class="form__item">
        <label for="UnscanGarmentQty" class="form__label">Unscanned Garments Quantity</label>
        <input type="number" class="form__input form__input--small" name="UnscanGarmentQty" id="UnscanGarmentQty" placeholder="Enter unscanned garments Qty" required>
        <span class="form__error">A sample error message</span>
    </div>

  
    <!--<div class="form__item">
      <label for="message" class="form__label">Message</label>
      <textarea maxlength="500" class="form__input" name="message" id="message" placeholder="Enter a detailed message about why you wish to signup. (Max. 500 chars)"></textarea>
      <span class="form__error">A sample error message</span>
    </div>-->

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

    <div class="form__item">
      <a href="form5.php"><button class="form__btn" type="submit">Observations</button></a>
    </div>
    
  </form>
  </body>
  </html>