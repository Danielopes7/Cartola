@extends('adminlte::page')

@section('title', 'Lista Jogadores')

@section('content_header')
    <h1>Jogadores</h1>
@stop

@section('content')
      <p>Lista com detalhes de Cartola PRO</p>

<div class="card">
<div class="card-body">
    <table id="jogadores" class="table table-hover display nowrap" width="100%">
        <thead>
            <tr role="row">
                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Time</th>
                <th data-priority="2" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nome</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Status</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Média</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Preço</th>
                <th  data-priority="1" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 89px;">Min/ Valorizar</th>
            </tr>
        </thead>
        <tbody>
            {{-- @for ($i = 0; $i < 780; $i++)
                
                </tr><tr class="even">
                <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                <td>Firefox {{$i}}</td>
                <td>Win 2k+ / OSX.3+</td>
                <td>1.9</td>
                <td>2</td>
                <td>2
                </td>
            @endfor --}}
            @foreach ( $jogadores as $key => $jogador) 
                    <tr class="even">
                        <td>{{ $jogador["clube_id"]}}</td>
                        <td>{{ $jogador["apelido"]}}</td>
                        @if ($jogador["status_id"] == 7)
                            <td><i class="fas fa-fw fa-check "></i></td>
                        @else
                            <td></td>                            
                        @endif
                        <td>{{ $jogador["media_num"]}}</td>
                        <td>{{ $jogador["preco_num"]}}</td>
                        <td>{{ $jogador["minimo_para_valorizar"]}}</td>
                    </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ secure_asset('css/AdminLTE.min.css') }}">

@stop

@section('js')
    <script>
    
        $(function () {
            $('#jogadores').DataTable({
            "paging": true,
            "pageLength": 20,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Portuguese-Brasil.json"
            }
            });
        });
    </script>
@stop