<x-main-layout>
<x-navbar/>
    <div class="containerListAnime">

        <ul id="ulListAnime" class="list-group">
            @foreach ($response as $anime)
                <li class="list-group-item"><a href="{{ route('anime.show', ['id' => $anime['mal_id']]) }}">{{ $anime['name'] }} </a></li>
            @endforeach
        </ul>
    </div>






</x-main-layout>
