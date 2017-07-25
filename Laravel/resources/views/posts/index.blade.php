@extends('master')

@section('content')
    <div id="post" class="col-xs-12 col-xs-offset-0 col-md-7 col-md-offset-1">
        <h1>{{ $post->title }}</h1>
    
        {!! $post->description !!}
        
        <img src="{{ asset($post->imagePath) }}" alt="" width="100%">
        
        {{--<p>E você, está preparado para ser um desenvolvedor do futuro?</p>--}}
        {{----}}
        {{--<p>Torne-se um de nós. receba na sua caixa de entrada referências sobre três conhecimentos essenciais para qualquer--}}
            {{--desenvolvedor do futuro.--}}
            {{--são conceitos, artigos, cursos e livros selecionados, sobre assuntos que você não pode deixar de saber.--}}
            {{--a partir de agora, é com você.--}}
            {{--see you soon.</p>--}}
    </div>
    
    <div class="col-sm-12 col-md-4 sidebar-right">
    
    </div>
@endsection