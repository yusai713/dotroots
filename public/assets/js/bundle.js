/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/drawer.js":
/*!**************************!*\
  !*** ./src/js/drawer.js ***!
  \**************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": function() { return /* binding */ drawer; }\n/* harmony export */ });\nfunction drawer() {\n  $('.drawer__item > a').click(function () {\n    $('.drawer__checkbox').click();\n  });\n}\n\n//# sourceURL=webpack://dotroots/./src/js/drawer.js?");

/***/ }),

/***/ "./src/js/external/contact-form7.js":
/*!******************************************!*\
  !*** ./src/js/external/contact-form7.js ***!
  \******************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": function() { return /* binding */ contactForm7; }\n/* harmony export */ });\nfunction contactForm7() {\n  $(\".wpcf7-form > p\").addClass(\"wpcf7__row\");\n  $(\".wpcf7__row:has(label):has(.your-message)\").addClass(\"wpcf7__row--textarea\");\n  $(\".wpcf7__row:last-of-type\").addClass(\"c-btn c-btn--primary\");\n  jQuery(function ($) {\n    var elem = $('label:has(.your-message)');\n    var elemTxt = elem.html(); // 対象の文字列を取得\n\n    var replaceTxt = elemTxt.replace(/ コメントまたはメッセージ/g, '<span class=\"wpcf7__textarea-label\"> コメントまたはメッセージ</span>');\n    elem.html(replaceTxt); // 差し替え\n  });\n}\n\n//# sourceURL=webpack://dotroots/./src/js/external/contact-form7.js?");

/***/ }),

/***/ "./src/js/external/slick.js":
/*!**********************************!*\
  !*** ./src/js/external/slick.js ***!
  \**********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": function() { return /* binding */ slick; }\n/* harmony export */ });\nfunction slick() {\n  $('#mainVisual').slick({\n    arrows: false,\n    dots: true,\n    autoplay: true,\n    autoplaySpeed: 2000,\n    speed: 2000,\n    fade: true\n  });\n}\n\n//# sourceURL=webpack://dotroots/./src/js/external/slick.js?");

/***/ }),

/***/ "./src/js/fadein.js":
/*!**************************!*\
  !*** ./src/js/fadein.js ***!
  \**************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": function() { return /* binding */ fadein; }\n/* harmony export */ });\n//fadeinアニメーションの制御\nfunction fadein() {\n  $('.js-fadein').each(function () {\n    //ターゲットの位置を取得\n    var target = $(this).offset().top; //スクロール量を取得\n\n    var scroll = $(window).scrollTop(); //ウィンドウの高さを取得\n\n    var windowHeight = $(window).height(); //ターゲットまでスクロールするとフェードインする\n\n    if (scroll > target - windowHeight) {\n      $(this).css('opacity', '1');\n      $(this).css('transform', 'translateY(0)');\n    }\n  });\n}\n\n//# sourceURL=webpack://dotroots/./src/js/fadein.js?");

/***/ }),

/***/ "./src/js/index.js":
/*!*************************!*\
  !*** ./src/js/index.js ***!
  \*************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _external_slick__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./external/slick */ \"./src/js/external/slick.js\");\n/* harmony import */ var _external_contact_form7__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./external/contact-form7 */ \"./src/js/external/contact-form7.js\");\n/* harmony import */ var _drawer__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./drawer */ \"./src/js/drawer.js\");\n/* harmony import */ var _fadein__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./fadein */ \"./src/js/fadein.js\");\n/*\n\t参考記事：\n\thttps://qiita.com/KZ-taran/items/b4e5a5c20d1b1e02ed23#2-webpack%E3%81%AE%E5%87%A6%E7%90%86%E5%AF%BE%E8%B1%A1%E3%81%A8%E3%81%AA%E3%82%8Bjs%E3%83%95%E3%82%A1%E3%82%A4%E3%83%AB%E3%81%AE%E6%9B%B8%E3%81%8D%E6%96%B9\n*/\n//import totop from './totop';\n//totop();\n\n(0,_external_slick__WEBPACK_IMPORTED_MODULE_0__.default)();\n\n(0,_external_contact_form7__WEBPACK_IMPORTED_MODULE_1__.default)();\n\n(0,_drawer__WEBPACK_IMPORTED_MODULE_2__.default)();\n\n$(window).scroll(function () {\n  (0,_fadein__WEBPACK_IMPORTED_MODULE_3__.default)();\n});\nconsole.log(\"おはよう！\");\n\n//# sourceURL=webpack://dotroots/./src/js/index.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		if(__webpack_module_cache__[moduleId]) {
/******/ 			return __webpack_module_cache__[moduleId].exports;
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
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
/******/ 	// startup
/******/ 	// Load entry module
/******/ 	__webpack_require__("./src/js/index.js");
/******/ 	// This entry module used 'exports' so it can't be inlined
/******/ })()
;