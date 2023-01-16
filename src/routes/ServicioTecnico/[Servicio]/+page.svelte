<script>
  import Servicio from "../../../components/CardServ.svelte";
  import { page } from '$app/stores';
  console.log($page.params);
  let service = $page.params.Servicio;
</script>

<div class="container my-4">
  <h1 class="text-center my-5">{service}</h1>
  <div class="row">
    <div class="col-12 col-md-6 mb-4">
      <select
        class="form-select form-select-lg mb-3"
        aria-label=".form-select-lg example"
      >
        <option selected>Dispositivos</option>
        <option value="computadora">Computadora</option>
        <option value="laptop">LapTop</option>
        <option value="tablet">Tablet</option>
        <option value="smartphone">SmartPhone</option>
      </select>
    </div>
    <div class="col-12 mb-4">
      <p class="fw-semibold">
        Indica las caracteristicas del dispositivo para su {service} e indicanos
        el problema.
      </p>
      <div class="form-floating d-none d-md-block">
        <textarea
          class="form-control w-75"
          placeholder="Leave a comment here"
          id="floatingTextarea2"
          style="height: 100px;"
        />
        <label for="floatingTextarea2">Caracteristicas</label>
      </div>
      <div class="form-floating d-block d-md-none">
        <textarea
          class="form-control w-100"
          placeholder="Leave a comment here"
          id="floatingTextarea2"
          style="height: 100px;"
        />
        <label for="floatingTextarea2">Caracteristicas</label>
      </div>
    </div>
    <div class="col-12 mb-4">
      <p class="fw-semibold">
        Selecciona el modo de atención para su {service} del dispositivo.
      </p>
        <div class="row d-flex justify-content-around text-center">
            <Servicio servicio="A CASA" image="/src/assets/images/home.svg" />
            <Servicio servicio="REMOTA" image="/src/assets/images/remote.svg" />
        </div>
    </div>
  </div>
</div>
