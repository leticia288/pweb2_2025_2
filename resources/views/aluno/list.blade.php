@extends ('base')
@section('titulo', 'Formulário Aluno')
@section ('conteudo')

<div class="container">
    <h3>Listagem Formulário</h3>
    <div class="col">
        <form action="{{route('aluno.search')}}" method='post'>
            @csrf
            <div class="row align-items-end">
                <div class="col-md-3">
                    <label class="form-label">Tipo:</label>
                    <select name="tipo" class="form-select">
                        <option value="nome">Nome:</option>
                        <option value="cpf">CPF:</option>
                        <option value="telefone">Telefone:</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Valor:</label>
                    <input type="text" class="form-control" name="valor" placeholder="Pesquisar...">
                </div>

                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary ">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>

                <div class="col-md-2">
                    <a class="btn btn-success" href="{{url('/aluno/create')}}">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container mt-4">
    <table class="table table-striped">
        <thead>
            <tr>
                <td>#ID</td>
                <td>Nome</td>
                <td>CPF</td>
                <td>Telefone</td>
                <td>Ação</td>
                <td>Ação</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($dados as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nome}}</td>
                    <td>{{$item->cpf}}</td>
                    <td>{{$item->telefone}}</td>
                    <td>
                        <a href="{{route('aluno.edit', $item->id)}}" class="btn btn-outline-warning">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </td>
                    <td>
                        <form action="{{route("aluno.destroy", $item->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('Deseja remover o registro?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
