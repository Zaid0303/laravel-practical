<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - Form(Update)</title>

    <!-- BootStrap Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
    <!----- Navbar Start ----->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Laravel Practical</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('view')}}">View Details</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!----- Navbar End ------->

    <!----- Form Start ----->
    <div class="container">
        <h1 class="text-center my-5">Update Registration Form</h1>
        <form action="http://127.0.0.1:8000/update/{{$std_update->id}}" method="POST" class="form-group">
            
            <div class="row">
                <div class="mb-3 col">
                    <label for="" class="form-label">Full Name :</label>
                    <input type="text" name="fullname" class="form-control" value="{{$std_update->std_name}}">
                </div>
                <div class="mb-3 col">
                    <label for="" class="form-label">Class :</label>
                    <input type="text" name="class" class="form-control" value="{{$std_update->std_class}}">
                </div>
                <div class="mb-3 col">
                    <label for="" class="form-label">Faculty Name :</label>
                    <input type="text" name="faculty" class="form-control" value="{{$std_update->std_faculty}}">
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col">
                    <label for="exampleInputEmail1" class="form-label">Email address :</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$std_update->std_email}}">
                </div>
                <div class="mb-3 col">
                    <label for="exampleInputPassword1" class="form-label">Password :</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="{{$std_update->std_password}}">
                </div>
            </div>
            <div class="d-grid gap-2 my-4">
                <button type="submit" class="btn btn-dark">Submit</button>

            </div>
        </form>
    </div>
    <!----- Form End ------->
</body>

</html>