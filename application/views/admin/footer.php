 <!-- Footer -->
 <footer class="sticky-footer bg-white">
     <div class="container my-auto">
         <div class="copyright text-center my-auto">
             <span>Copyright &copy; Your Website 2020</span>
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
                 <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <a class="btn btn-primary" href="<?= base_url(); ?>">Logout</a>
             </div>
         </div>
     </div>
 </div>


 <!-- edit  Modal-->
 <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <a class="btn btn-primary" href="login.html">Logout</a>
             </div>
         </div>
     </div>
 </div>

 <!-- hapus  Modal-->
 <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Perhatian</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">Apakah anda yakin untuk menghapus data ini?.</div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                 <a class="btn btn-primary" href="login.html">Hapus</a>
             </div>
         </div>
     </div>
 </div>

 <!-- Modal -->
 <div id="hapusmodal" class="modal fade" role="dialog">
     <div class="modal-dialog">

         <!-- Modal content-->
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title"> Hapus</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body formhapus">
             </div>

             <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             </div>
         </div>
     </div>
 </div>

 <!-- Modal -->
 <div id="rubahmodal" class="modal fade" role="dialog">
     <div class="modal-dialog">

         <!-- Modal content-->
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title"> Rubah</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body formrubah">
             </div>
         </div>
     </div>
 </div>

 <!-- Bootstrap core JavaScript-->
 <script type='text/javascript' src='<?php echo base_url(); ?>assets/ckeditor/ckeditor.js'></script>  
 <script>
var ckeditor = CKEDITOR.replace('ckeditor',{
			height:'600px'
});

CKEDITOR.disableAutoInline = true;
CKEDITOR.inline('editable');
</script>
 <script src="<?php echo base_url('template/sbadmin/vendor/jquery/jquery.min.js') ?>"></script>
 <script src="<?php echo base_url('template/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.j') ?>s"></script>

 <!-- Core plugin JavaScript-->
 <script src="<?php echo base_url('template/sbadmin/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

 <!-- Custom scripts for all pages-->
 <script src="<?php echo base_url('template/sbadmin/js/sb-admin-2.min.js') ?>"></script>


 <!-- Page level plugins -->
 <script src="<?php echo base_url('template/sbadmin/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
 <script src="<?php echo base_url('template/sbadmin/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

 <!-- Page level custom scripts -->
 <script src="<?php echo base_url('template/sbadmin/js/demo/datatables-demo.js') ?>"></script>
 
 <script>
     $('#dataTag').dataTable({
         "columns": [
             null,
             null,
             {
                 "width": "20%"
             }
         ]
     });
 </script>

 <!-- ajax delete -->


 <!-- ajax edit -->


 </body>

 </html>
