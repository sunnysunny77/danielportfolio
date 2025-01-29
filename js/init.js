import AOS from "aos";
import vivus from "vivus";
import { events } from "./utillites.js";
import { OverlayScrollbars } from "overlayscrollbars";

export const init = () => {

  const intro_obj = document.querySelector(".intro");
  const svg_obj = document.querySelector("#vivus");

  if (intro_obj.id === "intro-work") {

    fetch("/cookie.php", { method: "GET" });
  }

  const touch = navigator.maxTouchPoints > 0;

  const theme = touch ? "os-theme-touch" : "os-theme-body";

  OverlayScrollbars(document.body, {

    scrollbars: {
      theme: theme,
  }});

  const overlay = document.querySelectorAll(".os-theme-body")[1];
  
  if (svg_obj) {

    const inst = new vivus(svg_obj, { duration: 60, onReady: () => {

      intro_obj.classList.add("has-js");
    } });

    inst.play();
  } else {

    intro_obj.classList.add("has-js");
  };

  events(intro_obj, "animationend", (event) => {

    if (event.animationName === "intro_work" || event.animationName === "intro") {

      intro_obj.classList.add("z-index-end");
    };

    if (event.animationName === "intro_work_svg") {

      if (!touch) overlay.classList.add("has-opacity");
      
      AOS.init({
        once: true,
        easing: "ease-out-quad",
        offset: -800,
      });
    };

    if (event.animationName === "intro_work") {
       
      OverlayScrollbars(document.body, {

        scrollbars: {
          theme: theme,
      }});
    };
  });

  events(intro_obj, "animationstart", (event) => {

    if (event.animationName === "intro") {
      
      if (!touch) overlay.classList.add("has-opacity");

      AOS.init({
        once: true,
        easing: "ease-out-quad",
        offset: intro_obj.id  === "intro-work" ? -800 : 100,
      });
    };
  });
};