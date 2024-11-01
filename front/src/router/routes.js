const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/IndexPage.vue') },
      { path: 'almacen', component: () => import('pages/almacen/Almacen.vue') },
      { path: 'gestion', component: () => import('pages/gestion/Gestion.vue') },
      { path: 'poa', component: () => import('pages/poa/Poa.vue') },
    ]
  },
  {
    path: '/login',
    component: () => import('pages/login/Login.vue'),
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/ErrorNotFound.vue')
  }
]

export default routes
