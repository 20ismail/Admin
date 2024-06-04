
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>ESTS</title>
    @vite(['resources/js/jquery-3.3.1.slim.min.js', 
           'resources/js/popper.min.js',
           'resources/js/bootstrap.min.js',
           'resources/js/jquery-3.3.1.min.js',
           'resources/js/list.js'])
            @vite('resources/css/bootstrap.min.css')
            <!-- CSS3 -->
            {{-- <link rel="stylesheet" href="css/custom.css">
            <link rel="stylesheet" href="css/fiche.css"> --}}
            @vite('resources/css/custom.css')
            @vite('resources/css/fiche.css')
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <!-- Inclure Bootstrap JS -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <!-- Inclure Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS3 -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/fiche.css"> --}}
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <div class="wrapper">

        <div class="body-overlay"></div>

        <!-- Sidebar -->
        <div id="sidebar">
            <div class="sidebar-header">
                <h3>
                    <img src="{{asset('storage/profile/logoEst.png')}}" style="border-radius: 32px; width:68px;" class="img-fluid" />
                    <span>EST SAFI</span>
                </h3>
            </div>
            <ul class="list-unstyled component m-2">
                <li class="">
                    <a href="{{route('home')}}" class="" id="homeLink"><span <i class="fa-solid fa-house"></i>&nbsp;&nbsp;&nbsp;
                    </span>Accueil</a>
                </li>
                <li class="">
                    <a href="{{route('salleEsts.index')}}" class="" id="salleLink"><span <i class="fa-solid fa-school"></i>&nbsp;&nbsp;&nbsp;
                    </span>Salle </a>
                </li>
                <li class="">
                    <a href="{{route('enseignant.index')}}" class="" id="ensglink"><span <i class="fa-solid fa-user-tie"></i>&nbsp;&nbsp;&nbsp;
                    </span>Enseignant </a>
                </li>
                <li class="">
                    <a href="{{route('seceretaires.index')}}" class="" id="seclink"><span <i class="fa-solid fa-user-tie"></i>&nbsp;&nbsp;&nbsp;
                    </span>Secrétaire </a>
                </li>
                <li class="">
                    <a href="{{route('vacataire.index')}}" class="" id="Vaclink"><span <i class="fa-solid fa-user-tie"></i>&nbsp;&nbsp;&nbsp;
                    </span>Vacataire</a>
                </li>
                <li class="">
                    <a href="{{route('modules.index')}}" class="" id="modulelink"><span <i class="fa-solid fa-book"></i>&nbsp;&nbsp;&nbsp;
                    </span>Module</a>
                </li>
                <li class="">
                    <a href="{{route('filieres.index')}}" class="" id="filierelink"><span <i class="fa-solid fa-graduation-cap"></i>&nbsp;&nbsp;&nbsp;
                    </span>Filière </a>
                </li>
                <li class="">
                    <a href="{{route('semestres.index')}}" class="" ><span <i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp;&nbsp;
                    </span>Semestre</a>
                </li>
                <li class="">
                    <a href="{{route('Disponibilite_profs.index')}}" class="" id="dispoLink"><span <i class="fa-solid fa-business-time"></i>&nbsp;&nbsp;&nbsp;
                    </span>Disponibilité Enseignant</a>
                </li>
                <li class="">
                    <a href="{{route('logout')}}" class="" id="dispoLink"><span <i class="fa-solid fa-right-from-bracket"></i>&nbsp;&nbsp;&nbsp;
                    </span>se Déconnecter</a>
                </li>
            </ul>
        </div>
        <!-- Sidebar End -->

        <!-- Page Content -->
        <div id="content">

            <!-- Top Navbar -->
            <div class="top-navbar">
                <div class="xd-topbar">
                    <div class="row">
                        <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                            <div class="xp-menubar">
                                <span class="material-icons text-white">signal_cellular_alt</span>
                            </div>
                        </div>

                        <div class="col-md-5 col-lg-3 order-3 order-md-2">
                            <div class="xp-searchbar">
                                {{-- <form>
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit" id="button-addon2">Go
                                            </button>
                                        </div>
                                    </div>
                                </form> --}}
                            </div>
                        </div>

                        <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                            <div class="xp-profilebar text-right">
                                <nav class="navbar p-0">
                                    <ul class="nav navbar-nav flex-row ml-auto">
                                        {{-- <li class="dropdown nav-item active">
                                            <a class="nav-link" href="#" data-toggle="dropdown">
                                                <span class="material-icons">notifications</span>
                                                <span class="notification">4</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">You Have 4 New Messages</a></li>
                                                <li><a href="#">You Have 4 New Messages</a></li>
                                                <li><a href="#">You Have 4 New Messages</a></li>
                                                <li><a href="#">You Have 4 New Messages</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                <span class="material-icons">question_answer</span>
                                            </a>
                                        </li> --}}

                                        <li class="dropdown nav-item">
                                            <a class="nav-link" href="#" data-toggle="dropdown">
                                                <img @if (Auth::user()->image !=NULL)
                                                src="{{asset('storage/'.Auth::user()->image)}}"
                                                @else
                                                src="https://cdn-icons-png.freepik.com/256/6997/6997551.png?semt=ais_hybrid"
                                                @endif
                                                 style="width:40px; border-radius:50%;" />
                                                <span class="xp-user-live"></span>
                                            </a>
                                            
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
            <!-- Top Navbar End -->

            <!-- Main Content -->
            <div class="main-content">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @include('sweetalert::alert')
                {{$slot}}
                
                
            </div>
            <!-- Main Content End -->

        </div>
        <!-- Page Content End -->

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="js/jquery-3.3.1.slim.min.js"></script> -->
    {{-- <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/jquery-3.3.1.min.js"></script> -->
    <script src="js/list.js"></script> --}}

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
    // Sélectionne l'élément avec la classe .xp-menubar
    var xpMenubar = document.querySelector('.xp-menubar');
    // Sélectionne l'élément avec l'ID #sidebar
    var sidebar = document.getElementById('sidebar');
    // Sélectionne l'élément avec l'ID #content
    var content = document.getElementById('content');
    // Sélectionne les éléments avec les classes .xp-menubar et .body-overlay
    var toggles = document.querySelectorAll('.xp-menubar, .body-overlay');
    // Sélectionne l'élément avec la classe .body-overlay
    var bodyOverlay = document.querySelector('.body-overlay');

    // Ajoute un écouteur d'événements pour le clic sur l'élément .xp-menubar
    xpMenubar.addEventListener('click', function() {
        sidebar.classList.toggle('active');
        content.classList.toggle('active');
    });

    // Ajoute un écouteur d'événements pour le clic sur les éléments .xp-menubar et .body-overlay
    toggles.forEach(function(toggle) {
        toggle.addEventListener('click', function() {
            sidebar.classList.toggle('show-nav');
            bodyOverlay.classList.toggle('show-nav');
        });
    });
});

    </script>

</body>

</html>










































