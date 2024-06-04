<x-dashboard>
    <div class="row">
        <div class="col-md-12">
            <div class="table-wrapper">
                
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                            <h2 class="ml-lg-2">Semestre</h2>
                        </div>
                        <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                            <a href="{{route('semestres.create')}}" class="btn btn-success btn-add" >
                                <i class="material-icons">&#xE147;</i>
                                <span>Ajouter une nouvelle semestre</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <!-- <th><span class="custom-checkbox">
                            <input type="checkbox" id="selectAll">
                            <label for="selectAll"></label></th> -->
                            {{-- <th><strong>Département</strong></th> --}}
                            <th style="width: 150px;"><strong>Numéro semestre</strong></th>
                            <th style="width: 150px;"><strong>Nombre semaine</strong></th>
                            {{-- <th><strong>Jour</strong></th> --}}
                            {{-- <th><strong>Matin</strong></th>
                            <th><strong>Après-midi</strong></th> --}}
                            <th style=""><strong>action</strong></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($semstres as $semestre)
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;{{ $semestre->numeroSemestre }}</td>
                            <td>&nbsp;&nbsp;&nbsp;{{ $semestre->nbrSemaine }}</td>
                            {{-- <td>{{ $salle->Matin }}</td>
                            <td>{{ $salle->Après_midi }}</td> --}}
                            <td>
                                    

                                    <a href="{{route('semestres.edit',$semestre->id)}}" class="edit" >
                                        <i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i>
                                    </a>
                                    <a href="#deleteConfirmModal" class="delete" data-toggle="modal" data-id="{{ $semestre->id }}">
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
                    </tbody>
                </table>
                
               
                <div class="clearfix">
                    <div class="hint-text">Affichage de <b>{{$semstres->count()}}</b> sur <b>{{$semstres->total()}}</b></div>
                    {{$semstres->links() }}
                </div>
    
                
                {{-- <div class="clearfix">
                    <div class="hint-text">Affichage de <b>{{$salles->count()}}</b> sur <b>{{$salles->total()}}</b></div>
                    {{$salles->links() }}
                </div> --}}
    
        
        
       
        
                <script>
                    $(document).ready(function(){
                       $('.delete').on('click', function(){
                           var id = $(this).data('id');
                           var url = '{{ route("semestres.destroy", ":id") }}';
                           url = url.replace(':id', id);
                           $('#deleteForm').attr('action', url);
                       });
                   });
               </script>

    <script>
   
    document.querySelectorAll('input[name="program"]').forEach(function (radio) {
            radio.addEventListener('change', function () {
                document.getElementById('DUT-inputs').classList.add('hidden');
                document.getElementById('LP-inputs').classList.add('hidden');
                document.getElementById('MASTER-inputs').classList.add('hidden');

                if (radio.checked) {
                    document.getElementById(radio.value + '-inputs').classList.remove('hidden');
                }
            });
        });
        
    
</script>

    
</x-dashboard>