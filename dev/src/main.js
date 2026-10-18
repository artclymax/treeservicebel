import 'jarallax/dist/jarallax.min.css';
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import './scss/main.scss';
//!

import { jarallax } from "jarallax";
import { Fancybox } from "@fancyapps/ui/dist/fancybox/";

import { Menu } from './js/Menu.js';
import { BackdropList } from './js/BackdropList.js';
import { Modal } from './js/Modal.js';
import { cookies } from "./js/Cookies.js";
import { imask } from "./js/imask.js";

new Menu({
	btn: '.burger-btn',
	menu: '.header-menu',
	activeClass: 'open-header-menu',
})

new Menu({
	btn: '.phone-btn',
	menu: '.phone-menu',
	activeClass: 'open-phone-menu',
})

new BackdropList();

new Swiper('.swiper-process', {
	slidesPerView: 'auto',
})

new Modal()

jarallax(document.querySelectorAll('.jarallax'), {
	speed: 0.2,
});

cookies();
imask();

new Swiper('.swiper-review', {
	slidesPerView: 1,
	spaceBetween: 24,

	loop: true,
	autoplay: true,

	breakpoints: {
		560: {
			slidesPerView: 2,
		},
		1024: {
			slidesPerView: 3,
		}
	},

	navigation: {
		nextEl: '.swiper-review__btn-next',
		prevEl: '.swiper-review__btn-prev',
	},

	pagination: {
		el: '.swiper-review__pagination',
		clickable: true,
	},

})

Fancybox.bind("[data-fancybox]");