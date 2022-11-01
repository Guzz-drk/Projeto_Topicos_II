@extends('adminlte::page')

@section('plugins.Sweetalert2', true)

@section('js')
    <script>
        function ConfirmaExclusao(id) {
            Swal.fire({
                title: 'Confirma a exclusão?',
                text: "Esta ação não poderá ser revertida!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, excluir!',
                cancelButtonText: 'Cancelar!'
            }).then(function(isConfirm) {
                    if (isConfirm.value) {
                        $.get('/' + @yield('table-delete') + '/' + id + '/destroy', function(data) {
                                console.log(data);
                                if (data.status == 200) {
                                    Swal.fire(
                                        'Deletado!',
                                        'Exclusão confirmada.',
                                        'success'
                                    ).then(function() {
                                        window.location.reload();
                                    });
                                } else
                                    Swal.fire(
                                        'Erro!',
                                        'Não foi possível excluir o registro.',
                                        'error'
                                    );
                            }
                        }
                    })
            }
    </script>
@stop
