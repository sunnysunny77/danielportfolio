import AOS from "../node_modules/aos/dist/aos.js";
import vivus from "../node_modules/vivus/dist/vivus.js";
import { events } from "./utillites.js";
import { OverlayScrollbars } from "overlayscrollbars";


export const init = () => {

  const intro_obj = document.querySelector(".intro");
  const svg_obj = document.querySelector("#vivus");

  if (intro_obj.id === "intro-work") {

    fetch("/cookie.php", { method: "GET" });
  }

  OverlayScrollbars(document.body, {

    scrollbars: {
      theme: "os-theme-body",
  }});

  const overlay = document.querySelectorAll(".os-theme-body")[1];
  
  if (svg_obj) {

    const inst = new vivus(svg_obj, { duration: 60, onReady: () => {

      intro_obj.classList.add("has-js");
    } });

    inst.play();
  }

  events(intro_obj, "animationend", (event) => {

    if (event.animationName === "intro_work" || event.animationName === "intro") {

      intro_obj.classList.add("z-index-end");
    };

    if (event.animationName === "intro_work_svg") {

      overlay.classList.add("has-opacity");
      
      AOS.init({
        once: true,
        easing: "ease-out-quad",
      });
    };

    if (event.animationName === "intro_work") {
       
      window.inst = OverlayScrollbars(document.body, {

        scrollbars: {
          theme: "os-theme-body",
      }});
    };
  });

  events(intro_obj, "animationstart", (event) => {

    if (event.animationName === "intro") {
      
      overlay.classList.add("has-opacity");

      AOS.init({
        once: true,
        easing: "ease-out-quad",
      });
    };
  });
};