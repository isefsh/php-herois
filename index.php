<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heróis em PHP</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="icon" href="imgs/mask.png">
  </head>
  <body>
    <form action="php/sendData.php" method="post">
      <label>Escolha um dos universos abaixo:</label><br>
      <input type="radio" name="universo" value="Marvel">Marvel<br>
      <input type="radio" name="universo" value="DC">DC<br><br>
      <label>Escolha um herói do universo selecionado:</label><br>
      <input type="text" name="heroi" placeholder="Digite aqui o herói escolhido"><br><br>
      <label>Escolha a quantidade de vezes que deseja repetir a imagem do herói:</label><br>
      <input type="text" name="qtd" placeholder="Digite aqui a quantidade"><br><br>
      <button type="submit">Enviar</button>
    </form>
  </body>
</html>