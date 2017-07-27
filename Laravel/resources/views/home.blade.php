@extends('master')

@section('content')
    <main>
        <div class="col-sm-12">
            <div class="header-html-tagged p-b-15" style="box-shadow: 0px 12px 50px #101010;">
                1 &nbsp;&nbsp;&lsaquo;<span class="pink-label">html</span>&rsaquo; <br>
                2 &nbsp;&nbsp;&lsaquo;<span class="pink-label">head</span>&rsaquo;<br>
                3 &nbsp;&nbsp;&lsaquo;<span class="pink-label">title</span>&rsaquo; os devs do futuro são &lsaquo;/<span class="pink-label">title</span>&rsaquo; <br>
                4 &nbsp;&nbsp;&lsaquo;<span class="pink-label">meta</span> <span class="dark-green-label">name</span>="<span class="yellow-label">description</span>" <span class="dark-green-label">content</span>="<span class="dark-blue-label">colaborativos.</span> <span class="yellow-label">conhecimento não é exclusividade. transformam informação em inteligência, e passam adiante - sempre.</span><br>
                5 &nbsp;&nbsp;<span class="dark-blue-label">plurais.</span> <span class="yellow-label">sua linguagem é universal, jamais restrita a um perfil específico.</span><br>
                6 &nbsp;&nbsp;<span class="dark-blue-label">humanos.</span> <span class="yellow-label">com máquinas cada vez mais similares a nós, são capazes de sentir e entender o que nos faz diferentes.</span><br>
                7 &nbsp;&nbsp;<span class="dark-blue-label">realizadores.</span> <span class="yellow-label">criam e executam em diversos contextos, cada vez mais rápido."</span> /&rsaquo;<br>
                8 &nbsp;&nbsp;&lsaquo;<span class="pink-label">script</span> <span class="dark-green-label">type</span>="<span class="yellow-label">text/javascript</span>" &rsaquo;<br>
                9 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="dark-blue-label">function</span>&nbsp;<span class="dark-green-label">val</span>()<br>
                10 &nbsp;&nbsp;&nbsp;&nbsp;{<br>
                11 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="dark-blue-label">return</span> <span class="yellow-label">"devs do futuro estão criando um novo mundo."</span><br>
                12 &nbsp;&nbsp;&nbsp;&nbsp;}<br>
            </div>
        </div>
        <div class="container call-to-action">
            <div class="full-height fill-width">
                <a href="{{ sprintf("%s%s", route('register.form'), '?utm_source=website&utm_campaign=Bot%C3%A3o%20Commit') }}" class="fill-height">
                    <div class="col-sm-12 col-sm-offset-0 col-md-6 col-md-offset-1 fill-height v-align-content-center">
                        <h3 class="white-label">VOCÊ ESTÁ PREPARADO PARA SE TORNAR ESSE PROFISSIONAL?</h3>
                    </div>
                    <div class="col-sm-12 col-md-5 fill-height v-align-content-center">
                        <span class="dark-blue-label commit-here-button">
                            [&nbsp;&nbsp;&nbsp;COMMIT HERE&nbsp;&nbsp;&nbsp;]
                            {{--<a href="{{ route('register.form') }}">[&nbsp;&nbsp;&nbsp;COMMIT HERE&nbsp;&nbsp;&nbsp;]</a>--}}
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </main>
    <br><br>
    <div class="container">
        {{--<div class="col-sm-12">--}}
            {{--<div class="big-caption">--}}
                {{--<h3 class="pink-label">mantenha a calma, jovem padawn.</h3>--}}
                {{--<p>estamos fazendo o download para que em breve você tenha conteúdos incríveis vindos direto do futuro.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        @foreach($posts as $post)
            <div class="col-sm-12 col-md-4">
                <div class="caption">
                    <a href="{{ route(sprintf('%s.index', $post->area), ['slug' => $post->slug]) }}">
                        <p class="white-label">{{ $post->getAreaLabel() }}</p>
                        <h3 class="white-label">{{ str_limit($post->title, 55) }}</h3>
                        <p class="white-label">{!! str_limit($post->description) !!}</p>
                        <div class="thumbnail">
                            <img class="thumbnail img-responsive" src="{{ asset($post->imagePath) }}" alt="...">
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
@endsection