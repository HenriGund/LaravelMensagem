
<h1>Formulário de deletar mensagem</h1>
<hr>
<form action="/mensagem/{{$mensagem->id}}" method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <p>Você realmente deseja excluir o registro {{$mensagem->id}}?</p>    
    <input type="submit" value="Deletar">
</form>
