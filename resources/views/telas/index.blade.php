
<title>Drag Animals</title>
<link rel="shortcut icon"
    href="https://www.pngkit.com/png/full/392-3929588_kawaii-cute-edit-editing-overlay-png-dog-draw.png"
    type="image/x-icon">
<link rel="stylesheet" href="{{asset('css/main.css')}}">

<body>
    @include ('telas.common.header')

    <article class="container" style="margin-top: 5em">

        @if (session('message'))
            <div>
                <h5>
                    {{ session('message') }}
                </h5><br> <br>
            </div>
        @endif

        <section class="row justify-content-center d-block">
            <section>
                <h1 class="header-frase text-xl">DRAG ANIMALS</h1>
                <p class="header-frase" style="font-size: 2em">Aprenda os animais em inglês brincando!</p>
            </section>
            <section class="d-flex justify-content-center mb-3">
                <img src="{{asset('https://www.pngkit.com/png/full/392-3929588_kawaii-cute-edit-editing-overlay-png-dog-draw.png')}}"
                    width="300" alt="">
            </section>
            {{-- <a class="video-popup" href="video/o-portal-acessivel.mp4">
                <div class="col-2 col-xl-1 col-lg-1 col-md-1 col-sm-2 col-xs-2 icone-video"></div>
            </a> --}}
            <section class="d-flex justify-content-center mt-5">
                <section class="d-flex justify-content-between w-50">
                    <a class="btn button-size button-orange" href="">Sobre</a>
                    <a class="btn button-size button-orange" href="{{ route('animals.selecao') }}">Jogar</a>
                    <a class="btn button-size button-orange" href="{{ route('rankin.main') }}">Pontuações</a>
                </section>
            </section>
        </section>
    </article>
</body>

</html>