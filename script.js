document.addEventListener('DOMContentLoaded', () => {
  const menuToggle = document.querySelector('.menu-toggle');
  const primaryNav = document.getElementById('primary-nav');

  if (menuToggle && primaryNav) {
    menuToggle.addEventListener('click', () => {
      // Toggle navigation display state
      const isOpen = primaryNav.classList.toggle('open');
      
      // Keep UI access parameters aligned dynamically
      menuToggle.setAttribute('aria-expanded', isOpen);
      
      // Optimize visual indicator state shifts
      menuToggle.innerHTML = isOpen ? '✕' : '☰';
    });
  }
});
