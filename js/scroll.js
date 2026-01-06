import { events, get_position } from "./utillites.js";

const backChange = () => {

  const u = document.querySelectorAll(".has-test");
  const main = document.querySelector("main");
  const before_end = main.classList.contains("before-end");
  const before_start = main.classList.contains("before-start");
  const scrollY = window.scrollY;

  for (const [i, index] of u.entries()) {

    const mod = i % 2 == 0 ? "odd" : "even";

    const not_mod = mod === "odd" ? "even" : "odd";

    const before_i = main.classList.contains(`before-${mod}`);

    const before_not_i = main.classList.contains(`before-${not_mod}`);

    if (scrollY > get_position(index) && scrollY < get_position(index) + index.scrollHeight) {

        if (!before_i) main.classList.add(`before-${mod}`);

         if (before_not_i) main.classList.remove(`before-${not_mod}`);

        if (before_start) main.classList.remove("before-start");

        if (before_end) main.classList.remove("before-end");

      } else if (scrollY > get_position(main) + main.scrollHeight) {

        if (!before_end) main.classList.add("before-end");

        if (before_i) main.classList.remove(`before-${mod}`);

        if (before_not_i) main.classList.remove(`before-${not_mod}`);

      }  else if (scrollY < get_position(main)) {

        if (!before_start && before_i) main.classList.add("before-start");

        if (before_i) main.classList.remove(`before-${mod}`);

        if (before_not_i) main.classList.remove(`before-${not_mod}`);
      }
  }
};

export const scroll = () => {

  events(window, "scroll", backChange);
};