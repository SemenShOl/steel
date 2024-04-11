// Модули
import { Common } from './modules/common.js';
import { Sliders } from './modules/sliders.js';
import { Modals } from './modules/modals.js';
import { Forms } from './modules/forms.js';
import { WindowScroll } from './modules/window-scroll.js';
import { WindowResize } from './modules/window-resize.js';


(function($) {
	$(document).ready(function() {
		Common(jQuery);
		Sliders(jQuery);
		Modals(jQuery);
		Forms(jQuery);
	});

	WindowScroll(jQuery);
	WindowResize(jQuery);
})(jQuery);


	