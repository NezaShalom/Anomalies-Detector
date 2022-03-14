$(function(){
    $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate : '<span class="title">#title#</span>',
        labels: {
            previous : 'Previous',
            next : 'Next Step',
            finish : 'Submit',
            current : ''
        },
        onStepChanging: function (event, currentIndex, newIndex) { 
            var fullname = $('#first_name').val() + ' ' + $('#last_name').val();
            var phone = $('#phone').val();
            var email = $('#emai').val();
            var location = $('#location').val();
            var date = $('#date').val();
            var time = $('#time').val();

            $('#fullname-val').text(fullname);
            $('#phone-val').text(phone);
            $('#email-val').text(email);
            $('#location-val').text(location);
            $('#date-val').text(date);
            $('#time-val').text(time);

            return true;
        }
    });
    $("#date").datepicker({
        dateFormat: "MM - DD - yy",
        showOn: "both",
        buttonText : '<i class="zmdi zmdi-chevron-down"></i>',
    });



});
