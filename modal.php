<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Overzicht</h4>
      </div>
      <div class="modal-body">
        <?php print_r($_POST); ?>
        <?php // include("overview.php"); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
        <button type="submit" class="btn btn-success">Bevestigen</button>
      </div>
    </div>
  </div>
</div>
