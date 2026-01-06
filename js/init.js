import vivus from "vivus";
import { events } from "./utillites.js";
import { OverlayScrollbars } from "overlayscrollbars";

const obsIsnt = (entries, observer) => {

  entries.filter(index=> index.isIntersecting).forEach(index => {

    index.target.classList.add("scrolled");
    observer.unobserve(index.target);
  });
};

const scrolled = (obj, bool) => {

  obj.forEach(index => {

    const top = index.getBoundingClientRect().top + window.scrollY;
    new IntersectionObserver(obsIsnt, {
      rootMargin: bool ? `${top}px` : "0px",
    }).observe(index);
  });
};

export const init = () => {

  window.touch = "ontouchstart" in document.documentElement ? true : false;
  const theme = window.touch ? "os-theme-dark" : "os-theme-body";
  const intro_obj = document.querySelector(".intro");
  const svg_obj = document.querySelector("#vivus");

  if (intro_obj.id === "intro-work") {

    fetch("/cookie.php", { method: "GET" });
  }

  OverlayScrollbars(document.body, {

    overflow: {
      x: "hidden",
      y: "scroll",
    },
    scrollbars: {
      theme: theme,
  }});

  window.inst = document.querySelector(".os-theme-body.os-scrollbar-vertical") || document.querySelector(".os-theme-dark.os-scrollbar-vertical");
  
  if (svg_obj) {

    const inst = new vivus(svg_obj, { duration: 40, onReady: () => {

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
      scrolled(document.querySelectorAll(".scrolled-init"));
      scrolled(document.querySelectorAll(".scrolled-init-offset"), true);
      window.inst.classList.add("has-opacity");
    };

    if (event.animationName === "intro_work") {
       
     OverlayScrollbars(document.body, {

        overflow: {
          x: "hidden",
          y: "scroll",
        },
        scrollbars: {
          theme: theme,
      }});
    };
  });

  events(intro_obj, "animationstart", (event) => {

    if (event.animationName === "intro") {
      
      scrolled(document.querySelectorAll(".scrolled-init"));
      scrolled(document.querySelectorAll(".scrolled-init-offset"), true);
      window.inst.classList.add("has-opacity");
    };
  });
};