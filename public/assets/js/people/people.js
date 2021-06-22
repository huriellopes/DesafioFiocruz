const People = function () {
    let initFunctions = () => {
        masks("#cpf", "000.000.000-00")
        masks("#birth", "00/00/0000")
    }

    let searchCities = () => {
        $("#state_id").on('change', function () {
            let url = '/api/states'
            let estado = $(this).val();

            const data = {
                uf: estado
            }
            request('POST', url, data).then(response => {
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
                    message: 'Buscando os municipios!'
                });

                if (response.status === 200 && response.data.length > 0) {
                    setTimeout($.unblockUI, 2000);
                    $("#city").val("")
                    $("#cities").empty()

                    response.data.map(city => {
                        $("#cities").append(`<option value="${city.name}">${city.name}</option>`)
                    })
                }
            })
        })
    }

    let nationalitiesChange = () => {
        $("form[name=cadastro]").on('change', 'input[name=nationality_id]', function (e) {
            let nationality = $(this).val()

            switch (nationality) {
                case '1':
                    $("form[name=cadastro]").find('.cpf').fadeOut()
                    $("form[name=cadastro]").find('.uf').fadeOut()
                    $("form[name=cadastro]").find('.city').fadeOut()
                    break;
                case '2':
                    $("form[name=cadastro]").find('.cpf').fadeIn()
                    $("form[name=cadastro]").find('.uf').fadeIn()
                    $("form[name=cadastro]").find('.city').fadeIn()
                    break;
            }
        })
    }

    let sendForm = () => {
        let form = $('form[name=cadastro]')

        formValidate(form, PeopleScripts.rules, PeopleScripts.messages, create)

        function create () {
            request('POST', form.attr('action'), form.serialize()).then(response => {
                if (response.status === 201) {
                    swal({
                        title: "Ótimo!",
                        text: `${response.data.message}`,
                        type: "success",
                        confirmButtonColor: '#DD6B55',
                        confirmButtonText: 'OK',
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },function(isConfirm){
                        if (isConfirm) {
                            location.reload()
                            window.location = '/people'
                        }
                    })
                }
            }).catch(error => {
                if (error.response.status === 400) {
                    setTimeout($.unblockUI, 2000);
                    swal('Atenção', error.response.data.message, 'error')
                } else {
                    setTimeout($.unblockUI, 2000);
                    swal('Atenção', 'Houve um problema ao realizar o cadastro.', 'error')
                }
            })
        }
    }

    return {
        init: function () {
            initFunctions()
            searchCities()
            nationalitiesChange()
            sendForm()
        }
    }
}()

$(document).ready(function () {
    People.init()
})


