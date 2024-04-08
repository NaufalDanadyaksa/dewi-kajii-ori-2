<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body {
            background-color: #FFF78A; /* Set background color to FFF78A */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Set the height of the body to viewport height */
        }
        .container {
            background-color: white; /* Set container background color to white */
            padding-top: 70px; /* Add top padding to center the content */
            border-radius: 10px;
            width: 500px; /* Set the width of the container */
            max-width: 90%; /* Set maximum width to ensure responsiveness */
        }

        .btn-primary {
            background-color: #416D19; /* Set button background color to 416D19 */
            border-color: #416D19; /* Set button border color to match background */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="text-align:center; margin-top:-20px;">Login</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ old('email') }}" name="email" class="form-control" 
                style="
                    background-color: #d8eb8ae9;
                    text-decoration: none;
                    opacity: 1;
                    box-shadow: none;
                    border: none;
                    border-radius: 6px;
                ">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control"
                style="
                    background-color: #d8eb8ae9;
                    text-decoration: none;
                    opacity: 1;
                    box-shadow: none;
                    border: none;
                    border-radius: 6px;
                ">
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div> 
</body>
</html>
