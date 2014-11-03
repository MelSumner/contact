$(document).ready(function() {
    $('#demoForm').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: "Oops! Can't leave this one empty!"
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'I bet your name is longer than 6 characters and less than 30 characters long!'
                    },
                    regexp: {
                        regexp: /[a-zA-Z]+[\s\S]/,
                        message: 'Your name can only consist of letters, sorry!'
                    }  
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Oops! Forgot your email address!'
                    },
                    emailAddress: {
                        message: "Hmmm. That doesn't look like a valid email address."
                    }
                }
            }
        }
    });
});