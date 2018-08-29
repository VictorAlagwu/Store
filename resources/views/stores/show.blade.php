@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default text-center">
                                <div class="panel-heading">View Store Details</div>
                                    <div class="panel-body">
                                        <p>Store Name: <strong>{{ $store->name }}</strong></p>
                                        <p>Store Location: {{ $store->location }}</p>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                                <h3>Add Manager</h3>
                                <form method="POST" action="{{route('manager/store')}}">
                                    {{ csrf_field()}}
                                <div class="form-group">
                                    <select class="form-control" name="manager_id">
                                        @foreach($managers as $manager)
                                            <option value="{{$manager->id}}">{{$manager->name}}</option>   
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                <input type="hidden" name="store_id" value="{{$store->id}}"/>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-default text-center" type="submit" name="submit">Add User</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <td>ID</td>
                                            <td>Manager</td>
                                            <td>Manager Email</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        @foreach($storemanagers as $storemanager)
                                        <tr>
                                            <td>{{$storemanager->id}}</td>
                                            <td>{{$storemanager->manager->name}}</td>
                                            <td>{{$storemanager->manager->email}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                        
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                                <form method="POST" action="{{route('product/store')}}">
                                    {{ csrf_field()}}
                                <h4 class="example-title">Add Products To Store</h4>
                                <div class="form-group">
                                    <select class="form-control" name="product_id">
                                        @foreach($products as $product)
                                            <option value="{{$product->id}}">{{$product->name}}</option>   
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                <input type="hidden" name="store_id" value="{{$store->id}}"/>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-default text-center" type="submit" name="submit">Add Product</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <td>ID</td>
                                            <td>Products</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($storeproducts as $storeproduct)
                                        <tr>
                                            <td>{{$storeproduct->id}}</td>
                                            <td>{{$storeproduct->product->name}}</td>
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
@endsection