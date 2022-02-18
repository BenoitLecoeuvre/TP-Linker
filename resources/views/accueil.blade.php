@extends('layouts.base')

<body>
    <main class="container col-8 mx-auto w-50">
        <h2 class="mb-5 text-center">Linker</h2>

        @foreach ($errors->all() as $error)
        {{ $error }}
        @endforeach
        
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="name">Nom du lien:</label><br>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ex: Twitter">
            </div>

            <div class="mb-3">
                <label class="form-label" for="link">Votre lien:</label><br>
                <input type="text" class="form-control" id="link" name="url" placeholder="Copier-coller votre lien ici.">
            </div>

            <div class="mt-4">
                <button class="btn btn-dark">Raccourcir</button>
            </div>
        </form>

        <div>
            <h2>Mes liens:</h2>

            @foreach ($links as $link)
            <div>
                <h4>{{ $link->name }} :</h4>
                <a href="accueil/l/{{ $link->id }}">Voir</a>
            </div>
            @endforeach
        </div>
    </main>
</body>