@extends("layout.layout")
@section("title","Equipo de Trabajo")
@section("css")
    <link rel="stylesheet" href="{{{asset('css/home.css')}}}">
@stop
@section("content")
    <h1>Equipo de Trabajo</h1>
    <a class="btn btn-primary" href="/user/form/crear">Nuevo Miembro</a>
    <form class="form-inline" action="#">
        <input type="text">
        <button>Buscar</button>
    </form>

    <div>
        <div>
            <h3>Filtar por</h3>
        </div>
        <table>
            <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Cargo</th>
                <th>Estado</th>
                <th>Operaciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{{$user->id}}}</td>
                    <td><a href="/user/"
                           class="personProfileLink">{{{$user->name}}} {{{$user->lastname}}} {{{$user->second_lastname}}}</a>
                    </td>
                    <td>{{{$user->position}}}</td>
                    <td>{{{$user->status}}}</td>
                    <td>
                        <a href="/user/{{{$user->id}}}/edit" class="btn btn-primary">Editar</a>
                        @if($user->status==="activo")
                            <button class="btn btn-primary">Inactivar</button>
                        @else
                            <button class="btn btn-primary">Activar</button>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
@section("javascript")
    <script src="{{{asset('js/home.js')}}}"></script>
@stop