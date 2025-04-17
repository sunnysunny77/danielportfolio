import { events } from "./utillites.js";

export const nav = () => {

    const nav = document.querySelector(".nav-fixed");

    const main = document.querySelector("main");

    if (!nav || !main ) {

      return;
    }

    let scrollY = 0;

    const height = 55.5;

    const padding_height = 154.5;

    let positive = false;

    const handle_nav = () => {

      const main_top = main.offsetTop;

      const main_bottom = main.offsetTop + main.scrollHeight - height;

      const scroll_pos = window.scrollY;

      if (window.innerWidth > 992) {

        nav.classList.remove("has-float");
        nav.classList.remove("has-positive");
        nav.classList.remove("has-negative");
        return;
      }

      if (scroll_pos > 0 && scroll_pos < (main_top + height) ) {

        nav.classList.add("has-float");
        nav.classList.remove("has-positive");
        nav.classList.remove("has-negative");
      } else if ((scroll_pos > (main_top + height) && positive) || (scroll_pos > (main_bottom - height))) {

        nav.classList.remove("has-float");
        nav.classList.add("has-positive");
        nav.classList.remove("has-negative");
      } else if (scroll_pos > (main_top + height) && !positive) {

        nav.classList.remove("has-float");
        nav.classList.remove("has-positive");
        nav.classList.add("has-negative");
      }
      
      if (scroll_pos > scrollY) {

        positive = true;
      } else if (scroll_pos < scrollY)  {

        positive = false;
      }
      
      scrollY = window.scrollY;
    };

    events(window, "scroll", handle_nav, { passive: true });
  };