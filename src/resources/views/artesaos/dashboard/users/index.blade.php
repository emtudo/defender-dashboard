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
                <table class="table table-bordered">
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="text-center">{{ $user->created_at }}</td>
                                <td class="text-center">// TODO Actions</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Pagination Render -->
                <div class="pull-right">{!! $users->render() !!}</div>
            </div>
        </div>
    </div>
@endsection
    
