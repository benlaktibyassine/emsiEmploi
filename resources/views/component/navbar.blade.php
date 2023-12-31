@if(session('role') && session('role') === 'admin')
<div class="container mt-3">
    <ul class="nav nav-pills">
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

        {{-- Other menu items --}}
    </ul>
</div>
@endif
<!-- Add these scripts at the end of your HTML file, just before the closing </body> tag -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- jQuery and Popper.js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
