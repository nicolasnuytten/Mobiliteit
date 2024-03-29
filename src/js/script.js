{
  const button = document.querySelector(`.specialday-button`);
  const $searchInput = document.querySelector(`.filter-search`);
  const $postcodeInput = document.querySelector(`.filter-postcode`);
  const $dateInput = document.querySelector(`.filter-date`);
  const $actieGrid = document.querySelector(`.actie-grid`);

  const parsePosition = ({coords}) => {
    getAddress(coords);
  };

  const parseAddress = ({display_name: location}) => {
    setInfo(location);
  };

  const getAddress = ({latitude: lat, longitude: lon}) => {
    fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lon}`)
      .then(r => r.json())
      .then(parseAddress);
  };

  const setInfo = message => {
    console.log(message);
    const numb = message.replace(/\D/g, ``);
    if (message) {
      console.log(numb);
      button.href = `index.php?page=actie&postcode=${numb}`;
      button.textContent = `Bekijk acties in jouw buurt`;
    }
  };

  const handleGeolocation = () => {
    if (`geolocation` in navigator) {
      button.href = `index.php?page=actie&search=auto`;
      button.textContent = `Bekijk autoloze acties`;
      navigator.geolocation.getCurrentPosition(parsePosition);
      // button.textContent = `Locatie ophalen...`;
    } else {
      button.textContent = `Locatie is niet ondersteunt`;
    }
  };

  const handleInputSearch = () => {
    const q = $searchInput.value.trim();
    console.log(q);
    if (q.length >= 0) {
      fetch(`index.php?page=actie&search=${q}`, {
        headers: new Headers({
          Accept: `application/json`
        })
      })
        .then(r => r.json())
        .then(data => parse(data));
    }
  };

  const handleInputPostcode = () => {
    const p = $postcodeInput.value.trim();
    console.log(p);
    if (p.length >= 0) {
      fetch(`index.php?page=actie&postcode=${p}`, {
        headers: new Headers({
          Accept: `application/json`
        })
      })
        .then(r => r.json())
        .then(data => parse(data));
    }
  };

  const handleInputDate = () => {
    console.log($dateInput.value);
    const d = $dateInput.value.trim();
    let time = new Date(d);
    let day;
    if (time.getDate() < 10) {
      day = `0${time.getDate()}`;
    } else {
      day = `${time.getDate()}`;
    }
    time = `${time.getFullYear()}-0${time.getMonth() + 1}-${day}`;
    if (d.length >= 0) {
      fetch(`index.php?page=actie&date=${time}`, {
        headers: new Headers({
          Accept: `application/json`
        })
      })
        .then(r => r.json())
        .then(data => parse(data));
    }
  };


  const parse = results => {
    $actieGrid.innerHTML = results
      .map(actie => createProductItem(actie))
      .join(``);

    if (results.length === 0) {
      const $error = document.createElement(`p`);
      $error.classList.add(`error`);
      $error.textContent = `Geen resultaten gevonden. Probeer eens iets anders...`;
      $actieGrid.appendChild($error);
    }
  };

  const createProductItem = actie => {
    let date = new Date(actie.start);
    date = `${date.getDate()}/0${date.getMonth() + 1}`;
    return `
      <section class="actie">
        <a href="index.php?page=detail&amp;id=${actie.id}" class="actie-link">
          <picture >
            <source type="image/webp" srcset="assets/images/photos/${actie.code}.webp"/>
            <img src="assets/images/photos/${actie.code}.jpg" alt="${actie.title} img" width="2048" height="1536" class="actie-img">
          </picture>
          <div class="overlay"></div>
          <div class="actie-info">
        <h2 class="actie-title">${actie.title}</h2>
        <p class="actie-date">${date}</p>
        <p class="actie-city">${actie.city}</p>
      </div>
      </a>
    </section>`;
  };

  const init = () => {
    if (button) {
      handleGeolocation();
    }
    if ($searchInput) {
      $searchInput.addEventListener(`input`, handleInputSearch);
    } if ($postcodeInput) {
      $postcodeInput.addEventListener(`input`, handleInputPostcode);
    } if ($dateInput) {
      $dateInput.addEventListener(`input`, handleInputDate);
    }
  };

  init();
}
