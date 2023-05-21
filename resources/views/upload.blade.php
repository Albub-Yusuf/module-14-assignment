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
       
    </style>
</head>
<body>
    

   <div class="container">
        <div class="form-container">
            <h3>User Information: </h3><br>
            <form action="/uploadFile" method="POST" class="form-control" enctype="multipart/form-data"> 
                @csrf
                
                <label for="upload"> Upload Your File</label><br><br>
                <input type="file" name="avatar" class="form-control">


                <br>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
   </div>

</body>
</html>