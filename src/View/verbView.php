<?php
  use mydico\Controller\HomeCtrl;

  $verbs = new HomeCtrl();
?>
<div class="container">
 	<div class="row">
    <div class="col-md-9 mx-auto mt-5">
        <h2 class="text-warning text-center">List of the verbs irregular</h2>
        <div class="row">
          <div class="col-md-12 mt-4" id="over">
            <div class="container">
              <table class="table table-striped text-start mb-5" id="datatable" style="" cellspacing="0">
                <thead>
                  <tr>
                    <th>Verb</th>
                    <th>Preteri</th>
                    <th>Past</th>
                    <th>Traduction</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $verbs->showVerb();
                  ?>
                </tbody>
                
              </table>
            </div>
        </div>
        
      </div>
    </div>
 	</div>
 </div>