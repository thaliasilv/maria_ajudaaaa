
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2 style="color: orange; margin-top: 5%;"> Insira sua categoria</h2>
        <hr align="center" width="100%" size="1" color="orange">
        <div class="corpinho">
            <div class="caixinha">
                <form action="" method="POST">
                    Nome da categoria: <input type="text" name="Nome"><br><br><br><br>
                    <button style="color: orange" type="submit">Cadastrar</button>
                    <br><br><br><br><br><br><br><br>
                    <a href="./categoria/listar/">Ver as categorias cadastradas</a>
                </form>
                
              <?php if(ehPost()){
             foreach ($errors as $erro){
                echo"$erro <br>";
            
 }
   }  
   ?>
            </div>
        </div>
        
    </body>
</html>
