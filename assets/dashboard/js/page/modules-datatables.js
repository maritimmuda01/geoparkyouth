$(document).ready(function() {
 
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

    var table = $("#user-articles").DataTable({
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
      table.column(1).search(searchTerms.join('|'), true, false, true).draw();
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