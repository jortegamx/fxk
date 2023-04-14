<script>
  $(document).ready(function(){
    $('#update_password').on('submit', function(event){
      event.preventDefault();
      $.ajax({
        url:"ajax/process.ajax.php",
        method:"POST",
        data:$(this).serialize(),
        dataType:"json",
        beforeSend:function(){
          $('#updatepass').attr('disabled', 'disabled');
        },
      success:function(data){
        $('#updatepass').attr('disabled', false);
        toastr["success"]("Contraseña cambiada con éxito.", "Onboarding PM Klu");
      }
      })
    });
  });
</script>

<script>
  $(document).ready(function(){
    $('#enable_2fa').on('submit', function(event){
      event.preventDefault();
      var formData = new FormData(this);
      $.ajax({
        url:"ajax/2fa.ajax.php",
        method:"POST",
        data: formData,
        dataType:"json",
        beforeSend:function(){
          $('#enable2fa').attr('disabled', 'disabled');
        },
      success:function(data){
        toastr[data.type](data.message, "Onboarding PM Klu");
        setTimeout(()=> {location.reload()},4000);
      },
        cache: false,
        contentType: false,
        processData: false
      })
    });
  });
</script>

<script>
  $(document).ready(function(){
    $('#disable_2fa').on('submit', function(event){
      event.preventDefault();
      var formData = new FormData(this);
      $.ajax({
        url:"ajax/2fa.ajax.php",
        method:"POST",
        data: formData,
        dataType:"json",
        beforeSend:function(){
          $('#disable2fa').attr('disabled', 'disabled');
        },
      success:function(data){
        toastr[data.type](data.message, "Onboarding PM Klu");

        setTimeout(()=> {location.reload()},4000);

      },
        cache: false,
        contentType: false,
        processData: false
      })
    });
  });
</script>