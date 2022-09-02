{"filter":false,"title":"index.blade.php","tooltip":"/blog/resources/views/posts/index.blade.php","undoManager":{"mark":21,"position":21,"stack":[[{"start":{"row":4,"column":2},"end":{"row":5,"column":0},"action":"remove","lines":["      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">",""],"id":2},{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"remove","lines":[" "]},{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"remove","lines":[" "]},{"start":{"row":3,"column":30},"end":{"row":4,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":4,"column":15},"end":{"row":4,"column":22},"action":"remove","lines":["Laravel"],"id":3},{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"insert","lines":["B"]},{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"insert","lines":["l"]},{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"insert","lines":["o"]},{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"insert","lines":["g"]}],[{"start":{"row":8,"column":0},"end":{"row":95,"column":14},"action":"remove","lines":["","        <!-- Styles -->","        <style>","            html, body {","                background-color: #fff;","                color: #636b6f;","                font-family: 'Nunito', sans-serif;","                font-weight: 200;","                height: 100vh;","                margin: 0;","            }","","            .full-height {","                height: 100vh;","            }","","            .flex-center {","                align-items: center;","                display: flex;","                justify-content: center;","            }","","            .position-ref {","                position: relative;","            }","","            .top-right {","                position: absolute;","                right: 10px;","                top: 18px;","            }","","            .content {","                text-align: center;","            }","","            .title {","                font-size: 84px;","            }","","            .links > a {","                color: #636b6f;","                padding: 0 25px;","                font-size: 13px;","                font-weight: 600;","                letter-spacing: .1rem;","                text-decoration: none;","                text-transform: uppercase;","            }","","            .m-b-md {","                margin-bottom: 30px;","            }","        </style>","    </head>","    <body>","        <div class=\"flex-center position-ref full-height\">","            @if (Route::has('login'))","                <div class=\"top-right links\">","                    @auth","                        <a href=\"{{ url('/home') }}\">Home</a>","                    @else","                        <a href=\"{{ route('login') }}\">Login</a>","","                        @if (Route::has('register'))","                            <a href=\"{{ route('register') }}\">Register</a>","                        @endif","                    @endauth","                </div>","            @endif","","            <div class=\"content\">","                <div class=\"title m-b-md\">","                    Laravel","                </div>","","                <div class=\"links\">","                    <a href=\"https://laravel.com/docs\">Docs</a>","                    <a href=\"https://laracasts.com\">Laracasts</a>","                    <a href=\"https://laravel-news.com\">News</a>","                    <a href=\"https://blog.laravel.com\">Blog</a>","                    <a href=\"https://nova.laravel.com\">Nova</a>","                    <a href=\"https://forge.laravel.com\">Forge</a>","                    <a href=\"https://vapor.laravel.com\">Vapor</a>","                    <a href=\"https://github.com/laravel/laravel\">GitHub</a>","                </div>","            </div>","        </div>"],"id":4}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":11},"action":"remove","lines":["    </body>"],"id":5}],[{"start":{"row":9,"column":0},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":6}],[{"start":{"row":9,"column":0},"end":{"row":10,"column":0},"action":"remove","lines":["",""],"id":7},{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":9,"column":0},"end":{"row":10,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":8,"column":0},"end":{"row":19,"column":11},"action":"insert","lines":["    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            @foreach ($posts as $post)","                <div class='post'>","                    <h2 class='title'>{{ $post->title }}</h2>","                    <p class='body'>{{ $post->body }}</p>","                </div>","            @endforeach","        </div>","    </body>"],"id":9}],[{"start":{"row":20,"column":0},"end":{"row":21,"column":0},"action":"remove","lines":["",""],"id":10},{"start":{"row":19,"column":11},"end":{"row":20,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":4,"column":27},"end":{"row":5,"column":0},"action":"remove","lines":["",""],"id":11}],[{"start":{"row":7,"column":5},"end":{"row":7,"column":6},"action":"remove","lines":["/"],"id":12},{"start":{"row":7,"column":4},"end":{"row":7,"column":5},"action":"remove","lines":["<"]}],[{"start":{"row":7,"column":4},"end":{"row":7,"column":5},"action":"insert","lines":["<"],"id":13},{"start":{"row":7,"column":5},"end":{"row":7,"column":6},"action":"insert","lines":["/"]}],[{"start":{"row":2,"column":10},"end":{"row":3,"column":8},"action":"insert","lines":["","        "],"id":14}],[{"start":{"row":3,"column":4},"end":{"row":3,"column":8},"action":"remove","lines":["    "],"id":15},{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"remove","lines":["    "]},{"start":{"row":2,"column":10},"end":{"row":3,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"remove","lines":["/"],"id":16},{"start":{"row":6,"column":26},"end":{"row":6,"column":27},"action":"remove","lines":["/"]}],[{"start":{"row":6,"column":26},"end":{"row":6,"column":27},"action":"insert","lines":["/"],"id":17},{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"insert","lines":["/"]}],[{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"remove","lines":["/"],"id":18}],[{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"insert","lines":["/"],"id":19}],[{"start":{"row":11,"column":36},"end":{"row":11,"column":37},"action":"remove","lines":["t"],"id":20},{"start":{"row":11,"column":35},"end":{"row":11,"column":36},"action":"remove","lines":["s"]},{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"remove","lines":["o"]},{"start":{"row":11,"column":33},"end":{"row":11,"column":34},"action":"remove","lines":["p"]},{"start":{"row":11,"column":32},"end":{"row":11,"column":33},"action":"remove","lines":["$"]}],[{"start":{"row":11,"column":32},"end":{"row":11,"column":33},"action":"insert","lines":["2"],"id":21}],[{"start":{"row":11,"column":32},"end":{"row":11,"column":33},"action":"remove","lines":["2"],"id":22}],[{"start":{"row":11,"column":32},"end":{"row":11,"column":33},"action":"insert","lines":["$"],"id":23},{"start":{"row":11,"column":33},"end":{"row":11,"column":34},"action":"insert","lines":["p"]},{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"insert","lines":["o"]},{"start":{"row":11,"column":35},"end":{"row":11,"column":36},"action":"insert","lines":["s"]},{"start":{"row":11,"column":36},"end":{"row":11,"column":37},"action":"insert","lines":["t"]}]]},"ace":{"folds":[],"scrolltop":54.5,"scrollleft":0.5,"selection":{"start":{"row":20,"column":0},"end":{"row":20,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":2,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1662104817981,"hash":"f506d1e050f09892e9a1312b40dbe362c43e6bf1"}