
<footer class="footer">
  <div class="container-fluid"> <?php echo webdata()->copyright; ?> </div>
</footer>
</div>
<script src="<?php echo HTTP_ASSET_PATH; ?>admin/js/vendor.min.js"></script> 

<!-- Plugins js--> 
<script src="<?php echo HTTP_ASSET_PATH; ?>admin/libs/flatpickr/flatpickr.min.js"></script> 
<script src="<?php echo HTTP_ASSET_PATH; ?>admin/libs/jquery-knob/jquery.knob.min.js"></script> 
<script src="<?php echo HTTP_ASSET_PATH; ?>admin/libs/jquery-sparkline/jquery.sparkline.min.js"></script> 
<script src="<?php echo HTTP_ASSET_PATH; ?>admin/libs/flot-charts/jquery.flot.js"></script> 
<script src="<?php echo HTTP_ASSET_PATH; ?>admin/libs/flot-charts/jquery.flot.time.js"></script> 
<script src="<?php echo HTTP_ASSET_PATH; ?>admin/libs/flot-charts/jquery.flot.tooltip.min.js"></script> 
<script src="<?php echo HTTP_ASSET_PATH; ?>admin/libs/flot-charts/jquery.flot.selection.js"></script> 
<script src="<?php echo HTTP_ASSET_PATH; ?>admin/libs/flot-charts/jquery.flot.crosshair.js"></script> 

<!-- Dashboar 1 init js--> 
<script src="<?php echo HTTP_ASSET_PATH; ?>admin/js/pages/dashboard-1.init.js"></script> 

<!-- third party js --> 
<script src="<?php echo HTTP_ASSET_PATH; ?>admin/libs/datatables/jquery.dataTables.min.js"></script> 
<script src="<?php echo HTTP_ASSET_PATH; ?>admin/libs/datatables/dataTables.bootstrap4.js"></script> 
<script src="<?php echo HTTP_ASSET_PATH; ?>admin/libs/datatables/dataTables.buttons.min.js"></script> 

<!-- third party js ends --> 

<!-- Datatables init --> 
<script src="<?php echo HTTP_ASSET_PATH; ?>admin/js/pages/datatables.init.js"></script> 
<script src="<?php echo HTTP_ASSET_PATH; ?>admin/libs/parsleyjs/parsley.min.js"></script> 
<script src="<?php echo HTTP_ASSET_PATH; ?>admin/js/pages/form-validation.init.js"></script> 


<!-- App js--> 
<script src="<?php echo HTTP_ASSET_PATH; ?>admin/js/app.min.js"></script> 
<script>    
    $('#password, #user_password').on('keyup', function () {
    if ($('#password').val() == $('#user_password').val()) {
        $('#message').html('Matching').css('color', 'green');
    } else 
        $('#message').html('Not Matching').css('color', 'red');
});

$(document).ready(function() {

$('input[name=\'name\']').bind('change', function() {

    if(this.value){

      var key=$("#name").val();

      key=key.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-');

      linkname = key.toLowerCase();


      $("#linkname").val(linkname);



    }

  });

  $('.dobdate').datepicker({
      format: 'yyyy-mm-dd',
       maxDate: new Date()
  });
});

$(document).ready(function() {

  $("#showHide1").click(function() {
    if ($(".password1").attr("type") == "password") {
      $(".password1").attr("type", "text");

    } else {
      $(".password1").attr("type", "password");
    }
  });
});


$(document).ready(function() {
  $("#showHide").click(function() {
    if ($(".password").attr("type") == "password") {
      $(".password").attr("type", "text");

    } else {
      $(".password").attr("type", "password");
    }
  });
});


    
    </script>
        <script type="text/javascript" src="<?php echo HTTP_ASSET_PATH; ?>admin/ckeditor/ckeditor.js"></script>
    
    
</body></html>