<script>
export let tipo;
export let image;
export let tipoURL;
</script>

<div
  class="col-12 col-md-4 p-4 d-flex justify-content-center align-items-center"
>
  <!-- <a href="/servicioTecnico/{tipo}" class="text-decoration-none text-dark"> -->
    <a href="{tipoURL}" class="text-decoration-none text-dark">
    <div class="card" style="width: 18rem;">
      <img
        src="{image}"
        class="card-img-top"
        alt="imagen {tipo}"
      />
      <div class="card-body">
        <h2>{tipo}</h2>
      </div>
    </div>
  </a>
</div>


