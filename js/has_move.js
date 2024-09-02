import { events, get_position } from "./utillites.js";

const has_move_init = (index) => {

  let scrollY = window.scrollY + window.innerHeight;

  if (scrollY > get_position(index)) {

    index.classList.add("has-bottom");
  }
};

export const has_move = () => {

    const obj = document.querySelectorAll(".has-move");
    const query = document.querySelector("#has-move-query");

    if (obj.length === 0 || !query) {

      return;
    }

    if (get_position(query) >  window.innerHeight) {

      query.classList.add("has-move");
      
      events(window, "scroll", () => {

        has_move_init(query);
      });
    }

    for (const index of obj) {

      events(window, "scroll", () => {

        has_move_init(index);
      });
    }
};