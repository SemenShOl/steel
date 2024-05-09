export function footerVue() {
  new Vue({
    el: ".top-part__contacts",
    data: () => ({
      chosenPlace: {
        city: "Новосибирск",
        adress: "Самовывоз: г. Новосибирск, ул Станционная 30",
        email: "nsk@steel-n.ru",
        phone: ["+73832427076", "+79628288777"],
      },
    }),
    methods: {
      handleLocalStorage(event) {
        this.chosenPlace = JSON.parse(localStorage.getItem("place"));
      },
    },
    mounted() {
      console.log("Footer mounted");
      this.chosenPlace = JSON.parse(localStorage.getItem("place"));

      window.addEventListener("storage-change", this.handleLocalStorage);
    },
    beforeDestroy() {
      window.removeEventListener("storage-change", this.handleLocalStorage);
    },
  });
}
