<?php wp_footer() ?>
<!-- Scripts -->
<!--<script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.validate.min.js"></script>-->
<script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/assets/js/skel.min.js"></script>
<!--<script src="<?php echo get_template_directory_uri()?>/assets/js/main.js"></script>
<script src="<?php echo get_template_directory_uri()?>/assets/js/galery.js"></script>-->
<script src="<?php echo get_template_directory_uri()?>/assets/js/main.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#send').click(function()
  {
    var form = $('#messageForm');
    console.log(form);
    form.validate();
    if(form.valid()){
      $('#send').hide();
      $('#floatingCirclesG').show();
      $.ajax({
        url: '<?php echo esc_url( admin_url('admin-post.php') ); ?>',
        type:'POST',
        data:
        {
          name: $('#messageForm #name').val(),
          message: $('#messageForm #message').val(),
          email: $('#messageForm #email').val(),
          action: 'contact_form'
        },
        success: function(msg)
        {
          $('#messageForm').hide();
          $('#formsuccess').show();
        },
        error : function(msg){
          $('#messageForm').hide();
          $('#formerror').show();
        }
      });
    }
  });
})

</script>
