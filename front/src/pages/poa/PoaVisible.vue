<template>
  <q-page class="q-pa-md">
    <pre>{{poa}}</pre>
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
