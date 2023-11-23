<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>

    <link rel="stylesheet" href="./style/cadastro_funcionarios.css">
  </head>
  <body>

    <div class="container">
        <div class="form-container">
        <h2>Cadastro de Funcionário</h2>

        <form>
          <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" id="nome" name="nome" required>
          </div>

          <div class="form-group">
            <label for="mensagem">Cargo</label>
            <textarea id="mensagem" name="mensagem" rows="4" required></textarea>
          </div>

          <div class="form-group">
            <button type="submit">Cadastrar</button>
            <button type="submit">Cancelar</button>
          </div>

        </form>

        
      </div>

      <div class="img-container">
             <img src="image\logo.png" alt="">    
      </div>

    </div>
    
  
  </body>

</html>