@extends('artesaos::dashboard.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-user"></span>
                        {{ trans('artesaos::dashboard.users.index.heading') }}
                    </h3>
                </div>
                @if (count($users) > 0)
                    <table class="table table-bordered">
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="text-center">{{ $user->created_at }}</td>
                                    <td class="text-center">
                                        <span class="btn-group">
                                            <a class="btn btn-primary btn-xs"
                                                href="{{ route('defender.dashboard.users.show', [ $user->id ]) }}">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </a>
                                            <a class="btn btn-warning btn-xs"
                                                href="{{ route('defender.dashboard.users.edit', [ $user->id ]) }}">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <a class="btn btn-danger btn-xs" href="#">
                                                <span class="glyphicon glyphicon-remove"></span>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="panel-body">
                        <div class="text-danger text-center">
                            <strong>{{ trans('artesaos::dashboard.users.index.empty') }}</strong>
                        </div>
                    </div>
                @endif
                <!-- Pagination Render -->
                <div class="pull-right">{!! $users->render() !!}</div>
            </div>
        </div>
    </div>
@endsection
    
