const navbar = document.querySelector("[data-navbar]");
const menuToggle = document.querySelector("[data-menu-toggle]");
const mobileMenu = document.querySelector("[data-mobile-menu]");

if (menuToggle && mobileMenu) {
  menuToggle.addEventListener("click", () => {
    const isOpen = menuToggle.getAttribute("aria-expanded") === "true";

    menuToggle.setAttribute("aria-expanded", String(!isOpen));
    mobileMenu.classList.toggle("hidden", isOpen);
    document.body.classList.toggle("overflow-hidden", !isOpen);
  });
}

if (navbar) {
  const syncNavbarState = () => {
    navbar.classList.toggle("shadow-[0_10px_30px_rgba(0,0,0,0.04)]", window.scrollY > 12);
  };

  syncNavbarState();
  window.addEventListener("scroll", syncNavbarState, { passive: true });
}

