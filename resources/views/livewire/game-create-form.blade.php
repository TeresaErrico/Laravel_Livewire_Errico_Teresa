<form wire:submit="store" enctype="multipart/form-data">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @if (session()->has('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    <div class="mb-3">
        <label for="exampleInputEmail1" class="title">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="emailHelp" wire:model.live="title">
        @error('title')
        <p>{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="@error('description') is-invalid @enderror" id="description" cols="30" rows="10"wire:model.live="description"></textarea>
        @error('description')
        <p>{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="img" class="title">Img</label>
        <input type="file" class="form-control @error('img') is-invalid @enderror" id="img" aria-describedby="emailHelp" wire:model.live="img">
        @error('img')
        <p>{{$message}}</p>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Crea</button>
</form>
