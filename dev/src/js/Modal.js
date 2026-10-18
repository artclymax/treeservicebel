export class Modal {
	constructor(params) {
		const defaultParams = {
			modal: '[data-modal]',
			btn: '[data-modal-btn]',
			btnAttr: 'data-modal-btn',
			activeClass: 'active-modal',
			closeBtn: '[data-modal-close]',
			modalBox: '[data-modal-box]',
		}

		this.params = { ...defaultParams, ...params };
		this.btns = document.querySelectorAll(this.params.btn);

		this.init();
	}

	init() {
		if (!this.btns.length) return;

		document.addEventListener('click', (e) => {

			// Открытие по кнопке
			if (e.target.closest(this.params.btn)) {
				const btn = e.target;
				if (btn.tagName === 'A') {
					e.preventDefault();
				}
				const id = btn.getAttribute(this.params.btnAttr);
				const modal = document.querySelector(`#${id}`);
				modal.classList.add(this.params.activeClass);
				document.documentElement.classList.add(this.params.activeClass);
			}

			// Закрытие по кнопке
			if (e.target.closest(this.params.closeBtn)) {
				const closeBtn = e.target;
				const modal = closeBtn.closest(this.params.modal);
				modal.classList.remove(this.params.activeClass);
				document.documentElement.classList.remove(this.params.activeClass);
			}

			// Закрытие по клику вне модалки
			const modal = e.target.closest(this.params.modal);

			if (modal && !e.target.closest(this.params.modalBox)) {
				modal.classList.remove(this.params.activeClass);
				document.documentElement.classList.remove(this.params.activeClass);
			}
		})
	}
}