function showCreateAccount() {
    jQuery(function ($) {
        // ui | login
        $('body').append('<div class="s2a-registration-overlay"><div class="s2a-registration-box"> <h3 class="s2a-registration-title">Email Registration</h3><label class="s2a-registration-label">Email: <span class="s2a-required"></span></label> <input id="registration-email" name="registration-email" type="email" placeholder="your.email@domain.com"> <span id="registration-message" style="display: none;"></span> <button id="registration-button" name="registration-button" type="button"> <i class="fa fa-envelope"></i> REGISTER NOW! </button> </div> </div>');

        // ui | login event
        $('#registration-button').on('click', function () {
            $.ajax({
                url: s2aMobile.URL_API, type: 'post',
                data: {action: 'emailAddressVerification', email: $('#registration-email').val()}, dataType: 'json',
                headers: {'X-SHOPS2APPS-ANIKETOS': 'Unconquerable'},
                beforeSend: function () {
                    $('#registration-email').attr('disabled', 'disabled');
                    $('#registration-button').attr('disabled', 'disabled').css('cursor', 'wait');
                },
                success: function (json) {
                    if (json.status === -1) {
                        $('#registration-message').text(json.message).addClass('s2a-registration-failed').show();

                        $('#registration-email').removeAttr('disabled');
                        $('#registration-button').removeAttr('disabled').css('cursor', '');
                    } else {
                        var _data = {
                            emailAddress: json.emailAddress,
                            apiKey: json.apiKey,
                            createdDate: json.createdDate
                        };
                        s2aMobile.saveUser(_data);
                    }
                },
                error: function () {
                    $('#registration-message').text('Something happened with the server! Please contact administrator.').addClass('s2a-registration-failed').show();
                }
            });
        });

        setTimeout(function () {
            // event | login
            $('.s2a-registration-overlay').css('background-color', 'rgba(255, 255, 255, 0.67)');
            $('.s2a-registration-box').css('opacity', '1');
            $('#s2a-registration-close').on('click', function () {
                $('.s2a-registration-overlay').remove();
            });
        }, 1000);
    });
}

var s2aMobile = {
    ERROR_MESSAGE: "We are sorry we can't process your request at the moment.",
    PAGE: '',
    TAB: '',
    //URL_API: 'http://localhost/s2amap-api-v1.0.php',
    URL_API: 'http://wppl-ma.marmurhall.com/s2amap-api-v1.0.php',
    saveConfiguration: function (_data) {
        _data['action'] = 's2a_mobile_save_configuration';
        _data['page'] = s2aMobile.PAGE;
        _data['tab'] = s2aMobile.TAB;

        jQuery.ajax({
            url: ajaxurl, type: 'post',
            data: _data,
            beforeSend: function () {
                //alert('jQuery.ajax.beforeSend');
            },
            success: function (response) {
                alert('Setting successfully saved!');
            },
            error: function () {
                alert(s2aMobile.ERROR_MESSAGE);
            },
            complete: function () {
                //alert('jQuery.ajax.complete');
            }
        });
    },
    saveUser: function (_data) {
        _data['action'] = 's2a_mobile_save_user';
        _data['page'] = s2aMobile.PAGE;

        jQuery.ajax({
            url: ajaxurl, type: 'post',
            data: _data,
            beforeSend: function () {
                //alert('jQuery.ajax.beforeSend');
            },
            success: function (response) {
                var $regMessage = jQuery('#registration-message');
                if ($regMessage.length > 0) {
                    $regMessage.text('Welcome!').removeClass('s2a-registration-failed').show();
                }
                setTimeout(function () {
                    location.href = location.href
                }, 600);
            },
            error: function () {
                alert(s2aMobile.ERROR_MESSAGE);
            },
            complete: function () {
                //alert('jQuery.ajax.complete');
            }
        });
    },
    saveDemoApp: function (_data) {
        _data['action'] = 's2a_mobile_save_demo_app';
        _data['page'] = s2aMobile.PAGE;

        jQuery.ajax({
            url: ajaxurl, type: 'post',
            data: _data,
            beforeSend: function () {
                //alert('jQuery.ajax.beforeSend');
            },
            success: function (response) {
                location.href = location.href
            },
            error: function () {
                alert(s2aMobile.ERROR_MESSAGE);
            },
            complete: function () {
                //alert('jQuery.ajax.complete');
            }
        });
    },
    saveDemoAppStatus: function (_data) {
        _data['action'] = 's2a_mobile_save_demo_app_status';
        _data['page'] = s2aMobile.PAGE;

        jQuery.ajax({
            url: ajaxurl, type: 'post',
            data: _data,
            beforeSend: function () {
                //alert('jQuery.ajax.beforeSend');
            },
            success: function (response) {
                location.href = location.href
            },
            error: function () {
                alert(s2aMobile.ERROR_MESSAGE);
            },
            complete: function () {
                //alert('jQuery.ajax.complete');
            }
        });
    }
};