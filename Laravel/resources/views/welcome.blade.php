@extends('master')

@section('content')
    <div class="">
        <div class="center">
            <h1 class="title texto animate-text-1">
                &lsaquo; Devs From The Future &rsaquo;
            </h1>
        </div>
        <div class="question texto center animate-text-3">
            <p>&lsaquo;<span> "você está pronto para ser um dev do futuro?" </span> &rsaquo;</p>
        </div>
        {{--<div class="random center m-b-15">--}}
            {{--<span>&lsaquo;!-- <span>Se cadastre e entraremos em contato para mais informações e notícias...--}}
                    {{--<br> Notícias que mudarão sua carreira para sempre!</span> --&rsaquo;</span>--}}
        {{--</div>--}}
        <div class="random center animate-text-4">
            <p class="m-b-15">
                <span>
                    prepare-se para se tornar um de nós. receba na sua caixa de
                    entrada referências sobre três conhecimentos essenciais para qualquer desenvolvedor do futuro.
                </span>
            </p>
            <p class="m-b-15">
                <span>
                    são conceitos, artigos, cursos e livros selecionados, sobre assuntos que você não pode deixar de saber.
                </span>
            </p>
            <p class="m-b-15">
                <span>
                    a partir de agora, é com você.
                </span>
            </p>
            <p>see you soon.</p>
        </div>
        <br>
        <div class="m-b-15 center animate-text-4">
            <form action="{{ route('register') }}" method="POST">
                {{ csrf_field() }}
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="name" class="label">Nome:</label>
                        <input type="text" name="name" class="form-control" placeholder="Ex.: Rodrigo" required="required" />
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="sobrenome" class="label">Sobrenome:</label>
                        <input type="sobrenome" name="lastname" class="form-control" placeholder="Ex.: Oliveira" required="required" />
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="mail" class="label">E-mail:</label>
                        <input type="email" name="email" class="form-control" required="required" />
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="mail" class="label">Profissão:</label>
                        <input type="text" name="occupation" class="form-control" required="required" />
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="mail" class="label">Já programa ou tem interesse em aprender?</label><br>
                        <input id="interested" type="radio" name="interestedInProgramming" value="1" /> <label class="label" for="interested">Sim</label>
                        <input id="notInterested" type="radio" name="interestedInProgramming" value="0" /> <label class="label" for="notInterested">Não</label>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="mail" class="label">Pensa em trabalhar em Start Ups?</label><br>
                        <input id="want" type="radio" name="wantToWorkInStartUps" value="1" /> <label class="label" for="want">Sim</label>
                        <input id="dontWant" type="radio" name="wantToWorkInStartUps" value="0" /> <label class="label" for="dontWant">Não</label>
                    </div>
                </div>
                <br>
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-success btn-block btn-lg" style="color: #ebebeb"><strong>[ commit ]</strong></button>
                </div>
                <span>&lsaquo;!-- Não se preocupe, no nosso futuro não existe spam! --&rsaquo;</span>
            </form>
        </div>
    </div>
@endsection