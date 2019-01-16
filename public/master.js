$.ajaxSetup({
   headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});


var getUrl = window.location;
var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];



/*-- For Tooltip --*/
$(document).ready(function(){
   $('[data-toggle="tooltip"]').tooltip();
});

/*-- for tooltip --*/
/*$(document).ready(function(){
 $('.dropdown-toggle').dropdown();
 });*/


/*-- for popover --*/
$(document).ready(function(){
   $('[data-toggle="popover"]').popover();
});












$(document).ready(function(){

   /*-- loading button --*/
   $(".btn-loading").click(function(){
      $(this).button('loading');
   });

   /*-- reset button --*/
   $(".btn-reset").click(function(){
      $(this).button("loading").delay(500).queue(function(){
         $(this).button("reset");
         $(this).dequeue();
      });
   });

   /*-- loading finished --*/
   $(".btn-finished").click(function(){
      $(this).button('loading').delay(1000).queue(function(){
         $(this).button('somestringvalue');
         $(this).dequeue();
      });
   });
});












/*-- Datepicker --*/

$(document).ready(function(){
   $('.fa-calendar').on('click', function(){
      for(var i=1; i<5; i++){
         $(this).closest('div.input-group').find('input.datepicker'+i).focus();
      }
   });
});




/*
$( function() {
   /!*-- Normal days only --*!/
   $( ".datepicker1" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
   });
   /!*-- Select month only --*!/
   $( ".datepicker2" ).datepicker({
      dateFormat: 'yy-mm-dd',
      changeMonth: true,
      changeYear: true,
      yearRange: "-110:+0"
   });
   /!*-- Disable future days --*!/
   $( ".datepicker3" ).datepicker({
      dateFormat: 'yy-mm-dd',
      changeMonth: true,
      changeYear: true,
      maxDate: new Date
   });
   /!*-- Disable past days --*!/
   $( ".datepicker4" ).datepicker({
      dateFormat: 'yy-mm-dd',
      changeMonth: true,
      changeYear: true,
      minDate: new Date
   });
   $( ".datepicker5" ).datepicker({
      dateFormat: 'MM yy',
      changeMonth: true,
      changeYear: true,
      showButtonPanel: true,
      onClose: function (dateText, inst) {
         $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
      }
   });
});
*/













/*--- for datatable ---*/
$(function () {
   $('#dataTable1').DataTable();
   $('#dataTable2').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : true,
      'language'    : { search: 'Filter:', searchPlaceholder: 'Filter Results'}
   });
   $('#dataTable3').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : true,
   });
});











/*--- For Loader ---*/
function overlay(){
   $('.overlay').fadeIn('fast');
}
function overlayIn(){
   $('.overlay').fadeIn('fast');
}
function overlayOut(){
   $('.overlay').fadeOut('fast');
}
function loaderIn()
{
   $('.loaderRefresh').fadeIn('fast');
}
function loaderOut()
{
   $('.loaderRefresh').fadeOut('fast');
}

$(document).ready(function(){
   $('.loaderSubmit').on('submit', function(){
      loaderIn();
   });
   $('.loaderClick').on('click', function(){
      loaderIn();
   });
});




















/*--- Date Time ---*/
function timeCalculate($date){
   var d = new Date($date);
   var days = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
   var month = days[d.getMonth()];
   var day = d.getDate();
   var year = d.getFullYear();
   var hour = d.getHours();
   var min = d.getMinutes();
   if(hour < 10){
      hour = '0'+hour;
   }
   if(min < 10){
      min = '0'+min;
   }
   var today = month+' '+day+', '+year+' '+hour+':'+min;
   return today;
}


/*--- Date Time ---*/
function hourMinCalculate($date){
   var d = new Date($date);
   var hour = d.getHours();
   var min = d.getMinutes();
   if(hour < 10){
      hour = '0'+hour;
   }
   if(min < 10){
      min = '0'+min;
   }
   var hourMin = hour+':'+min;
   return hourMin;
}

function dateCalculate($date){
   var d = new Date($date);
   var days = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
   var month = days[d.getMonth()];
   var day = (d.getDate() < 10)? '0' + d.getDate().toString() : d.getDate();
   var year = d.getFullYear();
   var today = month+' '+day+', '+year;
   return today;
}


function numeric_date() {
   var d = new Date();
   var month = ((d.getMonth() + 1) < 10)? '0' + (d.getMonth() + 1) : (d.getMonth() + 1);
   var day = d.getDate();
   var year = d.getFullYear();
   var today = year+'-'+month+'-'+day;
   return today;
}






/*-- Toastr Message --*/
function toaster($color, $message)
{
      const toast = swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 6000
        });


      toast({
            type: $color,
            title: $message
        })

        var msg = new SpeechSynthesisUtterance();
        msg.text = $message;
        window.speechSynthesis.speak(msg);

}







/*-- small username with ellipsis --*/
$(document).ready(function(){
   var words = $('.text-ellipsis').text().trim().split(' ');
   $('.text-ellipsis').empty();
   $.each(words, function(i, v){
      $('.text-ellipsis').append($('<span>').text(v)).append(' ');
   });

   var words2 = $('.text-ellipsis2').text().trim().split(' ');
   $('.text-ellipsis2').empty();
   $.each(words2, function(i, v){
      $('.text-ellipsis2').append($('<span>').text(v)).append(' ');
   });

   var words3 = $('.text-ellipsis3').text().trim().split(' ');
   $('.text-ellipsis3').empty();
   $.each(words3, function(i, v){
      $('.text-ellipsis3').append($('<span>').text(v)).append(' ');
   });
});







function filter_result($scope, $table_name) {
   var filter = $($scope).val().toUpperCase();
   var table = document.getElementsByClassName($table_name)[0];

   var tr = $(table).find('tbody').find('tr');

   var originalTable = $('.'+$table_name).clone();
   var tds = $(originalTable).children('tbody').children('tr').first().children('td').length;

   var table_array = [];

   for (var i = 0; i < tr.length; i++) {
      for (var j = 0; j < tds; j++){
         td = tr[i].getElementsByTagName("td")[j];
         var str =  $(td).text().toUpperCase().trim();
         table_array.push(str);
      }
      var b = table_array.filter(item => item.indexOf(filter) > -1);

      if (b.length){
         // tr[i].style.display = "";
         $(tr[i]).fadeIn(0)
      }else{
         // tr[i].style.display = "none";
         $(tr[i]).fadeOut(0)
      }
      table_array = [];
   }
}




// rich texteditor for create=ing today`s date
function date_today() {
   var d = new Date();
   var days = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
   var month = days[d.getMonth()];
   var day = d.getDate();
   var year = d.getFullYear();
   var hour = d.getHours();
   var min = d.getMinutes();
   if(hour < 10){
      hour = '0'+hour;
   }
   if(min < 10){
      min = '0'+min;
   }
   var today = month+' '+day+', '+year+' '+hour+':'+min;
   return today;
}








$('.full_loader_show').on('click', function () {
   $('#loader-modal').modal({
      backdrop: 'static',
      keyboard: false
   });
});






$(function () {
    //Initialize Select2 Elements
    $('.select2').select2();
});










