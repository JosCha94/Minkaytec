<script>
  let datosUsuario = {
    idUsuario: null,
    nombres: "",
    apellidos: "",
    tipo_documento: "",
    numero_documento: "",
    telefono: "",
    correo: "",
    password: "",
  };

  let agregarUsuario = async () => {
    const nuevoUsuario = {
      nombres: datosUsuario.nombres,
      apellidos: datosUsuario.apellidos,
      tipo_documento: datosUsuario.tipo_documento,
      numero_documento: datosUsuario.numero_documento,
      telefono: datosUsuario.telefono,
      correo: datosUsuario.correo,
      password: datosUsuario.password,
    };

    const respuesta = await fetch(
      "http://localhost/Minkaytec/Laravel_minkaytec_api/public/api/usuariocreate",
      {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(nuevoUsuario),
      }
    );
    const data = await respuesta.json();
    alert(data.message);
    if (data.estado == 1) {      
      datosUsuario = {};
    }
  };
</script>

<header class="sticky-top">
  <!-- <div class="container"> -->
  <!-- <nav class="navbar navbar-expand-lg bg-body">
      <div class="container-fluid">
        <a href="/" class="d-block d-sm-none w-75">
          <img
            src="/src/assets/images/minkaytec-logo.webp"
            class="img-fluid"
            alt="Minkaytec-Logo"
            style="width:50%"
          />
        </a>
        <a href="/" class="d-none d-sm-block">
          <img
            src="/src/assets/images/minkaytec-logo.webp"
            class="img-fluid"
            alt="Minkaytec-Logo"
            style="width:50%"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon" />
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav w-100 d-flex justify-content-end">
            <a class="nav-link" href="/ServicioTecnico" aria-current="page">Servicio tecnico</a>             
            <a class="nav-link" href="/">Diseñamos</a>
            <a class="nav-link" href="/">Productos</a>
            <a class="nav-link" href="/">Nosotros</a>
          </div>
        </div>
      </div>
    </nav> -->
  <!-- </div> -->
  <nav class="navbar bg-body">
    <div class="container-fluid">
      <a href="/" class="d-block d-sm-none w-75">
        <img
          src="/src/assets/images/minkaytec-logo.webp"
          class="navbar-brand"
          alt="Minkaytec-Logo"
          style="width:50%"
        />
      </a>
      <a href="/" class="d-none d-sm-block">
        <img
          src="/src/assets/images/minkaytec-logo.webp"
          class="navbar-brand ms-md-5"
          alt="Minkaytec-Logo"
          style="width:50%"
        />
      </a>

      <button
        class="navbar-toggler me-md-5"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar"
      >
        <span class="navbar-toggler-icon" />
      </button>
      <div
        class="offcanvas offcanvas-end"
        tabindex="-1"
        id="offcanvasNavbar"
        aria-labelledby="offcanvasNavbarLabel"
      >
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
            <img
              src="/src/assets/images/minkaytec-logo.webp"
              class="navbar-brand"
              alt="Minkaytec-Logo"
              style="width:80%"
            />
          </h5>
          <button
            type="button"
            class="btn-close me-2"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
          />
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/ServicioTecnico">Servicio tecnico</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">Trabajamos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">Diseñamos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">Portafolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">Contactanos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">Nosotros</a>
            </li>
            <li class="nav-item">
              <button
                type="button"
                class="btn btn-link ms-0"
                data-bs-toggle="modal"
                data-bs-target="#modalRegistro"
              >
                Registrarse
              </button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>

<!-- MODAL REGISTRO -->
<div
  class="modal fade"
  id="modalRegistro"
  tabindex="-1"
  aria-labelledby="modalRegistroLabel"
  aria-hidden="true"
>
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalRegistroLabel">
          Registro de nuevo Usuario
        </h1>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        />
      </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="nombres" class="form-label"
              >Nombres <small class="text-danger">*</small></label
            >
            <input
              type="text"
              bind:value={datosUsuario.nombres}
              class="form-control"
              id="nombres"
            />
          </div>
          <div class="mb-3">
            <label for="apellidos" class="form-label"
              >Apellidos <small class="text-danger">*</small></label
            >
            <input
              type="text"
              bind:value={datosUsuario.apellidos}
              class="form-control"
              id="apellidos"
            />
          </div>
          <div class="mb-3">
            <label for="tipo_doc" class="form-label"
              >Tipo de Documento <small class="text-danger">*</small></label
            >
            <select
              class="form-select"
              bind:value={datosUsuario.tipo_documento}
              aria-label="Default select example"
              id="tipo_doc"
            >
              <option>Selecciona el tipo documento</option>
              <option value="DNI">DNI</option>
              <option value="DNI">DNI</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="num_doc" class="form-label"
              >N° del documento <small class="text-danger">*</small></label
            >
            <input
              type="text"
              bind:value={datosUsuario.numero_documento}
              class="form-control"
              id="num_doc"
            />
          </div>
          <div class="mb-3">
            <label for="telefono" class="form-label"
              >Telefono <small class="text-danger">*</small></label
            >
            <input
              type="tel"
              bind:value={datosUsuario.telefono}
              class="form-control"
              id="telefono"
            />
          </div>
          <div class="mb-3">
            <label for="mail" class="form-label"
              >Correo <small class="text-danger">*</small></label
            >
            <input
              type="email"
              bind:value={datosUsuario.correo}
              class="form-control"
              id="mail"
            />
          </div>
          <div class="mb-3">
            <label for="pass" class="form-label"
              >Contraseña <small class="text-danger">*</small></label
            >
            <input
              type="password"
              bind:value={datosUsuario.password}
              class="form-control"
              id="pass"
            />
          </div>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal">Cancelar</button
          >
          <button
            type="button"
            class="btn btn-primary"
            on:click|preventDefault={agregarUsuario}>Registrarse</button
          >
        </div>
    </div>
  </div>
</div>

<style>
  .nav-link {
    /* text-align: center; */
    color: #0079c1;
    font-weight: 500;
  }
  .btn-link {
    color: #0079c1;
    font-weight: 500;
    text-decoration: none;
  }
  .offcanvas-end {
    width: 50%;
  }
  @media (min-width: 768px) {
    .offcanvas-end {
      width: 20%;
    }
  }
</style>
