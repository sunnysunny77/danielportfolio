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

import { events } from "./utillites.js";
import { service_worker } from "./service_worker.js";
import { fallback } from "./fallback.js";
import { init } from "./init.js";
import { nav } from "./nav.js";
import { slider_workinner } from "./slider_workinner.js";
import { slider_work } from "./slider_work.js";
import { has_move } from "./has_move.js";
import { copy_tooltip } from "./copy_tooltip.js";

events(window, "load", () => {

  service_worker();
  fallback();
  init();
  nav();
  slider_workinner();
  slider_work();
  has_move();
  copy_tooltip();
});