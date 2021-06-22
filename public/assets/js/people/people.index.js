const PeopleIndex = function () {
    let initPlugins = () => {
        initTable()
    }
    let peopleTable = () => {
        request('GET', '/api/people_api', null).then(response => {
            let peopleTable = $("#peopleTable").DataTable()
            peopleTable.clear()

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

            if (response.status === 200 && response.data.length > 0) {
                response.data.map(item => {
                    peopleTable.row.add([
                        item.id, item.name, item.cpf, item.uf, item.city, item.birth, item.academic_level, item.created_at
                    ])
                })

                setTimeout($.unblockUI, 2000);

                peopleTable.draw()
            }
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

    return {
        init: function () {
            initPlugins()
            peopleTable()
        }
    }
}()

$(document).ready(function () {
    PeopleIndex.init()
})
