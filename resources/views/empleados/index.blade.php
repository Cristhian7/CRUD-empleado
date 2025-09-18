Mostrar las listas de empleados
{{-- Mostrar los datos en columnas --}}
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->Foto }}</td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->ApellidoPaterno}}</td>
            <td>{{ $empleado->ApellidoMaterno}}</td>
            <td>{{ $empleado->Correo }}</td>
            <td>Editar |
            
            {{-- Preguntar si quiere eliminar y mostrar la actualizacion de la lista  --}}
            <form action="{{ url('/empleados/'.$empleado->id) }}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">

            </form>

            </td>
        </tr>
    </tbody>
    @endforeach

</table>