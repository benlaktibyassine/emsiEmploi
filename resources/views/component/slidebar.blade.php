<body id="body-pd" class="body-dash">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>

        <div class="d-flex gap-2 align-items-center justify-content-center">
            <div class="notification me-4">
                <!-- <i class="fas fa-bell h5"></i> -->
            </div>
            <span>
                {{ session('nom') }} {{ session('prenom') }}
            </span>
            <div class="header_img"> </div>
            <form method="POST" action="{{ route('proflogout') }}">
                @csrf
                @method('POST')
                <button type="submit" class="default-btn mt-2">Log Out</button>
            </form>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo mb-0"> <img src="" alt="" width="30"> <span class="nav_logo-name">Home</span> </a>
                <div class="nav_list">
                    <a href="{{ route('profindex') }}" class="nav_link"> <i class='bx bx-group' ></i> <span class="nav_name">Professeurs</span> </a>
                    <a href="{{ route('matiere.index') }}" class="nav_link"> <i class='bx bxs-briefcase'></i><span class="nav_name">Matières</span> </a>
                    <a href="{{ route('fillieres.index') }}" class="nav_link"> <i class='bx bx-street-view'></i><span class="nav_name">Fillières</span> </a>
                    <a href="{{ route('locale.index') }}" class="nav_link"> <i class='bx bx-map'></i><span class="nav_name">Locaux</span> </a>
                    <a href="{{ route('etage.index') }}" class="nav_link"> <i class='bx bxs-city'></i> <span class="nav_name">Etages</span> </a>
                    <a href="{{ route('types.index') }}" class="nav_link"> <i class='bx bx-hive'></i> <span class="nav_name">Types</span> </a>
                    <a href="{{ route('salle.index') }}" class="nav_link"> <i class='bx bx-home-alt-2'></i> <span class="nav_name">Salles</span> </a>
                    <a href="{{ route('jour.index') }}" class="nav_link"> <i class='bx bx-calendar'></i><span class="nav_name">Jours</span> </a>
                    <a href="{{ route('semestres.index') }}" class="nav_link "> <i class='bx bx-paste'></i><span class="nav_name">Semestres</span> </a>
                    <a href="{{ route('groupe.index') }}" class="nav_link "> <i class='bx bx-git-repo-forked'></i><span class="nav_name">Groupes</span> </a>
                    <a href="{{ route('seances.index') }}" class="nav_link "> <i class='bx bx-calendar-plus' ></i><span class="nav_name">Seances</span> </a>
                </div>
            </div>
        </nav>
    </div>

