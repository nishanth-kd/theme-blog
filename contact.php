<?php
$color = paranoid_var_color();
?>
<form action="" id="contact_mail">
  <input type="hidden" name="action" value="contact_mail">
  <div class="modal fade" id="contact-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Send me an Email</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-xs-10">
              <p>
                <label for="name" class="color-<?php echo $color; ?>">Name*</label>
                <input name="name" class="form-control input-color-<?php echo $color; ?>" type="text" size="30"/>
              </p>
              <p>
                <label for="email" class="color-<?php echo $color; ?>">Email*</label>
                <input name="email" class="form-control input-color-<?php echo $color; ?>" type="email" size="30"/>
              </p>
              <p>
                <label for="message" class="color-<?php echo $color; ?>">Message</label>
                <textarea name="message" class="form-control input-color-<?php echo $color; ?>" type="text" style="resize:none" rows="3"></textarea>
              </p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn negative" data-dismiss="modal">Cancel</button>
          <button type="button" data-form="contact_mail" id="submit-contact-by-email"class="btn dynamic-form-submit background-color-<?php echo $color; ?>">Send</button>
        </div>
      </div>
    </div>
  </div>
</form>