<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Appointments</title>
</head>
<style>

</style>
<body>

<div class="container-fluid text-center bg-dark text-secondary pt-5 text-uppercase">
    <h1>THE PSYCHIC NETWORK</h1>

    <div class="row mt-5 justify-content-between">
        <div class="col-lg-3">
            <img src="images/Seer.jpg" alt="" class="img-fluid">
        </div>

        <div class="col-lg-4 d-flex align-items-center justify-content-center">

<h1>Appointments</h1>
<br>


        </div>

        <div class="col-lg-3">
            <img src="images/atlantis-658490__340.jpg" alt="" class="img-fluid image">

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <img src="images/hibou.png" alt="" class="img-fluid h-25">
        </div>
    </div>
     <div class="col-md-12 d-flex align-items-center justify-content-center">
        <table style="margin-bottom: 80vh">
            <thead>
                <th>Appointment Id </th>
                <th>Date And Time</th>
                <th>Message</th>
                <th>Customer Id</th>
                <th>Consultant Id</th>
                <th>Admin Id</th>
                <th>Email </th>
            </thead>
            @if(session('data'))

            @foreach (session('data') as $row)
            <tr>
                <td>{{$row->Appointment_id}}</td>
                <td>{{$row->DateTime}}</td>
                <td>{{$row->Message}}</td>
                <td>{{$row->Costumer_id}}</td>
                <td>{{$row->Consultant_id}}</td>
                <td>{{$row->Admin_id}}</td>
                <td>{{$row->Email}}</td>
                </tr>
            @endforeach
          @endif
            @foreach ($data as $row)
            <tr>
                <td>{{$row->Appointment_id}}</td>
                <td>{{$row->DateTime}}</td>
                <td>{{$row->Message}}</td>
                <td>{{$row->Costumer_id}}</td>
                <td>{{$row->Consultant_id}}</td>
                <td>{{$row->Admin_id}}</td>
                <td>{{$row->Email}}</td>
                </tr>
            @endforeach

        </table>

     </div>
     <a href="/upload-testmonial">Link to go and upload testmonial file</a>

</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    var forgot = document.getElementById("forgot");
    forgot.addEventListener("click",function(){
        alert("please enter your email")
    })
</script>
</html>
