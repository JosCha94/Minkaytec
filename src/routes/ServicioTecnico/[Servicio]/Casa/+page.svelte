<div class="container">
  <form action="">
    <h2 class="my-3">Servicio a Casa</h2>
    <h4 class="mb-3">
      Selecciona la dirección en el mapa o indica la direccion en la caja de
      texto
    </h4>

    <div class="row">
      <div class="col-12 col-md-6">
        <!-- svelte-ignore a11y-missing-attribute -->
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15308.721884520657!2d-71.53678579999999!3d-16.415658249999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1677000899171!5m2!1ses-419!2spe"
          width="600"
          height="450"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        />
      </div>
      <div class="col-12 col-md-6 bg-body">
        <div class="form-floating">
          <textarea
            class="form-control"
            placeholder="Leave a comment here"
            id="floatingTextarea2"
            style="height: 100px"
          />
          <label for="floatingTextarea2">Indica la dirección</label>
        </div>
      </div>
    </div>
    <h4 class="my-3">
      Indica la Hora y fecha propuesta para mostrar los tecnicos disponibles
    </h4>

    <div class="row mb-3">
      <div class="col-12 col-md-6">
        <form action="#" method="post">
          <div class="mb-3">
            <label for="horaPropuesta" class="form-label"
              >Hora propuesta
            </label><small id="requerido" class="text-danger"> * </small>
            <input
              type="time"
              class="form-control"
              id="horaPropuesta"
              min="08:00"
              max="22:00"
              required
            />
          </div>
          <div class="mb-3">
            <label for="fechaPropuesta" class="form-label"
              >Fecha propuesta</label
            ><small id="requerido" class="text-danger"> * </small>
            <input
              type="date"
              class="form-control"
              id="fechaPropuesta"
              min="2023-01-01"
              required
            />
          </div>
          <button type="submit" class="btn btn-primary"
            >Mostrar tecnicos sugeridos</button
          >
        </form>
      </div>
      <div class="col-12 col-md-6 bg-body">
        <!-- TECNICOS SUGERIDOS -->
      </div>
      <div class="col-12">
        <h4 class="my-3">Necesitas una atención rapida, haz clic:</h4>
        <button class="btn btn-primary">Pronta atención</button>
      </div>
    </div>
  </form>
</div>
