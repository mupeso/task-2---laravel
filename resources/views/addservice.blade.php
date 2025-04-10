@extends('layout.main')

@section("title", "add service")


@section("content")


    <body>
        <div class="page-wrapper">


            <div class="container">
                <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb" class="fw-bold my-4 h4">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item">
                            <a class="text-decoration-none" href="{{route("home")}}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="text-decoration-none" href="{{route("Services")}}">Services</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Add Service
                        </li>
                    </ol>
                </nav>
                <div class="d-flex flex-column gap-3 details-card doctor-details">

                    <hr />
                    @if (session("success"))
                        <div class="alert alert-success" role="alert">
                            {{ session("success") }}
                        </div>

                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>

                                @endforeach
                            </ul>

                        </div>

                    @endif


                    <form method="post" action="{{ route('add.Services.add') }}" class="form p-4 border rounded shadow-sm">
                        @csrf
                        <div class="form-items">
                            <!-- Name Field -->
                            <div class="mb-3">
                                <label for="name" class="form-label required-label">Services Name</label>
                                <input 
                                    type="text" 
                                    name="title" 
                                    id="title" 
                                    value="{{ old('title', $moh->title ?? '') }}" 
                                    class="form-control" 
                                    placeholder="Enter Service name" 
                                     
                                />
                            </div>
                            
                            
                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Add Services
                                </button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>

    </body>











@endsection