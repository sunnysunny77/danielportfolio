import  AOS from "../node_modules/aos/dist/aos.js";
import vivus from "../node_modules/vivus/dist/vivus.js";

export const init = async () => {

  const work = document.querySelector("#intro-work");
  const about = document.querySelector("#intro-about");

  if (work) {

    let res = await fetch("/cookie.php", {

    method: "GET",
    });
  
    if (!res.ok) { 
        
      let err = await res.text();
      
      return console.error(err);
    };

    const svg_obj = document.querySelector("#vivus");

    if (![...svg_obj.classList].includes("d-none")) {
      
      new vivus(svg_obj, {duration: 100}, ()=> {

        AOS.init({once: true});
      }).play();
    } else {

      AOS.init({once: true});
    }
  }
  
  if (about) AOS.init({once: true});
};