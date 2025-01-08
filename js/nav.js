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

    const height = 55.5;

    const padding = 155.5;

    let obj = {};

    const handle_nav = () => {

      let positive = false;

      const main_top = main.offsetTop;

      const nav_top = nav.getBoundingClientRect().height;

      let scroll_pos = window.scrollY;

      if (window.innerWidth > 992) {

        obj.position = "static";
        obj.top = "inital";
        obj.transition = "none";
        obj.maxHeight = "";
        obj.backgroundColor = "rgb(23, 34, 43)";
        obj.padding = "60px 0";
        button.classList.remove("has-fixed");
        button.classList.remove("has-display");
        outer.style.paddingTop = "";
        Object.assign(nav.style, obj);
        return;
      }

      if (scroll_pos > scrollY) {

        positive = true;
      } else if (scroll_pos < scrollY)  {

        positive = false;
      }

      if (scroll_pos < main_top) {

        obj.position = "static";
        obj.top = "initial";
        obj.transition = "none";
        obj.maxHeight = "";
        obj.backgroundColor = "rgb(23, 34, 43)";
        obj.padding = "60px 0";
        button.classList.remove("has-fixed");
        button.classList.remove("has-display");
        outer.style.paddingTop = "";
      } else if ((scroll_pos > main_top + nav_top && positive) || (scroll_pos > main_top && scroll_pos < main_top + nav_top && !positive)) {

        obj.position = "fixed";
        obj.top = `-${height}px`;
        obj.transition = "top 0.375s, max-height 1s, background-color 1s";
        obj.maxHeight = "0px";
        obj.backgroundColor = "rgb(23, 34, 43)";
        obj.padding = "15px 0 5px 0";
        outer.style.paddingTop = `${padding}px`;
      } else if (scroll_pos > main_top + nav_top && !positive) {

        obj.position = "fixed";
        obj.top = "0px";
        obj.transition = "top 0.375s, max-height 1s, background-color 1s";
        obj.maxHeight = `${height}px`;
        obj.backgroundColor = "rgba(23, 34, 43, 0.85)";
        obj.padding = "15px 0 5px 0";
        button.classList.add("has-fixed");
        outer.style.paddingTop = `${padding}px`;
      }
      
      Object.assign(nav.style, obj);
      
      scrollY = window.scrollY;
    };

    events(window, "scroll", handle_nav);
    events(window, "resize", handle_nav);
  };