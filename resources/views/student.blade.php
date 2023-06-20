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
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand" href="#">TopUP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav" style="margin-left: 300px">
            <li class="nav-item active">
                <a style="margin-left: 700px;width:40px" href="{{url('/user')}}"><button class="btn btn-secondary">Dashbord</button></a>
            </li>
            <li class="nav-item">
                <a style="margin-left:20px ;width:40px" href="{{url('/home')}}"><button class="btn btn-secondary">Login</button></a>
            </li>
            <li class="nav-item">
                <a style="margin-left:20px ;width:40px" href="{{url('/')}}"><button class="btn btn-secondary">Home</button></a>
            </li>
          </ul>
        </div>
      </nav>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">TopUp</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Welcome! We will contact you shortly on Your Email ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
            </div>
          </div>
        </div>
      </div>
      <h4 style="color:rgb(47, 96, 164);text-align:center">Available Products: <span style="color:red">{{$prodd}}</span></h4>
<div class="container">
 <table class="table mt-5">
    <thead class="bg-danger text-white fw-bold">
        <th>Id</th>
        <th>Product</th>
        <th>Brand </th>
        <th>Price</th>
        <th>Order Now</th>
    </thead>
    <tbody>
@foreach($data as $iteam)
        <tr>
            <td>{{$iteam['id']}}</td>
            <td>{{$iteam['Name']}}</td>
            <td>{{$iteam['Brand']}}</td>
            <td>{{$iteam['Price']}}</td>
            <td><a style="" href="#"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Order Now
              </button></a></td>

        </tr>
        @endforeach
    </tbody>
</table>   
</div>
<div style="margin-left:550px " class="row">
    {{$data->links('pagination.custom')}}
</div>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>