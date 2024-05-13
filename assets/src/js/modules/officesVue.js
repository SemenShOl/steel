export function officesVue() {
  new Vue({
    el: ".other-cities",
    data: () => ({
      places: [
        {
          city: "Омск",
          adress: "Самовывоз: г. Омск, ул.10 лет Октября, д. 217к2",
          email: "omsk@steel-n.ru",
          phone: ["+73812678689"],
        },
        {
          city: "Томск",
          adress: "Самовывоз: г. Томск, ул. Пушкина, д. 63, стр. 10",
          email: "tomsk@steel-n.ru",
          phone: ["+73822489536"],
        },
        {
          city: "Новокузнецк",
          adress: "Самовывоз: г. Новокузнецк, ул. Музейная, д. 9",
          email: "novokuznetsk@steel-n.ru",
          phone: ["+73843348845"],
        },
        {
          city: "Кемерово",
          adress: "Самовывоз: г. Кемерово, ул. Волгоградская, д. 49Б",
          email: "kemerovo@steel-n.ru",
          phone: ["+73842777520"],
        },
        {
          city: "Барнаул",
          adress: "Самовывоз: г. Барнаул, ул. Попова, 179 Б",
          email: "barnaul@steel-n.ru",
          phone: ["+73852552584"],
        },
        {
          city: "Красноярск",
          adress:
            "Самовывоз: г. Красноярск, ул. Северное шоссе, д. 5г, стр. 26/1",
          email: "krasnoyarsk@steel-n.ru",
          phone: ["+73919897995"],
        },
        {
          city: "Иркутск",
          adress: "Самовывоз: г. Иркутск, ул. Трактовая, д. 18В",
          email: "irkutsk@steel-n.ru",
          phone: ["+73952789108"],
        },
        {
          city: "Хабаровск",
          adress: "Самовывоз: г. Хабаровск, ул. Нефтяная, д. 1",
          email: "khabarovsk@steel-n.ru",
          phone: ["+74212401516"],
        },
        {
          city: "Владивосток",
          adress: "Самовывоз: г. Владивосток, ул. Снеговая, д. 18а, литера 106",
          email: "vladivostok@steel-n.ru",
          phone: ["+74232054748"],
        },
      ],
      chosenPlace: {
        city: "Омск",
        adress: "Самовывоз: г. Омск, ул.10 лет Октября, д. 217к2",
        email: "omsk@steel-n.ru",
        phone: ["+73812678689"],
      },
    }),
    methods: {
      changePlace(place) {
        this.chosenPlace = place;

        //Связать с инфой в хедере
        // localStorage.setItem("place", JSON.stringify(place));
        // window.dispatchEvent(window.localStorageChangeEvent);
      },
      handleLocalStorage(event) {
        this.chosenPlace = JSON.parse(localStorage.getItem("place"));
      },
    },
    mounted() {
      console.log("Offices mounted");
      //   this.chosenPlace = JSON.parse(localStorage.getItem("place"));
      //   window.addEventListener("storage-change", this.handleLocalStorage);
    },
    // beforeDestroy() {
    //   window.removeEventListener("storage-change", this.handleLocalStorage);
    // },
  });
}
