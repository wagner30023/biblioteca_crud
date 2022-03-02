<html>

<head>
    <meta charset="utf-8">
    <title>Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <h1>Livros Cadastrados</h1>

    @if ($status = Session::get('mensagem'))
        <h2>{{ $status }}</h2>
    @endif

    <h4><a class="btn btn-primary" href="{{ route('livros.create') }}">Cadastrar
            Novo Livro</a></h4>

    <div class="form-group">
        <tr>
            <td width="85" align="center"><strong>Id</strong></td>
            <td width="161" align="center"><strong>Título</strong></td>
            <td width="156" align="center"><strong>Autor</strong></td>
            <td width="98" align="center"><strong>Páginas</strong></td>
            <td width="167" align="center"><strong>Opções</strong></td>
        </tr>

        @foreach ($livros as $livro)
            <div class="form-group">
                <td align="center">{{ $livro->id }}</td>
                <td>{{ $livro->titulo }}</td>
                <td>{{ $livro->autor }}</td>
                <td align="center">{{ $livro->paginas }}</td>
                <td align="center">

                    <form action="{{ route('livros.destroy', $livro->id) }}" method="post">
                        <a class="btn btn-success"
                            href="{{                             href="route('livros.show', $livro->id) }}">Detalhes</a>
                        <a class="btn btn-warning" href="{{                         <a class="btn btn-warning" href="route('livros.edit', $livro->id) }}">Editar</a>

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger" type="submit">Excluir</button>
                    </form>

            </div>
        @endforeach

        </table>
    </div>

</body>

</html>
