export function VVue2() {
  Vue.component("white-part", {
    template: "#white-part-v",
    data: () => ({
      message: "Это содержание message из app2",
    }),
  });
  Vue.component("dropdowns", {
    template: "#header-dropdown",
    data() {
      return {
        productTypes: [
          {
            title: "Трубозапорная арматура",
            products: [
              {
                title: "Вентили(клапаны)",
                subProducts: [
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны синие",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны зеленые",
                  },
                ],
              },
              {
                title: "Гайки",
                subProducts: [
                  { ref: "http://project/product-card", title: "Гайки синие" },
                  {
                    ref: "http://project/product-card",
                    title: "Гайки красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Гайки зеленые",
                  },
                ],
              },
              {
                title: "Сетки",
                subProducts: [
                  { ref: "http://project/product-card", title: "Сетки синие" },
                  {
                    ref: "http://project/product-card",
                    title: "Сетки красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Сетки зеленые",
                  },
                ],
              },
            ],
          },
          {
            title: "Детали трубопроводов",
            products: [
              {
                title: "Вентили(клапаны)",
                subProducts: [
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны синие",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны зеленые",
                  },
                ],
              },
              {
                title: "Гайки",
                subProducts: [
                  { ref: "http://project/product-card", title: "Гайки синие" },
                  {
                    ref: "http://project/product-card",
                    title: "Гайки красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Гайки зеленые",
                  },
                ],
              },
              {
                title: "Сетки",
                subProducts: [
                  { ref: "http://project/product-card", title: "Сетки синие" },
                  {
                    ref: "http://project/product-card",
                    title: "Сетки красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Сетки зеленые",
                  },
                ],
              },
            ],
          },
          {
            title: "Сортовой прокат",
            products: [
              {
                title: "Вентили(клапаны)",
                subProducts: [
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны синие",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны зеленые",
                  },
                ],
              },
              {
                title: "Гайки",
                subProducts: [
                  { ref: "http://project/product-card", title: "Гайки синие" },
                  {
                    ref: "http://project/product-card",
                    title: "Гайки красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Гайки зеленые",
                  },
                ],
              },
              {
                title: "Сетки",
                subProducts: [
                  { ref: "http://project/product-card", title: "Сетки синие" },
                  {
                    ref: "http://project/product-card",
                    title: "Сетки красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Сетки зеленые",
                  },
                ],
              },
            ],
          },
          {
            title: "Листовой прокат",
            products: [
              {
                title: "Вентили(клапаны)",
                subProducts: [
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны синие",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны зеленые",
                  },
                ],
              },
              {
                title: "Гайки",
                subProducts: [
                  { ref: "http://project/product-card", title: "Гайки синие" },
                  {
                    ref: "http://project/product-card",
                    title: "Гайки красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Гайки зеленые",
                  },
                ],
              },
              {
                title: "Сетки",
                subProducts: [
                  { ref: "http://project/product-card", title: "Сетки синие" },
                  {
                    ref: "http://project/product-card",
                    title: "Сетки красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Сетки зеленые",
                  },
                ],
              },
            ],
          },
          {
            title: "Метизная продукция",
            products: [
              {
                title: "Вентили(клапаны)",
                subProducts: [
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны синие",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны зеленые",
                  },
                ],
              },
              {
                title: "Гайки",
                subProducts: [
                  { ref: "http://project/product-card", title: "Гайки синие" },
                  {
                    ref: "http://project/product-card",
                    title: "Гайки красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Гайки зеленые",
                  },
                ],
              },
              {
                title: "Сетки",
                subProducts: [
                  { ref: "http://project/product-card", title: "Сетки синие" },
                  {
                    ref: "http://project/product-card",
                    title: "Сетки красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Сетки зеленые",
                  },
                ],
              },
            ],
          },
          {
            title: "Нержавеющая сталь",
            products: [
              {
                title: "Вентили(клапаны)",
                subProducts: [
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны синие",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны зеленые",
                  },
                ],
              },
              {
                title: "Гайки",
                subProducts: [
                  { ref: "http://project/product-card", title: "Гайки синие" },
                  {
                    ref: "http://project/product-card",
                    title: "Гайки красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Гайки зеленые",
                  },
                ],
              },
              {
                title: "Сетки",
                subProducts: [
                  { ref: "http://project/product-card", title: "Сетки синие" },
                  {
                    ref: "http://project/product-card",
                    title: "Сетки красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Сетки зеленые",
                  },
                ],
              },
            ],
          },
          {
            title: "Цветной металлопрокат",
            products: [
              {
                title: "Вентили(клапаны)",
                subProducts: [
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны синие",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны зеленые",
                  },
                ],
              },
              {
                title: "Гайки",
                subProducts: [
                  { ref: "http://project/product-card", title: "Гайки синие" },
                  {
                    ref: "http://project/product-card",
                    title: "Гайки красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Гайки зеленые",
                  },
                ],
              },
              {
                title: "Сетки",
                subProducts: [
                  { ref: "http://project/product-card", title: "Сетки синие" },
                  {
                    ref: "http://project/product-card",
                    title: "Сетки красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Сетки зеленые",
                  },
                ],
              },
            ],
          },
          {
            title: "Металлообработка",
            products: [
              {
                title: "Вентили(клапаны)",
                subProducts: [
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны синие",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Клапаны зеленые",
                  },
                ],
              },
              {
                title: "Гайки",
                subProducts: [
                  { ref: "http://project/product-card", title: "Гайки синие" },
                  {
                    ref: "http://project/product-card",
                    title: "Гайки красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Гайки зеленые",
                  },
                ],
              },
              {
                title: "Сетки",
                subProducts: [
                  { ref: "http://project/product-card", title: "Сетки синие" },
                  {
                    ref: "http://project/product-card",
                    title: "Сетки красные",
                  },
                  {
                    ref: "http://project/product-card",
                    title: "Сетки зеленые",
                  },
                ],
              },
            ],
          },
        ],
      };
    },
  });
  Vue.component("blue-part", {
    template: "#blue-part-s",
    data: () => ({}),
  });
  new Vue({
    el: "#app2",
    data: () => ({}),
    mounted() {
      console.log("Component 2 mounted");
    },
  });
}
