<?php
include 'ctrl.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "">
<html xmlns="">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@1,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" />
	<link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet"/>

    <link rel="stylesheet" href="<?=URL?>dist/css/lightslider.css">
    <link rel="stylesheet" href="<?=URL?>dist/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?=URL?>lib/owlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=URL?>lib/owlCarousel/dist/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?=URL?>dist/css/style.css">
	<link rel="stylesheet" href="<?=URL?>bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=URL?>bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=URL?>bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?=URL?>dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?=URL?>dist/css/skins/skin-blue.min.css">       


</head>

<body>
	<!-- INCIO PAGINAS -->
	<?php
		$rotas = new Rota();
		?>
	<!--/FIM PAGINAS  --> 

	<!-- Plugins -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	
    <!-- <script type="text/javascript" src="<?=URL?>dist/js/jquery.js"></script> -->
    <script type="text/javascript" src="<?=URL?>dist/js/lightslider.js"></script>
    <script type="text/javascript" src="<?=URL?>lib/owlCarousel/dist/owl.carousel.min.js"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>        
	<script src="https://unpkg.com/dropzone"></script>
	<script src="https://unpkg.com/cropperjs"></script>

	<script src="<?=URL?>dist/js/js.js " type="text/javascript "></script>

	
<script>

$(document).ready(function(){

	var $modal = $('#modal');

	var image = document.getElementById('sample_image');

	var cropper;

	$('#upload_image').change(function(event){
		var files = event.target.files;

		var done = function(url){
			image.src = url;
			$modal.modal('show');
		};

		if(files && files.length > 0)
		{
			reader = new FileReader();
			reader.onload = function(event)
			{
				done(reader.result);
			};
			reader.readAsDataURL(files[0]);
		}
	});

	$modal.on('shown.bs.modal', function() {
		cropper = new Cropper(image, {
			aspectRatio: 1,
			viewMode: 1,
			preview:'.preview'
		});
	}).on('hidden.bs.modal', function(){
		cropper.destroy();
   		cropper = null;
	});

	$('#crop').click(function(){
		canvas = cropper.getCroppedCanvas({
			width:400,
			height:400
		});

		canvas.toBlob(function(blob){
			url = URL.createObjectURL(blob);
			var reader = new FileReader();
			reader.readAsDataURL(blob);
			reader.onloadend = function(){
				var base64data = reader.result;
				$.ajax({
					url:'upload',
					method:'POST',
					data:{image:base64data},
					success:function(data)
					{
						$modal.modal('hide');
						$('#uploaded_image').attr('src', data);
					}
				});
			};
		});
	});
	
});
</script>


</body>
</html>