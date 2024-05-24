<!doctype html>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>ESTS</title>
    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
    @vite('resources/css/bootstrap.min.css')
    <!-- CSS3 -->
    {{-- <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/fiche.css"> --}}
    @vite('resources/css/custom.css')
    @vite('resources/css/fiche.css')
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <div class="wrapper">

        <div class="body-overlay"></div>

        <!-- Sidebar -->
        <div id="sidebar">
            <div class="sidebar-header">
                <h3>
                    <img src="img/téléchargement.png" style="border-radius: 25px;" class="img-fluid" />
                    <span>EST SAFI</span>
                </h3>
            </div>
            <ul class="list-unstyled component m-2">
                <li class="">
                    <a href="#" class="" id="homeLink"><span <i class="fa-solid fa-house"></i>&nbsp;&nbsp;&nbsp;
                    </span>Acceuil </a>
                </li>
                <li class="">
                    <a href="#" class="" id="salleLink"><span <i class="fa-solid fa-school"></i>&nbsp;&nbsp;&nbsp;
                    </span>Salle </a>
                </li>
                <li class="">
                    <a href="#" class="" id="ensglink"><span <i class="fa-solid fa-user-tie"></i>&nbsp;&nbsp;&nbsp;
                    </span>Enseignant </a>
                </li>
                <li class="">
                    <a href="#" class="" id="seclink"><span <i class="fa-solid fa-user-tie"></i>&nbsp;&nbsp;&nbsp;
                    </span>Secrétaire </a>
                </li>
                <li class="">
                    <a href="#" class="" id="modulelink"><span <i class="fa-solid fa-book"></i>&nbsp;&nbsp;&nbsp;
                    </span>Module </a>
                </li>
                <li class="">
                    <a href="#" class="" id="filierelink"><span <i class="fa-solid fa-graduation-cap"></i>&nbsp;&nbsp;&nbsp;
                    </span>Filière </a>
                </li>
                <li class="">
                    <a href="#" class="" id="dispoLink"><span <i class="fa-solid fa-business-time"></i>&nbsp;&nbsp;&nbsp;
                    </span>Disponibilité Enseignant</a>
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
                                <form>
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit" id="button-addon2">Go
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                            <div class="xp-profilebar text-right">
                                <nav class="navbar p-0">
                                    <ul class="nav navbar-nav flex-row ml-auto">
                                        <li class="dropdown nav-item active">
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
                                        </li>

                                        <li class="dropdown nav-item">
                                            <a class="nav-link" href="#" data-toggle="dropdown">
                                                <img src="https://img.freepik.com/premium-photo/businessman-portrait-ai-generated-image_268835-5686.jpg" style="width:40px; border-radius:50%;" />
                                                <span class="xp-user-live"></span>
                                            </a>
                                            <ul class="dropdown-menu small-menu">
                                                <li><a href="#">
                                                        <span class="material-icons">person_outline</span>
                                                        Profile
                                                    </a></li>
                                                <li><a href="#">
                                                        <span class="material-icons">settings</span>
                                                        Settings
                                                    </a></li>
                                                <li><a href="#">
                                                        <span class="material-icons">logout</span>
                                                        Logout
                                                    </a></li>

                                            </ul>
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
            {{-- <div class="main-content"> --}}
                {{-- <script>
                    function hello() {
                        fetch("home.html")
                            .then(response => response.text())
                            .then(data => {
                                // Sélectionnez l'élément principal où vous voulez afficher le contenu
                                var contentDiv = document.querySelector(".main-content");
                                // Insérez le contenu HTML dans l'élément sélectionné
                                contentDiv.innerHTML = data;

                            })
                            .catch(error => {
                                console.error('Erreur', error);
                            });
                    };
                    hello();
                </script> --}}
            {{-- </div> --}}
            <!-- Main Content End -->

        </div>
        <!-- Page Content End -->

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/list.js"></script> --}}
    @vite('resources/js/jquery-3.3.1.slim.min.js')
    @vite('resources/js/popper.min.js')
    @vite('resources/js/bootstrap.min.js')
    @vite('resources/js/jquery-3.3.1.min.js')
    @vite('resources/js/list.js')
    {{-- @vite('resources/js/app.js') --}}
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


