<div id="modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #337AB7;padding:16px 16px;color:#FFF;border-bottom:2px dashed #337AB7;">
      	<?php 
      	if ($_SESSION['sTipologiaMessaggio']==3) {
      	?>
      		<h3 class="modal-title">Notifica</h3>
      	<?php 	
      	}
      	if ($_SESSION['sTipologiaMessaggio']==2) {
      	?>
      		<h3 class="modal-title">Leggere con attenzione</h3>
      	<?php 	
      	}
      	if ($_SESSION['sTipologiaMessaggio']==1) {
      	?>
      		<h3 class="modal-title">Notifica importante</h3>
      	<?php 	
      	}
      	?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Chiudi">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><?php echo $_SESSION['sMessaggio'];?></p>
      </div>
      <div class="modal-footer">
        <button type="button" id="btnClose" class="btn btn-secondary" data-dismiss="modal">Si, ho letto</button>
      </div>
    </div>
  </div>
</div>
