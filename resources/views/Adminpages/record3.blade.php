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
            border-bottom:1px solid black;
        }

        hr {
            /* border: none; */
            height: 3px;
            background-color: #000000;  /* Modern Browsers */
            }
    </style>
</head>
<body>

  <h1 style="text-align: center;color:red">{{$data->police_case_ref}} : Case Report</h1>
  <hr>
  <table class="table table-bordered">
    <thead>
      <tr style="border-bottom:1px solid black">
        <th>Police Station</th>
        <th>Investigation Officer</th>
        <th>Police Case Reference</th>
        <th>particulars of the case</th>
        <th>Transmission line</th>
        <th>Case Status</th>
        <th>Inter Ref Number</th>
        <th>Date</th>
      </tr>
    </thead>
   
    <tbody>
      <tr style="border-bottom:1px solid black">
        <td >{{$data->police_station}}</td>
        <td>{{$data->investigation_officer}}</td>
        <td>{{$data->police_case_ref}}</td>
        <td>{{$data->particulars_of_the_case}}</td>
        <td>{{$data->Transmission_Line}}</td>
        <td>{{$data->Case_Status}}</td>
        <td>{{$data->Inter_ref_number}}</td>
        <td>{{$data->Date}}</td>
      </tr>
    </tbody>
  </table>
</body>
</html>