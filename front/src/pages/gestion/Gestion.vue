<template>
  <q-page class="q-pa-md">
    <q-table :rows="periodos" :columns="columns" dense wrap-cells flat bordered :rows-per-page-options="[0]"
             title="Gestiones">
      <template v-slot:top-right>
        <q-toolbar>
          <q-space />
          <q-btn color="primary" label="Nuevo" @click="newPeriodo" outline no-caps size="10px" icon="add_circle_outline" :loading="loading" />
        </q-toolbar>
      </template>
      <template v-slot:body-cell-actions="props">
        <q-td :props="props">
          <q-btn-group flat>
            <q-btn color="primary" icon="edit" @click="periodoEdit(props.row)" dense size="10px" />
            <q-btn color="negative" icon="delete" @click="periodoDelete(props.row.id)" dense size="10px" />
            <q-btn color="primary" icon="print" @click="imprimirf1(props.row)" dense size="10px" />
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
    <q-dialog v-model="periodoDialog" persistent>
      <q-card style="min-width: 70vw">
        <q-card-section class="q-pb-none row items-center">
          <div class="text-subtitle2">
            {{ actionPeriodo }} periodo
          </div>
          <q-space />
          <q-btn icon="close" flat round dense @click="periodoDialog = false" />
        </q-card-section>
        <q-card-section class="q-pt-none">
          <q-form @submit="periodo.id ? periodoPut() : periodoPost()">
            <q-card flat bordered class="q-pa-md">
            <div class="row">
              <div class="col-12 text-subtitle2">
                Gestión
              </div>
              <div class="col-12 col-md-4">
                <q-select v-model="periodo.periodo" label="Periodo" outlined dense :options="peridosSelect"  />
              </div>
              <div class="col-12 col-md-4">
                <q-input v-model="periodo.fechaInicio" label="Fecha inicio" type="date" outlined dense  />
              </div>
              <div class="col-12 col-md-4">
                <q-input v-model="periodo.fechaFin" label="Fecha fin" type="date" outlined dense  />
              </div>
            </div>
            </q-card>
<!--            FORMULARIO Nro. 1-->
            <q-card flat bordered class="q-pa-md q-mt-md">
              <div class="row">
                <div class="col-12 text-subtitle2">
                  Formulario Nro. 1
                </div>
                <div class="col-12 col-md-4">
                  <q-input type="textarea" v-model="periodo.accionInstitucional" label="Acción institucional" outlined dense />
                </div>
                <div class="col-12 col-md-4">
                  <q-input type="textarea" v-model="periodo.accionCortoPlazo" label="Acción a corto plazo" outlined dense />
                </div>
                <div class="col-12 col-md-4">
                  <q-input type="textarea" v-model="periodo.resultadoEsperado1" label="Resultado esperado 1" outlined dense />
                </div>
                <div class="col-12 col-md-4">
                  <q-input type="textarea" v-model="periodo.resultadoEsperado2" label="Resultado esperado 2" outlined dense />
                </div>
                <div class="col-12 col-md-4">
                  <q-input v-model="periodo.totalPresupuesto" label="Total presupuesto" outlined dense />
                </div>
              </div>
            </q-card>
<!--            FORMULARIO Nro. 2-->
            <q-card flat bordered class="q-pa-md q-mt-md">
              <div class="row">
                <div class="col-12 text-subtitle2">
                  Formulario Nro. 2
                </div>
                <div class="col-12 col-md-4">
                  <q-input type="textarea" v-model="periodo.accionCortoPlazo1" label="Acción a corto plazo 1" outlined dense />
                </div>
                <div class="col-12 col-md-4">
                  <q-input type="textarea" v-model="periodo.accionCortoPlazo2" label="Acción a corto plazo 2" outlined dense />
                </div>
                <div class="col-12 col-md-4">
                  <q-input type="textarea" v-model="periodo.accionCortoPlazo3" label="Acción a corto plazo 3" outlined dense />
                </div>
                <div class="col-12 col-md-4">
                  <q-input type="textarea" v-model="periodo.resultadoEsperadoGestion1" label="Resultado esperado gestión 1" outlined dense />
                </div>
                <div class="col-12 col-md-4">
                  <q-input type="textarea" v-model="periodo.resultadoEsperadoGestion2" label="Resultado esperado gestión 2" outlined dense />
                </div>
                <div class="col-12 col-md-4">
                  <q-input type="textarea" v-model="periodo.resultadoEsperadoGestion3" label="Resultado esperado gestión 3" outlined dense />
                </div>
                <div class="col-12 col-md-4">
                  <q-input type="textarea" v-model="periodo.resultadoEsperadoGestion4" label="Resultado esperado gestión 4" outlined dense />
                </div>
                <div class="col-12 col-md-4">
                  <q-input type="textarea" v-model="periodo.resultadoEsperadoGestion5" label="Resultado esperado gestión 5" outlined dense />
                </div>
                <div class="col-12 col-md-4">
                  <q-input v-model="periodo.fechaPrevistaInicio1" label="Fecha prevista inicio 1" type="date" outlined dense />
                </div>
                <div class="col-12 col-md-4">
                  <q-input v-model="periodo.fechaPrevistaInicio2" label="Fecha prevista inicio 2" type="date" outlined dense />
                </div>
                <div class="col-12 col-md-4">
                  <q-input v-model="periodo.fechaPrevistaInicio3" label="Fecha prevista inicio 3" type="date" outlined dense />
                </div>
                <div class="col-12 col-md-4">
                  <q-input v-model="periodo.fechaPrevistaFinalizacion1" label="Fecha prevista finalización 1" type="date" outlined dense />
                </div>
                <div class="col-12 col-md-4">
                  <q-input v-model="periodo.fechaPrevistaFinalizacion2" label="Fecha prevista finalización 2" type="date" outlined dense />
                </div>
                <div class="col-12 col-md-4">
                  <q-input v-model="periodo.fechaPrevistaFinalizacion3" label="Fecha prevista finalización 3" type="date" outlined dense />
                </div>
              </div>
            </q-card>
            <div>
              <q-btn color="negative" label="Cancelar" @click="periodoDialog = false" no-caps :loading="loading" />
              <q-btn color="primary" label="Guardar" type="submit" no-caps :loading="loading" class="q-ml-sm" />
            </div>
          </q-form>
        </q-card-section>
      </q-card>
    </q-dialog>
<!--    <pre>{{ periodos }}</pre>-->
  </q-page>
</template>
<script>
import moment from 'moment'
export default {
  data() {
    return {
      periodos: [],
      periodo: {},
      periodoDialog: false,
      loading: false,
      actionPeriodo: '',
      gestiones: [],
      columns: [
        { name: 'actions', label: 'Acciones', align: 'center' },
        // { name: 'id', label: 'ID', align: 'left', field: 'id', sortable: true },
        { name: 'periodo', label: 'Periodo', align: 'left', field: 'periodo', sortable: true },
        { name: 'estado', label: 'Estado', align: 'left', field: 'estado', sortable: true },
        { name: 'fechaInicio', label: 'Fecha inicio', align: 'left', field: 'fechaInicio', sortable: true },
        { name: 'fechaFin', label: 'Fecha fin', align: 'left', field: 'fechaFin', sortable: true },
      ],
      peridosSelect: []
    }
  },
  mounted() {
    this.periodosGet()
    let year = moment().year()
    for (let i = year - 5; i <= year + 5; i++) {
      this.peridosSelect.push(i)
    }
  },
  methods: {
    newPeriodo() {
      this.periodo = {
      //   $table->integer('periodo');
      // $table->date('fechaInicio');
      // $table->date('fechaFin');
      // $table->string('accionInstitucional')->nullable();
      // $table->string('accionCortoPlazo')->nullable();
      // $table->string('resultadoEsperado1')->nullable();
      // $table->string('resultadoEsperado2')->nullable();
      // $table->string('totalPresupuesto')->nullable();
      // $table->string('accionCortoPlazo1')->nullable();
      // $table->string('accionCortoPlazo2')->nullable();
      // $table->string('accionCortoPlazo3')->nullable();
      // $table->string('resultadoEsperadoGestion1')->nullable();
      // $table->string('resultadoEsperadoGestion2')->nullable();
      // $table->string('resultadoEsperadoGestion3')->nullable();
      // $table->string('resultadoEsperadoGestion4')->nullable();
      // $table->string('resultadoEsperadoGestion5')->nullable();
      // $table->string('fechaPrevistaInicio1')->nullable();
      // $table->string('fechaPrevistaInicio2')->nullable();
      // $table->string('fechaPrevistaInicio3')->nullable();
      // $table->string('fechaPrevistaFinalizacion1')->nullable();
      // $table->string('fechaPrevistaFinalizacion2')->nullable();
      // $table->string('fechaPrevistaFinalizacion3')->nullable();
        periodo: moment().year(),
        fechaInicio: moment().format('YYYY-MM-DD'),
        fechaFin: moment().format('YYYY-MM-DD'),
        accionInstitucional: 'Lograr la participación, corresponsabilidad social comunitaria y armonizada de todos los actores involucrados en la educación en el departamento.',
        accionCortoPlazo: 'Universalizar el Modelo Educativo Socio-Comunitario Productivo (MESCP) y Lograr la participación, corresponsabilidad social comunitaria y armonizada de todos los actores involucrados en la educación en el departamento de Oruro. en la gestión 2020, enmarcado en la cpe, ley n°1178, ley n°070 de educación "avelino siñani - elizardo pérez", d.s. n°813, normas generales para la gestión educativa y normas conexas.',
        resultadoEsperado1: 'Se incentivó la participación activa de padres y madres de familia, y organizaciones sociales en la implementación de los documentos curriculares.',
        resultadoEsperado2: 'Se incentivó la apropiación y funcionamiento de los consejos Educativos.',
        totalPresupuesto: 2186420,
        accionCortoPlazo1: 'Universalizar el Modelo Educativo Socio-Comunitario Productivo (MESCP) y Lograr la participación, corresponsabilidad social comunitaria y armonizada de todos los actores involucrados en la educación en el departamento de Oruro. en la gestión 2020, enmarcado en la cpe, ley n°1178, ley n°070 de educación "avelino siñani - elizardo pérez", d.s. n°813, normas generales para la gestión educativa y normas conexas.',
        accionCortoPlazo2: 'Universalizar el Modelo Educativo Socio-Comunitario Productivo (MESCP) y Lograr la participación, corresponsabilidad social comunitaria y armonizada de todos los actores involucrados en la educación en el departamento de Oruro. en la gestión 2020, enmarcado en la cpe, ley n°1178, ley n°070 de educación "avelino siñani - elizardo pérez", d.s. n°813, normas generales para la gestión educativa y normas conexas.',
        accionCortoPlazo3: 'Universalizar el Modelo Educativo Socio-Comunitario Productivo (MESCP) y Lograr la participación, corresponsabilidad social comunitaria y armonizada de todos los actores involucrados en la educación en el departamento de Oruro. en la gestión 2020, enmarcado en la cpe, ley n°1178, ley n°070 de educación "avelino siñani - elizardo pérez", d.s. n°813, normas generales para la gestión educativa y normas conexas.',
        resultadoEsperadoGestion1: 'Se incentivó la participación activa de padres y madres de familia, y organizaciones sociales en la implementación de los documentos curriculares.',
        resultadoEsperadoGestion2: 'Se incentivó la apropiación y funcionamiento de los consejos Educativos.',
        resultadoEsperadoGestion3: 'Se incentivó la participación activa de padres y madres de familia, y organizaciones sociales en la implementación de los documentos curriculares.',
        resultadoEsperadoGestion4: 'Se incentivó la apropiación y funcionamiento de los consejos Educativos.',
        resultadoEsperadoGestion5: 'Se incentivó la participación activa de padres y madres de familia, y organizaciones sociales en la implementación de los documentos curriculares.',
        fechaPrevistaInicio1: '2020-01-01',
        fechaPrevistaInicio2: '2020-01-01',
        fechaPrevistaInicio3: '2020-01-01',
        fechaPrevistaFinalizacion1: '2020-12-31',
        fechaPrevistaFinalizacion2: '2020-12-31',
        fechaPrevistaFinalizacion3: '2020-12-31',
      }
      this.actionPeriodo = 'Nuevo'
      this.periodoDialog = true
    },
    periodosGet() {
      this.loading = true
      this.$axios.get('periodos').then(res => {
        this.periodos = res.data
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
    periodoPost() {
      this.loading = true
      this.$axios.post('periodos', this.periodo).then(res => {
        this.periodosGet()
        this.periodoDialog = false
        this.$alert.success('Periodo creado')
      }).catch(error => {
        this.$alert.error(error.response.data.message)
      }).finally(() => {
        this.loading = false
      })
    },
    periodoPut() {
      this.loading = true
      this.$axios.put('periodos/' + this.periodo.id, this.periodo).then(res => {
        this.periodosGet()
        this.periodoDialog = false
        this.$alert.success('Periodo actualizado')
      }).catch(error => {
        this.$alert.error(error.response.data.message)
      }).finally(() => {
        this.loading = false
      })
    },
    periodoEdit(periodo) {
      this.periodo = { ...periodo }
      this.actionPeriodo = 'Editar'
      this.periodoDialog = true
    },
    imprimirf1(periodo) {
      const url = this.$url + 'formulario1/' + periodo.id
      window.open(url, '_blank')
    },
    periodoDelete(id) {
      this.$alert.dialog('¿Desea eliminar el periodo?')
        .onOk(() => {
          this.loading = true
          this.$axios.delete('periodos/' + id).then(res => {
            this.periodosGet()
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
