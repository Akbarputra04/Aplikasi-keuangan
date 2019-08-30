
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Akbar putra 2019</span>
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

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url('assets/') ?>vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url('assets/') ?>js/demo/chart-area-demo1.js"></script>
  <script src="<?= base_url('assets/') ?>js/demo/chart-pie-demo1.js"></script>
  
  <!-- Page level plugins -->
  <script src="<?= base_url('assets/') ?>vendor/datatables/jquery.dataTables.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Page level custom scripts -->
  <script>

  $(function () {

    $('.ubah').on('click', function () {

      const id = $(this).data('id');

      $.ajax({

        url: '<?= base_url('admin/getdatamaster') ?>',
        method: 'post',
        data: {
          id: id
        },
        dataType: 'json',
        success: function (data) {

          if (data.pemasukan != 0) {
            $('[name="id"]').val(data.id)
            $('.masuk').prop('checked', true)
            $('[name="kategori"]').val(data.id_kategori)
            $('[name="uang"]').val(data.pemasukan)
            $('[name="keterangan"]').val(data.keterangan)
          } else {
            $('[name="id"]').val(data.id)
            $('.keluar').prop('checked', true)
            $('[name="kategori"]').val(data.id_kategori)
            $('[name="uang"]').val(data.pengeluaran)
            $('[name="keterangan"]').val(data.keterangan)
          }

        }

      });

    });

    $('.hapus').on('click', function () {

      const id = $(this).data('id')

      $('.id').val(id)

    });

    $('.ubahkategori').on('click', function () {
      
      $('.modal-title').html('Ubah kategori')
      $('form').attr('action', '<?= base_url('admin/ubahkategori') ?>')
      $('form div:nth-child(3), form div:nth-child(5)').addClass('d-none')
      $('form div:nth-child(2) input, form div:nth-child(3) select, form div:nth-child(5) textarea').attr('required', false)
      $('form div:nth-child(4) label').html('Nama kategori')
      $('form div:nth-child(4) input').attr('type', 'text').attr('name', 'kategori').attr('placeholder', 'masukkan nama kategori')

      const id = $(this).data('id')

      $.ajax({

        url : '<?= base_url('admin/getdatakategori') ?>',
        method : 'post',
        data : {id : id},
        dataType : 'json',
        success : function (data) {

          $('.id').val(data.id_kategori)
          $('[name="kategori"]').val(data.nama_kategori)

        }

      });
      

    });

    $('.hapuskategori').on('click', function () {

      $('.modal-title').html('Hapus kategori')
      $('form').attr('action', '<?= base_url('admin/hapuskategori') ?>')

      const id = $(this).data('id')

      $('.id').val(id)

    });

  });

  
  </script>
  <script>
    $(document).ready(function() {
      $('table.dataTable').DataTable( {
            "scrollY"       : "200px",
            "scrollCollapse": true,
            "paging"        : true,
            "ordering"      : false
        } );
      $('a[data-toggle="tab"]').on( 'shown.bs.tab', function (e) {
        $($.fn.dataTable.tables( true ) ).css('width', '100%');
        $($.fn.dataTable.tables( true ) ).DataTable().columns.adjust().draw();
      } );
    });
  </script>


</body>

</html>
