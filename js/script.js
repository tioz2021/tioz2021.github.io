// custom select
;(() => {
  let selectContainer = document.querySelector(".select-container");
  let select = document.querySelector(".select");
  let input = document.getElementById("input");
  let options = document.querySelectorAll(".select-container .option");
  
  select.onclick = () => {
    selectContainer.classList.toggle("active");
  };
  
  options.forEach((e) => {
    e.addEventListener("click", () => {
      input.value = e.innerText;
      selectContainer.classList.remove("active");
      options.forEach((e) => {
        e.classList.remove("selected");
      });
      e.classList.add("selected");
    });
  });
}) ()

// accordion
;(() => {
  let acordBtn = document.querySelectorAll('.accordion__title-block');

  function accordionToggle() {
    let item = this.parentNode;
    acordBtn.forEach(e => e.parentNode.classList.remove('active'));
    item.classList.add('active');
  };
  document.body.offsetWidth <= 900 ? acordBtn[0].parentNode.classList.add('active') : null

  if(acordBtn) acordBtn.forEach(e => e.addEventListener('click', accordionToggle));

})()



// hamburger mobile menu toggle
;(() => {
  let btnOpen = document.querySelector('.hamburger-wrp');

  const toggledMenu = () => document.querySelector('.header nav').classList.toggle('active')
  if(btnOpen) btnOpen.onclick = e => toggledMenu()

  function SlowScrol(id){
    var offset = 60;
    $('html, body').animate ({
      scrollTop: $(id).offset().top - offset
    }, 1000);
    return false;
  };

  $('.to-form1').click(function(){
    SlowScrol('.to-body1');
    toggledMenu()
  });

  $('.to-form2').click(function(){
    SlowScrol('.to-body2');
    toggledMenu()
  });

  $('.to-form3').click(function(){
    SlowScrol('.to-body3');
    toggledMenu()
  });

  $('.to-form4').click(function(){
    SlowScrol('.to-body4');
    toggledMenu()
  });
})();