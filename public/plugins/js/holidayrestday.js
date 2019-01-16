  $(document).ready(function(){

  $('#holidayTableList').dataTable({
    "lengthChange": false,
  });

  $('#generateData').submit(function(){
    var form = $(this).serialize();
    $.post(URL+'maintenance/sortTable',form)
    .done(function(returnData){   
        // alert(returnData);
        $('#tableSort').html(returnData);
        return false;
      })
    return false;
  })


  $('#restdayTable').dataTable({
    "lengthChange": false,
  });

  $('#generateData').submit(function(){
    var form = $(this).serialize();
    $.post(URL+'maintenance/sortTable',form)
    .done(function(returnData){   
        // alert(returnData);
        $('#tableSort').html(returnData);
        return false;
      })
    return false;
  })

  $('#employeeTable').dataTable({
    "lengthChange": false,
  });

  $('#generateData').submit(function(){
    var form = $(this).serialize();
    $.post(URL+'maintenance/sortTable',form)
    .done(function(returnData){   
        // alert(returnData);
        $('#tableSort').html(returnData);
        return false;
      })
    return false;
  })

    $('#emlistTable').dataTable({
    "lengthChange": false,
  });

  $('#generateData').submit(function(){
    var form = $(this).serialize();
    $.post(URL+'maintenance/sortTable',form)
    .done(function(returnData){   
        // alert(returnData);
        $('#tableSort').html(returnData);
        return false;
      })
    return false;
  })





    $("#myBtn").click(function(){
      $("#myModals").modal({show: true});

    });

    $("#updateTable").click(function(){
      $("#myModalsUpdate").modal({show: true});

  });

    $("#restdayTable").click(function(){
      $("#myModalsUpdate").modal({show: true});

    });
    
    $("#employeeTable").click(function(){
      $("#myModalsUpdate").modal({show: true});

    });

    
    $("#btnUpdate").click(function(){
      $("#myModalsEmployee").modal({show: true});

    });
    

    
    $("#costTable").click(function(){
      $("#myModalsUpdateCosting").modal({show: true});

    });
    

                     
    $("#btnAssign").click(function(){
      $("#myModalsAssign").modal({show: true});

    });
    

    $("#btnDelete").click(function(){
      $("#myModalsDelete").modal({show: true});

    });
    




    $('[data-toggle="tooltip"]').tooltip();   












});



