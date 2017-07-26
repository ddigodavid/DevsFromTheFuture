@extends('master')

@section('head')
    @parent

    <link rel="stylesheet" href="{{ asset('css/posts.css') }}" >
@endsection

@section('content')
    <div id="post" class="col-xs-12 col-xs-offset-0 col-md-7 col-md-offset-1 text-justify">
        <h1>Construindo diversidade: como empoderar mulheres para programar</h1>
    
        <p>De acordo com o censo de 2010, as mulheres representam apenas 25% dos programadores. Apesar de um histórico de pouca participação na área, nos últimos anos as coisas têm mudado. As mulheres têm passado de observadoras à protagonistas, porém os números ainda assustam. Conforme as fontes:</p>
    
        <div class="row">
            <div class="col-xs-12 col-sm-3">
                Apenas
                15,53%
                dos alunos de cursos relacionados à computação são mulheres.
                (Fonte: Inep/MEC)
            </div>
            <div class="col-xs-12 col-sm-offset-1 col-sm-3">
                41%
                das mulheres que trabalham com tecnologia acabam deixando a área, em comparação com apenas 17% dos homens.
                (Fonte: Harvard Business Review)
            </div>
            <div class="col-xs-12 col-sm-offset-1 col-sm-3">
            79%
            das alunas dos cursos relacionados à Tecnologia da Informação desistem no primeiro ano
            (Fonte: Gizmodo)
            </div>
        </div>

    </div>
    <div class="col-sm-12 col-md-3 col-md-offset-1 sidebar-right text-justify">
        <div class="container"></div>
        
        <div class="container call-to-action-posts">
            <div class="full-height fill-width">
                <a href="{{ sprintf("%s%s", route('register.form'), '?utm_source=website&utm_campaign=Bot%C3%A3o%20Commit') }}" class="fill-height">
                    <div class="col-sm-12 half-height v-align-content-center">
                        <div class="row">
                            <div class="col-sm-7">
                                <span class="call-to-action-title white-label">O DEV DO FUTURO É <strong>VOCÊ?</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 half-height v-align-content-center">
                        <span class="dark-blue-label commit-here-button">
                            <div class="row">
                                <div class="col-sm-7">
                                    [&nbsp;&nbsp;&nbsp;COMMIT&nbsp;&nbsp;&nbsp;]
                                </div>
                            </div>
                            {{--<a href="{{ route('register.form') }}">[&nbsp;&nbsp;&nbsp;COMMIT HERE&nbsp;&nbsp;&nbsp;]</a>--}}
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection