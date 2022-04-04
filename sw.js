// const version = 1;
// let staticName

/* service_worker.js */
const cacheName = 'shibat-students-v1';
const staticAssets = [
	'./',
	'./index.php',
	'./manifest.webmanifest',
	'./icon.ico',
	'./img/Blue Circle Bullet.png',
	'./img/nav logo.png',
	'./img/Red Circle Bullet.png'
];

self.addEventListener('install', async e =>{
	const cache = await caches.open(cacheName);
	await cache.addAll(staticAssets);
	return self.skipWaiting();
});

self.addEventListener('activate', e => {
	self.clients.claim();
});

self.addEventListener('fetch', async e => {
	const req = e.request;
	const url = new URL(req.url);

	if(url.origin == location.origin){
		e.respondWith(cacheFirst(req));
	}
	else{
		e.respondWith(networkAndCache(req));
	}
});

async function cacheFirst(req){
	const cache = await caches.open(cacheName);
	const cached = await cache.match(req);
	return cached || fetch(req);
}

async function networkAndCache(req){
	const cache = await caches.open(cacheName);
	try {
		const fresh = await fetch(req);
		await cache.put(req, fresh.clone());
		return fresh;
	} catch (e) {
		const cached = await cache.match(req);
		return cached;
	}
}

// const offlineCache = 'index.php';
// // Adding the offline page
// // when installing the service worker
// self.addEventListener('install', e => {
// 	// Wait until promise is finished
// 	// Until it get rid of the service worker
// 	e.waitUntil(
// 		caches.open(offlineCache)
// 		.then(cache => {
// 			cache.add(offlineCache)
// 				// When everything is set
// 				.then(() => self.skipWaiting())
// 		})
// 	);
// })

// // Call Activate Event
// self.addEventListener('activate', e => {
// 	console.log('Service Worker - Activated')
// 	e.waitUntil(
// 		caches.keys().then(cacheNames => {
// 			return Promise.all(
// 				cacheNames.map(
// 					cache => {
// 						if (cache !== offlineCache) {
// 							console.log(
// 							'Service Worker: Clearing Old Cache');
// 							return caches.delete(cache);
// 						}
// 					}
// 				)
// 			)
// 		})
// 	);

// });

// // Call Fetch Event
// self.addEventListener('fetch', e => {
// 	console.log('Service Worker: Fetching');
// 	e.respondWith(
// 		// If there is no internet
// 		fetch(e.request).catch((error) =>
// 			caches.match(offlineCache)
// 		)
// 	);
// });
