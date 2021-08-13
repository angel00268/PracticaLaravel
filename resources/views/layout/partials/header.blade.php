<header>
    <h1></h1>
    <nav>
        <li>
            <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active':''}}">Home</a>
        </li>
        <li>
            <a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.index') ? 'active':''}}">Cursos</a>
        </li>
        <li>
            <a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active':''}}">Nosotros</a>
        </li>
    </nav>
</header>
