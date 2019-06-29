var staticCacheName = "pwa-n" + new Date().getTime();
var filesToCache = [
    '/offline',
    '/',
    '/css/404.css',
    'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons',
    'https://unpkg.com/nprogress@0.2.0/nprogress.css',
    '/css/bootstrap.css',
    '/css/style.css',
    '/css/font-awesome.min.css',
    '//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900',
    '/css/custom.css',
    '/css/wicked.min.css',

    '/js/app.js',
    'https://unpkg.com/nprogress@0.2.0/nprogress.js',
    '/js/wow.min.js',
    '/js/promise.min.js',

    '/images/icons/icon-48x48.png',
    '/images/icons/icon-96x96.png',
    '/images/icons/icon-144x144.png',
    '/images/icons/icon-192x192.png',
    '/images/icons/icon-256x256.png',
    '/images/icons/icon-384x384.png',
    '/images/icons/icon-512x512.png',

    '/images/neigh-logo.jpeg',
    '/images/bg.png',
    '/images/bg1.jpg',
    //other images for the system
    '/images/Team1.jpeg',
    '/images/Team2.jpeg',
    '/images/Team3.jpeg',
    '/images/Team4.jpeg',
    '/images/Team5.jpeg',
    '/images/Team6.jpeg',

    //no 14 or 25
    '/images/project1.jpeg',
    '/images/project2.jpeg',
    '/images/project3.jpeg',
    '/images/project4.jpeg',
    '/images/project5.jpeg',
    '/images/project6.jpeg',
    '/images/project7.jpeg',
    '/images/project8.jpeg',
    '/images/project9.jpeg',
    '/images/project10.jpeg',
    '/images/project11.jpeg',
    '/images/project12.jpeg',
    '/images/project13.jpeg',
    '/images/project15.jpeg',
    '/images/project16.jpeg',
    '/images/project17.jpeg',
    '/images/project18.jpeg',
    '/images/project19.jpeg',
    '/images/project20.jpeg',
    '/images/project21.jpeg',
    '/images/project22.jpeg',
    '/images/project23.jpeg',
    '/images/project24.jpeg',
    '/images/project26.jpeg',
    '/images/project27.jpeg',

    '/images/sterling.png',
    '/images/greco.ico',
    '/images/jsdsolar.jpeg',
    '/images/loading.gif',
    '/images/detech.png',
    '/images/fipronet.png',
    '/images/1stbeam.jpeg',
];

// Cache on install
self.addEventListener("install", event => {
    this.skipWaiting();
    event.waitUntil(
        caches.open(staticCacheName)
            .then(cache => {
                return cache.addAll(filesToCache);
            })
    )
});

// Clear cache on activate
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames
                    .filter(cacheName => (cacheName.startsWith("pwa-")))
                    .filter(cacheName => (cacheName !== staticCacheName))
                    .map(cacheName => caches.delete(cacheName))
            );
        })
    );
});

// Serve from Cache
self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request)
            .then(response => {
                return response || fetch(event.request);
            })
            .catch(() => {
                return caches.match('offline');
            })
    )
});