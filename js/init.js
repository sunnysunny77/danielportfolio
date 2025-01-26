import  AOS from "../node_modules/aos/dist/aos.js";
import vivus from "../node_modules/vivus/dist/vivus.js";

export const init = () => {

  const work = document.querySelector("#intro-work");
  const about = document.querySelector("#intro-about");

  if (work) {

    const svg_obj = document.querySelector("#vivus");

    if (!svg_obj.classList.contains("d-none")) {
      
      new vivus(svg_obj, {duration: 67}).play();

      setTimeout(()=> {

        AOS.init({once: true});
      }, 1670);

     fetch("/cookie.php", { method: "GET" });

    } else {

      AOS.init({once: true});
    }
  }
  
  if (about) AOS.init({once: true});
};