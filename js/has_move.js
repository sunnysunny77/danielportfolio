import { events, get_position } from "./utillites.js";

export const has_move = () => {

    const obj = document.querySelectorAll(".has-move");

    if (obj.length === 0) {

      return;
    }

    for (const index of obj) {

      events(window, "scroll", () => {

        let scrollY = window.scrollY + window.innerHeight;

        if (scrollY > get_position(index)) {

          index.classList.add("has-bottom");
        }
      });
    }
};