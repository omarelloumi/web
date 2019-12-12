<?php
include '../../baseAdmin.php';
$avis1C=new AvisC();
$listeAvis=$avis1C->afficherAvis();
?>
<?php startblock( "main" ) ?>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data des avis</div>
  <?php
foreach($listeAvis as $row){
  ?>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>REF PRODUIT</th>
                    <th>COMMENTAIRE</th>
                    

                    
                  </tr>
                </thead>
                
                <tbody>
                  <tr>
                    <td><?PHP echo $row['id']; ?></td>
                    <td><?PHP echo $row['ref_produit']; ?></td>
                    <td><?PHP echo $row['commentaire']; ?></td>
                    
                    <td><form method="POST" action="<?php echo curPageURL() ?>/views/supprimerAvis.php">
                            <input type="submit" name="supprimer" value="supprimer" class="btn btn-success">
                            <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                            </form>
                            </td>
                            <td><a href="modifierA.php?idA=<?PHP echo $row['id']; ?>">
                            Modifier</a></td>
                            <!--<td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                            
                            <td class="a-right a-right ">$7.45</td>
                            <td class=" last"><a href="#">View</a>
                            </td>-->

                          </tr>
                          <?PHP
}
?>
                  
                  
                </tbody>
              </table>
            </div>
          </div>
         
<?php endblock() ?>
          

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

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
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
