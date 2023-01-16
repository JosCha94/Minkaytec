<script>
export let servicio;
export let image;
</script>

<div
  class="col-12 col-md-4 p-4 d-flex justify-content-center align-items-center"
>
  <!-- <a href="/servicioTecnico/{servicio}" class="text-decoration-none text-dark"> -->
    <a href={`/ServicioTecnico/${servicio}`} class="text-decoration-none text-dark">
    <div class="card" style="width: 18rem;">
      <img
        src="{image}"
        class="card-img-top"
        alt="imagen {servicio}"
      />
      <div class="card-body">
        <h2>{servicio}</h2>
      </div>
    </div>
  </a>
</div>


