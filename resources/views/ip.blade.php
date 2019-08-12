<!DOCTYPE html> 
<html lang="pt-br"> 
<head>
<meta charset="utf-8">
<title>Titulo do texto</title> 
</head> 
<body> 
<form action="/ip" method="post">
{{ csrf_field() }}
    <div>
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" />
    </div>
    
    <div class="button">
        <button type="submit">Enviar sua mensagem</button>
    </div>
</form>


</body>
</html>