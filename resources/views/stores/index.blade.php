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
                                    <div class="panel-heading">Add Store | Store Page</div>
                    
                                    <div class="panel-body">
                                        <form class="form-horizontal" method="POST" action="{{route('stores')}}">
                                            {{ csrf_field() }}
                    
                                            <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label for="name" class="form-control-label">Store Name</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                                </div>
                                                <br>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label for="location" class="form-control-label">Store Location</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input id="location" type="text" class="form-control" name="location" required>
                                                </div>
                                            </div>
                    
                                            <div class="form-group">
                                                <div class="col-md-8 col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Add Store
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
                                                <th scope="col">Store Name</th>
                                                <th scope="col">Store Location</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($stores as $store)
                                                <tr>
                                                    <td scope="row">{{$store->id}}</td>
                                                    <td>
                                                        <a href="{{route('stores/', ['id' => $store->id])}}">
                                                            <span>{{$store->name}}</span>
                                                        </a>
                                                    </td>
                                                    <td>{{$store->location}}</td>
                                                   
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
