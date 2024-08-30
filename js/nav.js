import { events } from "./utillites.js";

export const nav = () => {

    const nav = document.querySelector("nav");
    const main = document.querySelector("main");

    if (!nav || !main) {

      return;
    }

    let scrollY = 0;
    
    const handle_nav = () => {

      let positive = false;

      if (window.scrollY > scrollY) {

        positive = true;
      } else if (window.scrollY < scrollY)  {

        positive = false;
      }

      scrollY = window.scrollY;
  
      if (scrollY > main.offsetTop - nav.offsetHeight && !positive) {
  
        nav.classList.add("has-sticky");
        nav.classList.remove("has-static");
      } else if (positive) {

        nav.classList.add("has-static");
        nav.classList.remove("has-sticky");
      } else if (scrollY <= main.offsetTop) {

        nav.classList.add("has-static");
        nav.classList.remove("has-sticky");
      }
    };

    events(window, "scroll", handle_nav);
    events(window, "resize", handle_nav);
  };