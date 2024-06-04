
<x-dashboard>
    <div class="row">
        <div class="col-md-12">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                            <h2 class="ml-lg-2">Enseignants</h2>
                        </div>
                        <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                            <a href="#addEmployeeModal" class="btn btn-success btn-add" data-toggle="modal">
                                <i class="material-icons">&#xE147;</i>
                                <span>Ajouter Nouvel Enseignant</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th><strong>Nom</strong></th>
                            <th><strong>Prénom</strong></th>
                            <th><strong>Email</strong></th>
                            <th><strong>Téléphone</strong></th>
                            <th><strong>Heures/An</strong></th>
                            <th><strong>Action</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teachers as $teacher)
                        <tr>
                            <td>{{ $teacher->nom }}</td>
                            <td>{{ $teacher->prenom }}</td>
                            <td>{{ $teacher->email }}</td>
                            <td>{{ $teacher->numTelephone }}</td>
                            <td>{{ $teacher->heuresEnseignementAnnee }}</td>
                            <td>
                                <a href="{{ route('editEnseignant', $teacher->id) }}" class="edit" data-id="{{ $teacher->id }}">
                                    <i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i>
                                </a>
                                <a href="#deleteConfirmModal" class="delete" data-toggle="modal" data-id="{{ $teacher->id }}">
                                    <i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <div class="clearfix">
                    <div class="hint-text">Affichage de <b>{{ $teachers->count() }}</b> sur <b>{{ $teachers->total() }}</b></div>
                    {{ $teachers->links() }}
                </div>
            </div>
        </div>
        
        <!-- Add Modal -->
        <div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('enseignant.store') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">Ajouter Enseignant</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" name="nom" class="form-control" required>
                                @error('nom')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Prénom</label>
                                <input type="text" name="prenom" class="form-control" required>
                                @error('prenom')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Téléphone</label>
                                <input type="text" name="numTelephone" class="form-control" required>
                                @error('numTelephone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Mot de passe</label>
                                <input type="password" name="password" class="form-control" required>
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Heures d'Enseignement par Année</label>
                                <input type="number" name="heuresEnseignementAnnee" class="form-control" required>
                                @error('heuresEnseignementAnnee')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
 <!-- Delete Modal HTML -->
         <!-- Modal de confirmation -->
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



<script>

    // Script to handle the delete modal
    $(document).ready(function(){
            $('.delete').on('click', function(){
                var id = $(this).data('id');
                var url = '{{ route("enseignant.destroy", ":id") }}';
                url = url.replace(':id', id);
                $('#deleteForm').attr('action', url);
            });
        });
</script>
</x-dashboard>







