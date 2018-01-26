<main class="zebrapad">
  <form class="filter" action="" method="post">
    <label for="date" class="filter-label">Zoeken:<input type="text" name="search" value="" placeholder="Titel, tags, organisators..." class="filter-input filter-search"></label>
    <label for="postcode" class="filter-label">Postcode:<input type="number" name="postcode" value="" placeholder="Postcode..." class="filter-input filter-postcode"></label>
    <label for="date" class="filter-label">Datum:<input type="date" name="date" value="" class="filter-date" min="2018-09-09" max="2018-09-24" value="Datum" placeholder="Datum"></label>
    <input type="submit" name="submit" value="Zoeken" class="button filter-submit">
  </form>
  <section class="home-acties no-margin">
    <h1 class="title acties-title">Acties</h1>
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
  </section>
</main>
