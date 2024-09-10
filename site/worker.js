const version = 1;
const cacheName = `portfolio-v${version}`;

const cacheAssets = [
  "./",
  "./index.php",
  "./about.php",
  "./css/app.min.css",
  "./js/app.min.js",
  "./font/NunitoSans.ttf",
  "./webfonts/fa-regular-400.woff2",
  "./images/furniture.webp", 
  "./images/fasera.webp", 
  "./images/access.webp", 
  "./images/daves.webp", 
  "./images/business.webp", 
  "./images/candid.webp", 
  "./images/weather.webp", 
  "./images/sliders.webp", 
  "./images/login.webp",
  "./images/daniel.webp"
];

self.addEventListener("install", (event) => {
  console.log("Service worker is installed");

/* caching all the assets during install event, this is also known as precaching */
  event.waitUntil(
    caches
      .open(cacheName)
      .then((cache) => {
        console.log("Caching assets");
        cache.addAll(cacheAssets);
      })
      .then(() => self.skipWaiting())
  );
});

self.addEventListener("activate", (event) => {
  console.log("Service worker is activated");

  // removes old caches
  event.waitUntil(
    caches.keys().then((cacheNames) => {
      return cacheNames.map((cache) => {
        if (cache !== cacheName) {
          console.log("Clearing old caches");
          caches.delete(cache);
        }
      });
    })
  );
});

self.addEventListener("fetch", (event) => {
  console.log("Fetching via Service worker");
  event.respondWith(
    fetch(event.request).catch(() => caches.match(event.request))
  );
});