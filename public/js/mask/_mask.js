var Mask = function() {
    let $loc = new Array();
    let $url = './public/js/libary/tellinput'

    this.flag = function($coord = ".js-input-flag") {
        if (document.querySelector($coord)) {
            document.addEventListener('DOMContentLoaded', function() {
                let input = document.querySelectorAll($coord);
                for (let itens of input) {
                    window.intlTelInput(itens, {
                        utilsScript: $url + "/utils.js",
                    });
                }
            });
        }
    }

    this.mask = function($obj = "00/00/0000", $coord = ".js-input-date") {
        if (document.querySelector($coord)) {
            document.addEventListener('DOMContentLoaded', function() {
                jQuery($coord).mask($obj);
            })
        }
    }

    this.cel = function($coord = ".js-input-celular") {
        let $obj;
        if (document.querySelector($coord)) {
            document.addEventListener("DOMContentLoaded", function() {
                let input = document.querySelectorAll($coord);
                for (let itens of input) {
                    window.intlTelInput(itens, {
                        customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                            $obj = selectedCountryPlaceholder;
                            $obj = $obj.replace(/1|2|3|4|5|6|7|8|9/gi, '0')
                            jQuery($coord).mask($obj);
                            return selectedCountryPlaceholder;
                        },
                        utilsScript: $url + "/utils.js",
                        initialCountry: "br",
                    });
                }

            })
        }
    }
}

let cmd = new Mask();


cmd.flag(); //Exemplo de campo só com bandeiras(sem a mascara)
cmd.cel(); //Exemplo de campo com bandeiras e filtro de mascara
cmd.mask(); //Exemplo de campo com mascara de data
cmd.mask("00000-000", ".js-input-cep"); //Exemplo de campo com mascara de CEP
cmd.mask("000.000.000-00", ".js-input-cpf"); //Exemplo de campo com mascara de CPF
cmd.mask("00.000.000/0001-00", ".js-input-cnpj"); //Exemplo de campo com mascara de CNPJ
cmd.mask("00.000.000-0", ".js-input-rg"); //Exemplo de campo com mascara de RG
cmd.mask("00/00/0000", ".js-input-data"); //Mascara de data
cmd.mask("(00) 9 0000 - 0000", ".js-input-tel"); //Mascara de Telefone
cmd.mask("00h00m", ".js-input-horario"); //Mascara de Horário





/* NEWS */




export {
    Mask
}