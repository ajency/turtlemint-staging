(function () {
    var setItemSession = function (vertical, item, value) {
        var lsMap = window.sessionStorage.getItem(vertical);
        var objMap = (lsMap) ? JSON.parse(lsMap) : {};
        objMap[item] = value;
        var stringifiedMap = JSON.stringify(objMap);
        window.sessionStorage.setItem(vertical, stringifiedMap);

    };
    //var base_url = location.protocol + '//' + location.hostname;
    var base_url = location.protocol + '//app.turtlemint.com';

    // clear life session on landing page
    window.sessionStorage.removeItem("life-insurance");
    
    var getVerticalNameFormPageUrl = function () {
        let vertical = '';
        if (location.pathname.indexOf('car') > -1) {
            vertical = 'FW';
        } else if (location.pathname.indexOf('two-wheeler') > -1) {
            vertical = 'TW'; //previous was tw -> two-wheeler -> tw
        } else if (location.pathname.indexOf('commercial-vehicle') > -1) {
            vertical = 'CV';
        } else if (location.pathname.indexOf('health-insurance') > -1) {
            vertical = 'health';
        } else if (location.pathname.indexOf('life-insurance') > -1) {
            vertical = 'life';
        }
        return vertical;
    }

    function _goToProfile(vertical, withRegNo) {
        setItemSession(vertical, 'regnoView', withRegNo);
        if (withRegNo) {
            setItemSession(vertical, 'premiumRequest', {});
        }
        switch (vertical) {
            case ('FW'):
                window.location.href = base_url + '/car-insurance/car-profile';
                break;
            case ('TW'):
                window.location.href = base_url + '/two-wheeler-insurance/two-wheeler-profile';
                break;
            case ('CV'):
                window.location.href = '/two-wheeler-insurance/two-wheeler-profile';
                break;
            case ('health'):
                if (getTabAttr === 'buy-new-policy') {
                    window.location.href = base_url + '/health-insurance/health-profile/profile-gender';
                } else if (getTabAttr === 'existing-policy') {
                    window.location.href = base_url + '/health-insurance/health-profile/profile-gender';
                } else if (getTabAttr === 'change-insurer') {
                    window.location.href = base_url + '/health-insurance/health-profile/profile-gender';
                }
                break;
            case ('life'):
                if (getTabAttr === 'term-plan') {
                    window.location.href = base_url + '/life-insurance/profile/term/about-insured';
                } else if (getTabAttr === 'investment-plan') {
                    window.location.href = base_url + '/life-insurance/profile/investment-planning/about-insured';
                } else if (getTabAttr === 'saving-plan') {
                    window.location.href = base_url + '/life-insurance/profile/saving-for-child/about-insured';
                } else if (getTabAttr === 'retirement') {
                    window.location.href = base_url + '/life-insurance/profile/retirement/about-insured';
                }
                //window.location.href = base_url + '/life-insurance/profile/term/gender';
                break;
            default: console.log('error');
        }

    }


    function _takeToProfileWithRegistration() {
        var vertical = getVerticalNameFormPageUrl();
        var regNumber = $('input[name="regno"]').val().toUpperCase();
        if (!regNumber) {
            $('#errMsg').html('Please enter complete registration number');
            return;
        }
        if (_isValidRegNo(regNumber)) {
            window.localStorage.setItem(vertical + 'registrationNo', regNumber);
            window.sessionStorage.setItem(vertical + 'registrationNo', regNumber);
            /*DataLayer 20210325 - start*/
            if(vertical=='FW'){
                dataLayer.push({'event': 'Registration Info', 'Product': 'Four-Wheeler Insurance', 'Registeration_Number': regNumber, });
            }
            if(vertical=='TW'){
                dataLayer.push({'event': 'Registration Info', 'Product': 'Two-Wheeler Insurance', 'Registeration_Number': regNumber, });
                
            }
            /*DataLayer 20210325 - end*/
            _goToProfile(vertical, true);
        } else {
            /*DataLayer 20210325 - start*/
            if(vertical=='FW'){
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({'event': 'errorMessage','Error_Message': 'Registration number is incorrect', 'Error_URL': 'https://www.turtlemint.com/car-insurance'});
            }
            if(vertical=='TW'){
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({'event': 'errorMessage','Error_Message': 'Registration number is incorrect', 'Error_URL': 'https://www.turtlemint.com/two-wheeler-insurance/'});
                
            }
            /*DataLayer 20210325 - end*/
            
            $('#errMsg').html('Enter valid registration number');
        }
    }
    function _isValidRegNo(registrationNo) {
        return /^[A-Za-z]{2}[-]?[0-9]{1,2}[-]?([A-Za-z]{0,3})[-]?[0-9]{4}$/.test(registrationNo);
    }
    $(window).on('load', function () {
        $('#yt-src').attr('src', 'https://www.youtube.com/embed/PxEPvi8BiOo?modestbranding=1&amp;rel=0&amp;cc_load_policy=1&amp;iv_load_policy=3&amp;fs=0&amp;controls=0');

    });

    $(function () {
        $('#with-regno').on('click', _takeToProfileWithRegistration);
        $('input[name="regno"]').keypress(function (e) {
            if (e.which == 13) {
                _takeToProfileWithRegistration();
            }
        });

        $('#without-reg-link').click(function () {
            var verticalName = getVerticalNameFormPageUrl();
            window.localStorage.setItem(verticalName + 'registrationNo', '');
            window.sessionStorage.setItem(verticalName + 'registrationNo', '');
            setItemSession(verticalName, 'registrationNo', '');
            setItemSession(verticalName, 'premiumRequest', {});
            _goToProfile(verticalName, false);

        });

        // $('#termPlan').on('click', _goToProfilePage);        

        $('.plan-box').on('click', function () {
            var verticalName = getVerticalNameFormPageUrl();
            getTabAttr = $(this).attr('data-url');
            _goToProfile(verticalName, false);
        });

        $('.overlay-bg').hide();
        $('.info-icon').on('click', function (e) {
            e.stopPropagation();
            $('.overlay-bg').show();
            $('.hover-content').addClass('showInfoModel').show();
        });

        $('.overlay-bg').on('click', function () {
            $('.hover-content').removeClass('showInfoModel').hide();
            $(this).hide();
        });
    });
})();
