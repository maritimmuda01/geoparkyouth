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
      "columnDefs": [
        {
          "targets" : [2, 4, 5],
          "visible" : false
        }
      ],
        orderCellsTop: true,
        fixedHeader: true
    } );

    $('.filter-checkbox').on('change', function(e){
      var searchTerms = []
      $.each($('.filter-checkbox'), function(i,elem){
        if($(elem).prop('checked')){
          searchTerms.push("^" + $(this).val() + "$")
        }
      })
      table.column(2).search(searchTerms.join('|'), true, false, true).draw();
    });

  $("#dropdown1").on("change", function() {
    table
      .columns(4)
      .search(this.value)
      .draw();
  });

  $("#dropdown2").on("change", function() {
    table
      .columns(5)
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
      "columnDefs": [
        {
          "targets" : [5],
          "visible" : false
        }
      ],
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

    $("#country").on("change", function() {
    table
      .columns(5)
      .search(this.value)
      .draw();
  });

});

//
$(document).ready(function() {

  $('#user-articles thead tr').clone(true).appendTo( '#user-articles thead' );
    $('#user-articles thead tr:eq(1) th').each( function (i) {
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

    var table = $("#user-articles").DataTable({
      "columnDefs": [
        {
          "targets" : [4],
          "visible" : false
        }
      ],
      orderCellsTop: true,
      "order": [],
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

    $("#country").on("change", function() {
    table
      .columns(4)
      .search(this.value)
      .draw();
  });

});

//
$(document).ready(function() {

  $('#user-jobs thead tr').clone(true).appendTo( '#user-jobs thead' );
    $('#user-jobs thead tr:eq(1) th').each( function (i) {
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

    var table = $("#user-jobs").DataTable({
      "order": [],
      orderCellsTop: true,
    });
  
  
    $('.filter-checkbox').on('change', function(e){
      var searchTerms = []
      $.each($('.filter-checkbox'), function(i,elem){
        if($(elem).prop('checked')){
          searchTerms.push("^" + $(this).val() + "$")
        }
      })
      table.column(3).search(searchTerms.join('|'), true, false, true).draw();
    });

    $("#country").on("change", function() {
    table
      .columns(4)
      .search(this.value)
      .draw();
  });

});