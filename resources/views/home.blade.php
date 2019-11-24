@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add product</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   Welcome to our World
                </div>
            </div>
        </div>
    </div>
</div>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add User</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body style="background-color: #e6e6e6">

<div class="container" style="margin-right: -420px">

        <div class="row centered-form" >
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                        <h3 class="panel-title">Sign Up</small></h3>
                        </div>
                        <div class="panel-body">



                        <form role="form" method="post" action="{{ URL::to('product') }}">
                            {{csrf_field()}}
                            <div class="row">
                                <label>Product Name</label>
                                <div class="col-md-6">
                                    <div >
                                     <input type="text" name="name"  class="form-control" value="{{ old('name') }}" placeholder="Product Name">

                                    </div>
                                </div>
                                
                               

                                
                            </div>
                            <br>
                            <div class="row">
                                <label>Price</label>
                                <div class=" col-md-6">
                                        <div class="form-group">
                                        <input type="number" value="{{ old('email') }}" name="price" class="form-control input-sm" placeholder="Price">
                                      </div>
                               </div>
                            </div>
                           

                            

                            <div class="row">
                                <label>Description</label>
                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <input type="text" value="{{ old('birth_date') }}" name="description" class="form-control">
                                    </div>
                                </div>
                            </div>
                            

                            
                            


                            <div class="row">
                                <div class="col-md-2">
                                    <input type="submit" value="Register" class="btn btn-info">
                                </div>
                            </div>

                            
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </div>
   











<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

</body>
</html>
@endsection
