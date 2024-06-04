<x-dashboard>
    <div class="row">
        <div class="col-md-12">
           <div class="table-wrapper">
             
           <div class="table-title">
             <div class="row">
                 <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                    <h2 class="ml-lg-2">Filières</h2>
                 </div>
                 <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                   <a href="#addFiliereModal" class="btn btn-success btn-add" data-toggle="modal">
                   <i class="material-icons">&#xE147;</i>
                   <span>Ajouter une Filière</span>
                   </a>
                 </div>
             </div>
           </div>
           
            <!-- Filtre par cycle -->
            <div class="row mt-3" style="background-color: #DAC0A3; width:101%; padding: 8px 15px; border-radius: 5px; margin-top: 0;">
                <div class="col-md-5">
                    <label for="cycleFilter" style="color: #102C57; font-weight: bold; margin-bottom: 5px;">Filtrer par Cycle :</label>
                    <select class="form-control" id="cycleFilter" style="width: 100%; padding: 8px; border-radius: 3px; border: 1px solid #102C57; background-color: #ffffffe0; color: #102C57;">
                        <option value="">Tous</option>
                        <option value="DUT">DUT</option>
                        <option value="Licence">Licence</option>
                        <option value="Master">Master</option>
                    </select>
                </div>
            </div>
            
            
    
           <table class="table table-striped table-hover">
              <thead>
                 <tr>
                 <th><strong>Département</strong></th>
                 <th><strong>Cycle</strong></th>
                 <th><strong>Intitulé</strong></th>
                 <th><strong>Action</strong></th>
                 </tr>
              </thead>
              
              <tbody>
                @foreach ($filiere as $item)
                <tr>
                    <td>{{$item->intitule}}</td>
                    <td>{{$item->cycle}}</td>
                    <td>{{$item->intitule_filiere}}</td>
                    <td>
                      <a href="{{route('filieres.edit',$item->filier_id )}}" class="edit" >
                        <i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i>
                    </a>
                      <a href="#deleteConfirmModal" class="delete" data-toggle="modal" data-id="{{ $item->filier_id }}">
                        <i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i>
                     </a>
                    </td>
                    </tr>
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
                 
                     <!-- Autres lignes de filières -->
              </tbody>
             
        
           </table>
           <div class="clearfix">
            <div class="hint-text">Affichage de <b>{{$filiere->count()}}</b> sur <b>{{$filiere->total()}}</b></div>
            {{$filiere->links() }}
        </div>
        
        <!-- Modal d'ajout de filière -->
        <div class="modal fade" id="addFiliereModal" tabindex="-1" role="dialog" aria-labelledby="addFiliereModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addFiliereModalLabel">Ajouter une Filière</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('filieres.store')}}" method="POST">
                        @csrf

                        <div class="modal-body">
                            <div class="form-group">
                                <label for="Département">Département</label>
                                <select class="form-control" id="cycle" name="departement" required>
                                    @foreach ($departement as $item)
                                    <option value="{{$item->intitule}}">{{$item->intitule}}</option>
                                    @endforeach
                                    {{-- <option value="Informatique">Informatique</option>
                                    <option value="TM">TM</option>
                                    <option value="TACQ">TACQ</option>
                                    <option value="MI">MI</option> --}}
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="cycle">Cycle</label>
                                <select class="form-control" id="cycle" name="cycle" required>
                                    <option value="DUT">DUT</option>
                                    <option value="Licence">Licence</option>
                                    <option value="Master">Master</option>
                                </select>
                            </div>
                            <!-- <div class="form-group">
                                <label for="niveau">Niveau</label>
                                <input type="number" class="form-control" id="niveau" required>
                            </div> -->
                            <div class="form-group">
                                <label for="intitule">Intitulé</label>
                                <input type="text" class="form-control" id="int" name="name" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-can" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-success btn-addsalle">Ajouter</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        
        <!-- Modal de modification de filière -->
     
        
        <!-- Modal de confirmation de suppression -->
     

    <script>
       document.addEventListener("DOMContentLoaded", function() {
        // Ajouter le gestionnaire d'événements pour le filtre de cycle
        const cycleFilter = document.getElementById('cycleFilter');
        const tableRows = document.querySelectorAll('tbody tr');

        cycleFilter.addEventListener('change', function() {
            const filterValue = this.value;
            tableRows.forEach(row => {
                const cycle = row.children[1].textContent.trim();
                if (filterValue === "" || cycle === filterValue) {
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
                var url = '{{ route("filieres.destroy", ":id") }}';
                url = url.replace(':id', id);
                $('#deleteForm').attr('action', url);
            });
        });
    </script>
    
</x-dashboard>