<h2 class="skew-up-smidge">Backup / Restore</h2>
<form id="upload_box" class="box" method="post" action="" enctype="multipart/form-data">
  <div class="box_input">
    <input class="box_file" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple />
    <label for="file"><strong>Choose a file</strong><span class="box_dragndrop"> or drag it here</span>.</label>
    <button class="box_button" type="submit">Upload</button>
  </div>
  <div class="box_uploading">Uploading&hellip;</div>
  <div class="box_success">Done!</div>
  <div class="box_error">Error! <span></span>.</div>
</form>