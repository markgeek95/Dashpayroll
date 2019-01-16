jQuery.noConflict();
jQuery(document).on('change', '.btn-file :file', function(){
  var input = jQuery(this),numFiles = input.get(0).files ? input.get(0).files.length : 1,label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});
jQuery(document).ready( function(){
  jQuery('.btn-file :file').on('fileselect', function(event, numFiles, label){
    var input = jQuery(this).parents('.input-group').find(':text'), log = numFiles > 1 ? numFiles + ' files selected' : label;
    input.val(log);
    console.log(log);
  });
});