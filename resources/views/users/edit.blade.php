<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
<body>
    <div class="container py-4">
        <h2 class="text-danger">EDIT USER</h2>
    </div>
    <form class="container" action="{{ url('/users/update/'.$user->id) }}" method="post">
        {!! csrf_field() !!}
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" value="{{ $user->email }}" disabled>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="text" class="form-control" name="password" value="{{ $user->password }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
          </div>
        <button type="submit" class="btn btn-success">
            <i class="fa-solid fa-floppy-disk"></i>
            <span>Save</span>
        </button>
        <a href="{{ url('users') }}" class="btn btn-primary">
            <i class="fa-solid fa-arrow-rotate-left"></i>
            <span>Back</span>
        </a>
    </form>
</body>
</html>