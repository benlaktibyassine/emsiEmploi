@include('component.head')

<body>
    <div class="container">
        <p>Nom: {{ session('nom') }}</p>
        <p>Email: {{ session('email') }}</p>
    </div>
</body>
@include('component.foot')

</html>
