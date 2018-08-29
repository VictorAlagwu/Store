@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Add Product</div>
                    
                                    <div class="panel-body">
                                        <form class="form-horizontal" method="POST" action="{{route('products')}}">
                                            {{ csrf_field() }}
                    
                                            <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label for="name" class="form-control-label">Product Name</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                                </div>
                                                <br>
                                            </div>
                                            
                                           
                    
                                            <div class="form-group">
                                                <div class="col-md-8 col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Add Product
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-2">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Product Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $product)
                                                <tr>
                                                    <td scope="row"s>{{$product->id}}</td>
                                                    <td>{{$product->name}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection