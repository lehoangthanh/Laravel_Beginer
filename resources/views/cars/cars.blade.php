<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
<body>
<div class="container">
        <h2 class="py-5 text-danger" style="float:left" >TABLE CARS</h2>
        <a href="{{ url('/cars/create') }}" class="btn btn-primary my-5" style="float:right">
            <i class="fa-solid fa-plus"></i>
            <span>Add New</span>
        </a>
    </div>
    <table class="table container">
        <thead class="table-dark text-center">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Brand</th>
                <th scope="col">Price</th>
                <th scope="col">Launched Year</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($cars as $car)
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->name }}</td>
                <td>{{ $car->brand }}</td>
                <td>{{ $car->price }}</td>
                <td>{{ $car->launched_year }}</td>
                <td>
                    <a href="{{ url('/cars/edit/'.$car->id) }}" class="btn btn-warning">
                        <i class="fa-solid fa-pencil"></i>
                        <span>Edit</span>
                    </a>
                    <a href="{{ url('/cars/delete/'.$car->id) }}" class="btn btn-danger">
                        <i class="fa-solid fa-trash"></i>
                        <span>Delete</span>
                    </a>
                </td>
              </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>