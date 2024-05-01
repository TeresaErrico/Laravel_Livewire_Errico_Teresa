<div>
    @foreach ($games as $game)
        <div class="card">
            <img src="{{ Storage::url($game->img) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $game->title }}</h5>
                <p class="card-text">{{ $game->description }}</p>
                <a href="#" class="btn btn-primary">Modifica</a>
                <button class="btn btn-danger"wire:click="eliminaGame({{$game}})">Elimina</button>
            </div>
        </div>
    @endforeach
</div>
