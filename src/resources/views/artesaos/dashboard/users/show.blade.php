@extends('artesaos::dashboard.master')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Usuário: {{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li><strong>Email:</strong> {{ $user->email }}</li>
                        <li><strong>Data de Criação:</strong> {{ $user->created_at }}</li>
                        <li><strong>Última Atualização:</strong> {{ $user->updated_at }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Grupos</h3>
                </div>
                <div class="panel-body">
                    @if(count($user->roles) > 0)
                        @foreach ($user->roles as $role)
                            <a href="{{ url('defender/roles', $role->id) }}" class="label label-info">
                                {{ $role->name }}
                            </a>
                        @endforeach
                    @else
                        <span class="text-danger">
                            <strong>Nenhum grupo atribuído para este usuário.</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Permissões</h3>
                </div>
                <div class="panel-body">
                    @if (count($user->permissions) > 0)
                        @foreach ($permission as $permissions)
                            <a href="{{ url('defender/permissions', $permission->id) }}" class="label label-info">
                                {{ $permission->readable_name }}
                            </a>
                        @endforeach
                    @else
                        <span class="text-danger">
                            <strong>Este usuário não possui permissões específicas atribuídas.</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Actions -->
    <div class="text-right">
        <div class="btn-group">
            <button class="btn btn-warning">
                <span class="glyphicon glyphicon-pencil"></span> Editar
            </button>
            <button class="btn btn-danger">
                <span class="glyphicon glyphicon-remove"></span> Excluir
            </button>
        </div>
    </div>
    <!--/Actions -->
    
@endsection
