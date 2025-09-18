{{-- {{url('/empleados')}} - se usa el metodo post para captar los datos del form create --}}
{{-- @csrf es una llave para enviar los datos en la funcion store de create --}}
<br>
<br>
<br>
Formulario de creacion de empleados
<br>

<form action="{{url('/empleados')}}" method="post" enctype="multipart/form-data">
    @csrf 

    <label for="Nombre"> Nombre</label>
    <input type="text" name="Nombre: " id="Nombre">
    <br>
    <label for="ApellidoPaterno"> Apellido Paterno </label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno">
    <br>
    <label for="Apellido Materno"> Apellido Materno</label>
    <input type="Apellido Materno" name="Apellido Materno" id="ApellidoMaterno">
    <br>
    <label for="Correo"> Correo</label>
    <input type=" Correo" name="Correo" id="Correo">
    <br>
    <label for="Foto"> Foto</label>
    <input type="file" name="Foto" id="Foto">
    <br>
    <label for="Enviar"> Enviar</label>
    <input type="submit" name="Enviar" id="Enviar"> 
    {{-- <input type="submit" value="Guardar datos"> --}}
    <br>
</form>