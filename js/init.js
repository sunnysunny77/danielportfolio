import vivus from "vivus";
import { events } from "./utillites.js";
import { OverlayScrollbars } from "overlayscrollbars";

const scrolled = (obj, options) => {

  const observer = new IntersectionObserver((entries, observer)=>{

    entries.filter(index=> index.isIntersecting).forEach(index => {

      index.target.classList.add("scrolled");
      observer.unobserve(index.target);
    });
  },options);

  obj.forEach(index => {

    observer.observe(index);
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
    },
    scrollbars: {
      theme: theme,
      dragScroll: window.touch ? false : true,
      clickScroll: window.touch ? true : false,
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
      scrolled(document.querySelectorAll(".scrolled-init"));
      scrolled(document.querySelectorAll(".scrolled-init-offset"), {rootMargin: "-800px 0px 0px 0px"});
    };

    if (event.animationName === "intro_work") {
       
      OverlayScrollbars(document.body, {

        overflow: {
          x: "hidden",
        },
        scrollbars: {
          theme: theme,
          dragScroll: window.touch ? false : true,
          clickScroll: window.touch ? true : false,
      }});
    };
  });

  events(intro_obj, "animationstart", (event) => {

    if (event.animationName === "intro") {
      
      window.inst.classList.add("has-opacity");
      scrolled(document.querySelectorAll(".scrolled-init"));
      scrolled(document.querySelectorAll(".scrolled-init-offset"), {rootMargin: "-800px 0px 0px 0px"});
    };
  });
};