import { events } from "./utillites.js";

export const copy_tooltip = () => {

  const obj = document.querySelectorAll(".copy-tooltip");

  if (obj.length === 0) {

    return;
  }

  let bool = [];

  for (const [i, index] of obj.entries()) {

    bool[i] = true;

    events(index, "click", async (event) => {

      const obj = event.currentTarget;

      if (!bool[i]) return;

      try {
  
        await navigator.clipboard.writeText(obj.children[0].innerHTML.trim());
      } catch (error) {
  
        console.error(error.message);
      }
  
      obj.classList.add("has-opacity");
      obj.classList.add("has-display");
      setTimeout(() => {
  
        obj.classList.remove("has-opacity");
        setTimeout(() => {
  
          obj.classList.remove("has-display");
          bool[i] = true;
        }, 500);
      }, 1000);

      bool[i] = false;
    });
  }
};