// animation setings
;(() => {
	// delay animation fs
	if(document.querySelector('.block-2__list-item')) {
		document.querySelectorAll('.block-2__list-item')[0].style.setProperty('--animate-delay', '0.25s');
		document.querySelectorAll('.block-2__list-item')[1].style.setProperty('--animate-delay', '0.5s');
		document.querySelectorAll('.block-2__list-item')[2].style.setProperty('--animate-delay', '0.75s');
	}

	// wow js init
	new WOW().init();
	
	const wow2 = new WOW(
		{
			boxClass:     'wow-lp',      // default
			animateClass: 'block2__anim1', // default
			offset:       50,          // default
			mobile:       true,       // default
			live:         true        // default
		}
	)
	wow2.init();
	
	const animationBtn = document.querySelector('.block-3__link')
	addEventListener("scroll", (event) => {
		const player = document.querySelector('lottie-player')
		if(animationBtn.style.visibility === 'visible'){
			player.play()
		}
	});
}) ();

// gamburger
(() => {
	let btnOpen = document.querySelector('.mobile-menu-btn')
	let btnClose = document.querySelector('.popup-mobile-menu .img-wrp')
	let menu = document.querySelector('.popup-mobile-menu')

	const toggledMenu = e => {
		menu.classList.toggle('active')
	}
	if(btnOpen) btnOpen.addEventListener('click', toggledMenu)
	// if(btnClose) btnClose.addEventListener('click', toggledMenu)
	if(menu) menu.addEventListener('click', toggledMenu)
}) ()

// option-select
;(() => {
  let btns = document.querySelectorAll('.option-select__btn')
  let bodys = document.querySelector('.option-select__text-bodys')
	let texts = document.querySelectorAll('.option-select__text')

  if(btns) btns.forEach(e => e.addEventListener('click', e => {
    btns.forEach(e => e.parentNode.classList.remove('active'))
    e.target.parentNode.classList.toggle('active')

    
    if(btns[0].parentNode.classList.contains('active')) {
			bodys.classList.remove('active')
			setTimeout(() => texts[1].style.opacity = '0', 500)
			setTimeout(() => texts[0].style.opacity = '1', 500)
		} else {
			bodys.classList.add('active')
			setTimeout(() => texts[1].style.opacity = '1', 500) // 500ms
			setTimeout(() => texts[0].style.opacity = '0', 500)
		}

  }))

}) ();

// swiper js initial sliders
;(() => {
	const swiper = new Swiper('.block-3__slider', {
		loop: true,
		speed: 1000,
	
		pagination: {
			el: '.block-3__slider-pagination',
		},
		navigation: {
			nextEl: '.block-3 .slider-buttons-button-next',
			prevEl: '.block-3 .slider-buttons-button-prev',
		}
	});
	
	const swiper2 = new Swiper('.block-4__slider', {
		loop: true,
		spaceBetween: 0,
		slidesPerView: "auto",
		centeredSlides: true,
		speed: 1000,
		navigation: {
			nextEl: '.block-4 .slider-buttons-button-next',
			prevEl: '.block-4 .slider-buttons-button-prev'
		}
	})
})();

// range slider ( form complite )
;(() => {
	const slider = document.querySelectorAll(".range-input")
	const output = document.querySelectorAll(".range-input__value")
	const btns = document.querySelectorAll('.fs__form .main-form__btn')

	if(slider[0] || slider[1]) {
		for(let i = 0; i < slider.length; i++) {
			output[i].innerHTML = slider[i].value;
		}
	
		// This function input current value in span and add progress colour in range
		for(let i = 0; i < slider.length; i++) {
			slider[i].oninput = function() {
				output[i].innerHTML = this.value;
				let value = (this.value-this.min)/(this.max-this.min)*100;
				this.style.background = 'linear-gradient(to right, #41C76C 0%, #40E671 ' + value + '%, #d7dcdf ' + value + '%, #d7dcdf 100%)'
			}
		}
	}

	if(btns) btns.forEach(e => e.addEventListener('click', (e) => {
		e.target.parentNode.parentNode.parentNode.submit()
		alert('form range submit ! ! ! !')
		window.location.assign("form-page.html")
	}))

}) ();

// main-form masks
;(() => {
	
	// phone mask
	const phoneInput = document.querySelector('.main-form__input--phone');
	const maskOptions = {
		mask: '+{7}(000)000-00-00',
		//lazy: false,
	};
	if(phoneInput){
		const mask = IMask(phoneInput, maskOptions)
	}

	// pass series mask
	const passSeriesInput = document.querySelector('.main-form__input--pas-series');
	const passSeriesOptions = {
		mask: '00-00',
		//lazy: false,
	};
	if(passSeriesInput){
		const passSeriesMask = IMask(passSeriesInput, passSeriesOptions);
	}

	// pass number mask
	const passNumberInput = document.querySelector('.main-form__input--pas-number');
	const passNumberOptions = {
		mask: '000000',
		//lazy: false,
	};
	if(passNumberInput){
		const passNumberMask = IMask(passNumberInput, passNumberOptions);
	}

	// pass code mask
	const passCodeInput = document.querySelector('.main-form__input--pas-code');
	const passCodeOptions = {
		mask: '000-000',
		//lazy: false,
	};
	if(passCodeInput){
		const passCodeMask = IMask(passCodeInput, passCodeOptions);
	}

	// snils mask
	const snilsInput = document.querySelector('.main-form__input--pas-snils');
	const snilsMaskOptions = {
		mask: '000-000-000 00'
	};
	if(snilsInput){
		const snilsMask = IMask(snilsInput, snilsMaskOptions);
	}

	// personal-date date mask
	const personalDate = document.querySelector('.main-form__input--date')
	if(personalDate){
		const dateMask = IMask(
			personalDate,
			{
				mask: Date,
				min: new Date(1990, 0, 1),
				max: new Date(2030, 0, 1),
				//lazy: false,
			});
	}
	if(document.querySelector('.main-form__input--pas-date')){
		const dateMask2 = IMask(
			document.querySelector('.main-form__input--pas-date'),
			{
				mask: Date,
				min: new Date(1990, 0, 1),
				max: new Date(2030, 0, 1),
				//lazy: false,
			});
	}
	// custom function validation
	function validate(item, title, titleText, titleIcon, text, validationText, inputValueLength) {
		if(item) item.onchange = e => {
			if(e.target.value.length >= inputValueLength){
				if(titleText.textContent.trim().indexOf(text) !== -1) {
					let arr = []
					arr = title.textContent.split(' ').map((e, i) => e.trim() === text ? e = ' ' : e);
					titleText.textContent = arr.join(' ')
				}

				e.target.classList.add('sucess')
				e.target.classList.remove('error')
			} else {
				if(titleText.textContent.indexOf(validationText) == -1){
					if(titleText.textContent.trim().indexOf('персональные данные (все поля обязательны') !== -1){
						titleText.textContent = 'Введите:'
					}
					if(titleText.textContent.trim().indexOf('контакты данные (поле для телефона обязательное)') !== -1){
						titleText.textContent = 'Введите:'
					}
					if(titleText.textContent.trim().indexOf('ваш фактический адрес') !== -1){
						titleText.textContent = 'Введите:'
					}
					titleText.textContent += ' ' + text
				}

				e.target.classList.add('error')
				e.target.classList.remove('sucess')
			}
		}
	}

	// validation step 1
	const userName = document.querySelector('.main-form__input--name')
	const userLastname = document.querySelector('.main-form__input--lastname')
	const userSurname = document.querySelector('.main-form__input--surname')
	const userSity = document.querySelector('.main-form__input--sity')
	const userEmail = document.querySelector('.main-form__input--mail')

	// validation phone
	const date = document.querySelector('.main-form__inputs--contacts .main-form__inputs-date')
	const dateIcon = document.querySelectorAll('.main-form__inputs--contacts .main-form__inputs-date path')
	const dateText = document.querySelector('.main-form__inputs--contacts .main-form__inputs-date .main-form__inputs-date-text')
	
	if(date){
		validate(phoneInput, date, dateText, dateIcon, "«Телефон».", "«Телефон»", 16)
	}

	// validation date
	const personalDateTitle = document.querySelector('.main-form__inputs--personal-date .main-form__inputs-date')
	const personalDateTitleIcon = document.querySelectorAll('.main-form__inputs--personal-date .main-form__inputs-date path')
	const personalDateTitleText = document.querySelector('.main-form__inputs--personal-date .main-form__inputs-date .main-form__inputs-date-text')
	if(personalDateTitle) {
		validate(userName, personalDateTitle, personalDateTitleText, personalDateTitleIcon, "«Ваше	имя».", "«Ваше	имя»", 3)
		validate(userLastname, personalDateTitle, personalDateTitleText, personalDateTitleIcon, "«Вашу	фамилию».", "«Вашу	фамилию»", 3)
		validate(userSurname, personalDateTitle, personalDateTitleText, personalDateTitleIcon, "«Ваше	отчество».", "«Ваше	отчество»", 3)
		validate(personalDate, personalDateTitle, personalDateTitleText, personalDateTitleIcon, "«Введите	дату	в	диапазонне	с	01.01.1950	до	01.01.2023».", "«Введите	дату	в	диапазонне	с	01.01.1950	до	01.01.2023».", 10)
		validate(userSity, personalDateTitle, personalDateTitleText, personalDateTitleIcon, "«Ваш	город».", "«Ваш	город»", 3)
	}


	// validation step 2
	const personalDate2 = document.querySelector('.main-form__input--pas-date')
	const personalDateTitle2 = document.querySelector('.main-form__step--2 .main-form__inputs--personal-date .main-form__inputs-date')
	const personalDateTitleIcon2 = document.querySelectorAll('.main-form__step--2 .main-form__inputs--personal-date .main-form__inputs-date path')
	const personalDateTitleText2 = document.querySelector('.main-form__step--2 .main-form__inputs--personal-date .main-form__inputs-date .main-form__inputs-date-text')

	const userPasSeries = document.querySelector('.main-form__input--pas-series')
	const userPasNumber = document.querySelector('.main-form__input--pas-number')
	const userPasCode = document.querySelector('.main-form__input--pas-code')
	const userPasDate = document.querySelector('.main-form__input--pas-date')
	const userPasSity = document.querySelector('.main-form__input--pas-sity')
	if(personalDateTitle2) {
		validate(userPasSeries, personalDateTitle2, personalDateTitleText2, personalDateTitleIcon2,"«Cерия».", "«Cерия».", 5)
		validate(userPasNumber, personalDateTitle2, personalDateTitleText2, personalDateTitleIcon2, "«Номер».", "«Номер».", 6)
		validate(userPasCode, personalDateTitle2, personalDateTitleText2, personalDateTitleIcon2, "«Код	подразделения».", "«Код	подразделения».", 7)
		validate(userPasDate, personalDateTitle2, personalDateTitleText2, personalDateTitleIcon2, "«Введите	дату	выдачи	в	диапазонне	с	01.01.1993	до	01.01.2007».", "«Введите	дату	выдачи	в	диапазонне	с	01.01.1993	до	01.01.2007».", 10)
		validate(userPasSity, personalDateTitle2, personalDateTitleText2, personalDateTitleIcon2, "«Место	рождения».", "«Место	рождения».", 3)
	}


	// validation step 3
	const addressTitle = document.querySelector('.main-form__step--3 .main-form__inputs--fact-addres .main-form__inputs-date')
	const addressTitleIcon = document.querySelectorAll('.main-form__step--3 .main-form__inputs--fact-addres .main-form__inputs-date path')
	const addresslDateTitleText = document.querySelector('.main-form__step--3 .main-form__inputs--fact-addres .main-form__inputs-date .main-form__inputs-date-text')

	const addressRegion = document.querySelector('.main-form__input--fact-addres-region')
	const addressSity = document.querySelector('.main-form__input--fact-addres-sity')
	const addressStreat = document.querySelector('.main-form__input--fact-addres-streat')
	const addressHous = document.querySelector('.main-form__input--fact-addres-number-hous')
	const addressApart = document.querySelector('.main-form__input--fact-addres-number-apart')
	if(addressTitle) {
		validate(addressRegion, addressTitle, addresslDateTitleText, addressTitleIcon, "«Регион».", "«Регион».", 3)
		validate(addressSity, addressTitle, addresslDateTitleText, addressTitleIcon, "«Город».", "«Город».", 3)
		validate(addressStreat, addressTitle, addresslDateTitleText, addressTitleIcon, "«Улица».", "«Улица».", 3)
		validate(addressHous, addressTitle, addresslDateTitleText, addressTitleIcon, '«Номер	дома».', '«Номер	дома».', 3)
		validate(addressApart, addressTitle, addresslDateTitleText, addressTitleIcon, '«Квартира».', '«Квартира».', 3)
	}

	// form navigation
	function validateStep(item, titleText, titleIcon, text, validationText, inputValueLength) {
		if(item.value.length >= inputValueLength){
		} else {
			if(titleText.textContent.indexOf(validationText) == -1) {
				if(titleText.textContent.trim().indexOf('персональные данные (все поля обязательны') !== -1){
					titleText.textContent = 'Введите: '
				}
				if(titleText.textContent.trim().indexOf('контакты данные (поле для телефона обязательное)') !== -1){
					titleText.textContent = 'Введите: '
				}
				if(titleText.textContent.trim().indexOf('ваш фактический адрес') !== -1){
					titleText.textContent = 'Введите: '
				}
				titleText.textContent += ' ' + text
			}
			titleText.classList.add('error')
			item.classList.add('error')
			
			titleIcon.forEach(e => e.classList.add('error-fill'))
			titleText.classList.add('error-text')
		}
	}

	let formBtn = document.querySelector('.main-form__btn')
	let numberList = document.querySelectorAll('.main-form__start-list li')
	let activeNubmer = document.querySelector('.main-form__start-text-step--first')
	let formWrapper = document.querySelector('.main-form__center')

	let step1Active = false, 
			step2Active = false,
			step3Active = false

	let prevStepBtn = document.querySelector('.main-form__navigation-btn--back')
	if(prevStepBtn) prevStepBtn.style.display = 'none'

	formNavigation = (side) => {

		// moving
		function moving(stepSize) {
			let formWrapperTransformPosition = formWrapper.getAttribute('style')
			formWrapperTransformPosition = formWrapperTransformPosition.slice(22, formWrapperTransformPosition.length-3)
			let formPosition = parseFloat(formWrapperTransformPosition)
			let step = -33.35

			if(stepSize === 1){
				if(side === '+' && formPosition <= -33.35) return false
			} else if(stepSize === 2){
				if(side === '+' && formPosition <= -66.70) return false
			}

			if(side === '-' && formPosition > -33.35) return false
			numberList.forEach(e => e.classList.remove('active'))		
	
			if(side === '+') {
				formWrapper.setAttribute('style', `transform: translateX(${formPosition + step}%);`)
				activeNubmer.textContent = parseInt(activeNubmer.textContent) + 1
			}
			else {
				formWrapper.setAttribute('style', `transform: translateX(${formPosition - step}%);`)
				activeNubmer.textContent = parseInt(activeNubmer.textContent) - 1
			}
	
			if(formWrapper.getAttribute('style').indexOf('0%') !== -1) {
				numberList[0].classList.add('active')
				prevStepBtn.style.display = 'none'
			} else if(formWrapper.getAttribute('style').indexOf('-33.35%') !== -1) {
				numberList[1].classList.add('active')
				prevStepBtn.style.display = 'block'
			} else if(formWrapper.getAttribute('style').indexOf('-66.7%') !== -1) {
				numberList[2].classList.add('active')
			}
		}

		// title valid
		function stepActive(icon, text, add, remove) {
			console.log('stepActive ', text.textContent)

			icon.forEach(e => {
				e.classList.remove(`${remove}-fill`)
				e.classList.add(`${add}-fill`)
			})
			
			text.classList.remove(`${remove}-text`)
			text.classList.add(`${add}-text`)
		}

		// step1 validation
		function step1Validation() {
			let phoneActive = false
			validateStep(phoneInput, dateText, dateIcon, "«Телефон».", "«Телефон»", 16)
			validateStep(userName, personalDateTitleText, personalDateTitleIcon, "«Ваше	имя».", "«Ваше	имя»", 3)
			validateStep(userLastname, personalDateTitleText, personalDateTitleIcon, "«Вашу	фамилию».", "«Вашу	фамилию»", 3)
			validateStep(userSurname, personalDateTitleText, personalDateTitleIcon, "«Ваше	отчество».", "«Ваше	отчество»", 3)
			validateStep(personalDate, personalDateTitleText, personalDateTitleIcon, "«Введите	дату	в	диапазонне	с	01.01.1950	до	01.01.2023».", "«Введите	дату	в	диапазонне	с	01.01.1950	до	01.01.2023».", 10)
			validateStep(userSity, personalDateTitleText, personalDateTitleIcon, "«Ваш	город».", "«Ваш	город»", 3)

			if(phoneInput.classList.contains('error')) {
				stepActive(dateIcon, dateText, 'error', 'success')
				phoneActive = false
			} else {
				stepActive(dateIcon, dateText , 'success', 'error')
				dateText.textContent = 'контакты данные (поле для телефона обязательное)'
				phoneActive = true
			}
			if(userName.classList.contains('error') || userLastname.classList.contains('error')
				|| userSurname.classList.contains('error') || userSity.classList.contains('error')
				|| personalDate.classList.contains('error')
			){
				stepActive(personalDateTitleIcon, personalDateTitleText, 'error', 'success')
				step1Active = false
				return false
			} else {
				stepActive(personalDateTitleIcon, personalDateTitleText, 'success', 'error')
				personalDateTitleText.textContent = 'персональные данные (все поля обязательны)'
				if(phoneActive) step1Active = true
			}			
		}

		// step2 validation
		function step2Validation() {
			validateStep(userPasSeries, personalDateTitleText2, personalDateTitleIcon2,"«Cерия».", "«Cерия».", 5)
			validateStep(userPasNumber, personalDateTitleText2, personalDateTitleIcon2, "«Номер».", "«Номер».", 6)
			validateStep(userPasCode, personalDateTitleText2, personalDateTitleIcon2, "«Код	подразделения».", "«Код	подразделения».", 7)
			validateStep(userPasDate, personalDateTitleText2, personalDateTitleIcon2, "«Введите	дату	выдачи	в	диапазонне	с	01.01.1993	до	01.01.2007».", "«Введите	дату	выдачи	в	диапазонне	с	01.01.1993	до	01.01.2007».", 10)
			validateStep(userPasSity, personalDateTitleText2, personalDateTitleIcon2, "«Место	рождения».", "«Место	рождения».", 3)

			if(userPasSeries.classList.contains('error') || userPasNumber.classList.contains('error')
				|| userPasCode.classList.contains('error') || userPasDate.classList.contains('error')
				|| userPasSity.classList.contains('error')
			){
				stepActive(personalDateTitleIcon2, personalDateTitleText2, 'error', 'success')
				step2Active = false
				return false
			} else {
				stepActive(personalDateTitleIcon2, personalDateTitleText2, 'success', 'error')
				step2Active = true
				personalDateTitleText2.textContent = 'персональные данные (все поля обязательны)'
			}
		}

		// step3 validation
		function step3Validation() {
			validateStep(addressRegion, addresslDateTitleText, addressTitleIcon, "«Регион».", "«Регион».", 3)
			validateStep(addressSity, addresslDateTitleText, addressTitleIcon, "«Город».", "«Город».", 3)
			validateStep(addressStreat, addresslDateTitleText, addressTitleIcon, "«Улица».", "«Улица».", 3)
			validateStep(addressHous, addresslDateTitleText, addressTitleIcon, '«Номер	дома».', '«Номер	дома».', 3)
			validateStep(addressApart, addresslDateTitleText, addressTitleIcon, '«Квартира».', '«Квартира».', 3)

			if(addressRegion.classList.contains('error') || addressSity.classList.contains('error')
				|| addressStreat.classList.contains('error') 
			){
				stepActive(addressTitleIcon, addresslDateTitleText, 'error', 'success')
				step3Active = false
				return false
			} else {
				stepActive(addressTitleIcon, addresslDateTitleText, 'success', 'error')
				step3Active = true
				personalDateTitleText2.textContent = 'ваш фактический адрес'
			}
		}

		if(side === '-') {
			moving(2)
		} 

		let step1Inputs = document.querySelectorAll('.main-form__step--1 .main-form__input')
		let step2Inputs = document.querySelectorAll('.main-form__step--2 .main-form__input')
		let step3Inputs = document.querySelectorAll('.main-form__step--3 .main-form__input')

		if((!step1Active && !step2Active) && side === '+') {
			step1Validation()
			step1Inputs.forEach(e => e.addEventListener('change', (e) => {
				step1Validation()
				step1Active = false
			}))
			if(step1Active) {
				moving(1)
			} 
			return false
		}
		if((step1Active && !step2Active) && side === '+') {
			step1Validation()
			step1Inputs.forEach(e => e.addEventListener('change', (e) => {
				step1Validation()
				step1Active = false
			}))

			if(step1Active){
				moving(1)
			} 

			step2Validation()
			step2Inputs.forEach(e => e.addEventListener('change', (e) => {
				step2Validation()
				step2Active = false
			}))
			if(step2Active) {
				moving(2)
			}
			return false
		}
		if((step1Active && step2Active) && side == '+') {
			step1Validation()
			step1Inputs.forEach(e => e.addEventListener('change', (e) => {
				step1Validation()
				step1Active = false
			}))
			if(step1Active) {
				moving(1)	
			}

			step2Validation()
			step2Inputs.forEach(e => e.addEventListener('change', (e) => {
				step2Validation()
				step2Active = false
			}))
			if(step2Active) {
				moving(2)	
			}

			step3Validation()
			step3Inputs.forEach(e => e.addEventListener('change', (e) => {
				step3Validation()
				step3Active = false
			}))

			if(step3Active) {
				let form = document.querySelector('.form-page-block form')
				alert('form submit ! ! ! ')
				form.submit()
			}
		}

		// if(!step1Active && !step2Active && !step3Active && (side === '+')) {
		// 	step1Validation()
		// 	if(step1Active) {
		// 		moving(1)
		// 	}
		// } else if((step1Active && !step2Active && !step3Active) && (side === '+')) {
		// 	step2Validation()
		// 	if(step2Active) {
		// 		moving(2)
		// 	}
		// } else {
		// 	step3Validation()
		// 	if(step3Active) {
		// 		let form = document.querySelector('.form-page-block form')
		// 		alert('form submit ! ! ! ')
		// 		form.submit()
		// 	}
		// }
	}

	if(formBtn) formBtn.addEventListener('click', () => formNavigation('+'), false);
	if(document.querySelector('.main-form__navigation-btn--back')) {
		document.querySelector('.main-form__navigation-btn--back').addEventListener('click', () => formNavigation('-'), false);
	}
})();