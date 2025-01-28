// import "bootstrap/js/dist/alert";
// import "bootstrap/js/dist/button";
// import "bootstrap/js/dist/carousel";
// import "bootstrap/js/dist/collapse";
// import "bootstrap/js/dist/dropdown";
// import "bootstrap/js/dist/modal";
// import "bootstrap/js/dist/popover";
// import "bootstrap/js/dist/scrollspy";
// import "bootstrap/js/dist/tab";
// import "bootstrap/js/dist/toast";
// import "bootstrap/js/dist/tooltip";

import { service_worker } from "./service_worker.js";
import { events } from "./utillites.js";
import { copy_tooltip } from "./copy_tooltip.js";
import { nav } from "./nav.js";
import { has_move } from "./has_move.js";
import { fallback } from "./fallback.js";
import { slider_work } from "./slider_work.js";
import { slider_workinner } from "./slider_workinner.js";
import { init } from "./init.js";

events(window, "load", () => {

  slider_workinner();
  slider_work();
  fallback();
  has_move();
  nav();
  copy_tooltip();
  service_worker();
  init();
});