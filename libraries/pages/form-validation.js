$(document).ready(function () {
// Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }
    ;
    $('#captchaOperation').html([randomNumber(1, 20), '+', randomNumber(1, 30), '='].join(' '));
    //ADMIN USER MODULE
    $('#registerUser').bootstrapValidator({
        message: 'Este Valor No es valido!',
        fields: {
            txtUser: {
                message: 'El Nombre De Usuario No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El nombre de Usuario Es Requerido y no Puede estar Vacio!'
                    },
                    stringLength: {
                        min: 5,
                        max: 15,
                        message: 'El nombre De Usuario Debe Ser Minimo 5 y maximo 15 caracteres!'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'El Nombre De Usuario solo Permite Caracteres Alfanumericos, No Simbolos!'
                    }
                }
            },
            selectRolesNew: {
                message: 'El Rol No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El Rol Es Requerido y no Puede estar Vacio!'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'El  Rol solo Permite Caracteres Alfanumericos, No Simbolos!'
                    }
                }
            },
            txtPassword1: {
                validators: {
                    notEmpty: {
                        message: 'El Password Es Requerido Y No Puede estar Vacio!'
                    },
                    identical: {
                        field: 'txtPassword2',
                        message: 'Los Password Ingresados no Son Iguales!'
                    },
                    different: {
                        field: 'txtUser',
                        message: 'El Password No Puede Ser Igual Al Nombre De Usuario!'
                    }
                }
            },
            txtPassword2: {
                validators: {
                    notEmpty: {
                        message: 'La Confirmacion De Password Es Requerido Y No Puede estar Vacio!'
                    },
                    identical: {
                        field: 'txtPassword1',
                        message: 'Los Password Ingresados no Son Iguales!'
                    },
                    different: {
                        field: 'txtUser',
                        message: 'El Password No Puede Ser Igual Al Nombre De Usuario!'
                    }
                }
            }
        }
    });
    $('#updateUser').bootstrapValidator({
        message: 'Este Valor No es valido!',
        fields: {
            txtUserUpdate: {
                message: 'El Nombre De Usuario No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El nombre de Usuario Es Requerido y no Puede estar Vacio!'
                    },
                    stringLength: {
                        min: 5,
                        max: 15,
                        message: 'El nombre De Usuario Debe Ser Minimo 5 y maximo 15 caracteres!'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'El Nombre De Usuario solo Permite Caracteres Alfanumericos, No Simbolos!'
                    }
                }
            },
            selectRolesUpdate: {
                message: 'El Rol No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El Rol Es Requerido y no Puede estar Vacio!'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'El Tipo De Rol solo Permite Caracteres Alfanumericos, No Simbolos!'
                    }
                }
            }
        }
    });
    $('#resetUserPass').bootstrapValidator({
        message: 'Este Valor No es valido!',
        fields: {
            txtPassword1Update: {
                validators: {
                    notEmpty: {
                        message: 'El Password Es Requerido Y No Puede estar Vacio!'
                    },
                    identical: {
                        field: 'txtPassword2Update',
                        message: 'Los Password Ingresados no Son Iguales!'
                    }
                }
            },
            txtPassword2Update: {
                validators: {
                    notEmpty: {
                        message: 'La Confirmacion De Password Es Requerido Y No Puede estar Vacio!'
                    },
                    identical: {
                        field: 'txtPassword1Update',
                        message: 'Los Password Ingresados no Son Iguales!'
                    }
                }
            }
        }
    });
    //ADMIN ROLE MODULE
    $('#registerRole').bootstrapValidator({
        message: 'Este Valor No es valido!',
        fields: {
            txtIdRole: {
                message: 'El Nombre Del Rol No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El nombre Del Rol Es Requerido y no Puede estar Vacio!'
                    },
                    stringLength: {
                        min: 5,
                        max: 20,
                        message: 'El Nombre Del Rol Debe Ser Minimo 5 y maximo 20 caracteres!'
                    }
                }
            },
            txtDescRole: {
                message: 'El Rol No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El Rol Es Requerido y no Puede estar Vacio!'
                    },
                    stringLength: {
                        min: 5,
                        max: 50,
                        message: 'La Descripcion Del Rol Debe Ser Minimo 5 y maximo 20 caracteres!'
                    }
                }
            }
        }
    });
    $('#updateRole').bootstrapValidator({
        message: 'Este Valor No es valido!',
        fields: {
            txtIdRoleUpdate: {
                message: 'El Nombre Del Rol No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El nombre Del Rol Es Requerido y no Puede estar Vacio!'
                    },
                    stringLength: {
                        min: 5,
                        max: 20,
                        message: 'El Nombre Del Rol Debe Ser Minimo 5 y maximo 20 caracteres!'
                    }
                }
            },
            txtDescRoleUpdate: {
                message: 'El Rol No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El Rol Es Requerido y no Puede estar Vacio!'
                    },
                    stringLength: {
                        min: 5,
                        max: 50,
                        message: 'La Descripcion Del Rol Debe Ser Minimo 5 y maximo 20 caracteres!'
                    }
                }
            }
        }
    });
    //ADMIN CLIENTE MODULE
    $('#registerCustomer').bootstrapValidator({
        message: 'Este Valor No es valido!',
        fields: {
            txtIdCustomer: {
                message: 'El Numero De documento No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El Numero De documento Es Requerido y no Puede estar Vacio!'
                    },
                    digits: {
                        message: 'Solo Se Permite Digitos Para El Numero De documento'
                    },
                    stringLength: {
                        min: 7,
                        max: 15,
                        message: 'El Numero De documento Debe Ser Minimo 7 y maximo 15 caracteres!'
                    }
                }
            },
            selectDocumentTypeNew: {
                message: 'El Valor No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El Tipo De documento Es Requerido y no Puede estar Vacio!'
                    }
                }
            },
            txtNameCustomer: {
                message: 'El Valor No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El Nombre del Cliente Es Requerido y no Puede estar Vacio!'
                    },
                    stringLength: {
                        min: 5,
                        max: 25,
                        message: 'El Nombre del Cliente Debe Ser Minimo 5 y maximo 45 caracteres!'
                    }
                }
            },
            selectDepartmentsNew: {
                message: 'El Valor No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El Departamento Es Requerido y no Puede estar Vacio!'
                    }
                }
            },
            selectTownshipNew: {
                message: 'El Valor No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'La Ciudad Es Requerido y no Puede estar Vacio!'
                    }
                }
            },
            txtAddressCustomer: {
                message: 'El Valor No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El Nombre del Cliente Es Requerido y no Puede estar Vacio!'
                    },
                    stringLength: {
                        min: 5,
                        max: 50,
                        message: 'El Nombre del Cliente Debe Ser Minimo 5 y maximo 50 caracteres!'
                    }
                }
            },
            txtEmailCustomer: {
                validators: {
                    notEmpty: {
                        message: 'El Email Es Requerido y no Puede estar Vacio!'
                    },
                    emailAddress: {
                        message: 'No Es Un Correo Valido!, Verifique'
                    }
                }
            },
            txtPhoneCustomer: {
                validators: {
                    digits: {
                        message: 'solo Se Permiten Ingresar Digitos!'
                    }
                }
            },
            txtOtherPhoneCustomer: {
                validators: {
                    digits: {
                        message: 'solo Se Permiten Ingresar Digitos!'
                    }
                }
            },
            txtNameCustomerContact: {
                message: 'El Valor No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El Nombre De Contacto del Cliente Es Requerido y no Puede estar Vacio!'
                    },
                    stringLength: {
                        min: 5,
                        max: 25,
                        message: 'El Nombre De Contacto del Cliente Debe Ser Minimo 5 y maximo 25 caracteres!'
                    }
                }
            },
            txtObservationsCustomerContact: {
                message: 'El Valor No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El Nombre De Contacto del Cliente Es Requerido y no Puede estar Vacio!'
                    },
                    stringLength: {
                        min: 5,
                        max: 200,
                        message: 'El Nombre De Contacto del Cliente Debe Ser Minimo 5 y maximo 25 caracteres!'
                    }
                }
            }
        }
    });

    //ADMIN DIAMETER MODULE
    $('#registerDiameter').bootstrapValidator({
        message: 'Este Valor No es valido!',
        fields: {
            txtDescDiameter: {
                message: 'El Diametro No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El Diametro Es Requerido y no Puede estar Vacio!'
                    },
                    stringLength: {
                        min: 3,
                        max: 25,
                        message: 'El Diametro Debe Ser Minimo 3 y maximo 25 caracteres!'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'El Diametro solo Permite Caracteres Alfanumericos, No Simbolos!'
                    }
                }
            }
        }
    });

    $('#updateDiameter').bootstrapValidator({
        message: 'Este Valor No es valido!',
        fields: {
            txtIdDiameterUpdate: {
                message: 'El Diametro No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El Diametro Es Requerido y no Puede estar Vacio!'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'El Diametro solo Permite Caracteres Alfanumericos, No Simbolos!'
                    }
                }
            },
            txtDescDiameterUpdate: {
                message: 'El Diametro No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El Diametro Es Requerido y no Puede estar Vacio!'
                    },
                    stringLength: {
                        min: 3,
                        max: 25,
                        message: 'El Diametro Debe Ser Minimo 3 y maximo 25 caracteres!'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'El Diametro solo Permite Caracteres Alfanumericos, No Simbolos!'
                    }
                }
            }
        }
    });

    //ADMIN MANUFACTURE MODULE
    $('#registerManufacture').bootstrapValidator({
        message: 'Este Valor No es valido!',
        fields: {
            txtDescManufacture: {
                message: 'El Fabricante No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El Fabricante Es Requerido y no Puede estar Vacio!'
                    },
                    stringLength: {
                        min: 3,
                        max: 25,
                        message: 'El Fabricante Debe Ser Minimo 3 y maximo 25 caracteres!'
                    }
                }
            }
        }
    });

    $('#updateManufacture').bootstrapValidator({
        message: 'Este Valor No es valido!',
        fields: {
            txtDescManufactureUpdate: {
                message: 'El Fabricante No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El Fabricante Es Requerido y no Puede estar Vacio!'
                    },
                    stringLength: {
                        min: 3,
                        max: 25,
                        message: 'El Fabricante Debe Ser Minimo 3 y maximo 25 caracteres!'
                    }
                }
            }
        }
    });

    // ADMIN BAND MODULE
    $('#registerBrand').bootstrapValidator({
        message: 'Este Valor No es valido!',
        fields: {
            txtDescBrand: {
                message: 'La Marca No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'La Marca Es Requerido y no Puede estar Vacio!'
                    },
                    stringLength: {
                        min: 3,
                        max: 25,
                        message: 'La Marca Debe Ser Minimo 3 y maximo 25 caracteres!'
                    }
                }
            },
            selectManufactureNew: {
                message: 'El Valor No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El Fabricante Es Requerido y no Puede estar Vacio!'
                    }
                }
            }
        }
    });

    $('#updateBrand').bootstrapValidator({
        message: 'Este Valor No es valido!',
        fields: {
            txtIdBrandUpdate: {
                message: 'La Marca No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'La Marca Es Requerido y no Puede estar Vacio!'
                    },
                    stringLength: {
                        min: 3,
                        max: 25,
                        message: 'La Marca Debe Ser Minimo 3 y maximo 25 caracteres!'
                    }
                }
            },
            txtDescBrandUpdate: {
                message: 'La Marca No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'La Marca Es Requerido y no Puede estar Vacio!'
                    },
                    stringLength: {
                        min: 3,
                        max: 25,
                        message: 'La Marca Debe Ser Minimo 3 y maximo 25 caracteres!'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'La Marca solo Permite Caracteres Alfanumericos, No Simbolos!'
                    }
                }
            },
            selectManufactureUpdate: {
                message: 'El Valor No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El Fabricante Es Requerido y no Puede estar Vacio!'
                    }
                }
            }
        }
    });
    
    
    //EXAMPLE CONTACT FORM
    $('#contactForm').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
            name: {
                message: 'Name is not valid',
                validators: {
                    notEmpty: {
                        message: 'Name is required and can\'t be empty'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'Name can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            website: {
                validators: {
                    uri: {
                        message: 'The input is not a valid URL'
                    }
                }
            },
            Contactmessage: {
                validators: {
                    notEmpty: {
                        message: 'Message is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 6,
                        message: 'Message must be more than 6 characters long'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function (value, validator) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            }
        }
    });
    //Regular expression based validators
    $('#ExpressionValidator').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            website: {
                validators: {
                    uri: {
                        message: 'The input is not a valid URL'
                    }
                }
            },
            phoneNumber: {
                validators: {
                    digits: {
                        message: 'The value can contain only digits'
                    }
                }
            },
            color: {
                validators: {
                    hexColor: {
                        message: 'The input is not a valid hex color'
                    }
                }
            },
            zipCode: {
                validators: {
                    usZipCode: {
                        message: 'The input is not a valid US zip code'
                    }
                }
            }
        }
    });
    //Regular expression based validators
    $('#NotEmptyValidator').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            country: {
                validators: {
                    notEmpty: {
                        message: 'The country is required and can\'t be empty'
                    }
                }
            }
        }
    });
    //Regular expression based validators
    $('#IdenticalValidator').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'confirmPassword',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            }
        }
    });
    //Regular expression based validators
    $('#OtherValidator').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
            ages: {
                validators: {
                    lessThan: {
                        value: 100,
                        inclusive: true,
                        message: 'The ages has to be less than 100'
                    },
                    greaterThan: {
                        value: 10,
                        inclusive: false,
                        message: 'The ages has to be greater than or equals to 10'
                    }
                }
            }
        }
    });
    /// new task reception
          $('#formNewReception').bootstrapValidator({
        message: 'Este Valor No es valido!',
        fields: {
            txtIdClientReception: {
                message: 'El Nombre del Cliente No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'El nombre  del Cliente Es Requerido y no Puede estar Vacio!'
                    },
                    stringLength: {
                        min: 5,
                        max: 15,
                        message: 'El nombre  del Cliente Debe Ser Minimo 5 y maximo 15 caracteres!'
                    }
                    
                }
            },
            txtRefMeter: {
                message: 'El Rol No Es Valido',
                validators: {
                    notEmpty: {
                        message: 'La ferefencia del medidor Es Requerido y no Puede estar Vacio!'
                    }                    
                }
            },
            txtBarCodeReception: {
                validators: {
                    notEmpty: {
                        message: 'El Codigo de barras no puede estar vacio'
                    }
                }
            },
            txtSerialReception: {
                validators: {
                    notEmpty: {
                        message: 'El serial no puede estar vacio'
                    }
                }
            },
            form_cells: {
                validators: {
                    notEmpty: {
                        message: 'La cantidad de de medidores debe ser mayor a 1 hasta 24'
                    }
                }
            }
        }
    });
});