<html>

<head>
    <meta charset="utf-8">
    <title>Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <h1>Novo Livro</h1>

    @if ($status = Session::get('mensagem'))
        <h2>{{ $status }}</h2>
    @endif

    @if ($errors->any())
        <h2>Houve alguns erros ao processar o formulário</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('livros.store') }}" method="post">
        @csrf
        <table width="200" border="0" cellspacing="3" cellpadding="3">
            <tr>
                <td>Título:</td>
                <td><input type="text" name="titulo" id="titulo" placeholder="Título"></td>
            </tr>
            <tr>
                <td>Autor:</td>
                <td><input type="text" name="autor" id="autor" placeholder="Autor"></td>
            </tr>
            <tr>
                <td>Páginas</td>
                <td><input type="text" size="10" name="paginas" id="paginas" placeholder="Quant. Páginas"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><button class="btn btn-primary" type="submit">Gravar</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
