'use strict';
(function () {

	let canvas = new fabric.Canvas('canvas');
	let Add_text = document.querySelector('.Add-text');
	let figure = document.querySelectorAll('.form-option');
	let info = document.querySelector('.form-list');
	let size_figure = document.querySelectorAll('.size-container');
	let content = document.querySelectorAll('.option-item');
	let contur = document.querySelectorAll('.contur');
	let controls_container = document.querySelector('.controls-container');
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
					scaleX: 0.4,
					scaleY: 0.4
				})
				canvas.add(imgInstance);
			}
			img.src = event.target.result;
		}
		reader.readAsDataURL(e.target.files[0]);
	}

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
                    hideOption(0);
                    showOption(1);
                    hideContent(0);
                    showContent(i);
                    // hideContur(0);
                    // showContur(i);
					canvas.setOverlayImage('/img/circle-form.png', canvas.renderAll.bind(canvas));
                    break;
                }
            }
		}else
		if ((target && target.classList.contains('form-option')) && (target && target.classList.contains('heart'))) {
            for (let i = 0; i < figure.length; i++) {
                if (target == figure[i]) {
                    hideOption(0);
                    showOption(1);
                    hideContent(0);
                    showContent(i);
                    // hideContur(0);
                    // showContur(i);
					canvas.setOverlayImage('/img/heart-form.png', canvas.renderAll.bind(canvas));
                    break;
                }
            }
		}else
		if ((target && target.classList.contains('form-option')) && (target && target.classList.contains('rectangle'))) {
            for (let i = 0; i < figure.length; i++) {
                if (target == figure[i]) {
                    hideOption(0);
                    showOption(1);
                    hideContent(0);
                    showContent(i);
                    // hideContur(0);
                    // showContur(i);
					canvas.setOverlayImage('/img/rectangle-form.png', canvas.renderAll.bind(canvas));
                    break;
                }
            }
        }
    });

	Add_text.addEventListener('click', function () {
		Addtext();
	});

	function Addtext() {
		canvas.add(new fabric.IText('Tap and Type', {
			left: 50,
			top: 150,
			fontFamily: 'arial black',
			fill: '#333',
			fontSize: 40
		}));
		  // canvas.setOverlayImage('/img/heart-form.png', canvas.renderAll.bind(canvas));
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