<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User--Registeration-form</title>
</head>

<style>
    body {
        overflow-y: scroll;
    }
</style>

<body class="bg-dark">

    <div class="container-fluid text-center bg-dark text-secondary py-5 text-uppercase">
        <h1>THE PSYCHIC NETWORK</h1>
        <p class="text-uppercase mt-5">PLEASE COMPLETE THE FOLLOWING FORM </p>

        <div class="row mt-2 justify-content-between">
            <div class="col-lg-3">
                <img src="images/Seer.jpg" alt="" class="img-fluid image1">
            </div>

            <div class="col-lg-4 ">
                <form action="">

                    <input list="sessions" name="session" id="session">
                    <datalist id="sessions">
                        <option value="CONSULTANT 1 TAROT  Price: 75$"></option>
                        <option value="CONSULTANT 2 HOLISTIC SESSION  Price: 50$"></option>
                        <option value="CONSULTANT 3 ASTROLOGY LECTURE   Price: 75$"></option>
                        <option value="CONSULTANT 4 SCRYING BALL LECTURE   Price: 60$"></option>
                        <option value="WORKSHOPS   Price: 250$"></option>
                    </datalist>
                </form>
                <!-- <a href=""> <button type="button" class="btn btn-info w-100 mb-1 text-uppercase">SESSION
                        REGISTRATION</button></a> -->
                <a href=""> <button type="button" class="btn btn-info w-100 mb-1 text-uppercase">ENTER YOUR
                        NAME</button></a>

                <input type="text" class="form-control mb-1">

                <a href=""> <button type="button" class="btn btn-info w-100 mb-1 text-uppercase">ENTER YOUR LAST
                        NAME</button></a>

                <input type="text" class="form-control mb-1">

                <a href=""> <button type="button" class="btn btn-info w-100 mb-1 text-uppercase">ENTER YOUR EMAIL
            </button></a>

                <input type="email" class="form-control mb-1">

                <a href=""> <button type="button" class="btn btn-info w-100 mb-1 text-uppercase"> DATE AND TIME FOR
                        CONSULTATION </button></a>

                <input type="datetime-local" class="form-control mb-1">

                <a href=""> <button type="button" class="btn btn-info w-100 mb-1 text-uppercase">WRITE A BRIEF
                        MESSAGE</button></a>

                <form action="">
                    <input type="text" class="form-control mb-1">
                    <a href="">
                        <button type="submit" class="btn btn-info w-100 mb-1 text-uppercase">submit</button></a>
                </form>

            </div>

            <div class="col-lg-3">
                <img src="images/atlantis-658490__340.jpg" alt="" class="img-fluid image">
            </div>
        </div>
        <div class="text">
            <a href="homepage.html" class="text-secondary">HOMEPAGE</a><br>
            <a href="search-form.html" class="text-secondary">SEARCH FORM</a>
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
