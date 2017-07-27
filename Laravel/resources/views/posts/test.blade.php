@extends('master')

@section('head')
    @parent

    <link rel="stylesheet" href="{{ asset('css/posts.css') }}" >
@endsection

@section('content')
    <div id="post" class="col-xs-12 col-xs-offset-0 col-md-7 col-md-offset-1">
        <h1>
            Construindo diversidade:
            como empoderar mulheres para programar
        </h1>
    
        <img src="{{ asset('images/posts/construindo-diversidade-como-empoderar-mulheres-para-programar.jpg') }}" alt="" width="100%" style="margin-top: 30px">
    
        <p style="padding-top:20px;">
            De acordo com o censo de 2010, as mulheres representam apenas 25% dos programadores. Apesar de um histórico de pouca participação na área, nos últimos anos as coisas têm mudado. As mulheres têm passado de observadoras à protagonistas, porém os números ainda assustam. Conforme as fontes:
        </p>
    
        <div class="row">
            <div class="col-sm-12 col-md-4">
                Apenas
                <p>
                        15,53%
                    <br>dos alunos de cursos relacionados à computação são mulheres.
                    <br>(Fonte: Inep/MEC)
                </p>
                </span>
            </div>
            <div class="col-sm-12 col-md-4">
                <p>41%
                    <br>das mulheres que trabalham com tecnologia acabam deixando a área, em comparação com apenas 17% dos homens.
                    <br>(Fonte: Harvard Business Review)
                </p>
            </div>
            <div class="col-sm-12 col-md-4">
                <p>79%
                    <br>das alunas dos cursos relacionados à Tecnologia da Informação desistem no primeiro ano
                    <br>(Fonte: Gizmodo)
                </p>
            </div>
        </div>
        
        <p>
            Estereótipos reforçam a ideia de que a tecnologia é uma área masculina, e essa falta de identificação fortalecem ainda mais os índices baixos.  Empoderar é necessário. Para contornar o problema, várias iniciativas têm surgido nos últimos anos.  Entre elas algumas se destacam:
        </p>
    
        <a class="pink-label" href="https://www.programaria.org/">Programaria</a>
            <p>
                Depois de muita discussão e reflexão sobre nossa trajetória, identificamos padrões diferentes de problemas que as mulheres costumam enfrentar na relação com a programação. De toda essa inquietação nasceu a PrograMaria, um meta-site sobre mulheres e tecnologia. A PrograMaria é um convite para refletir, se inspirar e aprender.
            </p>
        
        <a class="pink-label"href="http://brasil.pyladies.com/about/">Pyladies</a>
        <p>
            O PyLadies é uma comunidade mundial que foi trazida ao Brasil com o propósito de instigar mais mulheres a entrarem na área tecnológica. Queremos mudar essa realidade de poucas garotas em uma área tão rica e fantásticas como a computação.
        </p>
    
        <a class="pink-label"href="https://mulheresnacomputacao.com/">Mulheres na Computação</a>
        <p>
            Criada por Camila Achutti, tem por objetivo educar as meninas sobre o mundo da computação. O blog oferece dicas de programação, quadro de oportunidades e muito mais.
        </p>
    
        <a class="pink-label"href="https://www.womentechmakers.com/">Women Techmakers</a><span> do Google</span>
        <p>
            Visa aumentar a participação das mulheres na área da tecnologia. Procura incentivar as mulheres a se tornarem líderes e exemplos no setor.
        </p>
    
        <a class="pink-label"href="http://www.eupossoprogramar.com/">Pyladies</a><span> para meninas da Microsoft</span>
        <p>
            Iniciativa da Microsoft para incentivar a programação por parte das meninas. Começou como um projeto geral, mas esse ano foi lançado o projeto só para meninas.
            <br>
            O melhor de tudo é que não existe uma idade certa para aprender. Afinal, nunca é cedo demais para sair da superfície e se diferenciar no meio da multidão.
        </p>
    </div>
    
    <br><br>
    
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