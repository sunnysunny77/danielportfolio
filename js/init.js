import AOS from "../node_modules/aos/dist/aos.js";
import vivus from "../node_modules/vivus/dist/vivus.js";
import { events } from "./utillites.js";
import { OverlayScrollbars } from "overlayscrollbars";

export const init = () => {

  const intro_obj = document.querySelector(".intro");

  if (intro_obj.id === "intro-work") {

    const svg_obj = document.querySelector("#vivus");

    if (svg_obj) {

      const Vivius = new vivus(svg_obj, { duration: 70 });

      Vivius.play();

      fetch("/cookie.php", { method: "GET" });

    } else {

      window.inst = OverlayScrollbars(document.body, {

        scrollbars: {
          theme: "os-theme-body",
      }});
    };
  } else if (intro_obj.id === "intro-about") {
  
    window.inst = OverlayScrollbars(document.body, {

      scrollbars: {
        theme: "os-theme-body",
    }});
  };

  events(intro_obj, "animationend", (event) => {

    if (event.animationName === "intro_work" || event.animationName === "intro") {

      intro_obj.classList.add("z-index-end");

    };

    if (event.animationName === "intro_work") {

      window.inst = OverlayScrollbars(document.body, {

        scrollbars: {
          theme: "os-theme-body",
      }});

      AOS.init({
        once: true,
        easing: "ease-out-quad",
      });
    };
  });

  events(intro_obj, "animationstart", (event) => {

    if (event.animationName === "intro") {
      
      AOS.init({
        once: true,
        easing: "ease-out-quad",
      });
    };
  });
};