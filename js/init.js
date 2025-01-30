import AOS from "aos";
import vivus from "vivus";
import { events } from "./utillites.js";
import { OverlayScrollbars } from "overlayscrollbars";

export const init = () => {

  const touch = "ontouchstart" in document.documentElement ? "os-theme-dark" : "os-theme-body";
  const intro_obj = document.querySelector(".intro");
  const svg_obj = document.querySelector("#vivus");

  if (intro_obj.id === "intro-work") {

    fetch("/cookie.php", { method: "GET" });
  }

  OverlayScrollbars(document.body, {

    overflow: {
      x: "hidden",
    },
    scrollbars: {
      theme: touch,
  }});

  window.inst = document.querySelector(".os-theme-body.os-scrollbar-vertical") || document.querySelector(".os-theme-dark.os-scrollbar-vertical");
  
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

      window.inst.classList.add("has-opacity");
      
      AOS.init({
        once: true,
        easing: "ease-out-quad",
        offset: -800,
      });
    };

    if (event.animationName === "intro_work") {
       
      OverlayScrollbars(document.body, {

        overflow: {
          x: "hidden",
        },
        scrollbars: {
          theme: touch,
      }});
    };
  });

  events(intro_obj, "animationstart", (event) => {

    if (event.animationName === "intro") {
      
      window.inst.classList.add("has-opacity");

      AOS.init({
        once: true,
        easing: "ease-out-quad",
        offset: intro_obj.id  === "intro-work" ? -800 : 100,
      });
    };
  });
};