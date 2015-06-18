@extends('artesaos::dashboard.master')

@section('content')
    
    <div class="row">
        
        <div class="col-sm-4">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Manage Users</h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('defender/users') }}" class="btn btn-default btn-block">Users</a>
                </div>
            </div>

        </div>

        <div class="col-sm-4">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Manage Roles</h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('defender/roles') }}" class="btn btn-default btn-block">Roles</a>
                </div>
            </div>

        </div>

        <div class="col-sm-4">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Manage Permissions</h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('defender/permissions') }}" class="btn btn-default btn-block">Permissions</a>
                </div>
            </div>

        </div>

    </div>

@endsection
