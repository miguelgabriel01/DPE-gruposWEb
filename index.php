<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direita Pernambuco</title>
    <link rel="stylesheet" href="./public/css/Links-DPE.css">
    <link rel="stylesheet" href="./public/css/mobile.css">

    <script src="https://kit.fontawesome.com/f34559af3c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@1,700&family=Fjalla+One&family=MuseoModerno&display=swap" rel="stylesheet">
</head>
<body>
    
  <section class="links-dpe">
      
    <div class="cadastroPet">
      <div class="formularioCadastroPet">
              <form action="./controllers/GruposController.php" method="POST">
                <div class="icons">
                <i class="fa fa-whatsapp"  aria-hidden="true"></i><span style="width: 20px;"></span><i class="fa fa-instagram" aria-hidden="true"></i>
                </div>
                <h2>Partícipe de um dos diretórios do DPE</h2>

                <!--<div id="label">
                  <label for="select1">selecione sua cidade..</label>
                </div>!-->
                  <select class="select1" placeholder="Grupos no whatsapp" name="cidade">              
                    <option value="">Selecione sua Cidade</option>
                    <option value="abreu">Abreu e Lima</option>
                    <option value="igarassu">Igarassu</option>
                    <option value="itapissuma">Itapissuma</option>
                    <option value="ilha">Ilha de Itamaracá</option>
                    <option value="olinda">Olinda</option>
                    <option value="paulista">Paulista</option>
                    <option value="recife">Recife</option>

                  </select>
    
               <div class="input-group"></div>
                <button class="buttonCadastrarPet" type="submit" >Participar do grupo </button>
              </form>

              <div id="line" ></div>
              <a class="logo" href="https://www.facebook.com/Direita-Pernambuco-Igarassu-149452752495172">Direita Pernambuco</a>
              <img src="./public/img/logos/dpe-logo1.jpeg" alt="direita pernambuco" style="" class="logo-img">
      </div>

  </section>

</body>
</html>