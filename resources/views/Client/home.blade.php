<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <header>
        <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://hoanghamobile.com/tin-tuc/wp-content/uploads/2023/07/anh-dep-thien-nhien-2-1.jpg" class="d-block w-100" alt="..." width="1000px" height="500px">
                    </div>
                    <div class="carousel-item">
                        <img src="https://hoanghamobile.com/tin-tuc/wp-content/uploads/2023/07/anh-dep-thien-nhien-2-1.jpg" class="d-block w-100" alt="..." width="1000px" height="500px">
                    </div>
                    <div class="carousel-item">
                        <img src="https://hoanghamobile.com/tin-tuc/wp-content/uploads/2023/07/anh-dep-thien-nhien-2-1.jpg" class="d-block w-100" alt="..." width="1000px" height="500px">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('home.page')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">san pham</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">dang ky</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
        <div class="row " >
            @foreach ($data as $iteams )
            <div class="col-lg-3 col-md-4 col-sm-6" >
            <div class="card border-0 rounded-0 text-center shadow-none overflow-hidden" style="height: 700px;">
                <img src="{{$iteams->thumbnail}}" alt="" width="350px" height="350px">
                <div class="card-body">
                <h4 class="text-uppercase mb-3">{{$iteams->name}}</h4>

                <p class="h4">{{$iteams->price}} $</p>
                <p class="h4">{{$iteams->mota}} </p>
                <a href="{{route('chitiet.page',$iteams->id)}}" class="btn btn-primary">xem chi tiết</a>
              </div>
              </div>
              </div>
            @endforeach
       
        </main>
        {{$data->links()}}
    </div>
</body>

</html>