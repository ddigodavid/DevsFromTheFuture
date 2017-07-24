@extends('master')

@section('content')
    <div class="position-ref full-height">
        <div class="content">
            <div>
                <h1 class="title texto">&lsaquo; Devs From The Future &rsaquo;
                </h1>
            </div>
            <div class="question texto">
                <p>&lsaquo;<span> "Você está pronto para ser um Dev do futuro?" </span> &rsaquo;</p>
            </div>
            <div class="random">
                <span>&lsaquo;!-- <span>Se cadastre e entraremos em contato para mais informações e notícias...
                        <br> Notícias que mudarão sua carreira para sempre!</span> --&rsaquo;</span>
            </div>
            <br>
            <div class="row m-b-15">
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
                    <span>&lsaquo;!-- Não se Preocupe, no nosso Futuro não existe spam! --&rsaquo;</span>
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-success btn-block" style="color: #000">[ commit ]</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection