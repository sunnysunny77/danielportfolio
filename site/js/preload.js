const preload = (href, as) => {
  const preloadLink = document.createElement("link");
  preloadLink.href = href;
  preloadLink.rel = "preload";
  preloadLink.as = as;
  if (as === "font") {
    preloadLink.crossOrigin = "true";
  }
  document.head.appendChild(preloadLink);
};

const path = location.pathname;

const fonts = [
  "./font/NunitoSans.ttf",
  "./webfonts/fa-regular-400.woff2",
  "./webfonts/fa-solid-900.woff2"
];

const href_work = [
  "./images/furniture.webp", 
  "./images/fasera.webp", 
];

const href_about = [
  "./images/daniel.webp", 
];

if(path.includes("about")) {

  for (const index of fonts) {

    preload(index, "font");
  }
  for (const index of href_about) {

    preload(index, "font");
  }
} else {

  for (const index of fonts) {

    preload(index, "font");
  }
  for (const index of href_work) {

    preload(index, "font");
  }
}