<x-dashboard>
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
                            <th><strong>Département</strong></th>
                            <th><strong>Cycle</strong></th>
                            <th><strong>Niveau</strong></th>
                            <th><strong>Filière</strong></th>
                            <th><strong>Heures cours</strong></th>
                            <th><strong>Heures TD</strong></th>
                            <th><strong>Heures TP</strong></th>
                            <th><strong>Action</strong></th>
                        </tr>
                    </thead>
                    <tbody id="moduleTableBody">
                        <!-- Les lignes de modules seront ajoutées ici par JavaScript -->
                    </tbody>
                </table>
                
                <div class="clearfix">
                    <div class="hint-text">Affichage de <b>5</b> sur <b>25</b></div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Précédent</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Suivant</a></li>
                    </ul>
                </div>
            </div>
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
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="cycleSelect">Cycle</label>
                            <select id="cycleSelect" class="form-control">
                                <option value="DUT">DUT</option>
                                <option value="LP">LP</option>
                                <option value="Master">Master</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="niveauSelect">Niveau</label>
                            <select id="niveauSelect" class="form-control">
                                <option value="1ere annee">1ère année</option>
                                <option value="2eme annee">2ème année</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="filiereSelect">Filière</label>
                            <select id="filiereSelect" class="form-control">
                                <!-- Remplacez les options ci-dessous par les filières disponibles -->
                                <option value="Filiere 1">Filière 1</option>
                                <option value="Filiere 2">Filière 2</option>
                                <option value="Filiere 3">Filière 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="intituleInput">Intitulé</label>
                            <input type="text" id="intituleInput" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="heuresCourInput">Heures cours</label>
                            <input type="number" id="heuresCourInput" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="heuresTDInput">Heures TD</label>
                            <input type="number" id="heuresTDInput" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="heuresTPInput">Heures TP</label>
                            <input type="number" id="heuresTPInput" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-can" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-success btn-addsalle" onclick="ajouterModule()">Ajouter</button>
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
    <h5 class="modal-title">Modifier module</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
    <div class="form-group">
    <label>Intitulé</label>
    <input type="text" class="form-control" required>
    </div>
    <div class="form-group">
    <label>Département</label>
    <input type="text" class="form-control" required>
    </div>
    <div class="form-group">
    <label for="cycleSelect">Cycle</label>
    <select id="cycleSelect" class="form-control">
    <option value="DUT">DUT</option>
    <option value="LP">LP</option>
    <option value="Master">Master</option>
    </select>
    </div>
    <div class="form-group">
    <label for="niveauSelect">Niveau</label>
    <select id="niveauSelect" class="form-control">
    <option value="1ere annee">1ère année</option>
    <option value="2eme annee">2ème année</option>
    </select>
    </div>
    <div class="form-group">
    <label for="filiereSelect">Filière</label>
    <select id="filiereSelect" class="form-control">
    <option value="Filiere 1">Filière 1</option>
    <option value="Filiere 2">Filière 2</option>
    <option value="Filiere 3">Filière 3</option>
    </select>
    </div>
    <div class="form-group">
    <label>Heures cours</label>
    <input type="number" class="form-control" required>
    </div>
    <div class="form-group">
    <label>Heures TD</label>
    <input type="number" class="form-control" required>
    </div>
    <div class="form-group">
    <label>Heures TP</label>
    <input type="number" class="form-control" required>
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
    <h5 class="modal-title">Supprimer module</h5>
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
    
    <!----delete-modal end--------->
    
    
    
    
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
        const modules = [
            { intitule: 'Web', departement: 'informatique', cycle: 'DUT', niveau: '1ère Année', filiere: 'Informatique', heuresCours: 20, heuresTD: 0, heuresTP: 40 },
            { intitule: 'Web', departement: 'informatique', cycle: 'DUT', niveau: '2ème Année', filiere: 'Informatique', heuresCours: 20, heuresTD: 0, heuresTP: 40 },
            { intitule: 'Réseau informatique', departement: 'informatique', cycle: 'LP', niveau: '3ème Année', filiere: 'Informatique', heuresCours: 20, heuresTD: 0, heuresTP: 40 },
            { intitule: 'Base de données avancées', departement: 'informatique', cycle: 'Master', niveau: '4ème Année', filiere: 'Informatique', heuresCours: 20, heuresTD: 0, heuresTP: 40 },
            { intitule: 'Sécurité des systèmes', departement: 'informatique', cycle: 'Master', niveau: '5ème Année', filiere: 'Sécurité Informatique', heuresCours: 20, heuresTD: 0, heuresTP: 40 }
        ];
    
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
            afficherModules();
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
    
    
 </x-dashboard>