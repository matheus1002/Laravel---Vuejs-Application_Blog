@extends('layouts.app')

@section('content')
   <pagina tamanho="12">
        <painel titulo="Artigos">

            <p>
                <form class="form-inline text-center" action="{{route('site')}}" method="get">
                    <input type="search" class="form-control" name="busca" placeholder="Buscar" value="{{isset($busca) ? $busca : ''}}">
                    <button class="btn btn-info">Buscar</button>
                </form>
            </p>

            <div class="row">
                @foreach($lista as $key => $value)
                <artigocard
                    titulo="{{str_limit($value->titulo,25,'...')}}"
                    descricao="{{str_limit($value->descricao,40,'...')}}"
                    link="{{route('artigo',[$value->id,str_slug($value->titulo)])}}"
                    imagem="https://images.unsplash.com/photo-1501504905252-473c47e087f8?ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80"
                    data="{{$value->data}}"
                    autor="{{$value->autor}}"
                    sm="6"
                    md="4">
                </artigocard>
                @endforeach
            </div>
            <div align="center"> 
                {{$lista}}
            </div>
        </painel>
   </pagina>
@endsection
