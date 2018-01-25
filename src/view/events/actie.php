<section>
    <?php foreach ($events as $event):?>
    <article>
      <header><h2><?php echo $event['title']; ?></h2></header>
      <dl>
        <dt>city</dt><dd><?php echo $event['city'];?></dd>
        <dt>start</dt><dd><?php echo $event['start'];?></dd>
      </dl>
    </article>
    <?php endforeach ?>
</section>
