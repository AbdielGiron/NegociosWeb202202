<h1>Este es mi primer Form</h1>
<form action="index.php?page=NW202202_PrimerForm" method="post">
    <fieldset>
        <label class="col-4" for="nombre">Nombre:</label>
        <input class="col-8" type="text" name="nombre" id="nombre" value="{{nombre}}"/>
    </fieldset>
    <fieldset>
        <label class="col-4" for="apellido">Apellido:</label>
        <input class="col-8" type="text" name="apellido" id="apellido" value="{{apellido}}"/>
    </fieldset>
    <fieldset>
        <button type="submit" name="bntEnviar">Enviar</button>
    </fieldset>
</form>