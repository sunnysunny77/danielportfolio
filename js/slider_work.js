import { events } from "./utillites.js";

const open = (event) => {
  const nav = document.querySelector("nav");
  const paddingRight =  window.innerWidth - document.body.offsetWidth;
  const target = event.currentTarget.getAttribute("aria-controls");
  const obj = document.querySelector(`#${target}`);
  const backdrop = obj.getAttribute("backdrop");
  setTimeout(() => {
    obj.querySelector(".play").play();
  }, 1750);
  document.querySelector(`#${backdrop}`).classList.add("overlay-transition");
  obj.classList.add("overlay-fixed");
  event.currentTarget.setAttribute("aria-expanded", true);
  obj.setAttribute("aria-expanded", true);
  if (nav.classList.contains("has-fixed")) {
    nav.style.paddingRight = `${paddingRight}px`;
  }
  document.body.style.paddingRight = `${paddingRight}px`;
  document.body.classList.add("overflow-hidden");
};

const close = (event) => {
  const nav = document.querySelector("nav");
  const target = event.currentTarget.getAttribute("target");
  const controlls = event.currentTarget.getAttribute("controlls");
  const obj = document.querySelector(`#${controlls}`);
  setTimeout(() => {
    obj.querySelector(".play").load();
  }, 500);
  if (nav.classList.contains("has-fixed")) {
    nav.style.paddingRight = 0;
  }
  document.body.style.paddingRight = 0;
  obj.classList.remove("overlay-fixed") ||
  obj.classList.remove("overlay-fixed-delay");
  document.body.classList.remove("overflow-hidden");
  obj.setAttribute("aria-expanded", false);
  document.querySelector(`#${target}`).setAttribute("aria-expanded", false);
  for (const item of document.querySelectorAll(".overlay-backdrop")) {
    item.classList.remove("overlay-transition");
  }
};

const next = (event) => {
  const nav = document.querySelector("nav");
  const paddingRight =  window.innerWidth - document.body.offsetWidth;
  const targetPrevious = event.currentTarget.getAttribute("target_previous");
  const controllsPrevious = event.currentTarget.getAttribute("controlls_previous");
  const targetCurrent = event.currentTarget.getAttribute("target_current");
  const controllsCurrent = event.currentTarget.getAttribute("controlls_current");
  const objPrevious = document.querySelector(`#${controllsPrevious}`);
  const objCurrent = document.querySelector(`#${controllsCurrent}`);
  objPrevious.classList.remove("overlay-fixed") ||
  objPrevious.classList.remove("overlay-fixed-delay");
  document.body.classList.remove("overflow-hidden");
  objPrevious.setAttribute("aria-expanded", false);
  setTimeout(() => {
    objPrevious.querySelector(".play").load();
  }, 500);
  document.querySelector(`#${targetPrevious}`).setAttribute("aria-expanded", false);
  if (nav.classList.contains("has-fixed")) {
    nav.style.paddingRight = `${paddingRight}px`;
  }
  document.body.style.paddingRight = `${paddingRight}px`;
  document.body.classList.add("overflow-hidden");
  objCurrent.classList.add("overlay-fixed-delay");
  objCurrent.setAttribute("aria-expanded", true);
  setTimeout(() => {
    objCurrent.querySelector(".play").play();
  }, 1750);
  document.querySelector(`#${targetCurrent}`).setAttribute("aria-expanded", false);
};

export const slider_work = () => {
  const play = document.querySelectorAll(".play");
  const overlay_body = document.querySelectorAll(".overlay_body");
  const overlay_open = document.querySelectorAll(".overlay-open");
  const overlay_close = document.querySelectorAll(".overlay-close");
  const overlay_next = document.querySelectorAll(".overlay-next");
  const overlay_prev = document.querySelectorAll(".overlay-prev");
  const overlay_backdrop = document.querySelectorAll(".overlay-backdrop");
  const nav = document.querySelector("nav");

  if (play.length === 0 || overlay_body.length === 0 || overlay_open.length === 0 || overlay_close.length === 0 || overlay_next.length === 0 || overlay_prev.length === 0 || overlay_backdrop.length === 0 || !nav) {
    return;
  }

  for (let i = 0; i < overlay_open.length; i++) {
    overlay_open[i].setAttribute("aria-expanded", false);
    overlay_open[i].setAttribute("aria-controls", `${overlay_body[i].id}`);
    overlay_close[i].setAttribute("target", "overlay_open-" + i);
    overlay_close[i].setAttribute("controlls", `${overlay_body[i].id}`);
    overlay_body[i].setAttribute("backdrop", `${overlay_backdrop[i].id}`);

    if (overlay_next[i]) {
      overlay_next[i].setAttribute("target_previous", "overlay_open-" + i);
      overlay_next[i].setAttribute("controlls_previous", `${overlay_body[i].id}`);
      const index = i + 1;
      overlay_next[i].setAttribute("target_current", "overlay_open-" + index);
      overlay_next[i].setAttribute("controlls_current", `${overlay_body[index].id}`);
    }

    if (overlay_prev[i]) {
      const index = i + 1;
      overlay_prev[i].setAttribute("target_previous", "overlay_open-" + index);
      overlay_prev[i].setAttribute("controlls_previous", `${overlay_body[index].id}`);
      overlay_prev[i].setAttribute("target_current", "overlay_open-" + index);
      overlay_prev[i].setAttribute("controlls_current", `${overlay_body[i].id}`);
    }

    events(overlay_open[i], "click", open);
    events(overlay_close[i], "click", close);
    events(overlay_next[i], "click", next);
    events(overlay_prev[i], "click", next);
  }
};
