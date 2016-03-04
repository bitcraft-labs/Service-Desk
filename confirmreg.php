<?PHP
require_once("./modules/authentication/config.php");

if(isset($_GET['code'])) {
   if($authenticator->ConfirmUser()) {
        $authenticator->RedirectToURL("thank-you-regd.html");
   }
}

?>
<!DOCTYPE html>
<html>
<?php
$pagetitle = "Confirm Registration";
include_once 'modules/config.inc.php';
include_once 'modules/authentication/auth-head.php';
?>
<body>

<h2>Confirm registration</h2>
<p>Please enter the confirmation code in the box below</p>

<!-- Form Code Start -->
<div>
<form id='confirm' action='<?php echo $authenticator->GetSelfScript(); ?>' method='get' accept-charset='UTF-8'>
<div class='short_explanation'>* required fields</div>
<div><span class='error'><?php echo $authenticator->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='code' >Confirmation Code:* </label><br/>
    <input type='text' name='code' id='code' maxlength="50" /><br/>
    <span id='register_code_errorloc' class='error'></span>
</div>
<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("confirm");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("code","req","Please enter the confirmation code");

// ]]>
</script>
</div>
</body>
</html>
