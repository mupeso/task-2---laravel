@extends("layout.main")

@section("title","majors")

@section("content")
<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">service</li>
        </ol>
    </nav>

    <div class="row g-4"> 
        @foreach ($services as $service)
        <div class="col-lg-3 col-md-4 col-sm-6"> 
            <div class="card p-2" style="width: 100%;"> 
                <img src="assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">{{ $service->title }}</h4>
                    <h4 class="card-title fw-bold text-center">
                        {{ $service->service->name ?? "no related that" }}
                    </h4>
                    <a href="{{ route('index') }}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
