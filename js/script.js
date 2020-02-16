(function () {
	let $ = function (id) {
		return document.getElementById(id)
	};
	let canvas = new fabric.Canvas('canvas');
	let Add_text = document.querySelector('.Add-text');
	let Text_color = document.getElementById('text-color');
	let Font_family = document.getElementById('font-family');
	canvas.setHeight(300);
	canvas.setWidth(300);
	let imageLoader = document.getElementById('loadImage');

	imageLoader.addEventListener('change', handleImage, false);
	function handleImage(e) {
		let reader = new FileReader();
		reader.onload = function (event) {
			let img = new Image();
			img.onload = function () {
				let imgInstance = new fabric.Image(img, {
					scaleX: 0.2,
					scaleY: 0.2
				})
				canvas.add(imgInstance);
			}
			img.src = event.target.result;
		}
		reader.readAsDataURL(e.target.files[0]);
	}

	let imageSaver = document.getElementById('imageSaver');
	imageSaver.addEventListener('click', saveImage, false);

	function saveImage(e) {
		this.href = canvas.toDataURL({
			format: 'jpeg',
			quality: 0.8
		});
		this.download = 'test.png'
	}

	Add_text.addEventListener('click', function () {
		Addtext();
	});


	function Addtext() {
		canvas.add(new fabric.IText('Tap and Type', {
			left: 50,
			top: 100,
			fontFamily: 'arial black',
			fill: '#333',
			fontSize: 50
		}));
	}

	Text_color.onchange = function () {
		console.log(canvas);
		canvas.getActiveObject().setFill(this.value);

		canvas.renderAll();
	};

	Font_family.onchange = function () {
		canvas.getActiveObject().setFontFamily(this.value);
		canvas.renderAll();
	};

	radios5 = document.getElementsByName("fonttype");  // wijzig naar button
	for (var i = 0, max = radios5.length; i < max; i++) {
		radios5[i].onclick = function () {

			if (document.getElementById(this.id).checked == true) {
				if (this.id == "text-cmd-bold") {
					canvas.getActiveObject().set("fontWeight", "bold");
				}
				if (this.id == "text-cmd-italic") {
					canvas.getActiveObject().set("fontStyle", "italic");
				}
				if (this.id == "text-cmd-underline") {
					canvas.getActiveObject().set("textDecoration", "underline");
				}
				if (this.id == "text-cmd-linethrough") {
					canvas.getActiveObject().set("textDecoration", "line-through");
				}
				if (this.id == "text-cmd-overline") {
					canvas.getActiveObject().set("textDecoration", "overline");
				}
			} else {
				if (this.id == "text-cmd-bold") {
					canvas.getActiveObject().set("fontWeight", "");
				}
				if (this.id == "text-cmd-italic") {
					canvas.getActiveObject().set("fontStyle", "");
				}
				if (this.id == "text-cmd-underline") {
					canvas.getActiveObject().set("textDecoration", "");
				}
				if (this.id == "text-cmd-linethrough") {
					canvas.getActiveObject().set("textDecoration", "");
				}
				if (this.id == "text-cmd-overline") {
					canvas.getActiveObject().set("textDecoration", "");
				}
			}
			canvas.renderAll();
		}
	}
})()


	// const CANVAS_WIDTH = 350
	// const CANVAS_HEIGHT = 350
	// const canvas = document.getElementById('canvas')
	// const context = canvas.getContext('2d')
	// let originalImage = await loadImage('map.png')
	// const mouse = getMouse(canvas)
	// let image = originalImage

	// canvas.width = CANVAS_WIDTH
	// canvas.height = CANVAS_HEIGHT

	// const imageParams = {
	// 	offsetX: 0,
	// 	offsetY: 0,
	// 	scale: 1
	// }

	// const filters = {
	// 	gray: false,
	// 	red: false,
	// 	green: false,
	// 	blue: false
	// }

	// canvasUpdate()
	// function canvasUpdate(time) {
	// 	requestAnimationFrame(canvasUpdate)

	// 	if (mouse.left) {
	// 		imageParams.offsetX = mouse.dx + imageParams.offsetX
	// 		imageParams.offsetY = mouse.dy + imageParams.offsetY
	// 	}

	// 	if (mouse.wheel) {
	// 		imageParams.scale += mouse.wheel * 0.025
	// 	}

	// 	imageParams.offsetX = Math.max(Math.min(0, imageParams.offsetX), canvas.width - image.width * Math.abs(imageParams.scale))
	// 	imageParams.offsetY = Math.max(Math.min(0, imageParams.offsetY), canvas.height - image.height * Math.abs(imageParams.scale))

	// 	clearCanvas()
	// 	context.drawImage(
	// 		image,
	// 		0, 0, image.width, image.height,
	// 		imageParams.offsetX, imageParams.offsetY, image.width * imageParams.scale, image.height * imageParams.scale
	// 	)

	// 	mouse.update()
	// }

	// function clearCanvas() {
	// 	canvas.width = canvas.width
	// }

	// function filterChangeHandler () {
	// 	if (!filters.gray && !filters.blue && !filters.red && !filters.green) {
	// 		return image = originalImage
	// 	}

	// 	const canvas = document.createElement('canvas')
	// 	const context = canvas.getContext('2d')
	// 	canvas.width = originalImage.width
	// 	canvas.height = originalImage.height
	// 	context.drawImage(
	// 		originalImage,
	// 		0, 0, originalImage.width, originalImage.height,
	// 		0, 0, canvas.width, canvas.height
	// 	)	
	// }

	// 	const loadImageElement = document.getElementById('loadImage')
	// loadImageElement.addEventListener('change', async event => {
	// 	const file = loadImageElement.files[0]
	// 	const base64 = await getBase64(file)
	// 	const image = new Image()
	// 	image.onload = () => {
	// 		originalImage = image
	// 		filterChangeHandler()
	// 	}
	// 	image.src = base64
	// })

	// function getBase64(file) {
	// 	return new Promise((resolve, reject) => {
	// 		const reader = new FileReader()
	// 		reader.readAsDataURL(file)
	// 		reader.onload = () => resolve(reader.result)
	// 		reader.onerror = error => reject(error)
	// 	});
	// }