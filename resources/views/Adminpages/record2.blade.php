<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>

    <style>
      td{
          color: green;
          text-align: center;
      }
      th{
          text-align: center;
      }

      tr{
        border-bottom:1px solid black;
      }
  </style>

  
</head>
<body>

  <h1 style="text-align: center;color:red">Officer Report</h1>
  <hr>
  <table class="table table-bordered">
    <thead>
      <tr>
    <th>Firstname</th>
		<th>Lastname</th>
		<th>Role</th>
		<th>Department</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $info)
      <tr>
        <td>{{$info->Firstname}}</td>
		<td>{{$info->Lastname}}</td>
		<td>{{$info->Role}}</td>
		<td>{{$info->Department}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>