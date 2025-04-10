@extends("layout.main")

@section("title","majors")

@section("content")
<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{route( "home")}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">majors</li>
        </ol>
    </nav>

    <div class="row g-4"> 
        @foreach ($majors as $major )
            <div class="col-lg-3 col-md-4 col-sm-6"> 
                <div class="card p-2" style="width: 100%;"> 
                    <img src="assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">{{ $major->major  }}</h4>
                        <a href="{{route("index")}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div> 

    <nav class="mt-5" aria-label="navigation">
        <ul class="pagination justify-content-center">
            <a href="{{route("add.major")}}" class="btn btn-primary">ِAdd Major</a>

        </ul>
    </nav>
</div>
@endsection
