<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
       .search{
        width: 500px;
        margin-left: 450px;
        margin-top: 50px;
        border: 1px solid black;
        border-radius: 5px;
        height: 40px;
       }
    .my-active span{
        background-color: #020202 !important;
        color: white !important;
        border-color: #5cb85c !important;
    }
    ul.pager>li {
        display: inline-flex;
        padding: 5px;
    }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">TopUp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="{{url('/')}}">Home</span></a> 
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/user')}}">Log.in</span></a> 
           </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/insert')}}">Add_Data</span></a> 
            </li>
          </ul>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
              </svg>
              {{$prod}}
          </li>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
   <h3 style="color:rgb(19, 121, 223);text-align:end">Available Products</h3>
   <p style="color:red;text-align:end">{{$prod}}</p>
<div class="container">
 <table class="table mt-5">
    <thead class="bg-danger text-white fw-bold">
        <th>Id</th>
        <th>Product_Name</th>
        <th>Brand </th>
        <th>Product_Price</th>
        <th>Delete</th>
        <th>Edit</th>
    </thead>
    <tbody>
        @foreach($data as $iteam)
        <tr>
            <td>{{$iteam['id']}}</td>
            <td>{{$iteam['Name']}}</td>
            <td>{{$iteam['Brand']}}</td>
            <td>{{$iteam['Price']}}</td>
            <td><a href = 'delete/{{ $iteam->id }}'>Delete</a></td>
            <td><a href = 'edit/{{ $iteam->id }}'>Edit</a></td>
        </tr>
        @endforeach
    </tbody>
 </table>   
</div>
<div style="margin-left:550px " class="row">
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>