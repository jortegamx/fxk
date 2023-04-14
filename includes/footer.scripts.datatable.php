<!-- Scripts de Datatable en bulist.php -->
<script type="text/javascript">
    $(document).ready(function() {
      $('#budata').DataTable({
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
          $(nRow).attr('id', aData[0]);
        },
        'serverSide': 'true',
        'paging': 'true',
        'order': [],
        'ajax': {
          'url': 'fetch/listdata.fetch.php',
          'type': 'post',
        },
        "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [5]
          },

        ]
      });
    });

  </script>

  <!-- Scripts de Datatable en buapprove.php -->
<script type="text/javascript">
    $(document).ready(function() {
      $('#budataapprove').DataTable({
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
          $(nRow).attr('id', aData[0]);
        },
        'serverSide': 'true',
        'paging': 'true',
        'order': [],
        'ajax': {
          'url': 'fetch/listapprove.fetch.php',
          'type': 'post',
        },
        "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [5]
          },

        ]
      });
    });

  </script>