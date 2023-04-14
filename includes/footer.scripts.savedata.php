<!-- Scripts de Guardar Usuario Beneficiario -->
<script>
  $(document).ready(function(){
    $('#bu_register').on('submit', function(event){
      event.preventDefault();
      $.ajax({
        url:"ajax/process.ajax.php",
        method:"POST",
        data:$(this).serialize(),
        dataType:"json",
        beforeSend:function(){
          $('#buregister').attr('disabled', 'disabled');
        },
      success:function(data){
        $('#buregister').attr('disabled', false);
        toastr["success"](data.success, "Klu");
      }
      })
    });
  });
</script>