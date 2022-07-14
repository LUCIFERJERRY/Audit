<!DOCTYPE HTML>
<html>
<head>
  <title>Audit Modular 1</title>
  <link rel="stylesheet" href="form1.css">
</head>
<body style="padding-left: 25px;">

    <script src="form1.js"></script>

    <form class="form" action="form2.php" method="POST">
    <div class="form__title">Audit Modular</div>
    <p class="form__desc">
      Fill out the following details for carrying out the audit.
    </p>

    <div class="form__item">
      <label for="AuditorID" class="form__label">Auditor ID</label>
      <input type="text" class="form__input" name="AuditorID" id="AuditorID" placeholder="Enter your unique ID">
      <span class="form__error">A sample error message</span>
    </div>

    <div class="form__item">
        <label for="AuditType" class="form__label">Audit-Type :</label>
        <select name="AuditType" class="form__input form__input--small" id="AuditType" placeholder="Select Audit Type" required>
            <option selected hidden value="Inventory">Select One</option>
            <option value="Inventory">Inventory</option>
            <option value="Cash">Cash</option>
            <option value="Fixed Assets">Fixed Assets</option>
            <option value="Statutory Compliance">Statutory Compliance</option>
           </select>
        <span class="form__error">A sample error message</span>
      </div>


    <div class="form__item">
      <label for="AuditDate" class="form__label">Audit Date</label>
      <input type="date" class="form__input form__input--small" name="AuditDate" id="AuditDate" placeholder="Enter Audit Date" required>
      <span class="form__error">A sample error message</span>
    </div>

    <div class="form__item">
        <label for="StoreName" class="form__label">Store Name</label>
        <input type="text" class="form__input" name="StoreName" id="StoreName"  placeholder="Enter the name of the Store" required>
        <span class="form__error">A sample error message</span>
      </div>
  

    <!--<div class="form__item">
      <label for="message" class="form__label">Message</label>
      <textarea maxlength="500" class="form__input" name="message" id="message" placeholder="Enter a detailed message about why you wish to signup. (Max. 500 chars)"></textarea>
      <span class="form__error">A sample error message</span>
    </div>-->

    <div class="form__item">
      <a href="form2.php"><button class="form__btn" type="submit">Next</button></a>
    </div>
    
  </form>
  </body>
  </html>