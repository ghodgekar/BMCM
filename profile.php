<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="profile1.css">
	<title>Input Image With Preview Image</title>
</head>
<body>
	
	<div class="container">
		<input type="file" id="file" accept="image/*" hidden>
		<div class="img-area" data-img="">
			<i class='bx bxs-cloud-upload icon'></i>
			<h3>Upload Image</h3>
			<p>Image size must be less than <span>2MB</span></p>
		</div>
		<button class="select-image">Select Image</button>
	</div>
	
	<script>
        const selectImage = document.querySelector('.select-image');
const inputFile = document.querySelector('#file');
const imgArea = document.querySelector('.img-area');

selectImage.addEventListener('click', function () {
	inputFile.click();
})

inputFile.addEventListener('change', function () {
	const image = this.files[0]
	if(image.size < 2000000) {
		const reader = new FileReader();
		reader.onload = ()=> {
			const allImg = imgArea.querySelectorAll('img');
			allImg.forEach(item=> item.remove());
			const imgUrl = reader.result;
			const img = document.createElement('img');
			img.src = imgUrl;
			imgArea.appendChild(img);
			imgArea.classList.add('active');
			imgArea.dataset.img = image.name;
		}
		reader.readAsDataURL(image);
	} else {
		alert("Image size more than 2MB");
	}
})
    </script>
</body>
</html>