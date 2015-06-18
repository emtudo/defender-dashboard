@extends('artesaos::dashboard.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        {{ trans('artesaos::dashboard.users.index.heading') }}
                    </h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($users as $user)
                            <a href="{{ url('defender/users', $user->id) }}" class="list-group-item">
                                {{ $user->name }}
                            </a>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="pull-right">{!! $users->render() !!}</div>
        </div>
    </div>
@endsection
    
