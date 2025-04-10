<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/js/splide.min.js"
    integrity="sha512-4TcjHXQMLM7Y6eqfiasrsnRCc8D/unDeY1UGKGgfwyLUCTsHYMxF7/UHayjItKQKIoP6TTQ6AMamb9w2GMAvNg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/css/themes/splide-default.min.css"
    integrity="sha512-KhFXpe+VJEu5HYbJyKQs9VvwGB+jQepqb4ZnlhUF/jQGxYJcjdxOTf6cr445hOc791FFLs18DKVpfrQnONOB1g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css"
    integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.rtl.min.css"
        integrity="sha512-wO8UDakauoJxzvyadv1Fm/9x/9nsaNyoTmtsv7vt3/xGsug25X7fCUWEyBh1kop5fLjlcrK3GMVg8V+unYmrVA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <link rel="stylesheet" href="../../assets/styles/pages/main.css" />

  <title>doctor</title>
</head>

<body>
  <div class="page-wrapper">

    @include("layout.nav")

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
            doctor name
          </li>
        </ol>
      </nav>
      <div class="d-flex flex-column gap-3 details-card doctor-details">
        <div class="details d-flex gap-2 align-items-center">
          <img src="../../assets/images/major.jpg" alt="doctor" class="img-fluid rounded-circle" height="150"
            width="150" />


          <div class="details-info d-flex flex-column gap-3">
            <h4 class="card-title fw-bold">Doctor name</h4>
            <h6 class="card-title fw-bold">
              doctor major and more info about the doctor in summary
            </h6>
          </div>
        </div>
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


        <form method="post" action="{{ route("doctor.reservation") }}" class="form">
          @csrf
          <div class="form-items">
            <div class="mb-3">
              <label class="form-label required-label" for="name">Name</label>
              <input type="text" value="{{ old("name", $moh->name ?? "") }}" name="name" class="form-control" id="name" />
            </div>
            <div class="mb-3">
              <label class="form-label required-label" for="phone">Phone</label>
              <input type="tel" class="form-control" value="{{ old("phone", $ra->phone ?? "") }}" name="phone"
                id="phone" />
            </div>
            <div class="mb-3">
              <label class="form-label required-label" for="email">Email</label>
              <input type="text" value="{{ old("email", $ra->email ?? "") }}" class="form-control" name="email"
                id="email" />
            </div>
          </div>
          <button type="submit" class="btn btn-primary">
            Confirm Reservation
          </button>
        </form>
      </div>
    </div>
  </div>
  @include("layout.footer")
  <script>
    const stars = document.querySelectorAll(".star");

    stars.forEach((star, index) => {
      star.addEventListener("click", () => {
        const isActive = star.classList.contains("active");
        if (isActive) {
          star.classList.remove("active");
        } else {
          star.classList.add("active");
        }
        for (let i = 0; i < index; i++) {
          stars[i].classList.add("active");
        }
        for (let i = index + 1; i < stars.length; i++) {
          stars[i].classList.remove("active");
        }
      });
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"
    integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>