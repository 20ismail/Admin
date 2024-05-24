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
                  <tr>
                 <td>Informatique</td>
                 <td>DUT</td>
                 <td>Genie Informatique</td>
                 <td>
                    <a href="#editFiliereModal" class="edit" data-toggle="modal">
                   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                   </a>
                   <a href="#deleteEmployeeModal" class="delete" data-toggle="modal" >
                   <i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i>
                   </a>
                 </td>
                 </tr>
                
                 <tr>
                    <td>TM</td>
                    <td>DUT</td>
                    <td>Techniques de Management</td>
                    <td>
                       <a href="#editFiliereModal" class="edit" data-toggle="modal">
                      <i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i>
                      </a>
                      <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                      <i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i>
                      </a>
                    </td>
                    </tr>
    
                    <tr>
                        <td>Informatique</td>
                        <td>Master</td>
                        <td>Big Data</td>
                        <td>
                           <a href="#editFiliereModal" class="edit" data-toggle="modal">
                          <i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i>
                          </a>
                          <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                          <i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i>
                          </a>
                        </td>
                        </tr>
                     <!-- Autres lignes de filières -->
              </tbody>
              
        
           </table>
           <div class="clearfix">
            <div class="hint-text">Affichage De <b>3</b> sur <b>25</b></div>
            <ul class="pagination">
               <li class="page-item "><a href="#"class="page-link">Précédent</a></li>
               <li class="page-item "><a href="#"class="page-link">1</a></li>
               <li class="page-item "><a href="#"class="page-link">2</a></li>
               <li class="page-item active"><a href="#"class="page-link">3</a></li>
               <li class="page-item "><a href="#"class="page-link">4</a></li>
               <li class="page-item "><a href="#"class="page-link">5</a></li>
               <li class="page-item "><a href="#" class="page-link">Suivant</a></li>
            </ul>
          </div>
           </div>
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
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="Département">Département</label>
                            <select class="form-control" id="cycle" required>
                                <option value="Informatique">Informatique</option>
                                <option value="TM">TM</option>
                                <option value="TACQ">TACQ</option>
                                <option value="MI">MI</option>
                            </select>
                        </div> 
                        <div class="form-group">
                            <label for="cycle">Cycle</label>
                            <select class="form-control" id="cycle" required>
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
                            <input type="text" class="form-control" id="intitule" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-can" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-success btn-addsalle">Ajouter</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal de modification de filière -->
        <div class="modal fade" id="editFiliereModal" tabindex="-1" role="dialog" aria-labelledby="editFiliereModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editFiliereModalLabel">Modifier une Filière</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="Département">Département</label>
                            <select class="form-control" id="cycle" required>
                                <option value="Informatique">Informatique</option>
                                <option value="TM">TM</option>
                                <option value="TACQ">TACQ</option>
                                <option value="MI">MI</option>
                            </select>
                        </div> 
                        <div class="form-group">
                            <label for="cycleEdit">Cycle</label>
                            <select class="form-control" id="cycleEdit" required>
                                <option value="DUT">DUT</option>
                                <option value="Licence">Licence</option>
                                <option value="Master">Master</option>
                            </select>
                        </div>
                        <!-- <div class="form-group">
                            <label for="niveauEdit">Niveau</label>
                            <input type="number" class="form-control" id="niveauEdit" required>
                        </div> -->
                        <div class="form-group">
                            <label for="intituleEdit">Intitulé</label>
                            <input type="text" class="form-control" id="intituleEdit" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-can" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-success btn-addsalle">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal de confirmation de suppression -->
        <div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Supprimer Filière</h5>
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
                <button type="button" class="btn btn-success btn-addsalle">Supprimer</button>
                </div>
            </div>
        </div>
    </div>
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
    </script>
    
    
</x-dashboard>