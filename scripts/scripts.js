// slowScroll
(function(){
  $('.index-link').click(function(){
    SlowScrol('#first-display');
  });
  $('.footer-link').click(function(){
    SlowScrol('#first-display');
  });
  $('.qualities-link').click(function(){
    SlowScrol('#services-link');
  });
	$('.portfolio-link').click(function(){
	    SlowScrol('#portfolio .h2-title');
	});
  $('.our-services-link').click(function(){
    SlowScrol('#our-service .h2-title');
  });
  $('.about-us-link').click(function(){
    SlowScrol('#about-us .h2-title');
  });
  $('.contact-us-link').click(function(){
    SlowScrol('#contact-us .h2-title');
  });


	// functon SlowScroll
	function SlowScrol(id){
		  var offset = 160;
		  $('html, body').animate ({
		      scrollTop: $(id).offset().top - offset
		  }, 1000);
		  return false;
	};
})();

// open popup form
(function(){
  let btn = document.querySelector('.first-display .main-btn');
  let btnClose = document.querySelector('.icon-close-wrp');
  let popup = document.querySelector('.popup-form');
  let popupBg = document.querySelector('.popup-bg');

  if(btn) btn.onclick = function() {
    popup.classList.add('popup--active');
    popup.style.opacity = '1';
    popupBg.classList.add('popup--active');
    popupBg.style.opacity = '0.9';
  }

  function exit() {
    popup.classList.remove('popup--active');
    popup.style.opacity = '0';
    popupBg.classList.remove('popup--active');
    popupBg.style.opacity = '0';
  }

  if(btnClose) btnClose.addEventListener('click', exit);

})();

// form validation
(function() {
  let btns = document.querySelectorAll('form .main-btn');

  function validation(){
    let form = this.parentNode;
    let formName = form.querySelector('.form-name');
    let formEmail = form.querySelector('.form-email');

    let formNameBool = false, formEmailBool = false;

    if(formName.value.length >= 3){
      formName.classList.add('active');
      formName.classList.remove('error');
      formNameBool = true;
    } else{
      formName.classList.add('error');
      formName.classList.remove('active');
      formNameBool = false;
    }

    if(formEmail.value.length >= 3 && formEmail.value.indexOf('@') != -1){
      formEmail.classList.add('active');
      formEmail.classList.remove('error');
      formEmailBool = true;
    } else{
      formEmail.classList.add('error');
      formEmail.classList.remove('active');
      formEmailBool = false;
    }

    if(formNameBool && formEmailBool) {
      form.parentNode.querySelector('.form-complite').style.opacity = '1';
      form.style.opacity = '0';

      // sending
      setTimeout(() => form.parentNode.submit(), 2000);

    } else {
      form.parentNode.querySelector('.form-complite').style.opacity = '0';
      form.style.opacity = '1';
    }

  }


  if(btns) btns.forEach(e => e.addEventListener('click', validation) );

}) ();


// scrolling menu activation
(function(){
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if(entry.isIntersecting){
        document.querySelectorAll('.header ul a').forEach((link) => {
          if(link.getAttribute('href').replace('#', '') === entry.target.id){
            // link.classList.add('')
            link.classList.add('active');
          } else {
            link.classList.remove('active');
          }
        })
      }
    })
  }, {
    rootMargin: '0px',
    threshold: 0.3
  });
  
  document.querySelectorAll('section').forEach((section) => observer.observe(section))  
}) ();

// header fixed
(function(){

  document.onscroll = function(){
    let header = document.querySelector('.index-header');

    if(window.pageYOffset > 120){
      if(header) header.classList.add('header--scrolling');
      if(window.innerWidth < 1200 && window.innerWidth > 740){
        document.querySelector('.header nav').style.marginLeft = '-86%';
        document.querySelector('.header nav').style.left = '100%';
      } else if(window.innerWidth < 740){
        document.querySelector('.header nav').style.marginLeft = '-90%';
        document.querySelector('.header nav').style.left = '100%';
      }
    }else{
      if(header) header.classList.remove('header--scrolling');
      if(window.innerWidth < 1200 && window.innerWidth > 740){
        document.querySelector('.header nav').style.marginLeft = '-40%';
        document.querySelector('.header nav').style.left = '50%';
      } else if(window.innerWidth < 740){
        document.querySelector('.header nav').style.marginLeft = '-45%';
        document.querySelector('.header nav').style.left = '50%';
      }
    }
  }
})();