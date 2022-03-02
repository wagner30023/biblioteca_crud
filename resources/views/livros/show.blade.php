<html>

<head>
    <meta charset="utf-8">
    <title>Biblioteca</title>

    <style>
        a {
            color: blue
        }

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <h1>Detalhes do Livro</h1>

    <table width="500" border="1" class="table table-striped">
        <tr>
            <td><strong>Id</strong></td>
            <td>{{ $livro->id }}</td>
        </tr>
        <tr>
            <td><strong>Titulo</strong></td>
            <td>{{ $livro->titulo }}</td>
        </tr>
        <tr>
            <td><strong>Autor</strong></td>
            <td>{{ $livro->autor }}</td>
        </tr>
        <tr>
            <td><strong>Páginas</strong></td>
            <td>{{ $livro->paginas }}</td>
        </tr>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
