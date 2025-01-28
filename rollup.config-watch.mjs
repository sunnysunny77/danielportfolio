import { babel } from "@rollup/plugin-babel";
import commonjs from "@rollup/plugin-commonjs";
import { nodeResolve } from "@rollup/plugin-node-resolve";
import terser from "@rollup/plugin-terser";
import livereload from "rollup-plugin-livereload";
import fs from "fs";
//alert"
//button"
//carousel"
//collapse"
//dropdown"
//modal"
//offcanvas"
//popover"
//scrollspy"
//tab"
//toast"
//tooltip"
export default {
  input: "./js/index.js",
  output: [
    {
      file: "./site/js/app.min.js",
      format:  "iife",
      plugins: [terser()]
    }
  ],
  plugins: [
    commonjs({
      include: /node_modules/,
      "overlayscrollbars": ["OverlayScrollbars"],
      "aos": ["AOS"],
      "vivus": ["vivus"],
    }),
    nodeResolve(),
    babel({ babelHelpers: "bundled" }),
    livereload({
      watch: "./site",
      port: 2999,
      https: {
        key: fs.readFileSync("./certs/server.key"),
        cert: fs.readFileSync("./certs/server.crt")
      }
    })
  ]
};