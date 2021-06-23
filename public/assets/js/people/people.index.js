const PeopleIndex = function () {
    // Listing the registers
    let peopleTable = () => {
        let peopleTable = $("#peopleTable").DataTable()

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
            message: 'Buscando dados...'
        });

        request('GET', '/api/people_api', null).then(response => {
            peopleTable.clear()

            if (response.status === 200 && response.data.length > 0) {
                response.data.map(item => {
                    peopleTable.row.add([
                        item.id, item.name, item.cpf, item.uf, item.city, item.birth, item.academic_level, item.created_at,
                        `<button class="btn btn-outline-primary btn-sm" id="btnPeopleShow" data-toggle="modal" data-target="#peopleshow" data-id="${item.id}"><i class="fas fa-eye"></i></button>`
                    ])
                })

                setTimeout($.unblockUI, 2000);

                peopleTable.draw()
            }

            setTimeout($.unblockUI, 2000);
        }).catch(error => {
            if (error.response.status === 400) {
                setTimeout($.unblockUI, 2000);
                swal('Atenção', error.response.data.message, 'error')
            } else {
                setTimeout($.unblockUI, 2000);
                swal('Atenção', 'Houve um problema ao realizar o cadastro do usuário.', 'error')
            }
        })
    }

    // View of record details
    let showPeople = () => {
        $('#peopleshow').on('shown.bs.modal', function (e) {
            let id = $(e.relatedTarget).data('id')
            let obj_modal = $(this).closest('.modal')

            let url = `api/people_api/${id}`

            $(this).find('h5.modal-title').text('Detalhes de Cadastro')

            // Get in data
            request('GET', url, null).then(response => {

                if (response.status === 200) {
                    obj_modal.find('.modal-body').html('')
                    obj_modal.find('.modal-body').html(response.data)
                }
            }).catch(error => {
                if (error.response.status === 400) {
                    swal('Atenção.', error.response.data.message, 'error')
                } else {
                    swal('Atenção.', 'Houve um error.', 'error')
                }
            })
        })
    }

    return {
        init: function () {
            initTable()
            peopleTable()
            showPeople()
        }
    }
}()

$(document).ready(function () {
    PeopleIndex.init()
})
