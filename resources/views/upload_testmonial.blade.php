

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

    <form method="POST" action="/upload_testimonial" enctype='multipart/form-data' style="height: 80vh">
        @csrf
        <input type="file" name="file" />
        <button name='upload_file' type="submit">Upload File</button>
    </form>


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
