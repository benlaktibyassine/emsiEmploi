@if(session('role') && session('role') === 'admin')
<div class="container">
    <ul>
        <li><a href="{{ route('profindex') }}">Liste Profs</a></li>
        <li><a href="{{ route('profcreate') }}">Ajouter Profs</a></li>
        <li><a href="{{ route('matiere.create') }}">Ajouter matiere</a></li>
    </ul>
</div>
@endif
