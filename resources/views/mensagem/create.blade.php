
<h1>Formulário de cadastro de mensagem</h1>
<hr>
<form action="/mensagem" method="post">
    {{ csrf_field() }}
    Título:            <input type="text" name="titulo"> <br>
    Autor:         	   <input type="text" name="autor"> <br>
    Mensagem:          <input type="text" name="mensagem"> <br>
    <input type="submit" value="Salvar">
</form>
