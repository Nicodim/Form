'use strict';
(function () {

	let canvas = new fabric.Canvas('canvas');
	let Add_text = document.querySelector('.Add-text');
	let controls_container = document.querySelector('.controls-container');
	canvas.setHeight(300);
	canvas.setWidth(300);

	//______________load img

	let imageLoader = document.getElementById('loadImage');

	imageLoader.addEventListener('change', handleImage, false);
	function handleImage(e) {
		let reader = new FileReader();
		reader.onload = function (event) {
			let img = new Image();
			img.onload = function () {
				let imgInstance = new fabric.Image(img, {
					scaleX: 0.4,
					scaleY: 0.4
				})
				canvas.add(imgInstance);
			}
			img.src = event.target.result;
		}
		reader.readAsDataURL(e.target.files[0]);
	}

	// let imageSaver = document.getElementById('imageSaver');
	// imageSaver.addEventListener('click', saveImage, false);

	// function saveImage(e) {
	// 	this.href = canvas.toDataURL({
	// 		format: 'jpeg',
	// 		quality: 0.8,
	// 	});
	// 	this.download = 'test.png'
	// }

	Add_text.addEventListener('click', function () {
		Addtext();
	});


	function Addtext() {
		canvas.add(new fabric.IText('Tap and Type', {
			left: 5,
			top: 100,
			fontFamily: 'arial black',
			fill: '#333',
			fontSize: 40
		}));
		// canvas.setOverlayImage('/img/heart.png', canvas.renderAll.bind(canvas));
	}
	
	Add_text.addEventListener('click', function() {
		controls_container.classList.remove('hidden');
		controls_container.classList.add('show');
	})

	$('#text-color').on('change', function () {
		canvas.getActiveObject().set({ fill: this.value });
		canvas.renderAll();
	});

	$('#font-family').on('change', function () {
		canvas.getActiveObject().set({ fontFamily: this.value });
		canvas.renderAll();
	});


	let radios5 = $("[name=fonttype]"); // wijzig naar button
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

