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

self.addEventListener("fetch", (event) => {
  console.log("Fetching via Service worker");

  event.respondWith(
    fetch(event.request)
      .then((networkResponse) => {
        return caches.open(cacheName).then((cache) => {
          cache.put(event.request, networkResponse.clone());
          return networkResponse;
        });
      })
      .catch(() => {
        return caches.match(event.request);
      })
  );
});