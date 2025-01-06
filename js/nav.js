import { events } from "./utillites.js";

export const nav = () => {

    const nav = document.querySelector("nav");
    const button = document.querySelector(".nav-tooltip");
    const main = document.querySelector("main");
    const outer = document.querySelector("#outer");

    if (!nav || !button || !main || !outer) {

      return;
    }

    let scrollY = 0;

    const handle_nav = () => {

      let positive = false;

      if (window.innerWidth > 992) {

        outer.style.paddingTop = "";
        button.classList.remove("has-fixed");
        button.classList.remove("has-display");
        Object.assign(nav.style,{ position: "static", transition: "none", maxHeight: "", backgroundColor: "rgb(23, 34, 43)", padding: "60px 0"});
        return;
      }

      if (window.scrollY > scrollY) {

        positive = true;
      } else if (window.scrollY < scrollY)  {

        positive = false;
      }

      scrollY = window.scrollY;

      const height = 55.5;

      if (scrollY < main.offsetTop + nav.offsetHeight && scrollY > main.offsetTop && !positive) {

        Object.assign(nav.style,{ position: "fixed", top: `-${height}px`, transition: "top 0.375s, max-height 1s", maxHeight: 0, backgroundColor: "rgb(23, 34, 43)", padding: "15px 0 5px 0"});
      } else if (scrollY > main.offsetTop && !positive) {

        outer.style.paddingTop = "155.5px";
        Object.assign(nav.style,{ position: "fixed", top: 0, transition: "top 0.375s, max-height 1s, background-color 0.5s", maxHeight: `${height}px`, backgroundColor: "rgba(23,34,43,.85)", padding: "15px 0 5px 0"});
      } else if (scrollY > main.offsetTop && positive) {

        outer.style.paddingTop = "155.5px";
        button.classList.add("has-fixed");
        Object.assign(nav.style,{ position: "fixed", top: `-${height}px`, transition: "top 0.375s, max-height 1s, background-color 0.5s", maxHeight: 0, backgroundColor: "rgb(23, 34, 43)", padding: "15px 0 5px 0" });
      } else {

        outer.style.paddingTop = "";
        button.classList.remove("has-fixed");
        button.classList.remove("has-display");
        Object.assign(nav.style,{ position: "static", transition: "none", maxHeight: "", backgroundColor: "rgb(23, 34, 43)", padding: "60px 0"});
      }
    };

    events(window, "scroll", handle_nav);
    events(window, "resize", handle_nav);
  };