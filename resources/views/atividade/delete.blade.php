
<h1>Formulário de deletar de atividade</h1>
<hr>
<form action="/atividades/{{$atividade->id}}" method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <p>Você realmente deseja excluir o registro {{$atividade->id}}?</p>    
    <input type="submit" value="Deletar">
</form>
