<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>< Devs From The Future ></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #363636;
                color: #FFFFFF;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {

            }

            .title {
                font-size: 84px;
            }

            .question {
                font-size: 55px;
            }

            .form {
                font-size: 20px;
                text-align: right;
                margin-right: 41%;
            }

            .random {
                font-size: 26px;
                text-align: center;
                color: #8B7355;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .texto {
                margin-bottom: 30px;
            }

            .pergunta {
                margin-bottom: px;
            }

            div {
                text-align: center;
            }

            p, .title {
                color: #BD0A5D;
                font-weight: bold;
            }

            span {
                color: #FFFFFF;
                font-weight: normal;
            }

            input {
                border: 3px solid powderblue
            }

            form div + div {
                margin-top: 1em;
            }

            form {
                /* centralizar o form */
                margin: 0 auto;
                width: 400px;
            }

            label {
            /* alinhar labels */
                display: inline-block;
                width: 90px;
                text-align: right;
            }

            input:focus {
                border-color: #97FFFF;
                color: #000000;
                font-weight: bold;
            }

            .button {
                /* alinhar botão */
                padding-left: 90px; /* mesmo tamanho que os elementos do tipo label */
            }
            button {
                margin-left: .5em;
                color: #FFFFFF;
                background: #7CFC00;
                font-weight: bold;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div>
                    <h1 class="title texto">&lsaquo; Devs From The Future &rsaquo;
                    </h1>
                </div>
                <div class="question texto">
                    <p>&lsaquo;<span> "Você está pronto para ser um Dev do futuro?" </span> &rsaquo;</p>
                </div>
                <div class="random">
                    <span>&lsaquo;!-- Não se Preocupe, no nosso Futuro não Existe spam --&rsaquo;</span>
                </div>
                <br>
                <form action="formulario" method="post">
                    <div>
                        <label for="name">Nome:</label>
                        <input type="text" id="name" />
                    </div>
                    <div>
                        <label for="sobrenome">Sobrenome:</label>
                        <input type="sobrenome" id="sobrenome"></input>
                    </div>
                    <div>
                        <label for="mail">E-mail:</label>
                        <input type="email" id="mail" />
                    </div>
                        <div class="button">
                        <button type="submit">[ commit ]</button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-103032771-1', 'auto');
            ga('send', 'pageview');

        </script>
    </body>
</html>