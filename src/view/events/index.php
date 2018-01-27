<main>
  <section class="banner">
    <div class="center">
      <h1 class="banner-title">week van <br> de mobiliteit</h1>
      <p class="banner-date">16 - 22 september</p>
      <p class="banner-hashtag">#goedopweg</p>
    </div>
  </section>
  <article class="intro">
    <div class="intro-content center">
      <picture class="intro-img">
        <source type="image/webp" srcset="assets/images/photos/intro-img.webp"/>
        <img src="assets/images/photos/intro-img.jpg" alt="intro img" width="960" height="480" class="intro-img">
      </picture>
      <div class="intro-info">
        <h1 class="title"> Wat is week van de mobiliteit?</h1>
        <p class="text"> Elk jaar zet de Week van de Mobiliteit (16 – 22 september) Vlaanderen #goedopweg om mee(r) te autominderen. Tal van acties tijdens de Week doen ons stil staan bij ons verplaatsingsgedrag en laten proeven van de alternatieven. Want wie de overstap maakt ontdekt zelf de voordelen van het stappen, trappen, trein/tram/bus of autodelen.</p>
      </div>
    <section class="intro-stats">
      <h2 class="stats-title">2017 in cijfers:</h2>
      <div class="stats-info">
        <img src="assets/images/icons/world-blue.svg" alt="world icon" width="234" height="234" class="stats-img">
        <p class="stats-text">2526 steden</p>
      </div>
      <div class="stats-info">
        <img src="assets/images/icons/leaf-blue.svg" alt="leaf icon" width="127" height="121" class="stats-img">
        <p class="stats-text">670 acties</p>
      </div>
      <div class="stats-info">
        <img src="assets/images/icons/nocar-blue.svg" alt="nocar icon" width="234" height="235" class="stats-img">
        <p class="stats-text">1352 car free day</p>
      </div>
    </section>
    </div>
  </article>
  <article class="specialday">
      <div class="specialday-content center">
        <h1 class="specialday-title"> Autoloze Zondag</h1>
        <picture class="specialday-img">
          <source type="image/webp" srcset="assets/images/photos/specialday.webp"/>
          <img src="assets/images/photos/specialday.jpg" alt="specialday img" width="4256" height="2832" class="specialday-img">
        </picture>
        <div class="specialday-info">
          <p class="text specialday-text">Autoloze zondag is een speciale dag voor heel Europa. Op deze dag worden centra van steden en gemeten afgesloten voor auto’s. Bijvoorbeeld in Brussel kan je gaan rond fietsen op de straat of door de tunnels waar je normaal met de auto zou rijden. Natuurlijk zijn er op deze plaatsen verschillende andere acties gepland rond deze week van de mobiliteit.</p>
            <a href="#" class="button specialday-button">Bekijk het in jouw buurt</a>
          <!-- Als geolocation niet lukt moet je een input voor postcode zetten -->
        </div>
      </div>
  </article>
  <section class="home-acties">
    <div class="home-acties-content center">
      <h1 class="home-acties-title">Acties</h1>
        <?php foreach ($events as $event):
          $eventDate = date_create($event['start']); ?>
          <section class="actie home-actie">
          <a href="index.php?page=detail&id=<?php echo $event['id']?>" class="actie-link">
          <picture class="actie-img">
            <source type="image/webp" srcset="assets/images/photos/<?php echo $event['code'];?>.webp"/>
            <img src="assets/images/photos/<?php echo $event['code'];?>.jpg" alt="<?php echo $event['title'];?> img" width="2048" height="1536" class="actie-img">
          </picture>
          <div class="overlay"></div>
          <div class="actie-info">
            <h2 class="actie-title"><?php echo $event['title']?></h2>
            <p class="actie-date"><?php echo date_format($eventDate, 'd/m');?></p>
            <p class="actie-city"><?php echo $event['city']?></p>
          </div>
          </a>
        </section>
      <?php endforeach;?>
      <a href="index.php?page=actie" class="button actie-button"> Zoek meer acties</a>
    </div>
  </section>
  <section class="organiseer">
    <div class="organiseer-content center">
      <div class="organiseer-info">
        <h1 class="organiseer-title">organiseer zelf je eigen actie</h1>
        <p class="text"> De Week van de Mobiliteit zet Vlaanderen #goedopweg in de dagdagelijkse verplaatsingen. Meer dan 1.500 acties en initiatieven geven het brede publiek tussen 16 en 22 september een duwtje in de rug om stil te staan bij ons mobiliteitsgedrag en mee(r) te autominderen. De Week is hét moment om de gewoontes te doorbreken en de voordelen te ervaren.</p>
        <a href="#" class="button organiseer-button">Start het organiseren</a>
      </div>
      <img src="assets/images/icons/start-blue.svg" alt="start icon" width="636" height="262" class="organiseer-img">
    </div>
  </section>
  <section class="nieuws">
    <div class="nieuws-content center">
      <h1 class="nieuws-title">Nieuws</h1>
      <p class="nieuws-subtitle">#weekvdmobiliteit</p>
      <article class="nieuws-article">
        <h2 class="title nieuws-article-title">Car Free Day: ‘Zelfs files zijn minder irritant als je carpoolt!’</h2>
        <picture class="nieuws-article-img">
          <source type="image/webp" srcset="assets/images/photos/CAR1.webp"/>
          <img src="assets/images/photos/CAR1.jpg" alt="car free nieuws img" width="1200" height="800" class="nieuws-article-img">
        </picture>
        <p class="text nieuws-article-text"> Neem je op 21 september deel aan Car Free Day? Fantastisch! Rest je alleen nog de keuze te maken uit dat mooie aanbod aan duurzame vervoersmiddelen: fiets, trein, bus, tram,... Of waarom niet eens carpoolen met een collega? Melissa, werkneemster bij Eandis in het Guldensporenpark te Merelbeke, is een overtuigd carpoolster. Ze carpoolt twee dagen per week met collega Karlien Waeremoes. Waarom? Dat lees je hier! </p>
        <a href="#" class="nieuws-article-button">lees meer</a>
      </article>
      <article class="nieuws-article no-mobile">
        <h2 class="title nieuws-article-title">Voordelige dagpas De Lijn tijdens #WeekvdMobiliteit</h2>
        <picture class="nieuws-article-img">
          <source type="image/webp" srcset="assets/images/photos/ANT3.webp"/>
          <img src="assets/images/photos/ANT3.jpg" alt="car free nieuws img" width="1200" height="800" class="nieuws-article-img">
        </picture>
        <p class="text nieuws-article-text"> De Lijn ondersteunt ook dit jaar de week van de Mobiliteit door wie mee(r) wil autominderen een voordelige dagpas aan te bieden. Met een dagpas kan je onbeperkt reizen met de bussen en trams van De Lijn. Kinderen (6 tot en met 11 jaar) kunnen genieten van het voordeeltarief van €3, volwassenen betalen € 4.</p>
        <a href="#" class="nieuws-article-button">lees meer</a>
      </article>
    </div>
  </section>
</main>
