@include("component.head")
<body>
@include("component.header")
@include('component.navbar')

    <li>{{ $prof->nom }} {{ $prof->prenom }}</li>
</body>
