
<!DOCTYPE HTML>
<html>
<head>
  <title>Audit Modular 1</title>
  <link rel="stylesheet" href="form1.css">
</head>
<body style="padding-left: 25px;">

    <script src="form1.js"></script>

    <form class="form" action="insert.php" method="POST">
    <div class="form__title">Audit Modular</div>
    <p class="form__desc">
      Fill out the following details for carrying out the audit.
    </p>



    <div class="form__item">
        <label for="Declaration" class="form__label">Declaration</label>
        <input class="form__input form__input--small" type="file"  id="Declaration" name="Declaration" onchange="readURL(this)" required>
        <span class="form__error">A sample error message</span>
    </div>

   
  
    <div class="form__item">
      <label for="DeclarationText" class="form__label">Declaration Text</label>
      <textarea maxlength="500" class="form__input" name="DeclarationText" id="DeclarationText" placeholder="Enter the Declaration. (Max. 500 chars)" required></textarea>
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

    <input type="hidden" name="Annexture1" 
    value="<?php echo $_POST['Annexture1']; ?>">

    <input type="hidden" name="Annexture2" 
    value="<?php echo $_POST['Annexture2']; ?>">

    <input type="hidden" name="Annexture3" 
    value="<?php echo $_POST['Annexture3']; ?>">

    <input type="hidden" name="Annexture4" 
    value="<?php echo $_POST['Annexture4']; ?>">

    <input type="hidden" name="Annexture5" 
    value="<?php echo $_POST['Annexture5']; ?>">

    <input type="hidden" name="Annexture6" 
    value="<?php echo $_POST['Annexture6']; ?>">

    <input type="hidden" name="Annexture7" 
    value="<?php echo $_POST['Annexture7']; ?>">

    <input type="hidden" name="Annexture8" 
    value="<?php echo $_POST['Annexture8']; ?>">

    <input type="hidden" name="Annexture9" 
    value="<?php echo $_POST['Annexture9']; ?>">

    <input type="hidden" name="Annexture10" 
    value="<?php echo $_POST['Annexture10']; ?>">

    <div class="form__item">
    <button class="form__btn" type="submit" value="Submit" name="submit">Finish</button>
    </div>
    
  </form>
  </body>
  </html>