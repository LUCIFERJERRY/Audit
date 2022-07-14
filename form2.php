
<!DOCTYPE HTML>
<html>
<head>
  <title>Audit Modular 1</title>
  <link rel="stylesheet" href="form1.css">
</head>
<body style="padding-left: 25px;">

    <script src="form1.js"></script>

    <form class="form" action="form3.php" method="POST">




    <div class="form__title">Audit Modular</div>
    <p class="form__desc">
      Fill out the following details for carrying out the audit.
    </p>

    <div class="form__item">
      <label for="StoreOpTime" class="form__label">Store Opening Time</label>
      <input type="datetime-local" class="form__input" name="StoreOpTime" id="StoreOpTime" placeholder="Enter store opening time" required>
      <span class="form__error">A sample error message</span>
    </div>


    <div class="form__item">
        <label for="StoreOpImg" class="form__label">Store Opening Image</label>
        <input class="form__input form__input--small" type="file"  id="StoreOpImg" name="StoreOpImg" onchange="readURL(this)" accept="Image/*" placeholder="Store Opening Image" required>
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

    <div class="form__item">
      <a href="form3.php"><button class="form__btn" type="submit">Start Scanning</button></a>
    </div>
    
  </form>
  </body>
  </html>