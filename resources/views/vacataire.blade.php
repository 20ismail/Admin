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
                   <a href="#addEmployeeModal" class="btn btn-success btn-add" data-toggle="modal">
                   <i class="material-icons">&#xE147;</i>
                   <span>Ajouter vacataire</span>
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
                 <th><strong>Département</strong></th>
                 <th><strong>Nom</strong> </th>
                 <th><strong>Prenom</strong></th>
                 <th><strong>email</strong></th>
                 <th><strong>action</strong></th>
                 </tr>
              </thead>
              
              <tbody>
                  <tr>
                
                
                        <!-- <th><span class="custom-checkbox">
                        <input type="checkbox" id="checkbox1" name="option[]" value="1">
                        <label for="checkbox1"></label></th> -->
                        <th>informatique</th>
                        <th>xxxxxxxxxx</th>
                        <th>xxxxxxxxxx</th>
                        <th>xxxxxx@uca.ma</th>
                        <th>
                           <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                          <i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i>
                          </a>
                          <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                          <i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i>
                          </a>
                        </th>
                        </tr>
                        <tr>
                            <!-- <th><span class="custom-checkbox">
                            <input type="checkbox" id="checkbox1" name="option[]" value="1">
                            <label for="checkbox1"></label></th> -->
                            <th>informatique</th>
                            <th>xxxxxxxx</th>
                            <th>xxxxxx</th>
                            <th>xxxxxx@uca.ma</th>
                            <th>
                               <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                              <i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i>
                              </a>
                              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                              <i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i>
                              </a>
                            </th>
                            </tr>
                 <!-- end enseignant -->
                 
                 
              </tbody>
              
              
           </table>
           
           <div class="clearfix">
             <div class="hint-text">affichage de <b>5</b> sur <b>25</b></div>
             <ul class="pagination">
                <li class="page-item disabled"><a href="#">Précédent</a></li>
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
        
        
                           <!----add-modal start--------->
     <div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
     <div class="modal-dialog" role="document">
     <div class="modal-content">
     <div class="modal-header">
     <h5 class="modal-title">Ajouter Vacataire</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
     </div>
     <div class="modal-body">
     <div class="form-group">
     <label>Nom</label>
     <input type="text" class="form-control" required>
     </div>
     <div class="form-group">
     <label>Prénom</label>
     <input type="text" class="form-control" required>
     </div>
     <div class="form-group">
     <label>Email</label>
     <input type="email" class="form-control" required>
     </div>
     <div class="form-group">
     <label>Téléphone</label>
     <input type="text" class="form-control" required>
     </div>
     <div class="form-group">
     <label>Mot de passe</label>
     <input type="password" class="form-control" required>
     </div>
     <div class="form-group">
     <label>Heure d'Enseignement Année</label>
     <input type="number" class="form-control" required>
     </div>
     </div>
     <div class="modal-footer">
     <button type="button" class="btn btn-secondary btn-can" data-dismiss="modal">Annuler</button>
     <button type="button" class="btn btn-success btn-addsalle">Ajouter</button>
     </div>
     </div>
     </div>
     </div>
     
           <!----edit-modal end--------->
           
           
           
           
           
       <!----edit-modal start--------->
     <div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
     <div class="modal-dialog" role="document">
     <div class="modal-content">
     <div class="modal-header">
     <h5 class="modal-title">Modifier Vacataire</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
     </div>
     <div class="modal-body">
        <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Prénom</label>
            <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Mot de passe</label>
            <input type="password" class="form-control" required>
            </div>
     </div>
     <div class="modal-footer">
     <button type="button" class="btn btn-secondary btn-can" data-dismiss="modal">Annuler</button>
     <button type="button" class="btn btn-success btn-addsalle">Enregistrer</button>
     </div>
     </div>
     </div>
     </div>
     
           <!----edit-modal end--------->
           
           
         <!----delete-modal start--------->
         <div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
           <div class="modal-dialog" role="document">
           <div class="modal-content">
           <div class="modal-header">
           <h5 class="modal-title">Supprimer Vacataire</h5>
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
     </div>
     
           <!----delete-modal end--------->
           
        
        
     
     </div>
     
</x-dashboard>    