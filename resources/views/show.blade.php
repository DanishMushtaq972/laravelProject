<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
      form{
        margin-top:70px;
        margin-left: 520px;
        margin-right: 50px; 
      }
     
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">TopUp</a>
    <h6 style="font-size: 6px;margin-top:33px;margin-left:-62px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Glow as never before</h6>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item " style="margin-left:1100px">
            <a class="nav-link" href="{{url('/')}}">Home</span></a> 
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/user')}}">Log.in</span></a> 
       </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/show')}}">View_data</span></a> 
        </li>
      </ul>
    </div>
  </nav>
    <form action="insertData" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="text">Name</label>
          <input style="width: 500px" type="text" name="name" class="form-control" id="" aria-describedby="" placeholder="Name" value="">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Price</label>
          <input style="width: 500px" type="number" class="form-control" name="price" id="" placeholder="Price">
        </div>
        <div class="form-group">
            <label for="text">Brand</label>
            <input style="width: 500px" type="text" name="brand" class="form-control" id="" aria-describedby="" placeholder="Brand">
          </div>
         
        <button style="margin-left: 370px" type="submit" class="btn btn-primary">Submit</button>
        </form>
        


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
