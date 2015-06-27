@extends('artesaos::dashboard.master')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        {{ trans('artesaos::dashboard.permissions.index.heading') }}
                    </h3>
                </div>
                @if (count($permissions) > 0)
                    <table class="table table-bordered">
                        <tbody>
                            @foreach ($permissions as $permission)
                                <tr>
                                    <td class="text-center">
                                        <span class="label label-info">
                                            {{ $permission->name }}
                                        </span>
                                    </td>
                                    <td>{{ $permission->readable_name }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-primary btn-xs">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="panel-body">
                        <div class="text-danger text-center">
                            <strong>{{ trans('artesaos::dashboard.permissions.index.empty') }}</strong>
                        </div>
                    </div>
                @endif
                <div class="pull-right">{!! $permissions->render() !!}</div>
            </div>
        </div>
    </div>

@endsection
