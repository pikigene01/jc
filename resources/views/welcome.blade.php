<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>homepage</title>
</head>

<body>

    <div class="container-fluid text-center bg-dark text-secondary py-5 text-uppercase">
        <h1>THE PSYCHIC NETWORK</h1>
        <p class="text-uppercase mt-5">please select one option </p>

        <div class="row mt-2 justify-content-between">
            <div class="col-lg-3">
                <img src="images/Seer.jpg" alt="" class="img-fluid image1">
            </div>

            <div class="col-lg-4 ">
             <a href="/about"> <button type="button" class="btn btn-info w-100 mb-1 text-uppercase">about us</button></a>
             <a href="/contact"> <button type="button" class="btn btn-info w-100 mb-1 text-uppercase">contact us</button></a>
             <a href="/gallery"> <button type="button" class="btn btn-info w-100 mb-1 text-uppercase">gallery</button></a>
             <a href="/psychics"> <button type="button" class="btn btn-info w-100 mb-1 text-uppercase">CONSULTANTS</button></a>
             <a href="/consultant"> <button type="button" class="btn btn-info w-100 mb-1 text-uppercase">specialties            </button></a>
             <a href="/testimonial"> <button type="button" class="btn btn-info w-100 mb-1 text-uppercase">TESTIMONIALS</button></a>
             <a href="/registration-form"> <button type="button" class="btn btn-info w-100 mb-1 text-uppercase">WORKSHOPS</button></a>
             <a href="/search-form"> <button type="button" class="btn btn-info w-100 mb-1 text-uppercase">search</button></a>
             <form method="post" action="/logout">
                @csrf
                <button type="submit" class="btn btn-info w-100 mb-1 text-uppercase">Logout</button></form>
            </div>

            <div class="col-lg-3">
                <img src="images/atlantis-658490__340.jpg" alt="" class="img-fluid image">
            </div>
        </div>
        <div class="text">
            <a href="" class="text-secondary">HOME PAGE</a>
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

</html>
