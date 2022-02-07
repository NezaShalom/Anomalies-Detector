$(document).ready(function() {

const firebaseConfig = {
    apiKey: "AIzaSyBoT1KwC6IbVTESIIqT6021xoVz1KTdWmQ",
    authDomain: "anrit-d1976.firebaseapp.com",
    databaseURL: "https://anrit-d1976-default-rtdb.firebaseio.com",
    projectId: "anrit-d1976",
    storageBucket: "anrit-d1976.appspot.com",
    messagingSenderId: "448925622581",
    appId: "1:448925622581:web:60cf598da56bc1d6822c7c",
    measurementId: "G-00NHZYBPZ0"
  };
  
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  
  window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container', {
    'size': 'invisible',
    'callback': function (response) {
        // reCAPTCHA solved, allow signInWithPhoneNumber.
        console.log('recaptcha resolved');
    }
});
onSignInSubmit();
});



function onSignInSubmit() {
    $('#verifPhNum').on('click', function() {
        let phoneNo = '';
        var code = $('#codeToVerify').val();
        console.log(code);
        $(this).attr('disabled', 'disabled');
        $(this).text('Processing..');
        confirmationResult.confirm(code).then(function (result) {
                    alert('Succecss');
            var user = result.user;
            console.log(user);


            // ...
        }.bind($(this))).catch(function (error) {
        
            // User couldn't sign in (bad verification code?)
            // ...
            $(this).removeAttr('disabled');
            $(this).text('Invalid Code');
            setTimeout(() => {
                $(this).text('Verify Phone No');
            }, 2000);
        }.bind($(this)));

    });


    $('#getcode').on('click', function () {
        var phoneNo = $('#number').val();
        console.log(phoneNo);
        // getCode(phoneNo);
        var appVerifier = window.recaptchaVerifier;
        firebase.auth().signInWithPhoneNumber(phoneNo, appVerifier)
        .then(function (confirmationResult) {

            window.confirmationResult=confirmationResult;
            coderesult=confirmationResult;
            console.log(coderesult);
        }).catch(function (error) {
            console.log(error.message);

        });
    });
    }