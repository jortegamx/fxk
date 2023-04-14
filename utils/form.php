    <!DOCTYPE html>
    <html>
    <head>
        <title>Klu Beneficiarios</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <h1>Búsqueda de cliente Klu</h1>
        <form>
            <label for="search">Buscar:</label>
            <input type="text" id="search" name="search">
        </form>

        <br>
        <hr noshade>
        <form>
        <label for="custid">Cliente:</label>
        <select id="custid"></select>
        <br>
        <br>
        <button>Seleccionar</button>
        </form>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#search').keyup(function() {
                    var search = $(this).val();
                    if (search != '') {
                        $.ajax({
                            url: 'search.php',
                            type: 'POST',
                            data: { search: search },
                            success: function(data) {
                                $('#custid').html(data);
                            }
                        });
                    } else {
                        $('#custid').html('');
                    }
                });
            });
        </script>
    </body>
    </html>
