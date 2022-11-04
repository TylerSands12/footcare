/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/custom.js":
/*!**************************!*\
  !*** ./src/js/custom.js ***!
  \**************************/
/***/ (() => {

(function ($) {
  $(document).ready(function () {
    // Code goes here
    console.log("Hola planets");
  });
})(jQuery);

/***/ }),

/***/ "./src/js/scroll_to_top.js":
/*!*********************************!*\
  !*** ./src/js/scroll_to_top.js ***!
  \*********************************/
/***/ (() => {

(function ($) {
  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $('.scrollup').fadeIn();
      } else {
        $('.scrollup').fadeOut();
      }
    });
    $('.scrollup').click(function () {
      $("html, body").animate({
        scrollTop: 0
      }, 600);
      return false;
    });
  });
})(jQuery);

/***/ }),

/***/ "./src/js/slick.js":
/*!*************************!*\
  !*** ./src/js/slick.js ***!
  \*************************/
/***/ (() => {

(function ($) {
  $(document).ready(function () {
    // Banner Carousel
    $('.top_banner_carousel').slick({
      dots: false,
      infinite: true,
      speed: 500,
      autoplay: true,
      autoplaySpeed: 5000,
      fade: true,
      cssEase: 'linear',
      prevArrow: '<svg class="prev_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z"/></svg>',
      nextArrow: '<svg class="next_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"/></svg>'
    }); // Reusable Carousel

    $('.carousel').slick({
      dots: false,
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 4,
      speed: 500,
      prevArrow: '<svg class="prev_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z"/></svg>',
      nextArrow: '<svg class="next_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"/></svg>',
      responsive: [{
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
        }
      }, {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      }, {
        breakpoint: 500,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }]
    }); // Single Carousel

    $('.single_carousel').slick({
      dots: true,
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear'
    });
  });
})(jQuery);

/***/ }),

/***/ "./src/sass/main.scss":
/*!****************************!*\
  !*** ./src/sass/main.scss ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _sass_main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../sass/main.scss */ "./src/sass/main.scss");
/* harmony import */ var _custom__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./custom */ "./src/js/custom.js");
/* harmony import */ var _custom__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_custom__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _slick__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./slick */ "./src/js/slick.js");
/* harmony import */ var _slick__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_slick__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _scroll_to_top__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./scroll_to_top */ "./src/js/scroll_to_top.js");
/* harmony import */ var _scroll_to_top__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_scroll_to_top__WEBPACK_IMPORTED_MODULE_3__);
// Sass
 // Javascript


 // import './google_maps';


})();

/******/ })()
;