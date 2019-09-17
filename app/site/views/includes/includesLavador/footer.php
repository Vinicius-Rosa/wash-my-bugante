<?php

if (!defined('URL')){
    header("location: /");
    exit();
}

?>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; WashMyPossante 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deseja mesmo sair?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecione "Desconectar" abaixo para terminar sua sessão.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="../index.html">Desconectar</a>
        </div>
      </div>
    </div>
  </div>

  <!-- JAVASCRIPT -->
  <script>
              function confirmar() {
                if (document.getElementById('check').checked) {
                  const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                      confirmButton: 'btn btn-success',
                      cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false,
                  })

                  swalWithBootstrapButtons.fire({
                    title: 'Deseja aceitar a lavagem?',
                    text: "Não aceite sem ter certeza. Não seria legal desfazer isso depois :)",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sim, eu aceito!',
                    cancelButtonText: 'Não, cancelar!',
                    reverseButtons: false
                  }).then((result) => {
                    if (result.value) {
                      swalWithBootstrapButtons.fire(
                        'Confirmado!',
                        'Você aceitou esta lavagem.',
                        'success'
                      )
                    } else if (
                      // Read more about handling dismissals
                      result.dismiss === Swal.DismissReason.cancel
                    ) {
                      swalWithBootstrapButtons.fire(
                        'Cancelado!',
                        'Agradescemos a honestidade :)',
                        'error'
                      )
                    }
                  })
                } else {
                  return false;
                }
              }
            </script>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=URL ?>assets/js/vendor/jquery/jquery.min.js"></script>
  <script src="<?=URL ?>assets/js/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=URL ?>assets/js/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=URL ?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?=URL ?>assets/js/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?=URL ?>assets/js/demo/chart-area-demo.js"></script>
  <script src="<?=URL ?>assets/js/demo/chart-pie-demo.js"></script>

  <!-- SweetAlert core JavaScript-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

</body>

</html>