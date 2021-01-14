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

                <div class="card">
                    <div class="card header">
                        <div class="pull-left">
                            <strong>Tambah User </strong>
                        </div>
                            <div class="pull-right">
                                <a href="{{ url('user') }} " class="btn btn-secondary btn-sm"> 
                                <i class="fa fa-undo"> </i> Back
                            </a>
                            </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                                <form action="{{ url('user') }}" method="post">
                                    @csrf
                                    <div class="form-grup">
                                        <label> Role ID</label>
                                        <input type="text" name="role_id" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-grup">
                                        <label> Name</label>
                                        <input type="text" name="name" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-grup">
                                        <label> Username</label>
                                        <input type="text" name="username" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-grup">
                                        <label> Password</label>
                                        <input type="password" name="password" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-grup">
                                        <label> Email</label>
                                        <input type="text" name="email" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-grup">
                                        <label> Created At</label>
                                        <input type="datetime-local" name="created_at" class="form-control" required>
                                    </div>
                                    <div class="form-grup">
                                        <label> Updated At</label>
                                        <input type="datetime-local" name="updated_at" class="form-control" required>
                                    </div>
                                    
                                    
                                    <button type="submit" class="btn btn-success"> Save </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
                       </div><!-- .content -->

@endsection

