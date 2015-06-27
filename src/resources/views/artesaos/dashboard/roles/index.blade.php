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
                @if (count($roles) > 0)
                    <table class="table table-bordered">
                        <tbody>
                            @foreach ($roles as $id => $role)
                                <tr>
                                    <td>{{ $id }}</td>
                                    <td>{{ $role }}</td>
                                    <td class="text-center">Actions</td>
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
