<template>
  <q-page class="q-pa-md">
    <q-table :rows="users" :columns="columns" dense wrap-cells flat bordered :rows-per-page-options="[0]"
              title="Usuarios">
      <template v-slot:top-right>
        <q-toolbar>
          <q-space />
          <q-btn color="primary" label="Nuevo" @click="newPeriodo" outline no-caps size="10px" icon="add_circle_outline" :loading="loading" />
        </q-toolbar>
      </template>
      <template v-slot:body-cell-actions="props">
        <q-td :props="props">
          <q-btn-group flat>
            <q-btn color="primary" icon="edit" @click="userEdit(props.row)" dense size="10px" />
            <q-btn color="negative" icon="delete" @click="userDelete(props.row.id)" dense size="10px" />
          </q-btn-group>
        </q-td>
      </template>
      <template v-slot:body-cell-estado="props">
        <q-td :props="props">
          <q-chip :label="props.row.estado"
                  :color="props.row.estado === 'Vigente' ? 'green' : props.row.estado === 'Próximo' ? 'orange' : 'red'"
                  text-color="white" dense  size="14px"/>
        </q-td>
      </template>
    </q-table>
    <q-dialog v-model="userDialog" persistent>
      <q-card>
        <q-card-section class="q-pb-none row items-center">
          <div>
            {{ actionPeriodo }} user
          </div>
          <q-space />
          <q-btn icon="close" flat round dense @click="userDialog = false" />
        </q-card-section>
        <q-card-section class="q-pt-none">
          <q-form @submit="user.id ? userPut() : userPost()">
            <!--            <q-input v-model="user.user" label="Periodo" outlined dense />-->
            <q-select v-model="user.user" label="Periodo" outlined dense :options="peridosSelect" />
            <q-input v-model="user.fecha_inicio" label="Fecha inicio" type="date" outlined dense />
            <q-input v-model="user.fecha_fin" label="Fecha fin" type="date" outlined dense />
            <div>
              <q-btn color="primary" label="Guardar" type="submit" no-caps :loading="loading" />
              <q-btn color="negative" label="Cancelar" @click="userDialog = false" no-caps :loading="loading" />
            </div>
          </q-form>
        </q-card-section>
      </q-card>
    </q-dialog>
    <pre>{{ users }}</pre>
<!--    [-->
<!--    {-->
<!--    "id": 11,-->
<!--    "name": "Sofía Santillán",-->
<!--    "username": "mora.adrian",-->
<!--    "role": "Area",-->
<!--    "email": "uzambrano@example.org",-->
<!--    "area_id": 7,-->
<!--    "area": {-->
<!--    "id": 7,-->
<!--    "nombre": "Area 7"-->
<!--    }-->
<!--    },-->
  </q-page>
</template>
<script>
import moment from 'moment'
export default {
  name: 'UsuariosPage',
  data() {
    return {
      users: [],
      user: {},
      userDialog: false,
      loading: false,
      actionPeriodo: '',
      gestiones: [],
      columns: [
        { name: 'actions', label: 'Acciones', align: 'center' },
        { name: 'name', label: 'Nombre', align: 'left', field: 'name' },
        { name: 'username', label: 'Usuario', align: 'left', field: 'username' },
        { name: 'role', label: 'Rol', align: 'left', field: 'role' },
        { name: 'email', label: 'Email', align: 'left', field: 'email' },
        { name: 'area', label: 'Area', align: 'left', field: row => row.area?.nombre },
      ],
      peridosSelect: []
    }
  },
  mounted() {
    this.usersGet()
    let year = moment().year()
    for (let i = year - 5; i <= year + 5; i++) {
      this.peridosSelect.push(i)
    }
  },
  methods: {
    newPeriodo() {
      this.user = {
        user: moment().year(),
        fecha_inicio: moment().format('YYYY-MM-DD'),
        fecha_fin: moment().format('YYYY-MM-DD')
      }
      this.actionPeriodo = 'Nuevo'
      this.userDialog = true
    },
    usersGet() {
      this.loading = true
      this.$axios.get('users').then(res => {
        this.users = res.data
      }).catch(error => {
        this.$alert.error(error.response.data.message)
      }).finally(() => {
        this.loading = false
      })
    },
    gestionGet() {
      this.loading = true
      this.$axios.get('gestiones').then(res => {
        this.gestiones = res.data
        this.loading = false
      }).catch(error => {
        this.$alert.error(error.response.data.message)
        this.loading = false
      })
    },
    userPost() {
      this.loading = true
      this.$axios.post('users', this.user).then(res => {
        this.usersGet()
        this.userDialog = false
        this.$alert.success('Periodo creado')
      }).catch(error => {
        this.$alert.error(error.response.data.message)
      }).finally(() => {
        this.loading = false
      })
    },
    userPut() {
      this.loading = true
      this.$axios.put('users/' + this.user.id, this.user).then(res => {
        this.usersGet()
        this.userDialog = false
        this.$alert.success('Periodo actualizado')
      }).catch(error => {
        this.$alert.error(error.response.data.message)
      }).finally(() => {
        this.loading = false
      })
    },
    userEdit(user) {
      this.user = { ...user }
      this.actionPeriodo = 'Editar'
      this.userDialog = true
    },
    userDelete(id) {
      this.$alert.dialog('¿Desea eliminar el user?')
        .onOk(() => {
          this.loading = true
          this.$axios.delete('users/' + id).then(res => {
            this.usersGet()
            this.$alert.success('Periodo eliminado')
          }).catch(error => {
            this.$alert.error(error.response.data.message)
          }).finally(() => {
            this.loading = false
          })
        })
    }
  }
}
</script>
