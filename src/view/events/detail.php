<main>
  <section class="detail-container">
      <!-- <nav>
        <a href="index.php?page=actie" class="button detail-back">Terug</a>
      </nav> -->
      <article class="detail zebrapad">
        <?php $eventDateStart = date_create($event['start']);
          $eventDateEnd = date_create($event['end']); ?>
          <h1 class="title detail-header-title"><?php echo $event['title']; ?></h1>
          <header class="detail-header">
            <section class="detail-header-info">
              <picture>
                <source type="image/webp" srcset="assets/images/photos/<?php echo $event['code'] ?>.webp"/>
                <img src="assets/images/photos/<?php echo $event['code'];?>.jpg" alt="<?php echo $event['code'] ;?>" class="detail-header-img">
              </picture>
              <div class="detail-header-info-container">
                <p class="detail-header-subtitle"><?php echo $event['city'] ;?></p>
                <p class="detail-header-text"><?php echo $event['location'] ;?></p>
              </div>
              <div class="detail-header-info-container">
                <p class="detail-header-subtitle">
                  <?php
                  // var_dump(date_format($eventDateStart, 'd'));
                  // var_dump(date_format($eventDateEnd, 'd'));
                  if(date_format($eventDateStart, 'd') == date_format($eventDateEnd, 'd')){
                    echo date_format($eventDateStart, 'd/m');
                  }
                  else {
                    echo date_format($eventDateStart, 'd/m');?> - <?php echo date_format($eventDateEnd, 'd/m');
                  }?></p>
                <p class="detail-header-text"><?php echo date_format($eventDateStart, 'h:i');?> - <?php echo date_format($eventDateEnd, 'h:i');?></p>
              </div>
            </section>
          </header>
            <section class="detail-info">
              <h2 class="detail-info-title title">Informatie</h2>
              <section class="detail-info-text"><?php echo $event['content'] ;?></section>
              <aside class="detail-aside">
                <section class="detail-tags">
                  <h3 class="title">Tags</h3>
                  <ul class="tag-list">
                    <?php foreach($event['tags'] as $tag): ?><li><?php echo $tag['tag'];?></li><?php endforeach;?>
                  </ul>
                </section>
                <section class="detail-map">
                  <a class="detail-map-link" target="_blank" href="https://www.google.com/maps/dir/?api=1&destination=<?php echo $event['location'] . '+' . $event['city'] . '+' . 'Beglie';?>">Bekijk de route</a>
                </section>
                <section class="detail-links">
                  <a href="#"><img src="assets/images/icons/facebook.svg" alt="facebook icon" width="48" height="48" class="link-item"></a>
                  <a href="#"><img src="assets/images/icons/twitter.svg" alt="twitter icon" width="48" height="42" class="link-item"></a>
                  <a href="<?php echo $event['link'];?>"><img src="assets/images/icons/web.svg" alt="" width="48" height="48" class="link-item"></a>
                </section>
              </aside>
              <section class="detail-praktisch">
                <?php if(!empty($event['practical'])):?>
                  <h2 class="detail-info-title title">Praktisch</h2>
                  <section class="detail-info-text"><?php echo $event['practical'] ;?></section>
                <?php endif?>
              </section>
              <section class="detail-organisators">
                <h3 class="title">Organistators</h3>
                <ul>
                  <?php foreach($event['organisers'] as $organiser): ?><li><?php echo $organiser['name'];?></li>
                  <?php endforeach;?>
                </ul>
              </section>
      </article>
      <section class="home-acties">
        <div class="home-acties-content center">
        <h1 class="home-acties-title">Alternative acties</h1>
          <?php foreach ($events as $event):
            $eventDate = date_create($event['start']); ?>
            <section class="actie home-actie detail-actie">
            <a href="index.php?page=detail&id=<?php echo $event['id']?>" class="actie-link">
            <picture >
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
      </div>
      </section>
  </section>
</main>
