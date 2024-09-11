const version = 1;
const cacheName = `portfolio-v${version}`;

const resources = [
  "./",
  "./index.php",
  "./about.php",
  "./favicon.ico",
  "./manifest.json",
  "./css/app.min.css",
  "./js/app.min.js",
  "./js/preload.js",
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
  "./images/daniel.webp",
  "./images/pwa-logo-small.webp",
  "./images/pwa-logo.webp"
];

const installResources = async (resources) => {

  const cache = await caches.open(cacheName);
  await cache.addAll(resources);
};

self.addEventListener("install", (event) => {

  console.log("Service worker is installed");
  
  self.skipWaiting();

  event.waitUntil(installResources(resources));
});

const first = async (req) => {

  try {

    const res = await fetch(req);

    if (res) {

      const cache = await caches.open(cacheName);

      if (cache) {

        cache.put(req, res.clone());
      }

      return res;
    }

  } catch (error) {

    console.log(error);

    const cache = await caches.match(req);
      
    if (cache) {

      return cache;
    }

    return new Response("Network error happened", {
      status: 408,
      headers: { "Content-Type": "text/plain" },
    });
  }
};

self.addEventListener("fetch", (event) => {

  console.log("Fetching via Service worker");

  event.respondWith(first(event.request));
});