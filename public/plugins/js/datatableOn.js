
  $(function(){
    $('#dadasTable').dataTable({
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
  })
      var URL='<?= URL ?>';

      
