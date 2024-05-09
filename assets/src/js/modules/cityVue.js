export function cityVue() {
  Vue.component("blue-part", {
    template: "#blue-part",
    data: () => ({
      places: [
        {
          city: "Новосибирск",
          adress: "Самовывоз: г. Новосибирск, ул Станционная 30",
          email: "nsk@steel-n.ru",
          phone: ["+73832427076", "+79628288777"],
        },
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
        city: "Новосибирск",
        adress: "Самовывоз: г. Новосибирск, ул Станционная 30",
        email: "nsk@steel-n.ru",
        phone: ["+73832427076", "+79628288777"],
      },
    }),
    methods: {
      changePlace(place) {
        this.chosenPlace = place;
      },
    },
  });
  Vue.component("vue-city", {
    template: "#component-city",
    props: ["places", "chosenPlace", "changePlace"],
    data: () => ({}),
  });
  Vue.component("vue-adress", {
    template: "#component-adress",
    props: ["chosenPlace"],
    data: () => ({}),
  });

  Vue.component("white-part", {
    template: "#white-part",
    data: () => ({}),
  });

  new Vue({
    el: ".header-top",
    data: () => ({
      places: [
        {
          city: "Новосибирск",
          adress: "Самовывоз: г. Новосибирск, ул Станционная 30",
          email: "nsk@steel-n.ru",
          phone: ["+73832427076", "+79628288777"],
        },
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
        city: "Новосибирск",
        adress: "Самовывоз: г. Новосибирск, ул Станционная 30",
        email: "nsk@steel-n.ru",
        phone: ["+73832427076", "+79628288777"],
      },
    }),
    methods: {
      changePlace(place) {
        this.chosenPlace = place;
        localStorage.setItem("place", JSON.stringify(place));

        window.dispatchEvent(window.localStorageChangeEvent);
      },
    },
    mounted() {
      console.log("Component city mounted");
      localStorage.setItem("place", JSON.stringify(this.places[0]));
      window.localStorageChangeEvent = new Event("storage-change");
    },
  });
}
