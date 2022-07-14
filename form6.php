
<!DOCTYPE HTML>
<html>
<head>
  <title>Audit Modular 1</title>
  <link rel="stylesheet" href="form1.css">
</head>
<body style="padding-left: 25px;">

    <script src="form1.js"></script>

    <form class="form" action="form7.php" method="POST">
    <div class="form__title">Audit Modular</div>
    <p class="form__desc">
      Fill out the following details for carrying out the audit.
    </p>



    <div class="form__item">
        <label for="Annexture1" class="form__label">Annexture I</label>
        <input class="form__input form__input--small" type="file"  id="Annexture1" name="Annexture1" onchange="readURL(this)" required>
        <span class="form__error">A sample error message</span>
    </div>

    <div class="form__item">
        <label for="Annexture2" class="form__label">Annexture II</label>
        <input class="form__input form__input--small" type="file"  id="Annexture2" name="Annexture2" onchange="readURL(this)">
        <span class="form__error">A sample error message</span>
    </div>

    <div class="form__item">
        <label for="Annexture3" class="form__label">Annexture III</label>
        <input class="form__input form__input--small" type="file"  id="Annexture3" name="Annexture3" onchange="readURL(this)">
        <span class="form__error">A sample error message</span>
    </div>

    <div class="form__item">
        <label for="Annexture4" class="form__label">Annexture IV</label>
        <input class="form__input form__input--small" type="file"  id="Annexture4" name="Annexture4" onchange="readURL(this)">
        <span class="form__error">A sample error message</span>
    </div>

    <div class="form__item">
        <label for="Annexture5" class="form__label">Annexture V</label>
        <input class="form__input form__input--small" type="file"  id="Annexture5" name="Annexture5" onchange="readURL(this)">
        <span class="form__error">A sample error message</span>
    </div>

    <div class="form__item">
        <label for="Annexture6" class="form__label">Annexture VI</label>
        <input class="form__input form__input--small" type="file"  id="Annexture6" name="Annexture6" onchange="readURL(this)">
        <span class="form__error">A sample error message</span>
    </div>

    <div class="form__item">
        <label for="Annexture7" class="form__label">Annexture VII</label>
        <input class="form__input form__input--small" type="file"  id="Annexture7" name="Annexture7" onchange="readURL(this)">
        <span class="form__error">A sample error message</span>
    </div>


    <div class="form__item">
        <label for="Annexture8" class="form__label">Annexture VIII</label>
        <input class="form__input form__input--small" type="file"  id="Annexture8" name="Annexture8" onchange="readURL(this)">
        <span class="form__error">A sample error message</span>
    </div>

    <div class="form__item">
        <label for="Annexture9" class="form__label">Annexture IX</label>
        <input class="form__input form__input--small" type="file"  id="Annexture9" name="Annexture9" onchange="readURL(this)">
        <span class="form__error">A sample error message</span>
    </div>

    <div class="form__item">
        <label for="Annexture10" class="form__label">Annexture X</label>
        <input class="form__input form__input--small" type="file"  id="Annexture10" name="Annexture10" onchange="readURL(this)">
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

    <input type="hidden" name="ObservationImg" 
    value="<?php echo $_POST['ObservationImg']; ?>">

    <input type="hidden" name="ObservationText" 
    value="<?php echo $_POST['ObservationText']; ?>">

   
  

    <div class="form__item">
      <a href="form7.php"><button class="form__btn" type="submit">Declaration</button></a>
    </div>
    
  </form>
  </body>
  </html>