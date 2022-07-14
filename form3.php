
<!DOCTYPE HTML>
<html>
<head>
  <title>Audit Modular 1</title>
  <link rel="stylesheet" href="form1.css">
</head>
<body style="padding-left: 25px;">

    <script src="form1.js"></script>

    <form class="form" action="form4.php" method="POST">


    <div class="form__title">Audit Modular</div>
    <p class="form__desc">
      Fill out the following details for carrying out the audit.
    </p>

    <div class="form__item">
      <label for="ScanningStartTime" class="form__label">Scanning Start Time</label>
      <input type="datetime-local" class="form__input" name="ScanningStartTime" id="ScanningStartTime" placeholder="Scanning Start Time" required>
      <span class="form__error">A sample error message</span>
    </div>

    <div class="form__item">
        <label for="ScanningEndTime" class="form__label">Scanning End Time</label>
        <input type="datetime-local" class="form__input" name="ScanningEndTime" id="ScanningEndTime" placeholder="Scanning End Time" required>
        <span class="form__error">A sample error message</span>
    </div>

    <div class="form__item">
        <label for="BackroomEndTime" class="form__label">Backroom Scanning Complete Time</label>
        <input type="datetime-local" class="form__input" name="BackroomEndTime" id="BackroomEndTime" placeholder="Backroom Scanning Complete Time" required>
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



    <div class="form__item">
      <a href="form4.php"><button class="form__btn" type="submit">Garments</button></a>
    </div>
    
  </form>
  </body>
  </html>