<div id="main-page-content">

  <?php 
    require 'overlays/add-clipping.php';
    require 'overlays/share.php';
  ?>

	<div id="content-header">
		<div id="info-button">
			
		</div>
		<div id="clipping-title">
			
		</div>
		<div id="share-button" onclick="showShareOverlay()">
			
		</div>
		<div id="comment-button">
			
		</div>
		<div id="organize-button">
			
		</div>
	</div>

  	<textarea id="clipping-content">
  	</textarea>
</div>

<script>

document.querySelector('#info-button').onclick = function(){
	swal("Feature not implemented", "We'll get that working right away!")
};

document.querySelector('#comment-button').onclick = function(){
	swal("Feature not implemented", "We'll get that working right away!")
};

document.querySelector('#organize-button').onclick = function(){
	swal("Feature not implemented", "We'll get that working right away!")
};

</script>

