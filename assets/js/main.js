//* Navbar Collapse JS
const navbar = document.querySelector(".navbar");
navbar.querySelector(".toggle").addEventListener("click", () => {
  navbar.classList.toggle("collapsed");
  document.body.classList.toggle("ovY");
});

window.jQuery ||
  document.write(
    '<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>'
  );

let currentUrl = document.location.href;
let header = document.getElementById("navbar");
let btns = header.getElementsByClassName("link_navbar");
for (let i = 0; i < btns.length; i++) {
  if (currentUrl.includes(btns[i].children[0].pathname)) {
    btns[i].children[0].classList.add("active");
  }
}

//* PAGE ACCUEIL
if ($("body").data("title") === "js_index") {
  //* JS POUR MODAL "THEME"
  // Id du modal général
  let modalTheme = document.getElementById("modal_theme");

  // Button vue en semaine
  let btnTheme = document.getElementById("theme_btn");

  // Bouton fermeture
  let spanClose = document.getElementsByClassName("close")[0];

  // Sur le click, ouverture du modal, cacher le planning de base et bloquer le scroll
  btnTheme.onclick = function () {
    modalTheme.style.display = "block";
    document.body.style.overflowY = "hidden";
  };

  // Sur le click, fermeture du modal
  spanClose.onclick = function () {
    modalTheme.style.display = "none";
    document.body.style.overflowY = "visible";
  };

  // Sur un click exterieur, fermeture du modal
  window.onclick = function (event) {
    if (event.target == modalTheme) {
      modalTheme.style.display = "none";
      document.body.style.overflowY = "visible";
    }
  };

  //* JS POUR MODAL "A PROPOS"
  // Id du modal général
  let modalAbout = document.getElementById("modal_about");

  // Button vue en semaine
  let btnAbout = document.getElementById("about_btn");

  // Bouton fermeture
  let spanAbout = document.getElementsByClassName("close")[0];

  // Sur le click, ouverture du modal, cacher le planning de base et bloquer le scroll
  btnAbout.onclick = function () {
    modalAbout.style.display = "block";
    document.body.style.overflowY = "hidden";
  };

  // Sur le click, fermeture du modal
  spanAbout.onclick = function () {
    modalAbout.style.display = "none";
    document.body.style.overflowY = "visible";
  };

  // Sur un click exterieur, fermeture du modal
  window.onclick = function (event) {
    if (event.target == modalAbout) {
      modalAbout.style.display = "none";
      document.body.style.overflowY = "visible";
    }
  };

  //* JS POUR CAROUSEL ACCUEIL
  $(".videos-carousel").owlCarousel({
    center: true,
    items: 3,
    loop: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      680: {
        items: 2,
        nav: false,
      },
      1000: {
        items: 3,
        nav: false,
      },
    },
  });
}
//* Page SESSIONS
//* Gallery Filter
if ($("body").data("title") === "js_sessions") {
  let sortBtn = document.querySelector(".gallery_filters").children;
  let sortItem = document.querySelector(".gallery_videos").children;

  for (let i = 0; i < sortBtn.length; i++) {
    sortBtn[i].addEventListener("click", function () {
      for (let j = 0; j < sortBtn.length; j++) {
        sortBtn[j].classList.remove("current");
      }

      this.classList.add("current");

      let targetData = this.getAttribute("data-cat");

      for (let k = 0; k < sortItem.length; k++) {
        sortItem[k].classList.remove("active");
        sortItem[k].classList.add("delete");

        if (
          sortItem[k].getAttribute("data-item") == targetData ||
          targetData == "all"
        ) {
          sortItem[k].classList.remove("delete");
          sortItem[k].classList.add("active");
        }
      }
    });
  }
}
//* PAGE ACTIVITES
if ($("body").data("title") === "js_activites") {
  //* JS POUR MODAL "ACTIVITES"
  // Button Randonnée
  let btnActivite = document.querySelectorAll(".acti");
  // Id du modal général
  let modalActivite = document.querySelectorAll(".modal");
  // Bouton fermeture
  let spanCloseBtn = document.querySelectorAll(".close");

  console.log(spanCloseBtn);

  for (let i = 0; i < btnActivite.length; i++) {
    // Sur le click, ouverture du modal, cacher le planning de base et bloquer le scroll
    btnActivite[i].onclick = function () {
      if (
        btnActivite[i].dataset["activite"] ==
        modalActivite[i].dataset["activite"]
      ) {
        modalActivite[i].style.display = "flex";
        document.body.style.overflowY = "hidden";
      }
    };

    // Sur le click, fermeture du modal
    spanCloseBtn[i].onclick = function () {
      modalActivite[i].style.display = "none";
      document.body.style.overflowY = "visible";
    };
  }
}
//* PAGE PROGRAMME

if ($("body").data("title") === "js_programme") {
  //* Indicateur scroll JS
  function hideIndicator() {
    document.getElementById("scroll_indic").style.display = "none";
  }

  //* JS POUR MODAL "VUE EN SEMAINE"
  // Id du modal général
  let modal = document.getElementById("modal");

  // Button vue en semaine
  let btnView = document.getElementById("week_view");

  // Bouton fermeture
  let span = document.getElementsByClassName("close")[0];

  // Sur le click, ouverture du modal, cacher le planning de base et bloquer le scroll
  btnView.onclick = function () {
    modal.style.display = "block";
    document.getElementById("day_calendar").style.visibility = "hidden";
    document.body.style.overflowY = "hidden";
  };

  // Sur le click, fermeture du modal
  span.onclick = function () {
    modal.style.display = "none";
    document.getElementById("day_calendar").style.visibility = "visible";
    document.body.style.overflowY = "visible";
  };

  // Sur un click exterieur, fermeture du modal
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
      document.getElementById("day_calendar").style.visibility = "visible";
      document.body.style.overflowY = "visible";
    }
  };

  //* Génération des calendriers

  //* Calendrier "Day"
  const dp = new DayPilot.Calendar("dp", {
    viewType: "Day",
    locale: "fr-fr",
    startDate: "2023-05-22",
    endDate: "2023-05-26",
    headerDateFormat: "dddd",
    eventMoveHandling: "Disabled",
    columnMarginRight: "0",
  });

  //* Calendrier "Week"
  const dpWeek = new DayPilot.Calendar("modal_calendar", {
    viewType: "Week",
    locale: "fr-fr",
    startDate: "2023-05-22",
    endDate: "2023-05-26",
    headerDateFormat: "dddd",
    eventMoveHandling: "Disabled",
    columnMarginRight: "0",
  });

  //* Génération init
  dp.init();

  dpWeek.init();

  //* Événements présents sur le calendrier
  const events = [
    //* LUNDI 22
    {
      start: "2023-05-22T19:00:00",
      end: "2023-05-22T20:00:00",
      id: 1,
      text: "Accueil des participants",
      backColor: "#E3BF00",
      barColor: "#E3BF00",
    },
    {
      start: "2023-05-22T20:00:00",
      end: "2023-05-22T22:00:00",
      id: 1,
      text: "Dîner",
      backColor: "#2A7905",
      barColor: "#2A7905",
    },

    //* MARDI 23
    {
      start: "2023-05-23T08:00:00",
      end: "2023-05-23T09:00:00",
      id: 1,
      text: "Accueil des participants",
      backColor: "#E3BF00",
      barColor: "#E3BF00",
    },
    {
      start: "2023-05-23T09:00:00",
      end: "2023-05-23T10:00:00",
      id: 1,
      text: "Présentation du conférencier 1",
      backColor: "#053379",
      barColor: "#053379",
    },
    {
      start: "2023-05-23T10:00:00",
      end: "2023-05-23T11:00:00",
      id: 1,
      text: "3D",
      backColor: "#F48657",
      barColor: "#F48657",
    },
    {
      start: "2023-05-23T11:00:00",
      end: "2023-05-23T12:00:00",
      id: 1,
      text: "Pause + Classification",
      backColor: "#F48657",
      barColor: "#F48657",
    },
    {
      start: "2023-05-23T12:00:00",
      end: "2023-05-23T14:00:00",
      id: 1,
      text: "Déjeuner",
      backColor: "#2A7905",
      barColor: "#2A7905",
    },
    {
      start: "2023-05-23T14:00:00",
      end: "2023-05-23T15:00:00",
      id: 1,
      text: "Présentation du conférencier 2",
      backColor: "#053379",
      barColor: "#053379",
    },
    {
      start: "2023-05-23T15:00:00",
      end: "2023-05-23T16:00:00",
      id: 1,
      text: "Détéction et Classification",
      backColor: "#F48657",
      barColor: "#F48657",
    },
    {
      start: "2023-05-23T16:00:00",
      end: "2023-05-23T16:30:00",
      id: 1,
      text: "Pause + Robotique",
      backColor: "#F48657",
      barColor: "#F48657",
    },
    {
      start: "2023-05-23T17:30:00",
      end: "2023-05-23T18:30:00",
      id: 1,
      text: "Télédétection",
      backColor: "#F48657",
      barColor: "#F48657",
    },
    {
      start: "2023-05-23T20:00:00",
      end: "2023-05-23T22:00:00",
      id: 1,
      text: "Dîner",
      backColor: "#2A7905",
      barColor: "#2A7905",
    },

    //*MERCREDI 24
    {
      start: "2023-05-24T09:00:00",
      end: "2023-05-24T10:00:00",
      id: 1,
      text: "Présentation du conférencier 3",
      backColor: "#053379",
      barColor: "#053379",
    },
    {
      start: "2023-05-24T10:00:00",
      end: "2023-05-24T11:00:00",
      id: 1,
      text: "Géométrie",
      backColor: "#F48657",
      barColor: "#F48657",
    },
    {
      start: "2023-05-24T11:00:00",
      end: "2023-05-24T12:00:00",
      id: 1,
      text: "Pause + Appariement",
      backColor: "#F48657",
      barColor: "#F48657",
    },
    {
      start: "2023-05-24T12:00:00",
      end: "2023-05-24T14:00:00",
      id: 1,
      text: "Déjeuner",
      backColor: "#2A7905",
      barColor: "#2A7905",
    },
    {
      start: "2023-05-24T14:00:00",
      end: "2023-05-24T15:00:00",
      id: 1,
      text: "Présentation du conférencier 4",
      backColor: "#053379",
      barColor: "#053379",
    },
    {
      start: "2023-05-24T15:00:00",
      end: "2023-05-24T19:00:00",
      id: 1,
      text: "Activités",
      backColor: "#af2842",
      barColor: "#af2842",
    },
    {
      start: "2023-05-24T20:00:00",
      end: "2023-05-24T22:00:00",
      id: 1,
      text: "Dîner",
      backColor: "#2A7905",
      barColor: "#2A7905",
    },
    //*JEUDI 25
    {
      start: "2023-05-25T09:00:00",
      end: "2023-05-25T09:30:00",
      id: 1,
      text: "Présentation du conférencier 5",
      backColor: "#053379",
      barColor: "#053379",
    },
    {
      start: "2023-05-25T10:00:00",
      end: "2023-05-25T11:00:00",
      id: 1,
      text: "Apprentissage profond",
      backColor: "#F48657",
      barColor: "#F48657",
    },
    {
      start: "2023-05-25T11:00:00",
      end: "2023-05-25T12:00:00",
      id: 1,
      text: "Pause + Apprentissage profond",
      backColor: "#F48657",
      barColor: "#F48657",
    },
    {
      start: "2023-05-25T12:00:00",
      end: "2023-05-25T14:00:00",
      id: 1,
      text: "Déjeuner",
      backColor: "#2A7905",
      barColor: "#2A7905",
    },
    {
      start: "2023-05-25T14:00:00",
      end: "2023-05-25T16:00:00",
      id: 1,
      text: "Présentation du conférencier 6, Poster",
      backColor: "#F48657",
      barColor: "#F48657",
    },
    {
      start: "2023-05-25T16:00:00",
      end: "2023-05-25T17:00:00",
      id: 1,
      text: "Pause + Imagerie médicale",
      backColor: "#F48657",
      barColor: "#F48657",
    },
    {
      start: "2023-05-25T17:00:00",
      end: "2023-05-25T18:00:00",
      id: 1,
      text: "Poster",
      backColor: "#F48657",
      barColor: "#F48657",
    },
    {
      start: "2023-05-25T20:00:00",
      end: "2023-05-25T22:00:00",
      id: 1,
      text: "Gala de clôture",
      backColor: "#2A7905",
      barColor: "#2A7905",
    },

    //*VENDREDI 26
    {
      start: "2023-05-26T09:00:00",
      end: "2023-05-26T10:00:00",
      id: 1,
      text: "Présentation du conférencier 7",
      backColor: "#053379",
      barColor: "#053379",
    },
    {
      start: "2023-05-26T10:00:00",
      end: "2023-05-26T11:00:00",
      id: 1,
      text: "Signal",
      backColor: "#F48657",
      barColor: "#F48657",
    },
    {
      start: "2023-05-26T11:00:00",
      end: "2023-05-26T12:00:00",
      id: 1,
      text: "Gala d'ouverture + Appariement",
      backColor: "#F48657",
      barColor: "#F48657",
    },
    {
      start: "2023-05-26T12:00:00",
      end: "2023-05-26T14:00:00",
      id: 1,
      text: "Déjeuner",
      backColor: "#2A7905",
      barColor: "#2A7905",
    },
    {
      start: "2023-05-26T14:00:00",
      end: "2023-05-26T15:00:00",
      id: 1,
      text: "Départ",
      backColor: "#af2842",
      barColor: "#af2842",
    },
  ];
  //* MAJ DES CALENDRIERS
  dp.update({
    events,
  });

  dpWeek.update({
    events,
  });

  //* Function pour changer de date
  let btnDates = document.querySelector(".num-dates").children;
  let numDate = document.getElementById("num_date");
  let labelDate = document.getElementById("label_date");

  //* Clear des indicateurs de dates
  function clearDate() {
    numDate.innerHTML = "";
    labelDate.innerHTML = "";
  }

  //* Function final pour le changement visuel/back
  function changeDate(v, i) {
    clearDate();
    numDate.innerHTML = v;
    labelDate.innerHTML = i;
    for (let k = 0; k < btnDates.length; k++) {
      btnDates[k].classList.remove("active_date");
    }
    let btnId = document.getElementById(i);
    btnId.classList.add("active_date");
    dp.startDate = `2023-05-${v}`;
    dp.update();
  }
}

//* PAGE COMPTE PERSO
if ($("body").data("title") === "js_compte") {
  // Button Randonnée
  let btnVertical = document.querySelectorAll(".v_link");
  let containerCat = document.querySelectorAll(".categ");

  console.log(btnVertical);
  console.log(containerCat);
  for (let i = 0; i < btnVertical.length; i++) {
    // Sur le click, ouverture du modal, cacher le planning de base et bloquer le scroll
    btnVertical[i].onclick = function () {
      if (
        btnVertical[i].dataset["btncat"] == containerCat[i].dataset["categorie"]
      ) {
        $(".v_link").removeClass("vertical_active");
        $(".categ").hide();
        btnVertical[i].classList.add("vertical_active");
        containerCat[i].style.display = "block";
      }
    };
  }

  //* JS POUR MODIFICATION MODAL
  function ReAssign(name, prenom, email) {
    document.getElementById("new_nom").value = name;
    document.getElementById("new_prenom").value = prenom;
    document.getElementById("new_email").value = email;
    document.getElementById("modal").style.display = "block";

    // Bouton fermeture
    let spanModif = document.getElementsByClassName("close")[0];

    // Sur le click, fermeture du modal
    spanModif.onclick = function () {
      document.getElementById("modal").style.display = "none";
    };
  }

  //* JS POUR FILTRE
  function searchByname() {
    // Declare variables
    let input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("filter_input");
    filter = input.value.toUpperCase();
    table = document.getElementById("table");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
}
