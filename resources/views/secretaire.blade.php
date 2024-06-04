<x-dashboard>
    <div class="row">
        <div class="col-md-12">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                            <h2 class="ml-lg-2">Secrétaire</h2>
                        </div>
                        <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                            <a href="#addEmployeeModal" class="btn btn-success btn-add" data-toggle="modal">
                                <i class="material-icons">&#xE147;</i>
                                <span>Ajouter une secrétaire</span>
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
                            <th><strong>Action</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sec as $secretaire)
                        <tr>
                            <td>{{ $secretaire->nom }}</td>
                            <td>{{ $secretaire->prenom }}</td>
                            <td>{{ $secretaire->email }}</td>
                            <td>{{ $secretaire->numTelephone }}</td>
                            <td>
                                <a href="{{route('secretaireEdit',$secretaire->id)}}" class="edit" data-id="{{ $secretaire->id }}"> 
                                    <i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i>
                                </a>

                                <a href="#deleteConfirmModal" class="delete" data-toggle="modal" data-id="{{ $secretaire->id }}">
                                    <i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i>
                                </a>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <div class="clearfix">
                    <div class="hint-text">Affichage de <b>{{ $sec->count() }}</b> sur <b>{{ $sec->total() }}</b></div>
                    <ul class="pagination">
                        {{ $sec->links() }}
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Add Modal -->
        <div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('seceretaires.store') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">Ajouter une secrétaire</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" name="nom" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Prénom</label>
                                <input type="text" name="prenom" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Téléphone</label>
                                <input type="text" name="numTelephone" class="form-control" required>
                            </div>
                           
                            <div class="form-group">
                                <label>Mot de passe</label>
                                <input type="password" name="password" class="form-control" required>
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
        
        <!-- Edit Modal -->
       <!-- Edit Modal -->
{{-- <div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('seceretaires.update', ['id' => $secretaire->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Modifier Secrétaire</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="edit-id">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" name="nom" id="edit-nom" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Prénom</label>
                        <input type="text" name="prenom" id="edit-prenom" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="edit-email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Téléphone</label>
                        <input type="text" name="numTelephone" id="edit-telephone" class="form-control" required>
                    </div>
                    {{-- <div class="form-group">
                        <label>Type</label>
                        <input type="text" name="type" id="edit-type" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>ID Administrateur</label>
                        <input type="text" name="idAdministrateur" id="edit-idAdministrateur" class="form-control" required>
                    </div> 
                    <div class="form-group">
                        <label>Mot de passe</label>
                        <input type="password" name="password" id="edit-password" class="form-control">
                    </div> <!----}-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-can" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-success btn-addsalle">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}

        
        <!-- Delete Modal -->
{{-- <div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('seceretaires.destroy', ['id' => $secretaire->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title">Supprimer Secrétaire</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Êtes-vous sûr de vouloir supprimer cet enregistrement ?</p>
                    <p class="text-warning"><small>Cette action ne peut pas être annulée.</small></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-can" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-danger btn-addsalle">Supprimer</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}


<!-- Modal de confirmation -->
<div id="deleteConfirmModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">						
                <h4 class="modal-title">Confirmer la suppression</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">					
                <p>Êtes-vous sûr de vouloir supprimer cet secretaire ?</p>
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
        
    $(document).ready(function(){
        $('.delete').on('click', function(){
            var id = $(this).data('id');
            var url = '{{ route("seceretaires.destroy", ":id") }}';
            url = url.replace(':id', id);
            $('#deleteForm').attr('action', url);
        });
    });
</script>
    </div>
</x-dashboard>
