<template>
  <q-layout view="hHh Lpr lFf">
    <q-header
      class="bg-white text-primary"
      bordered
    >
      <q-toolbar>
        <q-btn
          flat
          dense
          round
          icon="menu"
          aria-label="Menu"
          @click="toggleLeftDrawer"
        />

        <q-toolbar-title>
          <q-btn no-caps flat dense round icon="o_search" />
<!--          {{ rutaActual }}-->
        </q-toolbar-title>
        <div>
<!--          Quasar v{{ $q.version }}-->
          <q-btn-group flat>
            <q-btn no-caps icon="o_notifications" />
            <q-btn no-caps icon="o_account_circle" />
          </q-btn-group>
        </div>
      </q-toolbar>
    </q-header>

    <q-drawer
      v-model="leftDrawerOpen"
      show-if-above
      :width="200"
      :breakpoint="500"
      class="bg-primary text-white"
    >
      <q-list>
        <q-item>
          <q-item-section avatar>
            <q-icon name="account_circle" size="2em" />
          </q-item-section>
          <q-item-section>
            <q-item-label>Administrador</q-item-label>
            <q-item-label caption class="text-grey"> Distrital </q-item-label>
          </q-item-section>
        </q-item>
        <q-separator  class="bg-white" inset />
        <q-item-label header class="text-white">
          Opciones
        </q-item-label>

<!--        <EssentialLink-->
<!--          v-for="link in linksList"-->
<!--          :key="link.title"-->
<!--          v-bind="link"-->
<!--        />-->
        <q-item v-for="link in linksList" :key="link.title" clickable :to="link.link" exact
                class="text-grey"
                active-class="menu"
        >
          <q-item-section avatar>
            <q-icon :name="$route.path === link.link ? 'o_' + link.icon : link.icon"
                    :class="$route.path === link.link ? 'text-white' : ''"/>
          </q-item-section>
          <q-item-section>
            <q-item-label :class="$route.path === link.link ? 'text-white text-bold' : ''">
              {{ link.title }}
            </q-item-label>
          </q-item-section>
        </q-item>
        <q-item clickable class="text-red">
          <q-item-section avatar>
            <q-icon name="exit_to_app" />
          </q-item-section>
          <q-item-section>
            <q-item-label>Salir</q-item-label>
          </q-item-section>
        </q-item>
      </q-list>
    </q-drawer>

    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>
<script>
export default {
  name: 'MainLayout',
  data () {
    return {
      leftDrawerOpen: false,
      linksList: [
        {title: 'Principal', icon: 'home', link: '/'},
        {title: 'Gestion', icon: 'settings', link: '/gestion'},
        {title: 'Usuarios', icon: 'people', link: '/usuarios'},
        {title: 'Almacen', icon: 'store', link: '/almacen'},
        {title: 'Poa', icon: 'assignment', link: '/poa'}
      ]
    }
  },
  methods: {
    toggleLeftDrawer () {
      this.leftDrawerOpen = !this.leftDrawerOpen
    }
  },
  computed: {
    rutaActual () {
      return this.$route.path
    }
  }
}
</script>
<style>
.menu{
  background-color: #1976D2;
  border-radius: 10px;
  margin: 5px;
  padding: 5px
}
</style>
