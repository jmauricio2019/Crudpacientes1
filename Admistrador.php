<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração</title>
</head>

<style>
    body{
      background-color: #e6e6e6;
      font-size: 30px;
      color: #606060;
      display: block;
      width: 90%;
      height: 123px;
      margin: 0 auto;
    }   
    ul{
      font-size: 20px;
    }    
    a{
      color: #606060;
    }
    form {
        text-align:center;
    }
 
    </style>
    <div> <span style="float:right"><?php session_start();echo" ".$_SESSION['usuario'];?></span><br/></div>

 <h2><p><u>SEGURANÇA EM PRIMEIRO LUGAR</u></p></h2>
<body>
    

    <fieldset id="chamado"><legend>Ocorrências</legend>
    
            </select>
            <br>
    </form>
    <a href="cadastroUsuario.php"><button style="background:  #404040; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size:20px;">Cadastrar Usuários</button></a>        	        	 
    <a href="cadastroOcorrencias.php"><button style="background:  #404040; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size:20px;">Cadastrar Ocorrências</button></a> 
       	        	 
    </form>

        

</body>
<p>Copyright &copy; 2020 - by Jose Maurico and Raphael Acacio.</p>
</html>

