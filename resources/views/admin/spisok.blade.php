@extends('administrator::layouts.master')

@section('title', 'Торговые точки')

@section('content.header')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Торговые точки</h3>
            </div>

            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            {{-- <li><a href="{{ route('administrator.spravochniki.magaziny.sozdanie') }}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Добавить</span></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card card-preview">
        <div class="card-inner">
            <table id="magaziny" class="table">
                <thead>
                    <tr>
                        <th>Наименовани</th>
                        <th>Адрес</th>
                        <th>Количество продавцов</th>
                        <th>Телефон</th>
                        <th>Дата создания</th>
                        <th>Клиенты</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

{{-- @push('scripts')
    <script>
        $(function () {
            let table = NioApp.DataTable('#magaziny', {
                columns: [
                    { data: 'gruppa_magazinov', orderable: false },
                    { data: 'adres', orderable: false },
                    { data: 'vladelec' },
                    { data: 'telefon', orderable: false },
                    { data: 'created_at', className: 'text-center', width: '110px' },
                    { data: 'action', orderable: false, className: 'table-actions', width: '100px' }
                ],
                order: [[4, 'desc']],
                ajax: {
                    url: route('administrator.spravochniki.magaziny.spisok'),
                }
            });

            table.on('click', '.udalit', function () {
                if (confirm('Вы действительно хотите удалить запись?')) {
                    $.ajax({
                        url: route('administrator.spravochniki.magaziny.udalit', $(this).data('id')),
                        type: 'DELETE'
                    }).done(function () {
                        table.ajax.reload();

                        NioApp.Toast('Запись успешно удалена', 'success');
                    }).fail(function () {
                        NioApp.Toast('Невозможно удалить запись', 'error');
                    });
                };
            });
        })
    </script>
@endpush --}}
