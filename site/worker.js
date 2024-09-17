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
  "./webfonts/fa-solid-900.woff2",
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
  "./images/pwa-logo.webp",
  "./fallback.php"
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

const cache_video = async (req, res) => {

  const cache = await caches.open(cacheName);
  await cache.put(req, new Response( await res.clone().arrayBuffer(), {
    status: 200,
    statusText: res.statusText,
    headers: res.headers
  }));
};

const cache = async (req, res) => {

  const cache = await caches.open(cacheName);
  const match = await cache.match(req);

  if (match) {

    await cache.put(req, res);
  }
};

const video = async (req) => {

  const match = await caches.match(req);

  if (match) {

   return match;
  }

  try {

    const res = await fetch(req);

    cache_video(req, res);
  
    return res.clone();

  } catch (error) {

    console.log(error);

    return new Response("Network error happened", {
      status: 408,
      headers: { "Content-Type": "text/plain" },
    });
  }
};

const first = async (req) => {

  try {

    const res = await fetch(req);

    cache(req, res.clone());
  
    return res;

  } catch (error) {

    console.log(error);

    const cache = await caches.match(req);
      
    if (cache) {

      return cache;
    }

    const fallback = await caches.match("./fallback.php");
      
    if (fallback) {

      return fallback;
    }

    return new Response("Network error happened", {
      status: 408,
      headers: { "Content-Type": "text/plain" },
    });
  }
};

self.addEventListener("fetch", (event) => {

  console.log("Fetching via Service worker");

  if (event.request.destination === "video") {

    event.respondWith(video(event.request));
  } else {

    event.respondWith(first(event.request));
  }
});