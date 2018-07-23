// Cache files.
self.addEventListener('install', function(event) {
    event.waitUntil(
        caches.open('fi').then(function(cache) {
            return cache.addAll([
                './', // The current directory (fi).
                '/style.css' // The root style sheet.
            ]);
        })
    );
});

// Response with cache (if available).
self.addEventListener('fetch', function(event) {
    event.respondWith(
        caches.match(event.request).then(function(response) {
            if (response) {
                // Cache hit, return cached response.
                return response;
            }
            return fetch(event.request);
        })
    )
});