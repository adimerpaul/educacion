if(!self.define){let e,a={};const s=(s,c)=>(s=new URL(s+".js",c).href,a[s]||new Promise((a=>{if("document"in self){const e=document.createElement("script");e.src=s,e.onload=a,document.head.appendChild(e)}else e=s,importScripts(s),a()})).then((()=>{let e=a[s];if(!e)throw new Error(`Module ${s} didn’t register its module`);return e})));self.define=(c,i)=>{const f=e||("document"in self?document.currentScript.src:"")||location.href;if(a[f])return;let n={};const r=e=>s(e,f),o={module:{uri:f},exports:n,require:r};a[f]=Promise.all(c.map((e=>o[e]||r(e)))).then((e=>(i(...e),n)))}}define(["./workbox-37fde244"],(function(e){"use strict";e.setCacheNameDetails({prefix:"educacion"}),self.skipWaiting(),e.clientsClaim(),e.precacheAndRoute([{url:"assets/Almacen.e8180af4.js",revision:"014a8024375a7dd9b17633de2062029a"},{url:"assets/axios.7ce32ec5.js",revision:"02c8ee3b1e388f60e1b877a9515e72b1"},{url:"assets/ClosePopup.84bfd9ea.js",revision:"a05a1c9cf92d5529f207a5739a905bcc"},{url:"assets/ErrorNotFound.acb1a09e.js",revision:"02f4fc40e808dc0d86f40764bb6a54e2"},{url:"assets/fa-brands-400.232c6f6a.woff2",revision:"b55b1345f0b919f0cab774ec25d6654e"},{url:"assets/fa-brands-400.e28096fa.ttf",revision:"b7dee83cb5ee2c47b053e2620f4bbb78"},{url:"assets/fa-regular-400.9174757e.ttf",revision:"3c264849ff4eb9b6e99eab9cd54c80ae"},{url:"assets/fa-regular-400.c27da6f8.woff2",revision:"aa7c5fa494807f7a9ec907defee083e8"},{url:"assets/fa-solid-900.ae17c16a.woff2",revision:"1ec0ba058c021acf7feaa18081445d63"},{url:"assets/fa-solid-900.b4990d0d.ttf",revision:"0a95f951745ba02faa8773ea6a1ebaed"},{url:"assets/fa-v4compatibility.c7a869fa.woff2",revision:"fdb652dcc200dd23b8b8040176858c36"},{url:"assets/fa-v4compatibility.ff8f525f.ttf",revision:"95b97efa98f9e3fb869bc9634c43a0cc"},{url:"assets/flUhRq6tzZclQEJ-Vdg-IuiaDsNa.fd84f88b.woff",revision:"3e1afe59fa075c9e04c436606b77f640"},{url:"assets/flUhRq6tzZclQEJ-Vdg-IuiaDsNcIhQ8tQ.4a4dbc62.woff2",revision:"a4160421d2605545f69a4cd6cd642902"},{url:"assets/format.11943369.js",revision:"ef157f9ed49451192fed3cc739d82b02"},{url:"assets/Gestion.85e7eadf.js",revision:"72c05ccbce1a1f8a0245e2465719c1bd"},{url:"assets/gok-H7zzDkdnRel8-DQ6KAXJ69wP1tGnf4ZGhUcel5euIg.35dca8a7.woff2",revision:"0ba49c096a77b67734434cebcaf2e14d"},{url:"assets/gok-H7zzDkdnRel8-DQ6KAXJ69wP1tGnf4ZGhUcY.8e94758c.woff",revision:"0e4321a7c0dda51d72a669ac5892fc39"},{url:"assets/index.887e7340.js",revision:"b34050582417fccd26bc1a153f12532a"},{url:"assets/index.cc560c54.css",revision:"99b2764f36e69b1276a30592e56548c0"},{url:"assets/IndexPage.61e435ed.js",revision:"f705b0cb1ab005f51c6c49f766d0bdbf"},{url:"assets/KFOkCnqEu92Fr1MmgVxIIzQ.34e9582c.woff",revision:"4aa2e69855e3b83110a251c47fdd05fc"},{url:"assets/KFOlCnqEu92Fr1MmEU9fBBc-.9ce7f3ac.woff",revision:"40bcb2b8cc5ed94c4c21d06128e0e532"},{url:"assets/KFOlCnqEu92Fr1MmSU5fBBc-.bf14c7d7.woff",revision:"ea60988be8d6faebb4bc2a55b1f76e22"},{url:"assets/KFOlCnqEu92Fr1MmWUlfBBc-.e0fd57c0.woff",revision:"0774a8b7ca338dc1aba5a0ec8f2b9454"},{url:"assets/KFOlCnqEu92Fr1MmYUtfBBc-.f6537e32.woff",revision:"bcb7c7e2499a055f0e2f93203bdb282b"},{url:"assets/KFOmCnqEu92Fr1Mu4mxM.f2abf7fb.woff",revision:"d3907d0ccd03b1134c24d3bcaf05b698"},{url:"assets/Login.6efa916c.js",revision:"bb17200c32b007f82f6a64848ec819ce"},{url:"assets/MainLayout.4c5417b9.css",revision:"b4eebf8b52735244fcbd8842fdc93182"},{url:"assets/MainLayout.b615fd70.js",revision:"e18fdc08d75282d01255e6d6aa4d400e"},{url:"assets/moment.59a6ec3d.js",revision:"ebd567c4574625e1aaa4257da57a3f86"},{url:"assets/Poa.dfe9f238.js",revision:"b93dac8f768c0a83f5ff39332812f79d"},{url:"assets/PoaVisible.50bef31f.js",revision:"94208d89162fc08e7344380d4edb727b"},{url:"assets/QBtnDropdown.34d527a5.js",revision:"4ab5e69288eba7a15d31c3e5c4d06dd8"},{url:"assets/QForm.7e0453cf.js",revision:"d2425358a82861d5340eb310d097fbb2"},{url:"assets/QLayout.72bfdd1e.js",revision:"85db0dc176731f8a95bb2902c0ebf6d3"},{url:"assets/QMarkupTable.b4b26b14.js",revision:"c2ac0aefdf02ce4d22abac0941d0b8fd"},{url:"assets/QPage.aa820381.js",revision:"6d1fb586550ed4613f3d9581a90b3b35"},{url:"assets/QToolbar.bfb8e013.js",revision:"39a732deeae2c965d1e5e28f2dcd1142"},{url:"assets/quasar-logo-vertical.20d65235.svg",revision:"df53e3410a5844071decf476ecad7f78"},{url:"assets/Usuarios.a694f0c8.js",revision:"10070942124a336205cfb1150edbbc6a"},{url:"dark-logo-text-CiIbURQ-.svg",revision:"469169c5cd3986843cb7b154c7dfa0fb"},{url:"favicon.ico",revision:"832aa306811e28363d3b8574bd5c8147"},{url:"icon.svg",revision:"443b4df8a657ab06a88bf22574414471"},{url:"icons/apple-icon-120x120.png",revision:"052900a056806097380aba15f7e27a72"},{url:"icons/apple-icon-152x152.png",revision:"79e86644e28e3168ee21f08880e177f7"},{url:"icons/apple-icon-167x167.png",revision:"4951e54b4f6308b2d053bf68cd1f78e6"},{url:"icons/apple-icon-180x180.png",revision:"fe3c931d7386f22c8d93f26c85c42a54"},{url:"icons/apple-launch-1080x2340.png",revision:"f10d60b4c885402f75ff31e15eecc945"},{url:"icons/apple-launch-1125x2436.png",revision:"8316565aae98be349c0fb466dfd72b43"},{url:"icons/apple-launch-1170x2532.png",revision:"d1b339bbee40c0ebf36ff34bec8ee7bf"},{url:"icons/apple-launch-1179x2556.png",revision:"a6789d3cebaa670617ce59f8fba0b5ed"},{url:"icons/apple-launch-1242x2208.png",revision:"80ad2fc923051d8108306b362af146a5"},{url:"icons/apple-launch-1242x2688.png",revision:"303c74ab8e0c655ab957b49f991a048b"},{url:"icons/apple-launch-1284x2778.png",revision:"32182f5a5e7bff1831d25ce5d015d71d"},{url:"icons/apple-launch-1290x2796.png",revision:"ab844e256919f72954cb70c399f2f6d2"},{url:"icons/apple-launch-1536x2048.png",revision:"9347fe362e5b9e03db78772b7c051a70"},{url:"icons/apple-launch-1620x2160.png",revision:"5a504f11665140671a981e3e051e0771"},{url:"icons/apple-launch-1668x2224.png",revision:"063af7f49c85f4248c10343b19306187"},{url:"icons/apple-launch-1668x2388.png",revision:"f0c580e46210b01a4031f9b88851a774"},{url:"icons/apple-launch-2048x2732.png",revision:"340cf326d5f1d4ba9611c60d89f7a31f"},{url:"icons/apple-launch-750x1334.png",revision:"62b2bce7f5ed3d61fc740bae623c9601"},{url:"icons/apple-launch-828x1792.png",revision:"a6fc7bde177c32f20497a286109b0805"},{url:"icons/favicon-128x128.png",revision:"4c50d577755c8fd4932b3c3d8f7a8908"},{url:"icons/favicon-16x16.png",revision:"1de94eea03caeb7f4e747b088a4348bf"},{url:"icons/favicon-32x32.png",revision:"76f617bc03dc95a71cb21baf8b7160a3"},{url:"icons/favicon-96x96.png",revision:"28f541198a118e442c888870b073c210"},{url:"icons/icon-128x128.png",revision:"4c50d577755c8fd4932b3c3d8f7a8908"},{url:"icons/icon-192x192.png",revision:"97288832418b076620d8eb27faaf9a97"},{url:"icons/icon-256x256.png",revision:"598e1e027a1c631ea119256e19df27e0"},{url:"icons/icon-384x384.png",revision:"cf9d81172538351a5def277df46a7476"},{url:"icons/icon-512x512.png",revision:"cd6c1bd67865d970a62fba5e002783bf"},{url:"icons/ms-icon-144x144.png",revision:"b7301c869e2acce6ab2cc124e0618ad2"},{url:"icons/safari-pinned-tab.svg",revision:"741975c1eff61f92564234b35a157282"},{url:"index.html",revision:"1f92eb6ba9b7ad1943af8d3ee58ca83d"},{url:"login-bg-BprgzFH_.svg",revision:"f3c50959249b8bd352bb7ccae213a015"},{url:"logo.png",revision:"9871fc3a2c1da9871dd6e1123b52aab9"},{url:"logoLargo.png",revision:"7f6bdd843e4d587b0c7541de81a49eef"},{url:"manifest.json",revision:"ad633d2463752c1e5441b56aebbb7ab0"}],{}),e.cleanupOutdatedCaches(),e.registerRoute(new e.NavigationRoute(e.createHandlerBoundToURL("index.html"),{denylist:[/sw\.js$/,/workbox-(.)*\.js$/]}))}));
