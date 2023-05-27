<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLogin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <div  class="d-flex justify-content-center">

                    <div class="card col-4 text-center mt-5" style="background:rgb(7, 61, 240)">
                        <div class="card-head " >
                            <h1 class="text-white">Admin Login</h1>
                        </div>
                        <div class="card-body">

                            <form  class="form-group" method="POST" action="{{route('admin')}}">
                                {{ csrf_field() }}
                                <input class="form-control" name="name" type="text" placeholder="name"><br>
                                <input class="form-control" name="password"  type="password" placeholder="password"><br>
                                <input type="submit" value="Login" >
                            </form>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</body>
</html>
