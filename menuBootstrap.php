<?php include_once 'header.php';?>
<link rel="stylesheet" href="css/menuBootstrap.css">
<script src="js/menuBootstrap.js" defer></script>
        <!--criando div centralizada com a logo-->
        <div id="espacamento"></div>
        <div class="text-center my-3">
          <img src="img/logoBranca.png" class="rounded" width="250" height="100"alt="">
        </div>
        <div id="espacamento"></div>
<!--criando um container que possuirá as divs das matérias-->
<div class="container justify-content">
  <!--primeira linha, com os elementos espalhados igualmente dos cantos ao centro do container-->
  <div class="row justify-content-between">
  
      <div class="card" id="card-custom-portugues" style="width: 15rem;" onclick="alerta()" type="button">
        <img src="img/port.jpg" class=" img card-img-top" alt="portugues foto">
        <div class="card-title titulo fs-5">
          <h3 class="">Português</h3>
        </div>
      </div>
      <!--div de matemática, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
      <div class="card" id="card-custom-matematica" style="width: 15rem;" onclick="telaProfs()" type="button">
        <img src="img/mat.jpg" class="img card-img-top" alt="Matematica foto">
        <div class="card-title titulo fs-5">
          <h3 class="">Matemática</h3>
        </div>
      </div>
      <!--div de música, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
      <div class="card" id="card-custom-musica" style="width: 15rem;" onclick="alerta()" type="button">
        <img src="img/music.jpg" class=" img card-img-top " alt="musica foto">
        <div class="card-title titulo fs-5">
          <h3 class="">Música</h3>
        </div>
      </div>
      <!--div de esportes, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
      <div class="card" id="card-custom-esportes" style="width: 15rem;" onclick="alerta()" type="button">
        <img src="img/esport.jpg" class="img card-img-top" alt="Esportes foto">
        <div class="card-title titulo fs-5">
          <h3 class="">Esportes</h3>
        </div>
      </div>
  </div>
  <!--linha de quebra para gerar espaçamento-->
  <div class="row">.</div>
  <!--segunda linha, com os elementos igualmente distribuídos das pontas ao meio-->
  <div class="row justify-content-between">
      <!--div de história, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
      <div class="card" id="card-custom-historia" style="width: 15rem;" onclick="alerta()" type="button">
        <img src="img/hist.jpg" class="img card-img-top" alt="Historia foto">
        <div class="card-title titulo fs-5">
          <h3 class="">História</h3>
        </div>
      </div>
      <!--div de inglês, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
      <div class="card" id="card-custom-ingles" style="width: 15rem;" onclick="alerta()" type="button">
        <img src="img/ing.jpg" class="img card-img-top" alt="Ingles foto">
        <div class="card-title titulo fs-5">
          <h3 class="">Inglês</h3>
        </div>
      </div>
      <!--div de idiomas, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
      <div class="card" id="card-custom-idiomas" style="width: 15rem;" onclick="alerta()" type="button">
        <img src="img/idiom.jpg" class="img card-img-top" alt="Idiomas foto">
        <div class="card-title titulo fs-5">
          <h3 class="">Idiomas</h3>
        </div>
      </div>
      <!--div de informática, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
      <div class="card" id="card-custom-informatica" style="width: 15rem;" onclick="alerta()" type="button">
        <img src="img/info.jpeg" class="img card-img-top" alt="Informatica foto">
        <div class="card-title titulo fs-5">
          <h3 class="">Informática</h3>
        </div>
      </div>
  </div>

      
      <div class="row-1">.</div>
      <!--segunda linha, com os elementos igualmente distribuídos das pontas ao meio-->
      <div class="row justify-content-between">
        <!--div de geografia, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
        <div class="card" id="card-custom-geografia" style="width: 15rem;" onclick="alerta()" type="button">
          <img src="img/geo.jpg" class="img card-img-top" alt="Geografia foto">
          <div class="card-title titulo fs-5">
            <h3 class="">Geografia</h3>
          </div>
        </div>
        <!--div de química, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
        <div class="card" id="card-custom-quimica" style="width: 15rem;" onclick="alerta()" type="button">
          <img src="img/Quim.jpg" class="img card-img-top" alt="Quimica foto">
          <div class="card-title titulo fs-5">
            <h3 class="">Química</h3>
          </div>
        </div>
        <!--div de biologia, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
        <div class="card" id="card-custom-biologia" style="width: 15rem;" onclick="alerta()" type="button">
          <img src="img/bio.jpg" class="img card-img-top" alt="Biologia foto">
          <div class="card-title titulo fs-5">
            <h3 class="">Biologia</h3>
          </div>
        </div>
        <!--div de física, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
        <div class="card" id="card-custom-fisica" style="width: 15rem;" onclick="alerta()" type="button">
          <img src="img/fisica.jpg" class="img card-img-top" alt="Fisica foto">
          <div class="card-title titulo fs-5">
            <h3 class="">Física</h3>
          </div>
        </div>
      </div>
  </div>
</div>
  
<?php include_once 'footer.php';?>