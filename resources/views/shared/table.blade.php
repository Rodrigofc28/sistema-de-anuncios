@extends('layout.component')
@section('page')
<div class="col-lg-12">
    <div class="row m-auto">
        <h3 class="float-left">{{ $model_name_plural }}: </h3>
    </div>
    <div class="row">
        <div class="input-group col-lg-8 mb-3">
            @if ($habilitar_pesquisa)

            <input type="text" class="form-control search-input" placeholder="{{ $pesquisar }}"
                aria-label="{{ $pesquisar }}" aria-describedby="basic-addon2" >
            <div class="input-group-append">

                <button class="btn btn-outline-secondary search-button" type="button" value="{{$route_search_name}}">
                    <i class="fas fa-fw fa-search"></i> Pesquisar</button>
            </div>

            @endif
        </div>
        
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead align="center">
                <tr>
                    @foreach ($ths as $th)
                    <th>{{ $th }}</th>
                    @endforeach
                    <th>Cadastrar usuário</th>
                    <th>Deletar pedido do usuário</th>
                    
                </tr>
            </thead>
            <tbody align="center" class="table-search">
                @yield('table-content')
            </tbody>
        </table>
    </div>
</div>

@endsection