@include('component.head')

<body>
    @include("component.header")
    <div class="container">
        <p>Nom: {{ session('nom') }}</p>
        <p>Email: {{ session('email') }}</p>
    </div>
</body>
@include('component.foot')

</html>
