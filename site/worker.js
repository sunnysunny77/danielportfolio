const version = "v1";

self.addEventListener("install", function(event) {

  event.waitUntil(
    caches.open(version).then(function(cache) {
      return cache.addAll([
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
      ]);
    })
  );
});

self.addEventListener("fetch", event => {

    event.respondWith(caches.open("v1").then((cache) => {

        return fetch(event.request).then((networkResponse) => {

          cache.put(event.request, networkResponse.clone());

          return networkResponse;
        }).catch(() => {

          return caches.match(event.request);
      } );
    }));
});