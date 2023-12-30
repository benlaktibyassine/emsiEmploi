@if(session('role') && session('role') === 'admin')
<div class="container">
    <ul>
        <li><a href="{{ route('profindex') }}">Liste Profs</a></li>
        <li><a href="{{ route('profcreate') }}">Ajouter Profs</a></li>
        <li><a href="{{ route('matiere.index') }}">Liste matieres</a></li>
        <li><a href="{{ route('matiere.create') }}">Ajouter matiere</a></li>
        <li><a href="{{ route('jour.index') }}">Liste jours</a></li>
        <li><a href="{{ route('jour.create') }}">Ajouter jour</a></li>
        <li><a href="{{ route('salle.index') }}">Liste salles</a></li>
        <li><a href="{{ route('salle.create') }}">Ajouter salles</a></li>
        {{-- <li><a href="{{ route('etage.index') }}">Liste etages</a></li>
        <li><a href="{{ route('etage.create') }}">Ajouter etages</a></li> --}}
        <li><a href="{{ route('locale.index') }}">Liste locales</a></li>
        <li><a href="{{ route('locale.create') }}">Ajouter locales</a></li>
        <li><a href="{{ route('etage.index') }}">Liste etages</a></li>
        <li><a href="{{ route('etage.create') }}">Ajouter etage</a></li>
    </ul>
</div>
@endif
