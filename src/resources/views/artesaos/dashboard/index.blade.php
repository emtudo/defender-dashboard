@extends('artesaos::dashboard.master')

@section('content')
    
    <div class="row">
        
        <div class="col-sm-4">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        {{ trans('artesaos::dashboard.index.manage_users') }}
                    </h3>
                </div>
                <div class="panel-body">
                    <a href="{{ route('defender.dashboard.users') }}" class="btn btn-default btn-block">
                        {{ trans('artesaos::dashboard.navigation.users') }}
                    </a>
                </div>
            </div>

        </div>

        <div class="col-sm-4">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        {{ trans('artesaos::dashboard.index.manage_roles') }}
                    </h3>
                </div>
                <div class="panel-body">
                    <a href="{{ route('defender.dashboard.roles') }}" class="btn btn-default btn-block">
                        {{ trans('artesaos::dashboard.navigation.roles') }}
                    </a>
                </div>
            </div>

        </div>

        <div class="col-sm-4">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        {{ trans('artesaos::dashboard.index.manage_permissions') }}
                    </h3>
                </div>
                <div class="panel-body">
                    <a href="{{ route('defender.dashboard.permissions') }}" class="btn btn-default btn-block">
                        {{ trans('artesaos::dashboard.navigation.permissions') }}
                    </a>
                </div>
            </div>

        </div>

    </div>

@endsection
