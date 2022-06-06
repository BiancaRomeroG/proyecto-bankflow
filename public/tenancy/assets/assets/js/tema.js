const themeButton = document.getElementById('theme-button');
const darkTheme = 'dark-theme';
const iconTheme = 'uil-sun';
const selectedTheme = localStorage.getItem('selected-theme');
const selectedIcon = localStorage.getItem('selected-icon');
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light';
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'uil-moon' : 'uil-sun';
 if (selectedTheme) {
     document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme), 
     themeButton.classList[selectedIcon === 'uil-moon' ? 'add' : 'remove'](iconTheme)
    };

  themeButton.addEventListener('click', () => {
      document.body.classList.toggle(darkTheme), 
      themeButton.classList.toggle(iconTheme),
      localStorage.setItem('selected-theme', getCurrentTheme()), 
      localStorage.setItem('selected-icon', getCurrentIcon())
    }); 
    
  const sr = ScrollReveal({ origin: 'top', distance: '30px', duration: 2000, reset: true});
   sr.reveal(`.home_content, .home_img, .footer_content, .pack_content, .semestres_content`, {interval: 200}); function scrollUp(){const scrollUp = document.getElementById('scroll-up'); 
   if(this.scrollY >= 560) scrollUp.classList.add('show-scroll'); 
   else scrollUp.classList.remove('show-scroll')}; window.addEventListener('scroll', scrollUp); 
   