<t1> Edição </t1>
<br>
<br>

<form action="/update" method="post">
    @csrf
<label> Nome: </label>
<input type="text" name="nome">
<label> Idade: </label>
<input type="number" name="idade">
<button type="submit" name="submit"> Enviar </button>
</form>


<a href="{{ url('/') }}"> Voltar para tela inicial</a>
