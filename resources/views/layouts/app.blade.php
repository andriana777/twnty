<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Task for TWNTY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

</head>
<body>
    <div class="container">
<table class="table-header table">
<thead>
    <tr>
      <th scope="col"><p><a class="btn btn-primary" href="{{route('user.index')}}">Check all users</a></p></</th>
      <th scope="col"><p><a class="btn btn-primary" href="{{route('task.index')}}">Check all tasks</a></p></</th>
      <th scope="col"><p><a class="btn btn-primary" href="{{route('user.register')}}">Register new user</a></p></</th>
      <th scope="col"><p><a class="btn btn-primary" href="{{route('task.create')}}">Create new task</a></p></</th>
    </tr>
  </thead>
</table>

    </div>


@yield('content')

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>