<h1> Ola </h1>
<h2> Listagem dos Dados </h2>

@if (session()->has('success'))
<strong> <font color="Navy"> {{ session('success') }} <font> </strong>
<br>
@elseif (session()->has('success_removing'))
<strong> <font color="RoyalBlue"> {{ session('success_removing')}} <font> </strong>
@elseif (session()->has('success_update'))
<strong> <font color="SteelBlue"> {{ session('success_update') }} <font> </strong>

@endif

<table class="table table-striped">
     <thead>
        <tr>
            <th> # </th>
            <th> Nome </th>
            <th> Idade </th>
            <th> </th>
            <th> </th>
        </tr>
     </thead>

<tbody>


@foreach ($data as $my_data)
<tr>
    <td> {{ $my_data['id']}} </td>
    <td> {{ $my_data['nome'] }}</td>
    <td> {{ $my_data['idade'] }}</td>


    <td>

<a href="{{ url('edit/'.$my_data['id']) }}"> Editar </a>

    </td>

    <td>
        <form method = "post" action = "{{ url('remove')}}">
            @csrf
            <input type = "hidden" name = "id_for_removing" value = "{{ $my_data['id']}}">
            <button type="submit"> Remover </button>
        </form>

    </td>


</tr>
@endforeach

</tbody>

</table>

<a href="http://localhost:8000/formulario"> Entrar no formulário </a>
