// Модули
import { Common } from "./modules/common.js";
import { Sliders } from "./modules/sliders.js";
import { Modals } from "./modules/modals.js";
import { Forms } from "./modules/forms.js";
import { WindowScroll } from "./modules/window-scroll.js";
import { WindowResize } from "./modules/window-resize.js";
import { VVue } from "./modules/vue.js";
import { cityVue } from "./modules/cityVue.js";
(function ($) {
  $(document).ready(function () {
    Common(jQuery);
    Sliders(jQuery);
    Modals(jQuery);
    Forms(jQuery);
    VVue();
    cityVue();
    // VVue2();
  });

  WindowScroll(jQuery);
  WindowResize(jQuery);
})(jQuery);
