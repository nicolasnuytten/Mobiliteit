<main>
  <section class="banner">
    <h1 class="banner-title">week van <br> de mobiliteit</h1>
    <p class="banner-date">16 - 22 september</p>
    <p class="banner-hashtag">#goedopweg</p>
  </section>
  <article class="intro">
    <img src="assets/images/photos/intro-img.jpg" alt="intro img" width="960" height="480" class="intro-img">
    <div>
      <h1 class="title"> Wat is week van de mobiliteit?</h1>
      <p class="text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <section class="intro-stats">
      <h2 class="stats-title">2017 in cijfers:</h2>
      <div class="stats-info">
        <img src="assets/images/icons/world-blue.png" alt="world icon" width="" height="" class="stats-img">
        <p class="stats-text">2526 steden</p>
      </div>
      <div class="stats-info">
        <img src="assets/images/icons/leaf-blue.png" alt="leaf icon" width="" height="" class="stats-img">
        <p class="stats-text">670 acties</p>
      </div>
      <div class="stats-info">
        <img src="assets/images/icons/nocar-blue.png" alt="nocar icon" width="" height="" class="stats-img">
        <p class="stats-text">1352 car free day</p>
      </div>
    </section>
  </article>
  <article class="specialday">
      <h1 class="specialday-title"> Autoloze Zondag</h1>
      <img src="assets/images/photos/specialday.jpg" alt="specialday img" width="4256" height="2832" class="specialday-img">
      <div class="specialday-info">
        <p class="text specialday-text">Autoloze zondag is een speciale dag voor heel Europa. Op deze dag worden centra van steden en gemeten afgesloten voor auto’s. Bijvoorbeeld in Brussel kan je gaan rond fietsen op de straat of door de tunnels waar je normaal met de auto zou rijden. Natuurlijk zijn er op deze plaatsen verschillende andere acties gepland rond deze week van de mobiliteit.</p>
        <a href="#" class="button specialday-button">Bekijk het in jouw buurt</a>
        <!-- Als geolocation niet lukt moet je een input voor postcode zetten -->
    </div>
  </article>
  <section class="home-acties">
    <h1 class="home-acties-title">Acties</h1>
      <?php foreach ($events as $event):
        $eventDate = date_create($event['start']); ?>
        <section class="actie">
        <a href="index.php?page=detail&id=<?php echo $event['id']?>" class="actie-link">
        <img src="assets/images/photos/<?php echo $event['code'];?>.jpg" alt="<?php echo $event['title'];?> img" width="2048" height="1536" class="actie-img">
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
  </section>
  <section class="organiseer">
    <div class="organiseer-info">
      <h1 class="organiseer-title">organiseer zelf je eigen actie</h1>
      <p class="text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <a href="#" class="button organiseer-button">Start het organiseren</a>
    </div>
    <img src="assets/images/icons/start-blue.png" alt="start icon" width="636" height="262" class="organiseer-img">
  </section>
  <section class="nieuws">
    <h1 class="nieuws-title">Nieuws</h1>
    <p class="nieuws-subtitle">#weekvdmobiliteit</p>
    <article class="nieuws-article">
      <h2 class="title nieuws-article-title">Studio Brussel lanceert nieuwe namen voor ‘Car Free Festival’.</h2>
      <img src="assets/images/photos/nieuws-carfree.jpg" alt="car free nieuws img" width="1200" height="800" class="nieuws-article-img">
      <p class="text nieuws-article-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <a href="#" class="nieuws-article-button">lees meer</a>
    </article>
    <article class="nieuws-article no-mobile">
      <h2 class="title nieuws-article-title">Autodeelsalon bedrijf 'Poppy' steeds populairder in Antwerpen.</h2>
      <img src="assets/images/photos/ANT2.jpg" alt="car free nieuws img" width="1200" height="800" class="nieuws-article-img">
      <p class="text nieuws-article-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <a href="#" class="nieuws-article-button">lees meer</a>
    </article>
  </section>
</main>
