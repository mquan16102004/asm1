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
            <section class="section-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{$data->thumbnail}}" alt="" width="100%">
                        </div>
                        <div class="col-8">
                            <h1>{{$data->name}}</h1>
                            <h5>giá:{{$data->price}} $</h5>
                            <h5>mô tả:{{$data->mota}} </h5>
                            <h5>the loai : {{$data->title}}</h5>
                               
                           
                        </div>


                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>