<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: #ffffff !important;} .asteriskField{color: red;}.bootstrap-iso form .input-group-addon {color:#555555; background-color: #d6d6d6; border-radius: 4px; padding-left:12px}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<section class="content">
  <div class="bootstrap-iso">
   <div class="container-fluid">
    <div class="row">
     <div class="col-md-6 col-sm-6 col-xs-12">
      <form method="post">
       <div class="form-group ">
        <label class="control-label requiredField" for="sr_type">
         Type of Service Record
         <span class="asteriskField">
          *
         </span>
        </label>
        <select class="select form-control" id="sr_type" name="sr_type">
         <option value="Incident">
          Incident
         </option>
         <option value="Repair">
          Repair
         </option>
         <option value="Other">
          Other
         </option>
        </select>
        <span class="help-block" id="hint_sr_type">
         Select type of service record
        </span>
       </div>
       <div class="form-group ">
        <label class="control-label requiredField" for="user">
         User
         <span class="asteriskField">
          *
         </span>
        </label>
        <select class="select form-control" id="user" name="user">
         <option value="Allen Perry">
          Allen Perry
         </option>
         <option value="Eugene Duffy">
          Eugene Duffy
         </option>
         <option value="Joshua Nasiatka">
          Joshua Nasiatka
         </option>
        </select>
        <span class="help-block" id="hint_user">
         Select User
        </span>
       </div>
       <div class="form-group ">
        <label class="control-label requiredField" for="machine">
         Machine
         <span class="asteriskField">
          *
         </span>
        </label>
        <select class="select form-control" id="machine" name="machine">
         <option value="Add New">
          Add New
         </option>
        </select>
        <span class="help-block" id="hint_machine">
         Select user machine or add new
        </span>
       </div>
       <div class="form-group">
        <div>
         <button class="btn btn-success " name="submit" type="submit">
          Submit
         </button>
        </div>
       </div>
      </form>
     </div>
    </div>
   </div>
  </div>
</section><!-- /.content -->
