'use strict';
(function () {

	let canvas = new fabric.Canvas('canvas');
	let Add_text = document.querySelector('.Add-text');
	let figure = document.querySelectorAll('.form-option');
	let info = document.querySelector('.form-list');
	let size_figure = document.querySelectorAll('.size-container');
	let content = document.querySelectorAll('.option-item');
	let controls_container = document.querySelector('.controls-container');
	let sizeWrapper = document.querySelectorAll('.size-wrapper');
	let size_content = document.querySelectorAll('.square-size');
	let size = document.querySelector('.canvas-container');
	let next_btn = document.querySelector('.next-btn');
	let mail_link = document.querySelector('.mail-link');
	let back_btn = document.querySelector('.back-btn');
	let trash = document.querySelector('.trash');
	canvas.setHeight(400);
	canvas.setWidth(400);

	//______________load img

	let imageLoader = document.getElementById('loadImage');

	imageLoader.addEventListener('change', handleImage, false);
	function handleImage(e) {
		let reader = new FileReader();
		reader.onload = function (event) {
			let img = new Image();
			img.onload = function () {
				let imgInstance = new fabric.Image(img, {
					// scaleX: 0.8,
					// scaleY: 0.8,
					left: 10,
					top: 10
				})
				imgInstance.scaleToHeight(380);
                imgInstance.scaleToWidth(380);
				canvas.add(imgInstance);
			}
			img.src = event.target.result;
		}
		reader.readAsDataURL(e.target.files[0]);
	}

	Add_text.addEventListener('click', function () {
		Addtext();
	});

	function Addtext() {
		let obj = new fabric.IText('Tap and Type', {
			left: 50,
			top: 170,
			fontFamily: 'arial',
			fill: '#333',
			fontSize: 45,
			fontWeight: 'bold'
		});
		canvas.add(obj);
		canvas.setActiveObject(obj);
		canvas.focus(obj);
	}

	Add_text.addEventListener('click', function () {
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

	trash.addEventListener('click', function () {
		var activeObject = canvas.getActiveObject();
		if (activeObject) {
			canvas.remove(activeObject);
			controls_container.classList.remove('show');
			controls_container.classList.add('hidden');
		}
	});

	// ________________________________________________________________________________delegation


	function hideOption(a) {
		for (let i = a; i < content.length; i++) {
			content[i].classList.remove('show');
			content[i].classList.add('hidden');
		}
	}
	hideOption(1);

	function showOption(b) {
		if (content[b].classList.contains('hidden')) {
			content[b].classList.remove('hidden');
			content[b].classList.add('show');
		}
	}

	function hideContent(a) {
		for (let i = a; i < size_figure.length; i++) {
			size_figure[i].classList.remove('show');
			size_figure[i].classList.add('hidden');
		}
	}

	function showContent(b) {
		if (size_figure[b].classList.contains('hidden')) {
			size_figure[b].classList.remove('hidden');
			size_figure[b].classList.add('show');
		}
	}

	info.addEventListener('click', function (event) {
		let target = event.target.closest('.form-option');
		if (!target) return;
		if (!info.contains(target)) return;
		if ((target && target.classList.contains('form-option')) && (target && target.classList.contains('circle'))) {
			for (let i = 0; i < figure.length; i++) {
				if (target == figure[i]) {
					// hideOption(0);
					showOption(1);
					hideContent(0);
					showContent(i);
					canvas.setOverlayImage('img/circle-form.png', canvas.renderAll.bind(canvas));
					document.querySelector('.shape-input').value = 'circle';
					break;
				}
			}
		} else
			if ((target && target.classList.contains('form-option')) && (target && target.classList.contains('heart'))) {
				for (let i = 0; i < figure.length; i++) {
					if (target == figure[i]) {
						// hideOption(0);
						showOption(1);
						hideContent(0);
						showContent(i);
						canvas.setOverlayImage('img/heart-form.png', canvas.renderAll.bind(canvas));
						document.getElementById('shape-input').value = 'heart';
						break;
					}
				}
			} else
				if ((target && target.classList.contains('form-option')) && (target && target.classList.contains('rectangle'))) {
					for (let i = 0; i < figure.length; i++) {
						if (target == figure[i]) {
							// hideOption(0);
							showOption(1);
							hideContent(0);
							showContent(i);
							canvas.setOverlayImage('img/rectangle-form.png', canvas.renderAll.bind(canvas));
							document.getElementById('shape-input').value = 'rectangle';
							break;
						}
					}
				}
	});

	for (let i = 0; i < sizeWrapper.length; i++) {
		sizeWrapper[i].addEventListener('click', function (event) {
			let target = event.target.closest('.square-size');
			if (target && target.classList.contains('square-size')) {
				for (let i = 0; i < size_content.length; i++) {
					if (target == size_content[i]) {
						document.querySelector('.next-btn').classList.remove('hidden');
						break;
					}
				}
			}
			if (target && target.classList.contains('big-size')) {
				document.querySelector('.size-input').value = '40 x 40';
			} else if (target && target.classList.contains('small-size')) {
				document.querySelector('.size-input').value = '20 x 20';
			}
		});
	};

    
	next_btn.addEventListener('click', function () {
		hideOption(0);
		showOption(2);
	})

	back_btn.addEventListener('click', function (){
		hideOption(0);
		showOption(0);
		document.querySelector('.next-btn').classList.add('hidden');
		canvas.clear();
	})

	mail_link.addEventListener('click', function () {
		var convertToImage=function() {
		canvas.deactivateAll().renderAll();
		let dataURL = canvas.toDataURL();
		document.querySelector('.img-canvas').setAttribute("value", dataURL);
	}
		hideOption(0);
		showOption(3);
		convertToImage();
		// canvas.clear();
	});
})()

	// SAVE IMG
	// let imageSaver = document.getElementById('imageSaver');
	// imageSaver.addEventListener('click', saveImage, false);

	// function saveImage(e) {
	// 	this.href = canvas.toDataURL({
	// 		format: 'jpeg',
	// 		quality: 0.8,
	// 	});
	// 	this.download = 'test.png'
	// }