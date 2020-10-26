<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Vetus Liber</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic/semantic.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
        <script type="text/javascript" src="{{ asset("js/jquery.js")  }}"></script>
        <script type="text/javascript" src="{{ asset("js/semantic/semantic.js")  }}"></script>
    </head>
    <body>

        <div class="ui stackable grid">
            <div class="row">
                <div class="two wide column"></div>
                <div class="twelve wide column">
                    @include('components.menu')
                </div>
            </div>
            <div class="row" id="search-section">
                <div class="two wide column"></div>
                <div class="three wide column computer only">
                    <figure class="ui segment" style="padding: 5px;">
                        <img id="dante-image" class="ui fluid image" src="{{ asset('img/Dante-black.png') }}">
                    </figure>
                </div>
                <div class="nine wide column">
                    <h1 align="center">Vetus Liber</h1>
                    <form class="ui fluid form">
                        <div class="field">
                            <div class="ui action input">
                                <input type="text" placeholder="Что будем искать?">
                                <button class="ui icon button">
                                    <i class="search icon"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="ui horizontal divider">
                        <i class="icon"></i>
                    </div>
                    <div class="ui five column centered stackable grid">
                        <div class="center aligned column">
                            <i class="huge book icon"></i>
                            Книги
                        </div>
                        <div class="center aligned column">
                            <i class="huge newspaper outline icon"></i>
                            Журналы
                        </div>
                        <div class="center aligned column">
                            <i class="huge newspaper icon"></i>
                            Газеты
                        </div>
                        <div class="center aligned column">
                            <i class="huge envelope open icon"></i>
                            Открытки
                        </div>
                    </div>
                    <div class="ui horizontal divider">
                        <i class="icon"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="two wide column"></div>
                <div class="twelve wide column">
                    @yield('content')
                </div>
            </div>
            <div class="row">
                <div class="sixteen wide column">

                </div>
            </div>
        </div>

    </body>
</html>
