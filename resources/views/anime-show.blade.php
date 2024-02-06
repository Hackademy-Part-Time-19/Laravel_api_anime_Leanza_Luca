<x-main-layout>

    <x-navbar />



    <h1 class="titoloDettaglioAnime"> Ecco gli anime del genere selezionato: </h1>
   
        <div class="card mb-3" style="max-width: 100%; height: 100vh; margin-left: 20px">
            <div class="row g-0">
                <div id="imgDettaglio" class="col-md-4">
                    <img src="{{ $anime['images']['jpg']['image_url'] }}  " class="img-fluid rounded-start"
                        id="img_card_dettaglio" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $anime['title'] }}</h5>
                        <p class="card-text">{{ $anime['synopsis'] }}</p>
                        <p class="card-text"><small class="text-body-secondary">{{ $anime['year'] }}</small></p>
                    </div>
                </div>
            </div>
        </div>



</x-main-layout>
