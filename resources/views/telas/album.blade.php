@include ('telas.common.header')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link rel="stylesheet" href="{{asset('css/album.css')}}">
<title>Meu Álbum</title>

<section class="container section ">

    <body class="background">

        <!--Área do texto inicial-->
        <div class="text-center">
            <h3>
                Meu álbum
            </h3> <br>

                <div class="row align-items-end" style="margin-bottom: 2em">

                    <!-------- CROMO ESPECIAL
                    <div class="col " style="margin-bottom: 1em">
                         
                        <div class="quadroCromoSpecial text-center">

                            <p class="cromoBackNumber">0</p>

                            <img class="cromoSpecial" src="img/cromo-especial-1.png" alt="">

                            <button class="btn botaoAudioSpecial" style="font-size: 0.8em">
                                <i class="fas fa-volume-up"></i>
                            </button>

                        </div> <br>
                    </div>
                    ---------------------->

                    <div class="col">
                        <h3>
                            Este é o seu álbum de animais. Cada vez que você completa uma rodada do jogo, você ganha uma figurinha de um dos bichinhos que você aprendeu o nome em inglês.
                            Aqui você pode visualizar o nome do animal em português, inglês e o seu nome científico, além de ouvir a pronúncia em inglês.
                        </h3>
                        </div>
                    </div>
                    <!------------------------------------------------------------------>

                </div>

                <!--Div que exibe os quadros respostas-->
                <div class="row">

                    @foreach ($animals as $animal)

                        <div class="col " style="margin-bottom: 1em">

                            <div class="quadro text-center">

                                <p class="cromoBackName">{{$animal->nameEnglish}}</p>
                                <p class="cromoBackNumber">{{$animal->id}}</p>
                                
                                @foreach ($animalsCards as $animalsCard)

                                    @if ($animalsCard->animal->id == $animal->id)

                                        <div class="cromoSection">

                                            @switch($habitat = $animalsCard->animal->habitat)
                                                @case($habitat == "Aéreo")
                                                    <img class="cromoBackground" src="{{ Storage::disk('s3')->url('cromo-aereo.png') }}" alt="">
                                                    @break
                                                @case($habitat == "Aquático")
                                                    <img class="cromoBackground" src="{{ Storage::disk('s3')->url('cromo-aquatico.png') }}" alt="">
                                                    @break
                                                @case($habitat == "Terrestre")
                                                    <img class="cromoBackground" src="{{ Storage::disk('s3')->url('cromo-terrestre.png') }}" alt="">
                                                    @break
                                                @default
                                            @endswitch
                                            
                                            <img class="cromoAnimal"
                                                src="{{ Storage::disk('s3')->url($animalsCard->animal->image) }}" alt="">

                                            <p class="cromoNumber">{{ $animalsCard->animal->id }}</p>

                                            <div class="cromoDetail">
                                                {{$animalsCard->animal->nameEnglish}}<br>
                                                {{$animalsCard->animal->namePort}}<br>
                                                <p class="cronoAnimalNameSci">{{$animalsCard->animal->nameSci}}</p>
                                            </div>

                                            <button type="button" value="PLAY" onclick="play('audio_{{ $animalsCard->animal->id }}')"
                                                class="btn botaoAudio" style="margin-bottom: 1em; font-size: 0.8em"><i class="fas fa-volume-up"></i>
                                            </button>
                                            <audio id="audio_{{ $animalsCard->animal->id }}" src="{{ Storage::disk('s3')->url($animalsCard->animal->audio) }}"></audio> 

                                        </div> <br>
                                        
                                    @endif

                                @endforeach

                            </div>

                        </div>

                    @endforeach

                </div>


    </body>
</section>

<script type="text/javascript" src="{{asset('js/drag_drop.js')}}"></script>