<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <title>Week van de Mobiliteit</title>
    <?php echo $css;?>
    <script>
      WebFontConfig = {
        custom: {
          families: ['Reitam'],
          urls: ['assets/fonts/reitam/reitam.css']
        }
      };
      (function(d) {
        var wf = d.createElement('script'), s = d.scripts[0];
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
      })(document);
    </script>
  </head>
  <body>
    <header class="navigation">
      <div class="nav-content center">
        <a href="index.php" class="home-link"><p class="home-link-text">Week van<br> de Mobiliteit</p></a>
        <nav class="tabbar-nav">
          <ul class="tabbar">
            <li class="tabbar-item">
              <a href="index.php?page=actie" class="item-text">
                <img class="item-img" src="assets/images/icons/calendar.svg" alt="calendar icon" width="166" height="172">
                <p>acties</p>
              </a>
            </li>
            <li class="tabbar-item">
              <a href="index.php?page=organiseren" class="item-text">
                <img class="item-img" src="assets/images/icons/leaf.svg" alt="leaf icon" width="137" height="131">
                <p>organiseren</p>
              </a>
            </li>
            <li class="tabbar-item">
              <a href="index.php?page=nieuws" class="item-text">
                <img class="item-img" src="assets/images/icons/nieuws.svg" alt="nieuws icon" width="152" height="187">
                <p>nieuws</p>
              </a>
            </li>
            <li class="tabbar-item">
              <a href="index.php?page=over" class="item-text">
                <img class="item-img" src="assets/images/icons/info.svg" alt="info icon" width="235" height="235">
                <p>over</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <div class="container">
      <?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
      <?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>
      <?php echo $content; ?>
    </div>
    <footer>
      <div class="footer-content center">
        <h1 class="nieuwsbrief-title">Blijf op de hoogte van het laatste nieuws via onze nieuwsbrief!</h1>
        <form class="nieuwsbrief" action="index.php" method="post">
          <div class="form-inputs">
            <label for="email" class="form-email">Email:
              <input id="email" type="email" name="email" value="" class="form-email-input" placeholder="Vul hier jouw email in...">
            </label>
            <label for="submit">
              <input id="submit" type="submit" name="submit" value="inschrijven" class="form-submit">
            </label>
          </div>
        </form>
        <section class="links">
            <a href="#"><img src="assets/images/icons/facebook.svg" alt="facebook icon" width="32" height="32" class="link-item"></a>
            <a href="#"><img src="assets/images/icons/instagram.svg" alt="instagram icon" width="32" height="32" class="link-item"></a>
            <a href="#"><img src="assets/images/icons/twitter.svg" alt="twitter icon" width="32" height="30" class="link-item"></a>
        </section>
        <section class="language">
            <a href="#" class="language-item active">NL</a>
            <a href="#" class="language-item">FR</a>
        </section>
      </div>
    </footer>
    <?php echo $js;?>
  </body>
</html>
