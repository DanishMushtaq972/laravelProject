<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
    
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{url('/images/img1.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                         
                          <a style="margin-left: ;width:40px" href="{{url('/stushow')}}"><button class="btn btn-primary">Order</button></a>
                        </div>
                      </div>
                      <div class="card" style="width: 18rem;margin-left:560px;margin-top:-383px;">
                        <img class="card-img-top" src="{{url('/images/img5.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                          <a style="margin-left: ;width:40px" href="{{url('/stushow')}}"><button class="btn btn-primary">Order</button></a>
                        </div>
                      </div>
                      <div class="card" style="width: 18rem;margin-top:90px">
                        <img class="card-img-top" src="{{url('/images/img3.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                         
                          <a style="margin-left: ;width:40px" href="{{url('/stushow')}}"><button class="btn btn-primary">Order</button></a>
                        </div>
                      </div>
                      <div class="card" style="width: 18rem;margin-left:560px;margin-top:-358px">
                        <img class="card-img-top" src="{{url('/images/img4.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                         
                          <a style="margin-left: ;width:40px" href="{{url('/stushow')}}"><button class="btn btn-primary">Order</button></a>
                        </div>
    
    @endsection

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>