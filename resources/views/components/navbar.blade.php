<nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Anime.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href= {{route ('homepage')}}>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route ('anime.index')}}"> Anime</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Manga</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
