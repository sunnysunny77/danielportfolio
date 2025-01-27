import AOS from "../node_modules/aos/dist/aos.js";
import vivus from "../node_modules/vivus/dist/vivus.js";
import { events } from "./utillites.js";

export const init = () => {

  const intro_obj = document.querySelector(".intro");

  if (intro_obj.id === "intro-work") {

    const svg_obj = document.querySelector("#vivus");

    if (svg_obj) {

      AOS.init({
        once: true,
        delay:  1700,
      });

      const Vivius = new vivus(svg_obj, { duration: 70 });

      Vivius.play();

      intro_obj.classList.add("live");

      fetch("/cookie.php", { method: "GET" });

    } else {

      AOS.init({ once: true });
    }
  }
  
  if (intro_obj.id === "intro-about") AOS.init({ once: true });

  events(intro_obj, "animationend", () => {

    intro_obj.classList.add("z-index-end");
  })
};