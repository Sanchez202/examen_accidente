<h1>Actualizar Accidente</h1>
<form action="{{route('accidente.update', $accidente)}}"  method="POST">

    @csrf
    @method('put')
    
        <label>
            hora:
            <br>
            <input type="text" name="hora">
        </label>
        <br>
        <label>
            <br>
            codigo:
            <br>
            <input type="text" name="codigo">
        </label>
        <br>
        fecha:
        <br>
        <input type="text" name="fecha">
    </label>
    <br>
    lugar:
    <br>
    <input type="text" name="lugar">
    </label>
    <br>
   
    <button  type="submit">Actualizar datos </button>
   
</form>