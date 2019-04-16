<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="static/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/static/css/admin.css" rel="stylesheet" >
    <title>Villabos</title>
</head>
<body style="background: #e1e1e1">
    <div class="container sheet mt-5" style="background: white;">
        <div class="row">
            <div class="col-md-12 mt-3 d-flex justify-content-end">
                <button class="btn btn-danger">Cancelar</button>
                <button class="btn btn-primary ml-2">Guardar</button>
            </div>
            <div class="col-md-12 mt-3">
                <input type="text" placeholder="Titulo">
            </div>
            <div class="col-md-12 mt-3">
                <input type="text" placeholder="subtitulo">
            </div>
            <div class="col-md-12">
                <div class="drag-and-drop mt-5"></div>
            </div>
            <div class="col-md-12">
                <textarea name="content"></textarea>
            </div>
        </div>
    </div>
</body>
</html>