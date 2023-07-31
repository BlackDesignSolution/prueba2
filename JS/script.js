var nav=document.querySelector('nav');
    window.addEventListener('scroll', function(){
       if(window.pageYOffset > 100){
        nav.classList.add('bg-danger', 'shadow');
       }else{
        nav.classList.remove('bg-danger', 'shadow')
       }
    })

/*--------------------------AOS--------------------------*/
AOS.init({
  easing: 'ease-out-back',
  duration: 1000
});
/*--------------------------/AOS--------------------------*/  
