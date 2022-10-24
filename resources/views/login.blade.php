<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Log-in</title>
</head>
<body>

<div class="container-fluid text-center bg-dark text-secondary pt-5 text-uppercase">
    <h1>THE PSYCHIC NETWORK</h1>

    <div class="row mt-5 justify-content-between">
        <div class="col-lg-3">
            <img src="images/Seer.jpg" alt="" class="img-fluid">
        </div>

        <div class="col-lg-4">
         <div class="form-group">
            <form action="/login" method="post">
                @csrf
                @if(session('message'))
                {{session('message')}}
              @endif
                <label for="email">Email</label>
                <input type="email" name="email" id="username" class="form-control">

                <label for="password" class="mt-5">Password</label>
                <input type="text" name="password" id="password" class="form-control">


             <button type="submit" class="btn btn-outline-info mt-5">LOG IN</button>
            </form>
         </div>
        </div>

        <div class="col-lg-3">
            <img src="images/atlantis-658490__340.jpg" alt="" class="img-fluid image">

            <a href="/" class="text-info" id="forgot"> <b>FORGOT PASSOWORD?</b></a>
        </div>
    </div>

    <div class="text">
        <a href="/register" class="text-secondary">New User--Register</a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <img src="images/hibou.png" alt="" class="img-fluid h-25">
        </div>
    </div>

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
