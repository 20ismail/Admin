<x-dashboard>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!-- Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <div class="row">
        <div class="col-md-12">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                            <h2 class="ml-lg-2">Modules</h2>
                        </div>
                        <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                            <a href="#addEmployeeModal" class="btn btn-success btn-add" data-toggle="modal">
                                <i class="material-icons">&#xE147;</i>
                                <span>Ajouter module</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-3" style="background-color: #DAC0A3; width:101%; padding: 8px 15px; border-radius: 5px; margin-top: 0;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="cycle" style="color: #102C57; font-weight: bold; margin-bottom: 5px;">Choisir le Cycle :</label>&nbsp;&nbsp;
                    <select id="cycle" onchange="afficherModules()" style="width: 13%; height: fit-content; padding: 3px; border-radius: 3px; border: 1px solid #102C57; background-color: #ffffffe0; color: #102C57;">
                        <option value="tous">Tous</option>
                        <option value="DUT">DUT</option>
                        <option value="LP">LP</option>
                        <option value="Master">Master</option>
                    </select>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="niveau" style="color: #102C57; font-weight: bold; margin-bottom: 5px;">Choisir le Niveau :</label>&nbsp;&nbsp;
                    <select id="niveau" onchange="afficherModules()" style="width: 13%; height: fit-content; padding: 3px; border-radius: 3px; border: 1px solid #102C57; background-color: #ffffffe0; color: #102C57;">
                        <option value="tous">Tous</option>
                        <option value="1ère Année">1ère Année</option>
                        <option value="2ème Année">2ème Année</option>
                    </select>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="filiere" style="color: #102C57; font-weight: bold; margin-bottom: 5px;">Choisir la Filière :</label>&nbsp;&nbsp;
                    <select id="filiere" onchange="afficherModules()" style="width: 13%; height: fit-content; padding: 3px; border-radius: 3px; border: 1px solid #102C57; background-color: #ffffffe0; color: #102C57;">
                        <option value="tous">Tous</option>
                        <option value="Informatique">Informatique</option>
                        <option value="Sécurité Informatique">Sécurité Informatique</option>
                    </select>
                    
                <!--    <div class="col-md-12 mt-3">
                        <button onclick="afficherModules()" class="btn-add-module btn btn-primary float-right">Afficher</button>
                    </div> -->
                </div>
                
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th><strong>Intitulé</strong></th>
                            {{-- <th><strong>Département</strong></th> --}}
                            <th><strong>Cycle</strong></th>
                            <th><strong>Niveau</strong></th>
                            <th><strong>Filière</strong></th>
                            <th><strong>Heures cours</strong></th>
                            <th><strong>Heures TD</strong></th>
                            <th><strong>Heures TP</strong></th>
                            <th><strong>Responsable de module</strong></th>
                            <th><strong>Action</strong></th>
                        </tr>
                    </thead>
                    <tbody id="moduleTableBody">
                        @foreach ($results as $item)
                        <tr data-id="{{$item->id}}">
                            <td>{{$item->intitule_module}}</td>
                            <td>{{$item->cycle}}</td>
                            <td>{{$item->niveau}}</td>
                            <td>{{$item->intitule_filiere}}</td>
                            <td>{{$item->heuresCours}}</td>
                            <td>{{$item->heuresTD}}</td>
                            <td>{{$item->heuresTP}}</td>
                            <td>{{ $item->nom . ' ' . $item->prenom }}</td>
                            
                            <td>
                                <a href="{{route('modules.edit',$item->module_id)}}" class="edit"  >
                                    <i class="material-icons" data-toggle="tooltip" data-toggle="modal" title="Edit">&#xE254;</i>
                                </a>
                                <a href="#deleteConfirmModal" class="delete" data-toggle="modal" data-id="{{ $item->module_id }}">
                                    <i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i>
                                </a>
                            </td>
                        </tr>
                         <!----delete-modal start--------->
      
                    @endforeach
                    
                    <div id="deleteConfirmModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">						
                                    <h4 class="modal-title">Confirmer la suppression</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">					
                                    <p>Êtes-vous sûr de vouloir supprimer cet enregistrement ?</p>
                                    <p class="text-warning"><small>Cette action ne peut pas être annulée.</small></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <form id="deleteForm" action="" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modifier module</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="editForm" action="" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label>Intitulé</label>
                                            <input name="intitule_module" type="text" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="cycleSelect">Cycle</label>
                                            <select name="cycle" id="cycleSelect" class="form-control">
                                                <option value="DUT">DUT</option>
                                                <option value="LP">LP</option>
                                                <option value="Master">Master</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="niveauSelect">Niveau</label>
                                            <select name="niveau" id="niveauSelect" class="form-control">
                                                <option value="1ere annee">1ère année</option>
                                                <option value="2eme annee">2ème année</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="filiereSelect">Filière</label>
                                            <select name="intitule_filiere" id="filiereSelect" class="form-control">
                                                @foreach ($fil as $int)
                                                <option value="{{$int->intitule_filiere}}">{{$int->intitule_filiere}}</option>
                                                @endforeach
                                               
                                               
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Heures cours</label>
                                            <input name="heuresCours" type="number" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Heures TD</label>
                                            <input name="heuresTD" type="number" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Heures TP</label>
                                            <input name="heuresTP" type="number" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="profSelect">Responsable de module</label>
                                            <select id="profSelect" class="form-control" name="responsable_module">
                                                @foreach ($prof2 as $mousieur)
                                                <option value="{{$mousieur->nom.' '.$mousieur->prenom}}">{{$mousieur->nom.' '.$mousieur->prenom}}</option>
                                                @endforeach
                                                
                                                {{-- <option value="Filiere 2">Filière 2</option>
                                                <option value="Filiere 3">Filière 3</option> --}}
                                            </select>
                                        </div>
                                        <input type="hidden" name="item_id">
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn btn-success" id="editButton">Enregistrer</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    
                </tbody>
            </table>
        <!----edit-modal end--------->
        
        
       
        
        <script>
            // Capture le clic sur le bouton de suppression
// Capture le clic sur le bouton de suppression
// $('.delete').click(function() {
//     // Récupère les données des attributs data
//     var intitule = $(this).data('intitule');
//     var niveau = $(this).data('niveau');

//     // Met à jour les éléments de la modal de suppression avec les données
//     $('#deleteEmployeeModal .modal-body p:first-child').text('Êtes-vous sûr de vouloir supprimer l\'enregistrement ' + intitule + '' + niveau + ' ?');

//     // Affiche la modal de suppression
//     $('#deleteEmployeeModal').modal('show');

//     // Lorsque le bouton de suppression de la modal est cliqué
//     $('.btn-delete').click(function() {
//         // Redirige vers la route de suppression avec les données
//         window.location.href = '/delete?niveau=' + niveau + '&intitule=' + intitule;
//     });

//     // Assurez-vous de ne pas suivre le lien
//     return false;
// });
// Sélectionnez tous les liens de suppression avec la classe "delete"
// 
$(document).ready(function(){
            $('.delete').on('click', function(){
                var id = $(this).data('id');
                var url = '{{ route("modules.destroy", ":id") }}';
                url = url.replace(':id', id);
                $('#deleteForm').attr('action', url);
            });
        });
   
          
        </script>
        
        
        
        <!----delete-modal end--------->
                   
                        
                        
               
                
        <div class="clearfix">
            <div class="hint-text">Affichage de <b>{{$results->count()}}</b> sur <b>{{$results->total()}}</b></div>
            {{$results->links() }}
        </div>
    
         <!----add-modal start--------->
         <div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajouter module</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('modules.store')}}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="cycleSelect">Cycle</label>
                                <select id="cycleSelect" class="form-control" name="cycle">
                                    <option value="DUT" >DUT</option>
                                    <option value="LP">LP</option>
                                    <option value="Master">Master</option>
                                </select>
                            </div>
                            <div>
                                {{$selectedCycle}}
                            </div>
                            <div class="form-group">
                                <label for="niveauSelect">Niveau</label>
                                <select id="niveauSelect" class="form-control" name="niveau">
                                    <option value="1ère année" >1ère année</option>
                                    <option value="2ème année"@if (old('cycle') == 'DUT' ) selected @endif>2ème année</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="filiereSelect">Filière</label>
                                <select id="filiereSelect" class="form-control" name="name">
                                    <!-- Remplacez les options ci-dessous par les filières disponibles -->
                                    @foreach ($fil2 as $fil)
                                    <option value="{{$fil->intitule_filiere}}">{{$fil->intitule_filiere}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="semestre">Semestre</label>
                                <select id="semestre" class="form-control" name="numeroSemestre">
                                    @foreach ($semestre as $item)
                                    <option value="{{$item->numeroSemestre}}">{{$item->numeroSemestre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="intituleInput">Intitulé</label>
                                <input type="text" id="intituleInput" class="form-control" name="intitule" required>
                            </div>
                            <div class="form-group">
                                <label for="profSelect">Responsable de module </label>
                                <select id="profSelect" class="form-control" name="prof">
                                    <!-- Remplacez les options ci-dessous par les filières disponibles -->
                                    @foreach ($prof as $prof)
                                    <option value="{{$prof->nom.' '.$prof->prenom}}">{{$prof->nom.' '.$prof->prenom}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="heuresCourInput">Heures cours</label>
                                <input type="number" id="heuresCourInput" class="form-control" name="heures_cours" required>
                            </div>
                            <div class="form-group">
                                <label for="heuresTDInput">Heures TD</label>
                                <input type="number" id="heuresTDInput" class="form-control" name="heures_td"  required>
                            </div>
                            <div class="form-group">
                                <label for="heuresTPInput">Heures TP</label>
                                <input type="number" id="heuresTPInput" class="form-control" name="heures_tp"  required>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-can" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-success btn-addsalle" onclick="ajouterModule()">Ajouter</button>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
        
    
    <!----edit-modal end--------->
    
    
    
    
    
    
    
    
    
    
    </div>
    
    
    </div>
    
    <style>
        .btn-add-module {
            background-color: #102C57;
            color: white;
            border: 1px solid #102C57;
            padding: 5px 25px;
            border-radius: 50px;
            cursor: pointer;
        }
    </style>
   <script>
    const modules = []; // Maintenant vide
    
    function afficherModules() {
        const cycleFilter = document.getElementById('cycle').value;
        const niveauFilter = document.getElementById('niveau').value;
        const filiereFilter = document.getElementById('filiere').value;

        const filteredModules = modules.filter(module => {
            return (cycleFilter === 'tous' || module.cycle === cycleFilter) &&
                (niveauFilter === 'tous' || module.niveau === niveauFilter) &&
                (filiereFilter === 'tous' || module.filiere === filiereFilter);
        });

        const tableBody = document.getElementById('moduleTableBody');
        tableBody.innerHTML = '';

        filteredModules.forEach(module => {
            const row = document.createElement('tr');

            row.innerHTML = `
                <td>${module.intitule}</td>
                <td>${module.departement}</td>
                <td>${module.cycle}</td>
                <td>${module.niveau}</td>
                <td>${module.filiere}</td>
                <td>${module.heuresCours}</td>
                <td>${module.heuresTD}</td>
                <td>${module.heuresTP}</td>
                <td>
                    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                    </a>
                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                        <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                    </a>
                </td>
            `;
            tableBody.appendChild(row);
        });
    }

    function filtrerNiveau() {
        const cycleSelectionne = document.getElementById('cycle').value;
        const niveauSelect = document.getElementById('niveau');

        // Réinitialiser les options du niveau
        niveauSelect.innerHTML = '<option value="tous">Tous</option>';

        // Filtrer les niveaux en fonction du cycle sélectionné
        let niveauxFiltres = [];

        if (cycleSelectionne === 'DUT') {
            niveauxFiltres = ['1ère Année', '2ème Année'];
        } else if (cycleSelectionne === 'LP') {
            niveauxFiltres = ['3ème Année'];
        } else if (cycleSelectionne === 'Master') {
            niveauxFiltres = ['4ème Année', '5ème Année'];
        }

        niveauxFiltres.forEach(niveau => {
            niveauSelect.innerHTML += `<option value="${niveau}">${niveau}</option>`;
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        // Ne remplir pas le tableau au chargement
        filtrerNiveau();

        // Ajouter des écouteurs d'événements pour les changements de cycle et de filière
        document.getElementById('cycle').addEventListener('change', () => {
            filtrerNiveau();
            afficherModules();
        });

        document.getElementById('filiere').addEventListener('change', () => {
            afficherModules();
        });

        // Ajouter un écouteur d'événements pour le changement de niveau
        document.getElementById('niveau').addEventListener('change', () => {
            afficherModules();
        });
    });
</script>

<script>
   
</script>

    
 </x-dashboard>