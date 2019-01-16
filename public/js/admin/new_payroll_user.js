$('.new_payroll_user_table').find('input[type="checkbox"]').on('click', function () {

    var thisElement = $(this);
    var ischeck = $(this).is(':checked');
    var name = $(this).attr('name');
    var menu = name.split('_');


    if (menu[1] == 'disabled'){
        var input = $(this).closest('tr').find('input[type="checkbox"]');
        if (ischeck){
            $.each(input, function (index) {
                $(this).not(thisElement).prop('checked', false).attr('disabled',true);
            });
        } else{
            $.each(input, function (index) {
                $(this).not(thisElement).attr('disabled',false);
            });
        }
    }

    if (menu[1] == 'all'){
        var input = $(this).closest('tr').find('input[type="checkbox"]');
        if (ischeck){
            $.each(input, function (index) {
                $(this).prop('checked', true);
            });
            $('input[name="'+menu[0]+'_disabled_2"]').prop('checked', false);
        }else{
            $.each(input, function (index) {
                $(this).prop('checked', false);
            });
        }
    }

    var menuArray = [];

    var inputChecked = $(this).closest('tr').find('input[type="checkbox"]:checked');
    $.each(inputChecked, function (index) {
       var role = $(this).attr('name').split('_');
        menuArray.push(role[2]);
    });

    var hiddenElement = $('.new_payroll_user_table').find('input[name="'+menu[0]+'"]');

    if (hiddenElement.length){
        $('input[name="'+menu[0]+'"]').val(menuArray);
    } else{
        var input_menu = $('<input type="hidden" name="'+menu[0]+'">').val(menuArray);
        $('.new_payroll_user_table').prepend(input_menu);
    }

    // alert(hiddenElement.length)

});


