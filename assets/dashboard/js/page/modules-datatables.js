$(document).ready(function() {
  $('#table-1 thead tr').clone(true).appendTo( '#table-1 thead' );
    $('#table-1 thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
        $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
 
        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );
 
    var table = $('#table-1').DataTable( {
        orderCellsTop: true,
        fixedHeader: true
    } );

  $("#dropdown1").on("change", function() {
    table
      .columns(3)
      .search(this.value)
      .draw();
  });
});

//
$(document).ready(function() {

  $('#example thead tr').clone(true).appendTo( '#example thead' );
    $('#example thead tr:eq(1) th').each( function (i) {
      responsive: true;
        var title = $(this).text();
        $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
 
        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );

    var table = $("#example").DataTable({
      "scrollX": "980px",
      "order": [],
      orderCellsTop: true,
        fixedHeader: true
    });
  
  
    $('.filter-checkbox').on('change', function(e){
      var searchTerms = []
      $.each($('.filter-checkbox'), function(i,elem){
        if($(elem).prop('checked')){
          searchTerms.push("^" + $(this).val() + "$")
        }
      })
      table.column(2).search(searchTerms.join('|'), true, false, true).draw();
    });

    $("#dropdown").on("change", function() {
    table
      .columns(4)
      .search(this.value)
      .draw();
  });

});

$(document).ready(function() {

  // $('#categories thead tr').clone(true).appendTo( '#categories thead' );
  //   $('#categories thead tr:eq(1) th').each( function (i) {
  //     responsive: true;
  //       var title = $(this).text();
  //       $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
 
  //       $( 'input', this ).on( 'keyup change', function () {
  //           if ( table.column(i).search() !== this.value ) {
  //               table
  //                   .column(i)
  //                   .search( this.value )
  //                   .draw();
  //           }
  //       } );
  //   } );

    var table = $("#categories").DataTable({
      "scrollX": "980px",
      "order": [],
      "columnDefs": [
    { "width": "80%", "targets": 0 }
  ]
    });

});
