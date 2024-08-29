import { events } from "./utillites.js";

export const copy_tooltip = () => {

  const obj = document.querySelector("#copy-tooltip");

  if (!obj) {

    return;
  }

  events(obj, "click", async (event) => {

    const obj = event.currentTarget;

    try {

      await navigator.clipboard.writeText(obj.children[0].innerHTML);
    } catch (error) {

      console.error(error.message);
    }

    obj.classList.add("has-opacity");
    setTimeout(() => {

      obj.classList.remove("has-opacity");
    }, 1000);
  });
};