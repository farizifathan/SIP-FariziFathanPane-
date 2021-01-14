@extends('main')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Users</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                    
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section ('content')
<div class="content mt-3">
            <div class="animated fadeIn">
                @if (session('status'))
                <div class="alert alert-sucess">
                    {{session('status')}}
                </div>
                @endif


                <div class="card">
                    <div class="card header">
                        <div class="pull-left">
                            <strong>Data User </strong>
                        </div>
                            <div class="pull-right">
                                <a href="{{ url('user/add') }} " class="btn btn-success btn-sm"> 
                                <i class="fa fa-plus"> </i> Add
                            </a>
                            </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <thead>
                             <tr>
                                <th>No.</th>
                                <th>RoleId</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
        
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->role_id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->password }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        
                                            <td class="text-center">
                                            <a href="{{ url('user/edit/'.$item->id) }}" class="btn btn-primary btn-sm"> 
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            
                                            <form action="{{ url('user/'.$item->id) }}" method="post" class="d-inline" 
                                                onsubmit="return confirm('Hapus Data ini?')">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"> </i>
                                                </button>

                                            <form>
                                        </td>
                                        </td>
                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
                       </div><!-- .content -->

@endsection

