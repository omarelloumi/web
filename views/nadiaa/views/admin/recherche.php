<?php
include '../../baseAdmin.php';
$reclamation1C=new ReclamationC();

$listeReclamations=$reclamation1C->recupererReclamation($_POST['recherchei']);
?>
<?php startblock( "main" ) ?>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <form method="POST" action="<?php echo curPageURL() ?>/views/supprimerReclamation.php">
              <input type="texte" name="recherchei" value="" placeholder="entrer votre id">
              <input type="submit" name="rechercher" value="rechercher" class="btn btn-success">
            </form>
            <i class="fas fa-table"></i>
            Table des reclamations</div>
  <?php
foreach($listeReclamations as $row){
  ?>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>MAIL</th>
                    <th>TEL</th>
                    <th>RECLAMATION</th>
                    <th>SUPPRIMER</th>
                    <th>MODIFIER</th>

                    
                  </tr>
                </thead>
                
                <tbody>
                  <tr>
                    <td><?PHP echo $row['id']; ?></td>
                    <td><?PHP echo $row['mail']; ?></td>
                    <td><?PHP echo $row['tel']; ?></td>
                    <td><?PHP echo $row['reclam']; ?></td>
                    <td><form method="POST" action="<?php echo curPageURL() ?>/views/supprimerReclamation.php">
                            <input type="submit" name="supprimer" value="supprimer" class="btn btn-success">
                            <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                            </form>
                            </td>
                            <td><a href="modifierR.php?idR=<?PHP echo $row['id']; ?>">
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
