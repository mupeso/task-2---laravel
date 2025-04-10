@extends('layout.main')

@section("title", "add Doctor")


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
                            <a class="text-decoration-none" href="{{route("index")}}">doctors</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Add Doctor
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


                    <form method="post" action="{{ route('add.doctor.add') }}" class="form p-4 border rounded shadow-sm">
                        @csrf
                        <div class="form-items">
                            <!-- Name Field -->
                            <div class="mb-3">
                                <label for="name" class="form-label required-label">Name</label>
                                <input 
                                    type="text" 
                                    name="name" 
                                    id="name" 
                                    value="{{ old('name', $moh->name ?? '') }}" 
                                    class="form-control" 
                                    placeholder="Enter doctor's name" 
                                     
                                />
                            </div>
                            
                            <!-- Service Selection -->
                            <div class="mb-3">
                                <label for="service_id" class="form-label">Service</label>
                                <select id="service_id" name="service_id" class="form-select" >
                                    <option value="" disabled selected>Select a service</option>
                                    @foreach($service as $s)
                                        <option value="{{ $s->id }}">{{ $s->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <!-- Major Selection -->
                            <div class="mb-3">
                                <label for="major_id" class="form-label">Major</label>
                                <select id="major_id" name="major_id" class="form-select" >
                                    <option value="" disabled selected>Select a major</option>
                                    @foreach($majors as $major)
                                        <option value="{{ $major->id }}">{{ $major->major }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Add Doctor
                                </button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>

    </body>











@endsection