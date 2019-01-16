
new WOW().init();

$(document).ready(function(){
    var tries=1;
    /*                        $('#loader-modal').modal('toggle');*/
    setTimeout(function() {
        /*                        alert();*/
        /* $('.alertPassword').fadeOut();*/
        $('#loader-modal').modal('hide'); 
        /*return false;*/
    }, 3400)
                // on click Sign In Button checks that username =='admin' and password == 'password'
                $("#username").keydown(function(event) {
                    if (event.keyCode === 13) {
                        $("#next").click();
                        return false;
                    }
                });
                $("#password").keydown(function(event) {
                    if (event.keyCode === 13) {
                        $("#login").click();
                        return false;
                    }
                });
                $(".backbtn").click(function() {
                    $('#username').removeClass('usernamevalid');
                    $('#username').val('');
                    setTimeout(function() {
                        $('.username').removeClass('hidden');
                        $('.username').fadeIn("slow");
                        $('.password').addClass('hidden');
                        $('#username').focus();
                    }, 1300)  
                    return false;
                });
                $("#next").click(function(){
                    let username = $('#username').val();
                    $.post(URL+'checkUser', {'username' : username }).done( function(data){
                        /*                alert(data);*/
                        if(data == 'okay'){
                           $('#password').val('');
                           $('#password').removeClass('usernamevalid');
                           $('#valid2').addClass('hidden');
                           $('#nextload').removeClass('hidden');
                           setTimeout(function() {
                            $('.username').addClass('hidden');
                            $('.password').fadeIn("slow");
                            $('#nextload').addClass('hidden');
                            $('.password').removeClass('hidden');
                            $('#password').focus();
                        }, 1300)
                       } 
                       else if ( $('#username').val() == ''){
                        $('#blank').removeClass('hidden');
                        $('#blank').fadeIn();
                        setTimeout(function() {
                            $('#blank').fadeOut();
                        }, 2500)
                        /*                        alert("Wrong Usename!!!");*/
                        $('#username').addClass('usernamevalid');
                    }
                    else if(data == 'not_okay'){
                        $('#valid').removeClass('hidden');
                        $('#valid').fadeIn();       
                        $('#username').addClass('usernamevalid');
                    } 
                })       
                });
                $("#adminLogin").submit(function(){
                    let form = $(this).serialize();
                    if($('#password').val() == '') {
                        $('#blank2').removeClass('hidden');
                        $('#blank2').fadeIn();
                        $('#username').addClass('usernamevalid');
                        setTimeout(function() {
                            $('#blank2').fadeOut();
                        }, 2500)
                        return false;
                    }
                    $('#loader-modal').modal('show');
                    setTimeout(function(){
                        $.post(URL+'login', form).done(function(data){
                            /*alert(data);*/
                            if(data == 'logged_in') {
                                const toast = swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 6000
                                });
                                toast({
                                    type: 'success',
                                    title: 'Signed in successfully'
                                })
                                setTimeout(function() {
                                    window.location.href = URL + 'dashboard';
                                }, 3000);
                            } 
                            else if(data == 'wrong_pass') {
                                $('#valid2').removeClass('hidden');
                                $('#valid2').fadeIn();
                                $('#password').addClass('usernamevalid');
                                $('#loader-modal').modal('hide');
                            }
                        })
                    }, 2000)
                    return false;
                })
                $(".username").keyup(function(){
                    if ( document.getElementById('username').value.length == 0 )    
                    {
                        $('#valid').addClass('hidden');
                    }
                });
                $(".password").keyup(function(){
                    if ( document.getElementById('password').value.length == 0 )    
                    {
                        $('#valid2').addClass('hidden');
                    }

                });
            });
