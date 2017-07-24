@extends('master')

@section('content')
    <main>
        <div class="col-xs-12">
            <div class="center">
                <h1 class="title pink-label texto animate-text-1">
                    &lsaquo; Devs From The Future &rsaquo;
                </h1>
            </div>
            <div class="question texto center animate-text-3">
                <p><i class="pink-label">&lsaquo;</i><span> Agradecemos muito seu cadastro! </span> <i class="pink-label">&rsaquo;</i></p>
            </div>
            <div class="random center animate-text-4 m-b-15">
                <p class="m-b-15">
                    <div class="random center m-b-15">
                    <span>&lsaquo;!-- <span>Em breve entraremos em contato para mais informações e notícias...
                    <br> Notícias que mudarão sua carreira para sempre!</span> --&rsaquo;</span>
                    </div>
                </p>
                <p class="pink-label">see you soon.</p>
    
                <p style="font-size: 40px">
                    <a href="{{ route('home') }}">[&nbsp;&nbsp;&nbsp;VISITE NOSSO BLOG&nbsp;&nbsp;&nbsp;]</a>
                </p>
            </div>
        </div>
    </main>
@endsection