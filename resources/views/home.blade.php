<x-dashboard>
    <div class="container">
        <img @if (Auth::user()->image !=NULL)
        src="{{asset('storage/'.Auth::user()->image)}}"
        @else
        src="https://cdn-icons-png.freepik.com/256/6997/6997551.png?semt=ais_hybrid"
        @endif
         alt="Image de profil" class="profile-image">
        <div class="profile-info">
            <p class="nom">{{Auth::user()->nom}}  {{Auth::user()->prenom}} </p>
            <p class="role">Administrateur</p>
            <p class="email"><i class="fa-regular fa-envelope"></i>&nbsp; {{Auth::user()->email}} </p>
        </div>
        <div class="information-card">
            <div class="flex-container">
                <p class="inf">Informations personnelles</p>
                <a href="#editProfile" class="edit" data-toggle="modal">
                    <button class="btn-modifier"><i class="fa-regular fa-pen-to-square"></i>&nbsp;&nbsp;Modifier </button>
                </a>
            </div>
            <p><strong>Nom :</strong>{{Auth::user()->nom}} </p>
            @if (Auth::user()->prenom !=NULL)
            <p><strong>Prénom :</strong> {{Auth::user()->prenom}} </p>
            @endif
            <p><strong>Email :</strong> {{Auth::user()->email}} </p>
            @if (Auth::user()->numTelephone!=NULL)
            <p><strong>Téléphone :</strong>{{Auth::user()->numTelephone	}} </p>  
            @endif
           
            
            
            
        </div>
      </div>
      <!-- Édition -->
      <div class="modal fade" tabindex="-1" id="editProfile" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modifier le profil</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ route('administrateurs.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nom :</label>
                        <input type="text" class="form-control" name="nom" value="{{Auth::user()->nom}}" >
                    </div>
                    <div class="form-group">
                        <label>Prénom :</label>
                        <input type="text" class="form-control" name="prenom"  value="{{Auth::user()->prenom}}">
                    </div>
                    <div class="form-group">
                      <label>Email :</label>
                      <input type="email" class="form-control"  name="email"  value="{{Auth::user()->email}}">
                  </div>
                  <div class="form-group">
                      <label>Téléphone :</label>
                      <input type="text" class="form-control"  name="numTelephone" value="{{Auth::user()->numTelephone }}" >
                  </div>
                  <div class="form-group">
                      <label>Mot de passe :</label>
                      <input type="password" class="form-control" name="password" >
                  </div>
                  <div class="form-group">
                      <label>image :</label>
                      <input type="file" class="form-control" name="image" accept="image/*" >
                  </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-can" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-success btn-addsalle">Modifier</button>
                  </div>
            </form>
            
          </div>
        </div>
      </div>
      <!-- Fin de l'édition -->
      
</x-dashboard>