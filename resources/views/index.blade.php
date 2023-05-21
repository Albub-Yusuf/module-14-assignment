<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .container{
            width: 100%;
            height: 80vh;
            padding: 20px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-container{
            width: 80%;
            height: auto;
        }
        .panel{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
       
    </style>
</head>
<body>
    

   <div class="container">
        <div class="form-container">
            <div class="panel">
            <h3>User Information: </h3>
            <span><a href="/uploadForm">Upload File</a></span>
            </div>    
        <br>
            <form action="{{route('store')}}" method="POST" class="form-control">
                @csrf
                <div class="form-group">
                      @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                 @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                 @endforeach
                            </ul>
                                </div>
                     @endif
                <label for="name">Enter User Name</label>
                <br>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name here..." required/>
                </div>
                <br>
                <div class="form-group">
                <label for="email">Enter your Email</label>
                <br>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email here..." required/>
                </div>
                <br>
                <div class="form-group">
                <label for="phone">Enter User Phone Number</label>
                <br>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number here..." required />
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
   </div>

</body>
</html>