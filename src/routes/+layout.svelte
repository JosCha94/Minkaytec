<script>
  import "bootstrap/dist/css/bootstrap.min.css";
  import "bootstrap/dist/js/bootstrap.min.js";
  import "bootstrap-icons/font/bootstrap-icons.css";
  // ----------Components-------------
  import Header from "../components/Header.svelte";
  import Footer from "../components/Footer.svelte";
</script>

<div class="app mh-100">
  <Header />

  <main>
    <slot />
  </main>

  <Footer />
</div>
