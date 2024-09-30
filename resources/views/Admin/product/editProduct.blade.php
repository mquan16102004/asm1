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
            <div>
                <h1 class="text-center">
                    trang ADMIN
                </h1>
            </div>
            <div class="row">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{route('dm.list')}}">quan ly danh muc</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="">quan ly san pham</a>
                                </li>



                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <form action="{{route('product.update',$product->id)}}" method="post" >
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">TEN SAN PHAM</label>
                    <input type="text" class="form-control" name="name" value="{{$product->name}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">THUMBNAIL</label>
                    <img src="{{$product->thumbnail}}" alt="" width="150px" height="150px">
                    <input type="text" class="form-control" name="thumbnail" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">GIA SAN PHAM</label>
                    <input type="text" class="form-control" name="price" value="{{$product->price}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">MO TA SAN PHAM</label>
                    <input type="text" class="form-control" name="mota" value="{{$product->mota}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">LOAI SAN PHAM </label>
                    <select name="danhmuc_id" >
                        @foreach ($danhmuc as $dm )
                        <option value="{{$dm->id}}"
                            @if ($product->danhmuc_id === $dm->id)
                            selected
                            @endif >
                            {{$dm->title}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">update</button>
                </div>
            </form>
        </main>
    </div>
</body>

</html>