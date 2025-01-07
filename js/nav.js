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

    const handle_nav = () => {

      let positive = false;

      let obj = {};

      if (window.innerWidth > 992) {

        outer.style.paddingTop = "";
        button.classList.remove("has-fixed");
        button.classList.remove("has-display");
        obj.position = "static";
        obj.top = "inital";
        obj.transition = "none";
        obj.maxHeight = "";
        obj.backgroundColor = "rgb(23, 34, 43)";
        obj.padding = "60px 0";
        Object.assign(nav.style, obj);
        return;
      }

      if (window.scrollY > scrollY) {

        positive = true;
      } else if (window.scrollY < scrollY)  {

        positive = false;
      }

      scrollY = window.scrollY;

      if (scrollY < main.offsetTop + nav.offsetHeight && scrollY > main.offsetTop && !positive) {

        obj.position = "fixed";
        obj.top = `-${height}px`;
        obj.transition = "top 0.375s, max-height 1s";
        obj.maxHeight = "0px";
        obj.backgroundColor = "rgb(23, 34, 43)";
        obj.padding = "15px 0 5px 0";
        Object.assign(nav.style, obj);
      } else if (scrollY > main.offsetTop && !positive) {

        outer.style.paddingTop = `${padding}px`;
        obj.position = "fixed";
        obj.top = "0px";
        obj.transition = "top 0.375s, max-height 1s, background-color 1s";
        obj.maxHeight = `${height}px`;
        obj.backgroundColor = "rgba(23, 34, 43, 0.85)";
        obj.padding = "15px 0 5px 0";
        Object.assign(nav.style, obj);
      } else if (scrollY > main.offsetTop && positive) {

        outer.style.paddingTop = `${padding}px`;
        button.classList.add("has-fixed");
        obj.position = "fixed";
        obj.top = `-${height}px`;
        obj.transition = "top 0.375s, max-height 1s, background-color 1s";
        obj.maxHeight = "0px";
        obj.backgroundColor = "rgb(23, 34, 43)";
        obj.padding = "15px 0 5px 0";
        Object.assign(nav.style, obj);
      } else {

        outer.style.paddingTop = "";
        button.classList.remove("has-fixed");
        button.classList.remove("has-display");
        obj.position = "static";
        obj.top = "initial";
        obj.transition = "none";
        obj.maxHeight = "";
        obj.backgroundColor = "rgb(23, 34, 43)";
        obj.padding = "60px 0";
        Object.assign(nav.style, obj);
      }
    };

    events(window, "scroll", handle_nav);
    events(window, "resize", handle_nav);
  };