<x-dashboard>
    <style>
        
          .form-container {
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                /* width: 300px; */
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
            input[type="text"], input[type="number"] {
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
        </style>
    
        <div class="form-container">
            <form action="{{route('modules.update',$results->module_id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Intitulé</label>
                    <input name="intitule_module" value="{{$results->intitule_module}}" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="cycleSelect">Cycle</label>
                    <select name="cycle" id="cycleSelect" class="form-control">
                        <option value="DUT" {{ $results->cycle == 'DUT' ? 'selected' : '' }}>DUT</option>
                        <option value="Licence" {{ $results->cycle == 'Licence' ? 'selected' : '' }}>Licence</option>
                        <option value="Master" {{ $results->cycle == 'Master' ? 'selected' : '' }}>Master</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="niveauSelect">Niveau</label>
                    <select name="niveau" id="niveauSelect" value="{{$results->niveau}}" class="form-control">
                        <option value="1ère année" {{ $results->niveau == '1ère année' ? 'selected' : '' }}>1ère année</option>
                        <option value="2ème année" {{ $results->niveau == '2ème année' ? 'selected' : '' }}>2ème année</option>
                        
                    </select>
                </div>
                {{-- <div class="form-group">
                    <label for="filiereSelect">Filière</label>
                    <select name="intitule_filiere" id="filiereSelect" value="{{$results->intitule_filiere}}"  class="form-control">
                        @foreach ($fil as $int)
                        <option value="{{$int->intitule_filiere}}">{{$int->intitule_filiere}}</option>
                        @endforeach
                    </select>
                </div> --}}
                <div class="form-group">
                    <label for="filiereSelect">Filière</label>
                    <select name="intitule_filiere" id="filiereSelect" class="form-control">
                        @foreach ($fil as $int)
                            <option value="{{ $int->intitule_filiere }}" @selected($int->intitule_filiere == $results->intitule_filiere)>
                                {{ $int->intitule_filiere }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="semestre">Semestre</label>
                    <select id="semestre" class="form-control" name="numeroSemestre">
                        @foreach ($semestre as $item)
                        <option value="{{$item->numeroSemestre}}" @selected($item->numeroSemestre == $results->numeroSemestre)>{{$item->numeroSemestre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Heures cours</label>
                    <input name="heuresCours" type="number" class="form-control" value="{{$results->heuresCours}}" required>
                </div>
                <div class="form-group">
                    <label>Heures TD</label>
                    <input name="heuresTD" type="number" value="{{$results->heuresTD}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Heures TP</label>
                    <input name="heuresTP" type="number" value="{{$results->heuresTP}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="profSelect">Responsable de module</label>
                    <select id="profSelect" class="form-control" name="responsable_module">
                        @foreach ($prof2 as $mousieur)
                        <option value="{{$mousieur->nom.' '.$mousieur->prenom}}" @selected($mousieur->nom.' '.$mousieur->prenom == $results->nom.' '.$results->prenom)>{{$mousieur->nom.' '.$mousieur->prenom}}</option>
                        @endforeach
                        
                        {{-- <option value="Filiere 2">Filière 2</option>
                        <option value="Filiere 3">Filière 3</option> --}}
                    </select>

                </div>
                <div class="button-container">
                    <button type="submit" class="save">Enregistrer</button>
                    <a href="{{route('modules.index')}}"><button type="button" class="previous" onclick="history.back()">Page précédente</button></a>
                    
                </div>
            </form>
        </div>
    
    </x-dashboard>