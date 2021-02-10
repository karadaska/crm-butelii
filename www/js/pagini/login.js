$(document).ready(function () {
    $("html").addClass("loginPage");

    wrapper = $(".login-wrapper");
    barBtn = $("#bar .btn");

    //change the tabs
    barBtn.click(function () {
        btnId = $(this).attr('id');
        wrapper.attr("data-active", btnId);
        $("#bar").attr("data-active", btnId);
    });

    //check if user is change remove avatar
    var userField = $("input#user");
    var avatar = $("#avatar>img");

    function changeThumb() {
        $.ajax({
            url: "ajax/changeThumb.php",
            success: function (data) {
                if (data != 'images/avatars/no_avatar_75.jpg') {
                    $('#imagine_login').attr('src', data).css('width', '78px').css('height', '78px');
                }
            },
            error: function (xhr, status) {
                console.log("ajax error: " + status);
            }
        });
    };

    //------------- Validation -------------//
    $("#login-form").validate({
        rules: {
            user: {
                required: true,
                minlength: 2
            },
            password: {
                required: true,
                minlength: 6
            }
        },
        messages: {
            user: {
                required: "Va rog introduceti un utilizator",
                minlength: "Utilizatorul trebuie sa fie de minim 3 caractere"
            },
            password: {
                required: "Va rog introduceti parola",
                minlength: "Parola trebuie sa fie de minim 6 caractere"
            }
        },
        submitHandler: function (form) {
            var btn = $('#loginBtn');
            btn.removeClass('btn-primary');
            btn.addClass('btn-danger');
            btn.text('Cautare ...');
            user = $("#user").val();
            password = $("#password").val();
            $.ajax({
                url: "/ajax/dologin.php",
                data: {
                    user: user,
                    password: password
                },
                success: function (data) {
                    if (data == 'ok') {
                        changeThumb();
                        btn.removeClass('btn-danger');
                        btn.addClass('btn-success');
                        btn.text('Se face login');
                        setTimeout(function () {
                            location.href = '/dashboard.php';
                        }, 2000);
                    } else {
                        btn.addClass('btn-danger');
                        btn.text('User incorect!');
                        setTimeout(function () {
                            btn.removeClass('btn-danger');
                            btn.addClass('btn-primary');
                            btn.text('Login');
                        }, 1000);
                    }
                },
                error: function (xhr, status) {
                    console.log("ajax error: " + status);
                }
            });
        }
    });
});