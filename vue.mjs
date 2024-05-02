import App from "./Vue/App.vue";
// const App = require('./Vue/App.vue')
console.log("App:", App);
const { createApp } = Vue;
createApp({
  data() {
    return {
      message: "HI!",
    };
  },
}).mount("#app");
