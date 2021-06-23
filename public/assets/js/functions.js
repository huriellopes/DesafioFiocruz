const Functions = function () {
    request = function (type, url, dados = null) {
        return axios({
            method: type,
            url: url,
            data: dados,
            dataType: 'JSON',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
    }

    dateFormat = function (data, format = 'DD/MM/YYYY') {
        return dateFns.format(data, format, { timeZone: 'America/Sao_Paulo', })
    }

    masks = function ($field, $mask) {
        return $(`${$field}`).mask($mask);
    }

    initTable = () => {
        $('.datatables').DataTable({
            "order": [],
            "destroy": true,
            "processing": true,
            "serverSide": false,
            "responsive": true,
            "oLanguage": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            },
        });
    }

    formValidate = function (form, rules, messages, callback) {
        form.on('submit', function (e) {
            e.preventDefault();
        }).validate({
            ignore: "",
            debug: false,
            rules: rules,
            messages: messages,
            errorElement: "div",
            validClass: 'is-valid',
            errorClass: 'is-invalid',
            focusInvalid: true,
            errorPlacement: function (error, element) {
                error.addClass( "invalid-feedback");
                error.insertAfter(element);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).addClass(validClass).removeClass(errorClass);
            },
            submitHandler: function () {
                $.blockUI({
                    css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: '#000',
                        '-webkit-border-radius': '10px',
                        '-moz-border-radius': '10px',
                        opacity: .5,
                        color: '#ffffff'
                    },
                    message: 'Validando o Formulário!'
                });

                callback(form);
            }
        });
    }
}();
