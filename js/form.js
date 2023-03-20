// $(document).ready(function () {
//     $('#form').validate();
//     $('#forms').validate();
// })


$(document).ready(function() {
    $('#form').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nom: {
                validators: {
                    notEmpty: {
                        message: 'The first name is required and cannot be empty'
                    }
                }
            },
            prenom: {
                validators: {
                    notEmpty: {
                        message: 'The last name is required and cannot be empty'
                    }
                }
            },
            codepostal: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            localite: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
            rue: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
            numero: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
            telephone: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            }
        },
        
    });
});

