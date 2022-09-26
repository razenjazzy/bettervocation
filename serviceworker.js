var staticCacheName = "pwa-v" + new Date().getTime();
var filesToCache = [
    // '/offline',
    //
    // '/public/images/icons/icon-72x72.png',
    // '/public/images/icons/icon-96x96.png',
    // '/public/images/icons/icon-128x128.png',
    // '/public/images/icons/icon-144x144.png',
    // '/public/images/icons/icon-152x152.png',
    // '/public/images/icons/icon-192x192.png',
    // '/public/images/icons/icon-384x384.png',
    // '/public/images/icons/icon-512x512.png',
    //
    // '/public/css/bootstrap.min.css',
    // '/public/frontend/bettervocationtheme/css/owl.carousel.min.css',
    // '/public/frontend/bettervocationtheme/css/magnific-popup.css',
    // '/public/frontend/bettervocationtheme/css/fontawesome.css',
    // '/public/frontend/bettervocationtheme/css/themify-icons.css',
    // '/public/frontend/bettervocationtheme/css/flaticon.css',
    // '/public/frontend/bettervocationtheme/css/nice-select.css',
    // '/public/frontend/bettervocationtheme/css/animate.min.css',
    // '/public/css/toastr.css',
    // '/public/frontend/bettervocationtheme/css/style.css',
    //
    // '/public/js/jquery-3.5.1.min.js',
    // '/public/js/bootstrap.bundle.min.js',
    // '/public/frontend/bettervocationtheme/js/owl.carousel.min.js',
    // '/public/frontend/bettervocationtheme/js/waypoints.min.js',
    // '/public/frontend/bettervocationtheme/js/jquery.counterup.min.js',
    // '/public/frontend/bettervocationtheme/js/imagesloaded.pkgd.min.js',
    // '/public/frontend/bettervocationtheme/js/wow.min.js',
    // '/public/frontend/bettervocationtheme/js/barfiller.js',
    // '/public/frontend/bettervocationtheme/js/jquery.slicknav.js',
    // '/public/frontend/bettervocationtheme/js/jquery.magnific-popup.min.js',
    // '/public/frontend/bettervocationtheme/js/jquery.ajaxchimp.min.js',
    // '/public/frontend/bettervocationtheme/js/parallax.js',
    // '/public/frontend/bettervocationtheme/js/mail-script.js',
    // '/public/frontend/bettervocationtheme/js/main.js',
    // '/public/frontend/bettervocationtheme/js/footer.js',
    // '/public/js/toastr.js',

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