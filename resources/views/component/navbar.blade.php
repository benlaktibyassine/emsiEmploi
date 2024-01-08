<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-md-block sidebar vh-100">
            <div class="sidebar-sticky">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="bx bx-menu"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav flex-column">

                            {{-- Other menu items --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="profsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Profs
                                </a>
                                <div class="dropdown-menu" aria-labelledby="profsDropdown">
                                    <a class="dropdown-item" href="{{ route('profindex') }}">Liste Profs</a>
                                    <a class="dropdown-item" href="{{ route('profcreate') }}">Ajouter Profs</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="matieresDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Matières
                                </a>
                                <div class="dropdown-menu" aria-labelledby="matieresDropdown">
                                    <a class="dropdown-item" href="{{ route('matiere.index') }}">Liste Matières</a>
                                    <a class="dropdown-item" href="{{ route('matiere.create') }}">Ajouter Matière</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="joursDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Jours
                                </a>
                                <div class="dropdown-menu" aria-labelledby="joursDropdown">
                                    <a class="dropdown-item" href="{{ route('jour.index') }}">Liste Jours</a>
                                    <a class="dropdown-item" href="{{ route('jour.create') }}">Ajouter Jour</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="sallesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Salles
                                </a>
                                <div class="dropdown-menu" aria-labelledby="sallesDropdown">
                                    <a class="dropdown-item" href="{{ route('salle.index') }}">Liste Salles</a>
                                    <a class="dropdown-item" href="{{ route('salle.create') }}">Ajouter Salle</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="localesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Locales
                                </a>
                                <div class="dropdown-menu" aria-labelledby="localesDropdown">
                                    <a class="dropdown-item" href="{{ route('locale.index') }}">Liste Locales</a>
                                    <a class="dropdown-item" href="{{ route('locale.create') }}">Ajouter Locale</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="etagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Étages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="etagesDropdown">
                                    <a class="dropdown-item" href="{{ route('etage.index') }}">Liste Étages</a>
                                    <a class="dropdown-item" href="{{ route('etage.create') }}">Ajouter Étage</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="fillieresDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Fillieres
                                </a>
                                <div class="dropdown-menu" aria-labelledby="fillieresDropdown">
                                    <a class="dropdown-item" href="{{ route('fillieres.index') }}">Liste Fillieres</a>
                                    <a class="dropdown-item" href="{{ route('fillieres.create') }}">Ajouter Fillieres</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="fillieresDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Types
                                </a>
                                <div class="dropdown-menu" aria-labelledby="fillieresDropdown">
                                    <a class="dropdown-item" href="{{ route('types.index') }}">Liste des types</a>
                                    <a class="dropdown-item" href="{{ route('types.create') }}">Ajouter Type</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="fillieresDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Semestre
                                </a>
                                <div class="dropdown-menu" aria-labelledby="fillieresDropdown">
                                    <a class="dropdown-item" href="{{ route('semestres.index') }}">Liste des Semestres</a>
                                    <a class="dropdown-item" href="{{ route('semestres.create') }}">Ajouter Semestre</a>
                                </div>
                            </li>

                          
                    </ul>
                </div>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
