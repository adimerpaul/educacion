<template>
  <q-page class="q-pa-md">
    <q-card flat bordered>
      <q-card-section>
        <div class="row">
          <div class="col-12 col-md-3">
            <span class="text-bold">Area: </span>
            <span>{{poa.area?.nombre}}</span>
          </div>
          <div class="col-6 col-md-3">
            <span class="text-bold">Periodo: </span>
            <span>{{poa.periodo?.periodo}}</span>
          </div>
          <div class="col-6 col-md-3">
            <span class="text-bold">Estado: </span>
            <q-chip :color="poa.estado === 'Abierto' ? 'positive' : 'negative'" dense text-color="white">
              {{poa.estado}}
            </q-chip>
          </div>
          <div class="col-12 col-md-3">
            <span class="text-bold">Fecha: </span>
            <span>{{poa.fecha}}</span>
          </div>
          <div class="col-12"></div>
        </div>
      </q-card-section>
    </q-card>
    <pre>{{poa}}</pre>
<!--    {-->
<!--    "id": 2,-->
<!--    "area_id": 1,-->
<!--    "periodo_id": 1,-->
<!--    "user_id": 1,-->
<!--    "fecha": "2024-11-07 04:21:52",-->
<!--    "estado": "Abierto",-->
<!--    "area": {-->
<!--    "id": 1,-->
<!--    "nombre": "Unidad de Asuntos Administrativos"-->
<!--    },-->
<!--    "periodo": {-->
<!--    "id": 1,-->
<!--    "periodo": 2024,-->
<!--    "fecha_inicio": "2024-01-01",-->
<!--    "fecha_fin": "2024-05-05",-->
<!--    "estado": "Finalizado"-->
<!--    },-->
<!--    "user": {-->
<!--    "id": 1,-->
<!--    "name": "Adminsitrador",-->
<!--    "username": "admin",-->
<!--    "role": "Jefatura",-->
<!--    "cargo": "Empleado",-->
<!--    "email": null,-->
<!--    "area_id": 1-->
<!--    },-->
<!--    "detalles": []-->
<!--    }-->
  </q-page>
</template>
<script>
export default {
  name: 'PoaVisible',
  data() {
    return {
      poa_id: this.$route.params.id,
      poa: {},
    }
  },
  mounted() {
    this.poaGet()
  },
  methods: {
    poaGet() {
      this.$axios.get(`poas/${this.poa_id}`).then(res => {
        this.poa = res.data
      }).catch(error => {
        this.$alert.error(error.response.data.message)
      })
    },
  }
}
</script>
