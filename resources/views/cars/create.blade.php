<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
<body>
    <div class="container py-4">
        <h2 class="text-danger">CREATE CAR</h2>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger container">
        <span>Vui lòng kiểm tra lại dữ liệu !!!</span>
    </div>
    @endif
    <form class="container" action="{{ url('/cars/store') }}" method="post">
        {!! csrf_field() !!}
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Brand</label>
            <input type="text" class="form-control" name="brand">
            @error('brand')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" class="form-control" name="price">
            @error('price')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Launched Year</label>
            <input type="number" class="form-control" name="launched_year">
            @error('launched_year')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">
            <i class="fa-solid fa-plus"></i>
            <span>Add</span>
        </button>
        <a href="{{ url('cars') }}" class="btn btn-primary">
            <i class="fa-solid fa-arrow-rotate-left"></i>
            <span>Back</span>
        </a>
    </form>
</body>
</html>