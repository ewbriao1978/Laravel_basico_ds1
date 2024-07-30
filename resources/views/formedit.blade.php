<t1> Edição </t1>
<br>
<br>

<form action="/update" method="post">
    @csrf
<input type="hidden" name="id_for_updating" value="{{ $data['id'] }}">

<label> Nome: </label>

<input type="text" name="nome" value="{{ $data['nome'] }}">
<label> Idade: </label>
<input type="number" name="idade" value="{{ $data['idade'] }}">
<button type="submit" name="submit"> Enviar </button>
</form>


<a href="{{ url('/') }}"> Voltar para tela inicial</a>
