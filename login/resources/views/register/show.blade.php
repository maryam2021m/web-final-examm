<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <table class="table">
    <thead>
      <a type="button" class="btn btn-primary m-4" href="{{ route('register.create') }}">بازگشت</a>

    <tr>
      <th scope="col">ایمیل</th>
      <th scope="col">نام و نام خانوادگی</th>
      <th scope="col">ID</th>
    </tr>
    </thead>
    @foreach ($users as $user)
    <tbody>
      <tr>
        <th scope="row">{{ $user->email }}</th>
        <td>{{ $user->fullName }}</td>
        <td>{{ $user->id }}</td>
      </tr>
    </tbody>
    @endforeach
    
  </table>
</body>
</html>





