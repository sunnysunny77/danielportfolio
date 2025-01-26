//import "../node_modules/bootstrap/js/dist/alert";
//import "../node_modules/bootstrap/js/dist/button";
//import "../node_modules/bootstrap/js/dist/carousel";
//import "../node_modules/bootstrap/js/dist/collapse";
//import "../node_modules/bootstrap/js/dist/dropdown";
//import "../node_modules/ootstrap/js/dist/modal";
//import "../node_modules/bootstrap/js/dist/offcanvas";
//import "../node_modules/bootstrap/js/dist/popover";
//import "../node_modules/bootstrap/js/dist/scrollspy";
//import "../node_modules/bootstrap/js/dist/tab";
///import "../node_modules/bootstrap/js/dist/toast";
//import "../node_modules/bootstrap/js/dist/tooltip";
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