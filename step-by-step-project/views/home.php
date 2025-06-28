<! Doctype html>
  <html lang="fr">

  <head>
    <meta charest="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="public/css/style.css">
  </head>

  <body>

    <header class="FlexRow">
      <h2>Step By Step France</h2>
      <nav>
        <ul class="FlexRow">
          <li>
            <a href="">Accueil</a>
          </li>
          <li>
            <a href="">A propos</a>

          </li>
          <li>
            <button class="Btncompt"> Créer un compt</button>
          </li>
        </ul>
      </nav>
    </header>

    <!--section de le paragraph prancipale de la site-->
    <section class="FlexCol" id="prancipal">
      <h1> Vos objectifs en France,<br><span>étape par étape.</span> </h1>
      <img src="public\images\homePhoto1.png" hight="600px" width="500px">
      <p> Une platforme pour guider les nouveaux arrivants <br> <span> dans leurs démarches éssentielles en france </span> </p>
      <button class="Btncompt">Créer un compte</button>
    </section> <!-- fin de section de le paragraph prancipale de la site-->
    <!--------------------------------------------------------------------------------->
    <!-- section de les objectifs et title-->
    <section class="FlexCol" id="objSection">
      <h2> Objectifs courants</h2>
      <div class="FlexRow" id="objBoxs"> <!-- div contaner de les trois objectifs-->
        <div class="FlexCol objBox"><!-- div le icon , le title de lobjectif et les étapes -->
          <div class="objTitle FlexRow">
            <img src="public\images\home.png" class="icon">
            <p>Trouver un <br><span> logement <span></p>
          </div>
          <div class="étapes">
            <p>3 étapes</p>
            <div class="progresse"></div>
            <p>50% terminé</p>
          </div>
        </div><!-- fin div le icon , le title de lobjectif et les étapes -->

        <div class="FlexCol objBox"><!-- div le icon , le title de lobjectif et les étapes-->
          <div class="objTitle FlexRow">
            <img src="public\images\french.png" class="icon">
            <p>Apprender le <br><span> français <span></p>
          </div>
          <div class="étapes">
            <p>4 étapes</p>
            <div class="progresse"></div>
            <p>20% terminé</p>
          </div>
        </div><!-- fin div le icon , le title de lobjectif et les étapes -->

        <div class="FlexCol objBox"><!-- div  le icon , le title de lobjectif et les étapes -->
          <div class="objTitle FlexRow">
            <img src="public\images\suitcase.png" class="icon">
            <p>Obtenir un <br><span>emploi</span></p>
          </div>
          <div class="étapes">
            <p>5 étapes</p>
            <div class="progresse"></div>
            <p>10% terminé</p>
          </div>
        </div><!-- fin div le icon , le title de lobjectif et les étapes -->
      </div> <!-- fin div contaner de les trois objectifs-->
    </section><!--fin section de les objectifs et title-->

    <!--Section Comment ça marche ?-->
    <section class="FlexCol" id="CaMarche">
      <h2>Comment ça marche?</h2>
      <article class="FlexRow">
        <p><span>1</span>Créer votre <br>compt </p>

        <p><span>2</span>Choisissez votre<br>objectif</p>

        <p><span>3</span>Suivez vos<br>étapes</p>

        <p> <span>4</span>Survelliez votre<br>progrés</p>

      </article>

    </section>
    <!-- fin Section Comment ça marche ?-->


  </body>

  </html>