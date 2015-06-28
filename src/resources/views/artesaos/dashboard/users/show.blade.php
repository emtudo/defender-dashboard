@extends('artesaos::dashboard.master')
@section('content')
    <div id="user-details">
        <!-- User details -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-user"></span>
                            {{ trans('artesaos::dashboard.users.show.heading') }}
                            {{ $user->name }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>
                                <strong>{{ trans('artesaos::dashboard.users.show.email') }}:</strong>
                                {{ $user->email }}
                            </li>
                            <li>
                                <strong>{{ trans('artesaos::dashboard.users.show.created_at') }}:</strong>
                                {{ $user->created_at }}
                            </li>
                            <li>
                                <strong>{{ trans('artesaos::dashboard.users.show.updated_at') }}:</strong>
                                {{ $user->updated_at }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--/User details -->
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-align-justify"></span>
                            {{ trans('artesaos::dashboard.general.roles') }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        @if(count($user->roles) > 0)
                            @foreach ($user->roles as $role)
                                <a href="{{ url('defender/roles', $role->id) }}" class="label label-info">
                                    {{ $role->name }}
                                </a>
                            @endforeach
                        @else
                            <div class="text-danger text-center">
                                <p><strong>{{ trans('artesaos::dashboard.users.show.roles.empty') }}</strong></p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-lock"></span>
                            {{ trans('artesaos::dashboard.general.permissions') }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        @if (count($user->permissions) > 0)
                            @foreach ($permission as $permissions)
                                <a href="{{ url('defender/permissions', $permission->id) }}" class="label label-info">
                                    {{ $permission->readable_name }}
                                </a>
                            @endforeach
                        @else
                            <div class="text-danger text-center">
                                <p>
                                    <strong>{{ trans('artesaos::dashboard.users.show.permissions.empty') }}</strong>
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Roles & Permissions actions -->
        <div class="pull-left">
            <div class="btn-group">
                <button class="btn btn-success">
                    <span class="glyphicon glyphicon-plus"></span>
                    {{ trans('artesaos::dashboard.users.show.roles.add') }}
                </button>
                <button href="#" class="btn btn-success">
                    <span class="glyphicon glyphicon-plus"></span>
                    {{ trans('artesaos::dashboard.users.show.permissions.add') }}
                </button>
            </div>
        </div>
        <!--/Roles & Permissions actions -->
        <!-- Actions -->
        <div class="pull-right">
            <div class="btn-group">
                <a href="{{ url('defender/users/' . $user->id . '/edit')  }}" class="btn btn-warning">
                    <span class="glyphicon glyphicon-pencil"></span>
                    {{ trans('artesaos::dashboard.general.actions.edit') }}
                </a>
                <a href="#" class="btn btn-danger">
                    <span class="glyphicon glyphicon-remove"></span>
                    {{ trans('artesaos::dashboard.general.actions.delete') }}
                </a>
            </div>
        </div>
        <!--/Actions -->
    </div>
    
@endsection
