<body>
    <div class="page-wrapper">
        <nav class="navbar navbar-expand-lg navbar-expand-md bg-blue sticky-top">
            <div class="container">
                <div class="navbar-brand">
                    <a class="fw-bold text-white m-0 text-decoration-none h3" href="{{ route("home") }}">VCare</a>
                </div>
                <button class="navbar-toggler btn-outline-light border-0 shadow-none" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <div class="d-flex gap-3 flex-wrap justify-content-center" role="group">
                        <a type="button" class="btn btn-outline-light navigation--button"
                            href="{{ route("home") }}">Home</a>
                        <a type="button" class="btn btn-outline-light navigation--button"
                            href="{{ route("majors") }}">majors</a>
                        <a type="button" class="btn btn-outline-light navigation--button"
                            href="{{route( "index")}}">Doctors</a>
                            <a type="button" class="btn btn-outline-light navigation--button"
                            href="{{route( "Services")}}">Services</a>
                           
                        @auth
                        {{-- <a type="button" class="btn btn-outline-light navigation--button"
                        href="{{route( "logout")}}">LogOut</a> --}}
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-outline-light navigation--button">Logout</button>
                        </form>
                        @else
                            <a type="button" class="btn btn-outline-light navigation--button"
                                href="{{ route("login") }}">login</a>
                            <a type="button" class="btn btn-outline-light navigation--button"
                                href="{{ route("register") }}">register</a>
                        @endauth

                    </div>
                </div>
            </div>
        </nav>