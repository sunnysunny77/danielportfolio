import { events } from "./utillites.js";

export const nav = () => {

    const nav = document.querySelector("nav");
    const button = document.querySelector(".nav-tooltip");
    const main = document.querySelector("main");


    if (!nav || !button || !main ) {

      return;
    }

    let scrollY = 0;

    const height = 55.5;

    let positive = false;

    let style = {};

    const handle_nav = () => {

      const main_top = main.offsetTop;

      const main_bottom = main.offsetTop + main.scrollHeight - height;

      const nav_top = nav.getBoundingClientRect().height;

      let scroll_pos = window.scrollY;

      let obj = {};

      if (window.innerWidth > 992) {

        obj.position = "absolute";
        obj.zIndex = 999;
        obj.top = "0px";
        obj.transition = "none";
        obj.maxHeight = "";
        obj.backgroundColor = "transparent";
        obj.padding = "60px 0";
        button.classList.remove("has-fixed");
        button.classList.remove("has-display");
        Object.assign(nav.style, obj);
        return;
      }

      if (scroll_pos < main_top) {

        obj.position = "absolute";
        obj.zIndex = 999;
        obj.top = "0px";
        obj.transition = "none";
        obj.maxHeight = "";
        obj.backgroundColor = "transparent";
        obj.padding = "60px 0";
        button.classList.remove("has-fixed");
        button.classList.remove("has-display");
      } else if ((scroll_pos > main_top + nav_top && positive) || (scroll_pos > main_top && scroll_pos < main_top + nav_top && !positive) || (scroll_pos > main_bottom)) {

        obj.position = "fixed";
        obj.zIndex = 997;
        obj.top = `-${height}px`;
        obj.transition = "top 0.375s, max-height 1s, background-color 1s";
        obj.maxHeight = "0px";
        obj.backgroundColor = "rgb(23, 34, 43)";
        obj.padding = "15px 0 5px 0";
      } else if (scroll_pos > main_top + nav_top && !positive) {

        obj.position = "fixed";
        obj.zIndex = 997;
        obj.top = "0px";
        obj.transition = "top 0.375s, max-height 1s, background-color 1s";
        obj.maxHeight = `${height}px`;
        obj.backgroundColor = "rgba(23, 34, 43, 0.85)";
        obj.padding = "15px 0 5px 0";
        button.classList.add("has-fixed");
      }
      
      if (obj !== style) Object.assign(nav.style, obj);

      if (scroll_pos > scrollY) {

        positive = true;
      } else if (scroll_pos < scrollY)  {

        positive = false;
      }

      style = obj;
      
      scrollY = window.scrollY;
    };

    events(window, "wheel", handle_nav, { passive: true });
    events(window, "scroll", handle_nav, { passive: true });
    events(window, "resize", handle_nav, { passive: true });
  };