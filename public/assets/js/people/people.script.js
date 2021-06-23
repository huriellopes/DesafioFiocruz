const PeopleScripts = function () {

    const form = $('form[name=cadastro]')

    let rules = {
        name: {
            required: true,
        },
        cpf: {
            required: function () {
                return form.find('input[name=nationality_id]:checked').val() === '2'
            },
        },
        state_id: {
            required: function () {
                return form.find('input[name=nationality_id]:checked').val() === '2'
            },
        },
        city: {
            required: function () {
                return form.find('input[name=nationality_id]:checked').val() === '2'
            },
        },
        birth: {
            required: true,
        },
        academic_id: {
            required: true,
        }
    }

    messages = {
        name: {
            required: 'O campo Nome Completo é obrigatório.',
        },
        cpf: {
            required: 'O campo CPF é obrigatório.',
        },
        state_id: {
            required: 'O campo UF é obrigatório.',
        },
        city: {
            required: 'O campo Munícipio é obrigatório.',
        },
        birth: {
            required: 'O campo Data de Nascimento é obrigatório.',
        },
        academic_id: {
            required: 'O campo Nível Acadêmico é obrigatório.',
        }
    }

    $.validator.addMethod("validaCpf", function (value, element) {
        const cpf = value.replace(/[^\d]+/g, '');

        let soma = 0;
        let resto = 0;

        if (cpf === '00000000000' ||
            cpf === '11111111111' ||
            cpf === '22222222222' ||
            cpf === '33333333333' ||
            cpf === '44444444444' ||
            cpf === '55555555555' ||
            cpf === '66666666666' ||
            cpf === '77777777777' ||
            cpf === '88888888888' ||
            cpf === '99999999999') {
            return false;
        }

        for (let i = 1; i <= 9; i++) {
            soma = soma + parseInt(cpf.substring(i-1, i)) * (11 - i);
        }
        resto = (soma * 10) % 11;

        if ((resto === 10) || (resto === 11)) {
            resto = 0;
        }

        if (resto !== parseInt(cpf.substring(9, 10))) {
            return false;
        }

        soma = 0;

        for (let i = 1; i <= 10; i++) {
            soma = soma + parseInt(cpf.substring(i-1, i)) * (12 - i);
        }

        resto = (soma * 10) % 11;

        if ((resto === 10) || (resto === 11)) {
            resto = 0;
        }

        return resto === parseInt(cpf.substring(10, 11));

    }, "O CPF informado é inválido.");

    return {
        rules,
        messages
    }
}()
