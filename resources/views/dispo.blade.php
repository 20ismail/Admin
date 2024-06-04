<x-dashboard>
    <div class="row">
        <div class="col-md-12">
           <div class="table-wrapper">
             
           <div class="table-title">
             <div class="row">
                 <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                    <h2 class="ml-lg-2">disponibilité d'enseignant</h2>
                 </div>
                 {{-- <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                   <a href="#addFiliereModal" class="btn btn-success btn-add" data-toggle="modal">
                   <i class="material-icons">&#xE147;</i>
                   <span>Ajouter une disponibilité</span>
                   </a>
                 </div> --}}
             </div>
           </div>
           
            <!-- Filtre par enseignant -->
            <div class="row mt-3" style="background-color: #DAC0A3;width:101%; padding: 8px 15px; border-radius: 5px; margin-top: 0;">
                <div class="col-md-5">
                    <label for="cycleFilter" style="color: #102C57; font-weight: bold; margin-bottom: 5px;">Filtrer par Enseignant :</label>
                    <select class="form-control" id="nomFilter" 
                    style="width: 100%; padding: 8px; border-radius: 3px; border: 1px solid #102C57; background-color: #ffffffe0; color: #102C57;">
                        <option value="">Tous</option>
                        @foreach ($mons as $ite)
                        <option value="{{$ite->nom}}">{{$ite->nom.' '.$ite->prenom}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            
    
           <table class="table table-striped table-hover">
              <thead>
                 <tr>
                 <th><strong>Nom</strong> </th>
                 <th><strong>Prénom</strong></th>
                 <th><strong>saison</strong></th>
              
                 <th><strong>Jour</strong></th>
                 <th><strong>Matin</strong></th>
                 <th><strong>Après-midi</strong></th>
                 
                 <th><strong>Action</strong></th>
                 </tr>
              </thead>
              
              <tbody>
                
                
    
                    <tr>
                        @foreach ($prof as $item)
                        <td>{{$item->nom}}</td>
                        <td>{{$item->prenom}}</td>
                        <td>Automne</td>
                       
                        <td>{{$item->jour}}</td>
                        @if ($item->matin==1)
                        <td>Oui</td>
                        @else
                            <td>Non</td> 
                        @endif
                        
                        @if ($item->apres_midi==1)
                            <td>Oui</td>
                        @else
                            <td>Non</td>
                        @endif
                       
                        <td>
                           {{-- <a href="#editFiliereModal" class="edit" data-toggle="modal">
                          <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                          </a> --}}
                          <a href="#deleteConfirmModal" class="delete" data-toggle="modal" data-id="{{ $item->id }}">
                            <i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i>
                        </a>
                        </td>
                        </tr>
                        @endforeach
                       
    
                        
                     <!-- Autres lignes de dispo -->
              </tbody>
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
           </table>
         
           <div class="clearfix">
            <div class="hint-text">Affichage de <b>{{ $prof->count() }}</b> sur <b>{{ $prof->total() }}</b></div>
            {{ $prof->links() }}
        </div>
        <!-- Modal d'ajout de dispo -->
        {{-- <div class="modal fade" id="addFiliereModal" tabindex="-1" role="dialog" aria-labelledby="addFiliereModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addFiliereModalLabel">Ajouter une disponibilité</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <div class="form-group">
                            <label for="nom">Nom enseignant</label>
                            <input type="text" class="form-control" id="nom" required>
                        </div>
                        <div class="form-group">
                            <label for="Prénom">Prénom enseignant</label>
                            <input type="text" class="form-control" id="Prénom" required>
                        </div>
    
                        <div class="form-group">
                            <label for="Saison">Saison</label>
                            <select class="form-control" id="cycle" required>
                                <option value="Printemps">Printemps</option>
                                <option value="Automne">Automne</option>
                                
                            </select>
                       </div>
                            <div class="form-group">
                                <label for="jour">Jour</label>
                                <select class="form-control" id="jour" required>
                                  <option value="lundi">Lundi</option>
                                  <option value="mardi">Mardi</option>
                                  <option value="mercredi">Mercredi</option>
                                  <option value="jeudi">Jeudi</option>
                                  <option value="vendredi">Vendredi</option>
                                  <option value="samedi">Samedi</option>
                                </select>
                                
                            </div>
                        
                            <div class="form-group">
                                <label for="Matin">Matin</label>
                                <select class="form-control" id="cycle" required>
                                    <option value="Oui">Oui</option>
                                    <option value="Non">Non</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Après-midi">Après-midi</label>
                                <select class="form-control" id="cycle" required>
                                    <option value="Oui">Oui</option>
                                    <option value="Non">Non</option>   
                                </select>
                            </div> 
    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-can" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-success btn-addsalle">Ajouter</button>
                    </div>
                </div>
            </div>
        </div> --}}
        
        <!-- Modal de modification de dispo -->
        {{-- <div class="modal fade" id="editFiliereModal" tabindex="-1" role="dialog" aria-labelledby="editFiliereModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editFiliereModalLabel">Modifier une disponibilité</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
    
                        <div class="form-group">
                            <label for="nomEdit">Nom enseignant</label>
                            <input type="text" class="form-control" id="nomEdit" required>
                        </div>
                        <div class="form-group">
                            <label for="intituleEdit">Prénom enseignant</label>
                            <input type="text" class="form-control" id="intituleEdit" required>
                        </div>
    
                        <div class="form-group">
                            <label for="Saison">Saison</label>
                            <select class="form-control" id="cycle" required>
                                <option value="Printemps">Printemps</option>
                                <option value="Automne">Automne</option>
                                
                            </select>
                       </div>
                            <div class="form-group">
                                <label for="jour">Jour</label>
                                <select class="form-control" id="jour" required>
                                  <option value="lundi">Lundi</option>
                                  <option value="mardi">Mardi</option>
                                  <option value="mercredi">Mercredi</option>
                                  <option value="jeudi">Jeudi</option>
                                  <option value="vendredi">Vendredi</option>
                                  <option value="samedi">Samedi</option>
                                </select>
                                
                            </div>
                        
                            <div class="form-group">
                                <label for="Matin">Matin</label>
                                <select class="form-control" id="cycle" required>
                                    <option value="Oui">Oui</option>
                                    <option value="Non">Non</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Après-midi">Après-midi</label>
                                <select class="form-control" id="cycle" required>
                                    <option value="Oui">Oui</option>
                                    <option value="Non">Non</option>   
                                </select>
                            </div> 
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-can" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-success btn-addsalle">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>
         --}}
        <!-- Modal de confirmation de suppression -->
        {{-- <div class="modal fade" id="deleteFiliereModal" tabindex="-1" role="dialog" aria-labelledby="deleteFiliereModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteFiliereModalLabel">Supprimer une disponibilité</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Êtes-vous sûr de vouloir supprimer cette disponibilité ?</p>
                        <p class="text-warning"><small>Cette action est irréversible.</small></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-can" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-success btn-addsalle">Supprimer</button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Ajouter le gestionnaire d'événements pour le filtre de nom d'enseignant
            const nomFilter = document.getElementById('nomFilter');
            const tableRows = document.querySelectorAll('tbody tr');
    
            nomFilter.addEventListener('change', function() {
                const filterValue = this.value;
                tableRows.forEach(row => {
                    const nom = row.children[0].textContent.trim();
                    if (filterValue === "" || nom === filterValue) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                });
            });
        });


    </script>
     <script>
        
        $(document).ready(function(){
            $('.delete').on('click', function(){
                var id = $(this).data('id');
                var url = '{{ route("Disponibilite_profs.destroy", ":id") }}';
                url = url.replace(':id', id);
                $('#deleteForm').attr('action', url);
            });
        });
    </script>
</x-dashboard>