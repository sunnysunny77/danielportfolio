import { events } from "./utillites.js";
import { OverlayScrollbars } from "overlayscrollbars";

const open = (event) => {
  const target = event.currentTarget.getAttribute("aria-controls");
  const obj = document.querySelector(`#${target}`);
  const backdrop = obj.getAttribute("backdrop");
  const video = obj.querySelector(".play");
  video.load();
  events(video, "canplaythrough", () => {
    setTimeout(() => {
      video.play();
    }, 1750);
  });
  document.querySelector(`#${backdrop}`).classList.add("overlay-transition");
  obj.style.transition = "transform 0.5s cubic-bezier(0.66, 0.01, 0.27, 0.84)";
  obj.classList.add("overlay-fixed");
  event.currentTarget.setAttribute("aria-expanded", true);
  obj.setAttribute("aria-expanded", true);
  if (window.inst) window.inst.classList.add("has-right");
};

const close = (event) => {
  const target = event.currentTarget.getAttribute("target");
  const controlls = event.currentTarget.getAttribute("controlls");
  const obj = document.querySelector(`#${controlls}`);
  obj.style.transition = "transform 0.5s cubic-bezier(0.66, 0.01, 0.27, 0.84)";
  const video = obj.querySelector(".play");
  setTimeout(() => {
    video.load();
  }, 500);
  obj.classList.remove("overlay-fixed");
  obj.setAttribute("aria-expanded", false);
  document.querySelector(`#${target}`).setAttribute("aria-expanded", false);
  for (const item of document.querySelectorAll(".overlay-backdrop")) {
    item.classList.remove("overlay-transition");
  }
  if (window.inst) setTimeout(()=>{
    window.inst.classList.remove("has-right");
  }, 500);
};

const next = (event) => {
  const targetPrevious = event.currentTarget.getAttribute("target_previous");
  const controllsPrevious = event.currentTarget.getAttribute("controlls_previous");
  const targetCurrent = event.currentTarget.getAttribute("target_current");
  const controllsCurrent = event.currentTarget.getAttribute("controlls_current");
  const objPrevious = document.querySelector(`#${controllsPrevious}`);
  const objCurrent = document.querySelector(`#${controllsCurrent}`);
  objPrevious.classList.remove("overlay-fixed");
  objPrevious.setAttribute("aria-expanded", false);
  objPrevious.style.transition = "transform 0.5s cubic-bezier(0.66, 0.01, 0.27, 0.84)";
  objCurrent.style.transition = "transform 0.5s cubic-bezier(0.66, 0.01, 0.27, 0.84) 0.5s";
  const videoPrevious = objPrevious.querySelector(".play");
  setTimeout(() => {
    videoPrevious.load();
  }, 500);
  document.querySelector(`#${targetPrevious}`).setAttribute("aria-expanded", false);
  objCurrent.classList.add("overlay-fixed");
  objCurrent.setAttribute("aria-expanded", true);
  const videoCurrent = objCurrent.querySelector(".play");
  videoCurrent.load();
  events(videoCurrent, "canplaythrough", () => {
    setTimeout(() => {
      videoCurrent.play();
    }, 1750);
  });
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
  const pause_video = document.querySelectorAll(".pause-video");
  const play_video = document.querySelectorAll(".play-video");
  const controlls = document.querySelectorAll(".controlls");

  if (play.length === 0 || overlay_body.length === 0 || overlay_open.length === 0 || overlay_close.length === 0 || overlay_next.length === 0 || overlay_prev.length === 0 || overlay_backdrop.length === 0 || pause_video.length === 0 || play_video.length === 0 ||  controlls.length === 0 ) {
    return;
  }

  for (let i = 0; i < overlay_open.length; i++) {

    play.controls = false;
    overlay_open[i].setAttribute("aria-expanded", false);
    const string = `${overlay_body[i].id}`;
    overlay_open[i].setAttribute("aria-controls", string);
    overlay_close[i].setAttribute("target", "overlay_open-" + i);
    overlay_close[i].setAttribute("controlls", string);
    overlay_body[i].setAttribute("backdrop", `${overlay_backdrop[i].id}`);
    
    if (overlay_next[i]) {
      overlay_next[i].setAttribute("target_previous", "overlay_open-" + i);
      overlay_next[i].setAttribute("controlls_previous", string);
      const index = i + 1;
      overlay_next[i].setAttribute("target_current", "overlay_open-" + index);
      overlay_next[i].setAttribute("controlls_current", `${overlay_body[index].id}`);
    }

    if (overlay_prev[i]) {
      const index = i + 1;
      overlay_prev[i].setAttribute("target_previous", "overlay_open-" + index);
      overlay_prev[i].setAttribute("controlls_previous", `${overlay_body[index].id}`);
      overlay_prev[i].setAttribute("target_current", "overlay_open-" + index);
      overlay_prev[i].setAttribute("controlls_current", string);
    }

    const video_state = () => {

      const pause_video = document.querySelectorAll(".pause-video")[i];
      const play_video = document.querySelectorAll(".play-video")[i];
      const video = document.querySelectorAll(".play")[i];

      pause_video.classList.toggle("has-pause");
      play_video.classList.toggle("has-play");

      if (video.paused) { 
        video.play(); 
      } else { 
        video.pause();
      }
    };

    events(overlay_open[i], "click", open);
    events(overlay_close[i], "click", close);
    events(overlay_next[i], "click", next);
    events(overlay_prev[i], "click", next);
    events(controlls[i], "click", video_state);
  }

  for (const index of overlay_body) {

    OverlayScrollbars(index, {

      overflow: {
        x: "hidden",
      },
      scrollbars: {
      theme: "os-theme-overlay",
    }});
  };
};
