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

      if (window.innerWidth > 992) {

        nav.classList.remove("has-fixed");
        return;
      }

      if (window.scrollY > scrollY) {

        positive = true;
      } else if (window.scrollY < scrollY)  {

        positive = false;
      }

      scrollY = window.scrollY;
  
      console.log(scrollY , main.offsetTop + nav.offsetHeight)

      if (scrollY < main.offsetTop + nav.offsetHeight && scrollY > main.offsetTop && !positive) {

        nav.classList.add("has-top");
      } else if (scrollY > main.offsetTop && !positive) {
  
        nav.classList.remove("has-top");
        nav.classList.add("has-fixed");
      } else if (scrollY > main.offsetTop && positive) {

        nav.classList.add("has-top");
      } else if (nav.classList.contains("has-top") || nav.classList.contains("has-fixed")) {

        nav.classList.remove("has-top");
        nav.classList.remove("has-fixed");
      }
    };

    events(window, "scroll", handle_nav);
    events(window, "resize", handle_nav);
  };