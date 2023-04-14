<script>
      $(document).ready(function() {
        $("#search").keyup(function(e) {
              $("#card").html("");
              var search_query = $(this).val();
              if (search_query != "") {
                  $.ajax({
                      url: "ajax/search.klu.customers.ajax.php",
                      type: "POST",
                      data: {
                          search: search_query
                      },
                      success: function($data) {
                          $("#list").fadeIn('fast').html($data);
                      }
                  });
              } else {
                  $("#list").fadeOut();
              }
          });
      });
  </script>

<script>
      $(document).ready(function() {
          $(document).on("click", "#list li", function() {
              $("#search").val($(this).text());
              $("#list").fadeOut();
          });
      });
</script>


<script>
    $(document).ready(function() {
        $("#submit").on("click", function(e) {
            e.preventDefault();
            $("#card").html("");
            var search_query = $('#search').val();
            $.ajax({
                url: "ajax/search.klu.customers.autocomplete.ajax.php",
                type: "POST",
                data: {
                    search: search_query
                },
                success: function($data) {
                    $("#card").fadeIn('fast').html($data);
                }
            });
            $("#search").val("");
        });
    });
</script>