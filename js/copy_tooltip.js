import { events } from "./utillites.js";

export const copy_tooltip = () => {

  const obj = document.querySelectorAll(".copy-tooltip");

  if (obj.length === 0) {

    return;
  }

  for (const index of obj) {

    events(index, "click", async (event) => {

      const obj = event.currentTarget;
      obj.disabled = true;
  
      try {
  
        await navigator.clipboard.writeText(obj.children[0].innerHTML);
      } catch (error) {
  
        console.error(error.message);
      }
  
      obj.classList.add("has-opacity");
      obj.classList.add("has-display");
      setTimeout(() => {
  
        obj.classList.remove("has-opacity");
        setTimeout(() => {
  
          obj.classList.remove("has-display");
          obj.disabled = "";
        }, 500);
      }, 1000);
    });

  }
};