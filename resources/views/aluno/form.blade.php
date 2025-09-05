@extends ('base')
@section('titulo', 'Formulário Aluno')
@section('conteudo')

    @php
        if (!empty($dado->id)) {
            $action = route('aluno.update', $dado->id);
        } else {
            $action = route('aluno.store');
        }

    @endphp


    <form action="{{ $action }}" method='post'>
        @csrf

        @if (!empty($dado->id))
            @method('put')
        @endif

        <input type="hidden" name="id" value="{{ old('id', $dado->id ?? '') }}">

        <div class="row">
            <div class="col">
                <label for="">Nome:</label>
                <input type="text" name="nome" value="{{ old('id', $dado->nome ?? '') }}">
            </div>
            <div class="col">
                <label for="">Telefone:</label>
                <input type="text" name="telefone" value="{{ old('id', $dado->telefone ?? '') }}">
            </div>
            <div class="col">
                <label for="">CPF:</label>
                <input type="text" name="cpf" value="{{ old('id', $dado->cpf ?? '') }}">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-primary " type="submit"
                    class="btn">{{ !empty($dado->id) ? 'Atualizar' : 'Salvar' }}</button>
                <a class="btn btn-primary" type="button" href="{{ url('aluno') }}">Voltar</a>
            </div>
        </div>
    </form>
@stop
