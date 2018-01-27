{
  const $searchInput = document.querySelector(`[name="search"]`);
  const $actieGrid = document.querySelector(`.home-acties`);

  const init = () => {
    $searchInput.addEventListener(`input`, handleInputSearch);
  };

  const handleInputSearch = () => {
    const q = $searchInput.value.trim();
    console.log(q);
    if (q.length > 0) {
      fetch(`index.php?page=acite&search=${q}`, {
        headers: new Headers({
          Accept: `application/json`
        })
      })
        .then(r => r.json())
        .then(data => parse(data));
    }
  };

  const parse = results => {
    console.log(results);
    $actieGrid.innerHTML = results
      .map(actie => createProductItem(actie))
      .join(``);
  };

  const createProductItem = actie => {
    return `<section class="actie">
            <a href="index.php?page=detail&amp;id="${actie.id}" class="actie-link">
              <img src="assets/images/photos/${actie.code}.jpg" alt="${actie.title} img" class="actie-img">
              <div class="overlay"></div>
              <div class="actie-info">
            <h2 class="actie-title">${actie.title}</h2>
            <p class="actie-date"><?php echo date_format($eventDate, 'd/m');?></p>
            <p class="actie-city">${actie.city}</p>
          </div>
          </a>
        </section>`;
  };

  init();
}
