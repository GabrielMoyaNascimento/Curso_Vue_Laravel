@extends('app.layouts.basico')

@section('titulo', 'Pedido')

@section('conteudo')
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Pedido - Visualizar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('pedido.index')}}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <table border="1" style="text-align: left">
                    <tr>
                        <td>ID:</td>
                        <td>{{ $pedido->id }}</td>
                    </tr>
                    <tr>
                        <td>Nome:</td>
                        <td>{{ $pedido->cliente_id }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection