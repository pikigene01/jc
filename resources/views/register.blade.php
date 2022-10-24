<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User--Register</title>
</head>

<body>

    <div class="container-fluid text-center bg-dark text-secondary py-5 text-uppercase">
        <h1>THE PSYCHIC NETWORK</h1>
        <p>
            REGISTRATION PAGE
            & NEWS LETTER </p>

        <div class="row mt-5 justify-content-between">
            <div class="col-lg-3">
                <img src="images/Seer.jpg" alt="" class="img-fluid image1">
                <a href=""> <button type="submit" class="btn btn-outline-info" id="register">Register</button></a>
            </div>

            <div class="col-lg-4 form-box">
                <div class="form-group">
                    <form action="/register" method="post">
                        @csrf
 @if(session('message'))
  {{session('message')}}
@endif
<label for="username">Please enter a valid name</label>
<input type="text" id="username" name="username" class="form-control">

                        <label for="username">Please enter a valid email</label>
                        <input type="email" id="username" name="email" class="form-control">

                        <label for="password" class="mt-3">select a Password</label>
                        <input type="text" id="password" name="password" class="form-control">

                        <label for="password" class="mt-3">confirm Password</label>
                        <input type="text" id="password" name="confirm_password" class="form-control">
                        <button type="submit"  class="btn btn-outline-info">Submit</button>
                        <a href=""> <button type="reset" class="btn btn-outline-info mt-5">Reset</button></a>
                    </form>
                </div>
            </div>

            <div class="col-lg-3">
                <img src="images/atlantis-658490__340.jpg" alt="" class="img-fluid image">
                <a href="/home"> <button type="button" class="btn btn-outline-info">Homepage</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <img src="images/hibou.png" alt="" class="img-fluid h-25">
            </div>
        </div>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

<script>
    let register = document.getElementById("register");
    register.addEventListener("click", function () {
        alert("you have been registered")
    });
</script>

</html>
