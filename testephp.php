<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="testephp.php" method="POST" class="col-sm-6 col-12 bg-form" enctype="multipart/form-data">
        <select id="selectMateria" name="selectMateria" class="form-control-sm form-control">
            <option value="Matemática">Matemática</option>
            <option value="Português">Português</option>
            <option value="Música">Música</option>
            <option value="Esportes">Esportes</option>
            <option value="História">História</option>
            <option value="Inglês">Inglês</option>
            <option value="Idiomas">Idiomas</option>
            <option value="Geografia">Geografia</option>
            <option value="Química">Química</option>
            <option value="Biologia">Biologia</option>
            <option value="Física">Física</option>
        </select>
        <?php 
            if (isset($_POST['btnEdit'])){
                $materia = $_POST['selectMateria'];
                echo $materia;
            }
        ?>
        <br>
        <button type="submit" name="btnEdit" class="btn btn-info">Atualizar</button>
    </form>
    
</body>
</html>