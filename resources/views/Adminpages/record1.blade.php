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

  <h1 style="text-align: center;color:red">Annual Cases Report</h1>
  <hr>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Police Station</th>
        <th>Investigation Officer</th>
        <th>Police Case Reference</th>
        <th>Transmission line</th>
        <th>Case Status</th>
        <th>Inter Ref Number</th>
        <th>Year</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $info)
      <tr>
        <td>{{$info->police_station}}</td>
        <td>{{$info->investigation_officer}}</td>
        <td>{{$info->police_case_ref}}</td>
        <td>{{$info->Transmission_Line}}</td>
        <td>{{$info->Case_Status}}</td>
        <td>{{$info->Inter_ref_number}}</td>
        <td>{{$info->Date}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>