<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="style_form.css">
</head>
<body>
    <h2>Formulario</h2>
    <form method="post">
        <label for="nombre">Nombre y Apellidos:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="fecha">Fecha de nacimiento:</label><br>
        <input type="date" id="fecha" name="fecha"><br>
        <label for="ocupacion">Ocupación:</label><br>
        <input type="text" id="ocupacion" name="ocupacion"><br>
        <label for="telefono">Teléfono:</label><br>
        <input type="text" id="telefono" name="telefono"><br>
        <label for="correo">Email:</label><br>
        <input type="text" id="correo" name="correo"><br>
        <label for="lugar">Nacionalidad:</label><br>
        <select id="lugar" name="lugar" multiple>
            <option value="Perú">Perú</option>
            <option value="Estados Unidos">Estados Unidos</option>
            <option value="China">China</option>
            <option value="Rusia">Rusia</option>
            <option value="Francia">Francia</option>
            <option value="México">México</option>
            <option value="Rusia">Rusia</option>
        </select><br>
        <legend>Nivel de inglés:</legend>
        <label for="basico"><input type="radio" id="basico" name="nivel_ingles" value="Basico"> Básico</label><br>
        <label for="intermedio"><input type="radio" id="intermedio" name="nivel_ingles" value="Intermedio"> Intermedio</label><br>
        <label for="avanzado"><input type="radio" id="avanzado" name="nivel_ingles" value="Avanzado"> Avanzado</label><br>
        <label for="fluido"><input type="radio" id="fluido" name="nivel_ingles" value="Fluido"> Fluido</label><br><br>

        <label>Aptitudes: <br><input list="aptitudes" name="aptitudes"/></label>
        <datalist id="aptitudes">
        <option value="Liderazgo"></option>
        <option value="Iniciativa"></option>
        <option value="Gestión del tiempo"></option>
        <option value="Adaptabilidad"></option>
        <option value="Organización"></option>
        </datalist><br><br>

        <legend>Habilidades:</legend>
        <input type="checkbox" name="habilidades[]" value="Inteligencia emocional">
        <label for="habilidad1">Inteligencia emocional</label><br>
        <input type="checkbox" name="habilidades[]" value="Espíritu crítico">
        <label for="habilidad2">Espíritu crítico</label><br>
        <input type="checkbox" name="habilidades[]" value="Trabajo en equipo">
        <label for="habilidad3">Trabajo en equipo</label><br>
        <input type="checkbox" name="habilidades[]" value="Capacidad analítica">
        <label for="habilidad4">Capacidad analítica</label><br>
        <input type="checkbox" name="habilidades[]" value="Habilidades físicas">
        <label for="habilidad5">Habilidades físicas</label><br><br>

        <label for="lenguajes">Lenguajes de programación:</label><br>
        <select id="lenguajes" name="lenguajes[]" multiple>
            <option value="Java">Java</option>
            <option value="Python">Python</option>
            <option value="JavaScript">JavaScript</option>
            <option value="C++">C++</option>
            <option value="C#">C#</option>
            <option value="Ruby">Ruby</option>
        </select><br><br>

        <label for="perfil">Perfil:</label><br>
        <textarea id="perfil" name="perfil" rows="4" cols="50">Profesional altamente adaptable con habilidades versátiles y experiencia interdisciplinaria en atención al cliente, investigación y gestión empresarial.</textarea>
        <br><br>
        <input class="btn" type="submit" name="register" value="Enviar">
    </form>
    <?php
        include("registrar.php")
    ?>
</body>
</html>