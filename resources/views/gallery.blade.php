
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>User--TESTIMONIALS</title>
    </head>

    <body>

        <div class="container-fluid text-center bg-dark text-secondary py-5 text-uppercase">
            <h1>THE PSYCHIC NETWORK</h1>
            <p>
                TESTIMONIALS</p>

            <div class="row mt-5 justify-content-between">
                <div class="col-lg-3">
                    <img src="{{ asset('assets/images/Seer.jpg') }}" alt="" class="img-fluid image1">
                    <a href="/home"> <button type="submit" class="btn btn-outline-info">back to
                            menu</button></a>
                </div>

                <div class="col-lg-4">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('assets/images/tarotlectue.jpeg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-title">Card title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('assets/images/tarotlectue.jpeg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-title">Card title</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3">
                    <img src="{{ asset('images/atlantis-658490__340.jpg') }}" alt="" class="img-fluid image">
                    <a href="/psychics"> <button type="reset" class="btn btn-outline-info">consultants</button></a>
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

    </html>


