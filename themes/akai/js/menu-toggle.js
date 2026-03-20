document.addEventListener('DOMContentLoaded', () => {
  const toggleButton = document.querySelector('.menu-toggle');
  const menu = document.querySelector('.site-navigation');

  if (!toggleButton || !menu) return;

  toggleButton.addEventListener('click', () => {
    menu.classList.toggle('active');

    const isActive = menu.classList.contains('active');
    toggleButton.textContent = isActive 
      ? `${window.menuText} -` 
      : `${window.menuText} +`;
  });
});
