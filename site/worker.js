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
        "./font/NunitoSans.ttf"
      ]);
    })
  );
});

self.addEventListener("fetch", event => {
  
  event.respondWith(
      fetch(event.request).catch(() => {
          return caches.match(event.request);
      })
  );
});