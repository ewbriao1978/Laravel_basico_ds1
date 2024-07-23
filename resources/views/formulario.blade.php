<form action="/dados" method="post">
    @csrf
<label> Nome: </label>
<input type="text" name="nome">
<label> Idade: </label>
<input type="number" name="idade">
<button type="submit" name="submit"> Enviar </button>
</form>
