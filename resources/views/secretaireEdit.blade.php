<x-dashboard>
    <style>
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 120vh;
            margin-top: 40px;
            margin-left: 190px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="number"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button.save {
            background-color: #a6935e;
            color: white;
        }
        button.previous {
            background-color: #102C57;
            color: white;
        }
        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #e3e6f0;
            padding: 15px;
            font-size: 1.25rem;
        }
        .card-body {
            padding: 20px;
        }
        button.previous {
        background-color: #102C57; 
        color: white;
    }
    </style>

    {{-- <div class="form-container">
        <form action="#" method="post"> --}}
            {{-- <!-- <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" value="{{$salleEst->TypeSalle}}" required>
            </div>
            <div class="form-group">
                <label for="numero">Numéro :</label>
                <input type="text" id="numero" name="numero" value="{{$salleEst->numero}}" required>
            </div> --> --}}

            {{-- <input type="hidden" name="id" id="edit-id">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" name="nom" id="edit-nom" value="{{$secretaire->nom}}" required>
                    </div>
                    <div class="form-group">
                        <label>Prénom</label>
                        <input type="text" name="prenom" id="edit-prenom" value="{{ $secretaire->prenom }}" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="edit-email" value="{{ $secretaire->email }}" required>
                    </div>
                    <div class="form-group">
                        <label>Téléphone</label>
                        <input type="text" name="numTelephone" id="edit-telephone" {{ $secretaire->numTelephone }} required>
                    </div>

            <div class="button-container">
                <button type="submit" class="save">Enregistrer</button>
                <a href="{{route('seceretaires.index')}}"><button type="button" class="previous" onclick="history.back()">Page précédente</button></a>
                
            </div>
        </form>
    </div> --}}
    <div class="row">
        <div class="col-md-12">
            <div class="form-container">
                <div class="card-header">
                    <h3>Modifier secretaire</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('seceretaires.update', $secretaire->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" name="nom" class="form-control" value="{{ $secretaire->nom }}" required>
                            @error('nom')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Prénom</label>
                            <input type="text" name="prenom" class="form-control" value="{{ $secretaire->prenom}}" required>
                            @error('prenom')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{$secretaire->email}}" required>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="text" name="numTelephone" class="form-control" value="{{ $secretaire->numTelephone }}" required>
                            @error('numTelephone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input type="password" name="password" class="form-control">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                     
                        <div class="button-container">
                            <button type="submit" class="save">Enregistrer</button>
                            <a href="{{ url()->previous() }}" class="previous" style="background-color: #102C57;color:#eaeaea;text-decoration:none;width:90px;border-radius:5px;text-align:center;padding-top:8px;">Retour</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-dashboard>