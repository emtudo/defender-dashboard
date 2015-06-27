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
                            @foreach ($permissions as $id => $readable_name)
                                <tr>
                                    <td>{{ $id }}</td>
                                    <td>{{ $readable_name }}</td>
                                    <td>Actions</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="panel-body">
                        <span class="text-danger">
                            <strong>{{ trans('artesaos::dashboard.permissions.index.empty') }}</strong>
                        </span>
                    </div>
                @endif
            </div>

        </div>
    </div>

@endsection
