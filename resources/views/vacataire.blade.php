<x-dashboard>
   <div class="row">
       <div class="col-md-12">
           <div class="table-wrapper">
               <div class="table-title">
                   <div class="row">
                       <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                           <h2 class="ml-lg-2">Vacataire</h2>
                       </div>
                       <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                           <a href="#addVacataireModal" class="btn btn-success btn-add" data-toggle="modal">
                               <i class="material-icons">&#xE147;</i>
                               <span>Ajouter vacataire</span>
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
                           <th><strong>Action</strong></th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($vacataires as $vacataire)
                           <tr>
                               <td>{{ $vacataire->nom }}</td>
                               <td>{{ $vacataire->prenom }}</td>
                               <td>{{ $vacataire->email }}</td>
                               <td>
                                   <a href="{{ route('editVacataire', $vacataire->id) }}" class="edit">
                                       <i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i>
                                   </a>
                                   <a href="#deleteConfirmModal" class="delete" data-toggle="modal" data-id="{{ $vacataire->id }}">
                                       <i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i>
                                   </a>
                               </td>
                           </tr>
                       @endforeach
                   </tbody>
               </table>
               <div class="clearfix">
                   <div class="hint-text">Affichage de <b>{{ $vacataires->count() }}</b> sur <b>{{ $vacataires->total() }}</b></div>
                   {{ $vacataires->links() }}
               </div>
           </div>
       </div>

       <!-- Add Modal HTML -->
       <div id="addVacataireModal" class="modal fade">
           <div class="modal-dialog">
               <div class="modal-content">
                   <form method="POST" action="{{ route('vacataire.store') }}">
                       @csrf
                       <div class="modal-header">
                           <h4 class="modal-title">Ajouter Vacataire</h4>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
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
                       </div>
                       <div class="modal-footer">
                           <input type="button" class="btn btn-secondary btn-can" data-dismiss="modal" value="Annuler">
                           <input type="submit" class="btn btn-success btn-addsalle" value="Ajouter">
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
               var url = '{{ route("vacataire.destroy", ":id") }}';
               url = url.replace(':id', id);
               $('#deleteForm').attr('action', url);
           });
       });
</script>
</x-dashboard>