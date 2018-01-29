<main class="zebrapad">
  <form class="filter" action="index.php?page=actie" method="post">
    <label for="search" class="filter-label">Zoeken:<input id="search" type="text" name="search" value="" placeholder="Titel..." class="filter-input filter-search"></label>
    <label for="postcode" class="filter-label">Postcode:<input id="postcode" type="number" name="postcode" value="" placeholder="Postcode..." class="filter-input filter-postcode"></label>
    <label for="date" class="filter-label">Datum:<input id="date" type="date" name="date" value="" class="filter-date" min="2018-09-09" max="2018-09-22"></label>
    <input type="submit" name="submit" value="Zoeken" class="button filter-submit">
  </form>
  <!-- <section class="filter-tag">
    <ul class="tag-list">
      <?php foreach ($tags as $tag):?>
        <li class="tag-item"><?php echo $tag['tag'];?></li>
      <?php endforeach;?>
    </ul>
  </section> -->
  <section class="home-acties no-margin">
<div class="home-acties-content center actie-grid">
  <h1 class="title acties-title">Acties</h1>
  <?php if(empty($events)){
    echo '<p class="error"> Geen resultaten gevonden, probeer eens opnieuw...</p>';
  }?>
  <?php foreach ($events as $event):
    $eventDate = date_create($event['start']); ?>
    <section class="actie">
      <a href="index.php?page=detail&amp;id=<?php echo $event['id']?>" class="actie-link">
        <picture >
          <source type="image/webp" srcset="assets/images/photos/<?php echo $event['code'] ;?>.webp"/>
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
  <?php endforeach;?></div>
  </section>
</main>
