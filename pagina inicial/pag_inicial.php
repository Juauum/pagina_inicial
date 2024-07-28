<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pagina inicial</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- HEADER -->
 
 <header>
  <div class="div1">
    <img src="coruja_novo.png" alt="logo">
    <p>Professor</p>
    <p>xxxxxxxxx</p>
  </div>
  <div class="div2">
    <form action="#" method="get">
      <input type="text" name="nome" id="nome">
    </form>
    <img src="img_branco.jpg" alt="perfil">
  </div>
 </header>
 
<!-- NAV -->
  
  <nav>
    <h2>Alguma das Vagas</h2>
    <div class="carrossel">
        <div class="arrow" id="prev">&#8249;</div>
        <div class="carousel">
            <div class="carousel-item">1</div>
            <div class="carousel-item">2</div>
            <div class="carousel-item">3</div>
        </div>
        <div class="arrow" id="next">&#8250;</div>
    </div>
    <script>
        const carousel = document.querySelector('.carousel');
        const items = document.querySelectorAll('.carousel-item');
        const prev = document.getElementById('prev');
        const next = document.getElementById('next');
       
      let index = 0;
       
      prev.addEventListener('click', () => {
            index = (index > 0) ? index - 1 : items.length - 1;
            carousel.style.transform = `translateX(${-index * (items[0].offsetWidth + 20)}px)`;
        });

        next.addEventListener('click', () => {
            index = (index < items.length - 1) ? index + 1 : 0;
            carousel.style.transform = `translateX(${-index * (items[0].offsetWidth + 20)}px)`;
        });
    </script>
  </nav>

<!-- MAIN -->
  
 <main>  
   <section id="secao1">
       <h2>Resumo do "sobre"/ propósito do site</h2>
     <div> 
      <img src="img_branco.jpg" alt="imagem">
       <p>Lorem ipsum dolor sit amet, consectetur 
         adipiscing elit. Morbi consectetur faucibus
         est in pretium. Donec id consectetur augue,
         ac maximus massa. Fusce accumsan nec erat in       
       </p>
     </div>
    </section>

  <!-- SECTION 02 -->
  
    <section id="secao2">
      <h2>Estrutura interativa com instruções de uso inicial do site.</h2>
      <h3>Veja como funciona:</h3>
      <ol>
        <li>Lorem Ipsum <br>dolor sit amet</li>
        <li>Lorem Ipsum <br>dolor sit amet</li>
        <li>Lorem Ipsum <br>dolor sit amet</li>
      </ol>
      <p>
        Textos.No meu pensamento poderia ser 
        uma especie de informações de interesse
        de cada parte (professor/instituição)
      </p>
    </section>

  <!-- SECTION 03 -->

   <section class="secao3"> 
       <img src="img_branco.jpg" alt="imagem">
       <div>
         <h2>Lorem ipsum dolor sit amet, consectetur </h2>
        <p>
         Lorem ipsum dolor sit amet, consectetur 
         adipiscing elit. Morbi consectetur faucibus
         est in pretium. Donec id consectetur augue,
         ac maximus massa. Fusce accumsan nec erat in
         gravida. Pellentesque mattis purus ut posuere     
       </p> 
      </div>  
  </section>

  <!-- SECTION 04 -->
   
   <section class="secao4">
    <div>
     <h2>Lorem ipsum dolor sit amet, consectetur </h2>
     <p> 
      Lorem ipsum dolor sit amet, consectetur 
      adipiscing elit. Morbi consectetur faucibus
      est in pretium. Donec id consectetur augue,
      ac maximus massa. Fusce accumsan nec erat in
      gravida. Pellentesque mattis purus ut posuere    
     </p>
    </div>
     <img src="img_branco.jpg" alt="#">
   </section>
  </main>

  <!-- FOOTER -->
  
  <footer>
    <p>Para candidatos <br><br>Cadastrar curriculo</p>
    <p>Para empresas <br><br>Anunciar vaga</p>
    <p>Institucional <br><br>Ajuda<br><br>Sobre nós</p>
  <div class="div1">
    <p>Redes Sociais</p>
    <div class="div2">
      <img src="insta.svg" alt="instagram">
      <img src="face.svg" alt="facebook">
      <img src="twitter.png" alt="twitter">
    </div>
  </div>
  </footer>  
</body>
</html>

