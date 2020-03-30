<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Chocolate editor</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/3.6.1/fabric.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
    <section class="form">
        <div class="form-wrapper">

            <!-- <canvas class="canvas" id="canvas"></canvas> -->

            <div class="options">
                <ul class="option-list">
                    <li class="option-item option-form" id="stage-1">
                        <h2 class="form-header">בחר צורה</h2>
                        <ul class="form-list">
                            <li class="form-option heart" id="opt-1">
                                <div class="img-wrapper">
                                    <!-- <i class="form-figure form-heart far fa-heart"></i> -->
                                    <svg class="form-figure form-heart" version="1.1" id="Layer_2_1_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 198.4 198.4" style="enable-background:new 0 0 198.4 198.4;" xml:space="preserve">
                                        <g>
                                            <path d="M172.8,46c-1.2-1.5-11.9-13.8-29.7-13.8c-8.7,0-17.7,3-26.8,9.1c-0.5,0.4-11.2,8.1-17.2,15.1c-5.6-7-21.9-24.8-43.6-24.8
		c-10.3,0-20.4,4.1-29.9,12.2l-0.2,0.2c-0.3,0.3-7,7.2-10.4,18c-3.2,10-4,25.4,10.3,41.5L98,178.6c0.1,0,0.1,0.1,0.2,0.2
		c0.1,0,0.2,0.1,0.2,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.3,0,0.4,0c0.1,0,0.1,0,0.2,0c0.1,0,0.3-0.1,0.4-0.1c0.1-0.1,0.2-0.1,0.3-0.2
		c0.1-0.1,0.2-0.2,0.3-0.2l75.4-76.9l0.2-0.2C176.2,101.1,198.6,71.3,172.8,46z M172.1,98.2l-72.9,74.3l-70-72.4
		C5.4,73.2,27.3,49.3,29,47.5c8.6-7.3,17.5-10.9,26.6-10.9c23.7,0,41.3,25,41.5,25.3l1,1.4c0.1,0.1,0.1,0.1,0.2,0.2
		c0,0,0.1,0.1,0.1,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.2,0.1,0.3,0.1c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0
		c0.1-0.1,0.2-0.1,0.3-0.1c0.1-0.1,0.2-0.2,0.3-0.2c0,0,0,0,0.1-0.1l1.1-1.6c4.6-6.9,17.9-16.5,18-16.5c8.1-5.4,16.2-8.2,23.9-8.2
		c16,0,25.8,12,25.9,12.1l0.2,0.2C191.4,71.2,173.6,96.1,172.1,98.2z" />
                                        </g>
                                    </svg>
                                </div>
                            </li>
                            <li class="form-option square" id="opt-2">
                                <div class="img-wrapper">
                                    <div class="form-figure form-square"></div>
                                </div>
                            </li>
                            <li class="form-option circle" id="opt-3">
                                <div class="img-wrapper">
                                    <div class="form-figure form-circle"></div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="option-item hidden option-size" id="stage-2">
                        <h3 class="size-header">בחר גודל</h3>
                        <div class="size-container" id="square-1">
                            <div class="size-wrapper">
                                <div class="square-size big-size">
                                    <input class="visually-hidden input-radio" type="radio" value="big-heart" id="big-heart" name="size-heart">
                                    <label for="big-heart">
                                        <!-- <i class="big-heart far fa-heart" alt="heart-img"></i> -->
                                        <svg class="big-heart" version="1.1" id="Layer_2_1_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 198.4 198.4" style="enable-background:new 0 0 198.4 198.4;" xml:space="preserve">
                                            <g>
                                                <path d="M172.8,46c-1.2-1.5-11.9-13.8-29.7-13.8c-8.7,0-17.7,3-26.8,9.1c-0.5,0.4-11.2,8.1-17.2,15.1c-5.6-7-21.9-24.8-43.6-24.8
		c-10.3,0-20.4,4.1-29.9,12.2l-0.2,0.2c-0.3,0.3-7,7.2-10.4,18c-3.2,10-4,25.4,10.3,41.5L98,178.6c0.1,0,0.1,0.1,0.2,0.2
		c0.1,0,0.2,0.1,0.2,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.3,0,0.4,0c0.1,0,0.1,0,0.2,0c0.1,0,0.3-0.1,0.4-0.1c0.1-0.1,0.2-0.1,0.3-0.2
		c0.1-0.1,0.2-0.2,0.3-0.2l75.4-76.9l0.2-0.2C176.2,101.1,198.6,71.3,172.8,46z M172.1,98.2l-72.9,74.3l-70-72.4
		C5.4,73.2,27.3,49.3,29,47.5c8.6-7.3,17.5-10.9,26.6-10.9c23.7,0,41.3,25,41.5,25.3l1,1.4c0.1,0.1,0.1,0.1,0.2,0.2
		c0,0,0.1,0.1,0.1,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.2,0.1,0.3,0.1c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0
		c0.1-0.1,0.2-0.1,0.3-0.1c0.1-0.1,0.2-0.2,0.3-0.2c0,0,0,0,0.1-0.1l1.1-1.6c4.6-6.9,17.9-16.5,18-16.5c8.1-5.4,16.2-8.2,23.9-8.2
		c16,0,25.8,12,25.9,12.1l0.2,0.2C191.4,71.2,173.6,96.1,172.1,98.2z" />
                                            </g>
                                        </svg>
                                    </label>
                                    <span class="big-heart-size">
                                            17x17
                                            ס”מ
                                        </span>
                                    <div class="form-price">70 ש”ח</div>
                                    <p>112-ב רק 2</p>
                                </div>
                                <div class="square-size medium-size">
                                    <input class="visually-hidden input-radio" type="radio" value="medium-heart" id="medium-heart" name="size-heart">
                                    <label for="medium-heart">
                                        <!-- <i class="medium-heart far fa-heart" alt="heart-img"></i> -->
                                        <svg class="medium-heart" version="1.1" id="Layer_2_1_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 198.4 198.4" style="enable-background:new 0 0 198.4 198.4;" xml:space="preserve">
                                            <g>
                                                <path d="M172.8,46c-1.2-1.5-11.9-13.8-29.7-13.8c-8.7,0-17.7,3-26.8,9.1c-0.5,0.4-11.2,8.1-17.2,15.1c-5.6-7-21.9-24.8-43.6-24.8
		c-10.3,0-20.4,4.1-29.9,12.2l-0.2,0.2c-0.3,0.3-7,7.2-10.4,18c-3.2,10-4,25.4,10.3,41.5L98,178.6c0.1,0,0.1,0.1,0.2,0.2
		c0.1,0,0.2,0.1,0.2,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.3,0,0.4,0c0.1,0,0.1,0,0.2,0c0.1,0,0.3-0.1,0.4-0.1c0.1-0.1,0.2-0.1,0.3-0.2
		c0.1-0.1,0.2-0.2,0.3-0.2l75.4-76.9l0.2-0.2C176.2,101.1,198.6,71.3,172.8,46z M172.1,98.2l-72.9,74.3l-70-72.4
		C5.4,73.2,27.3,49.3,29,47.5c8.6-7.3,17.5-10.9,26.6-10.9c23.7,0,41.3,25,41.5,25.3l1,1.4c0.1,0.1,0.1,0.1,0.2,0.2
		c0,0,0.1,0.1,0.1,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.2,0.1,0.3,0.1c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0
		c0.1-0.1,0.2-0.1,0.3-0.1c0.1-0.1,0.2-0.2,0.3-0.2c0,0,0,0,0.1-0.1l1.1-1.6c4.6-6.9,17.9-16.5,18-16.5c8.1-5.4,16.2-8.2,23.9-8.2
		c16,0,25.8,12,25.9,12.1l0.2,0.2C191.4,71.2,173.6,96.1,172.1,98.2z" />
                                            </g>
                                        </svg>
                                    </label>
                                    <span class="medium-heart-size">
                                            15x15
                                            ס”מ
                                        </span>
                                    <div class="form-price">60 ש”ח</div>
                                    <p>102-ב רק 2</p>
                                </div>
                                <div class="square-size small-size">
                                    <input class="visually-hidden input-radio" type="radio" value="small-heart" id="small-heart" name="size-heart">
                                    <label for="small-heart">
                                        <!-- <i class="small-heart far fa-heart" alt="heart-img"></i> -->
                                        <svg class="small-heart" version="1.1" id="Layer_2_1_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 198.4 198.4" style="enable-background:new 0 0 198.4 198.4;" xml:space="preserve">
                                            <g>
                                                <path d="M172.8,46c-1.2-1.5-11.9-13.8-29.7-13.8c-8.7,0-17.7,3-26.8,9.1c-0.5,0.4-11.2,8.1-17.2,15.1c-5.6-7-21.9-24.8-43.6-24.8
		c-10.3,0-20.4,4.1-29.9,12.2l-0.2,0.2c-0.3,0.3-7,7.2-10.4,18c-3.2,10-4,25.4,10.3,41.5L98,178.6c0.1,0,0.1,0.1,0.2,0.2
		c0.1,0,0.2,0.1,0.2,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.3,0,0.4,0c0.1,0,0.1,0,0.2,0c0.1,0,0.3-0.1,0.4-0.1c0.1-0.1,0.2-0.1,0.3-0.2
		c0.1-0.1,0.2-0.2,0.3-0.2l75.4-76.9l0.2-0.2C176.2,101.1,198.6,71.3,172.8,46z M172.1,98.2l-72.9,74.3l-70-72.4
		C5.4,73.2,27.3,49.3,29,47.5c8.6-7.3,17.5-10.9,26.6-10.9c23.7,0,41.3,25,41.5,25.3l1,1.4c0.1,0.1,0.1,0.1,0.2,0.2
		c0,0,0.1,0.1,0.1,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.2,0.1,0.3,0.1c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0
		c0.1-0.1,0.2-0.1,0.3-0.1c0.1-0.1,0.2-0.2,0.3-0.2c0,0,0,0,0.1-0.1l1.1-1.6c4.6-6.9,17.9-16.5,18-16.5c8.1-5.4,16.2-8.2,23.9-8.2
		c16,0,25.8,12,25.9,12.1l0.2,0.2C191.4,71.2,173.6,96.1,172.1,98.2z" />
                                            </g>
                                        </svg>
                                    </label>
                                    <span class="small-heart-size">
                                            12x12
                                            ס”מ
                                        </span>
                                    <div class="form-price">50 ש”ח</div>
                                    <p>90-ב רק 2</p>
                                </div>
                            </div>
                        </div>
                        <div class="size-container" id="square-2">
                            <div class="size-wrapper">
                                <div class="square-size big-size">
                                    <input class="visually-hidden input-radio" type="radio" value="big-square" id="big-square" name="size-square">
                                    <label for="big-square">
                                        <div class="big-square"></div>
                                    </label>
                                    <span class="big-square-size">
                                            17x17
                                            ס”מ
                                        </span>
                                    <div class="form-price">70 ש”ח</div>
                                    <p>112-ב רק 2</p>
                                </div>
                                <div class="square-size medium-size">
                                    <input class="visually-hidden input-radio" type="radio" value="medium-square" id="medium-square" name="size-square">
                                    <label for="medium-square">
                                        <div class="medium-square"></div>
                                    </label>
                                    <span class="medium-square-size">
                                            15x15
                                            ס”מ
                                        </span>
                                    <div class="form-price">60 ש”ח</div>
                                    <p>102-ב רק 2</p>
                                </div>
                                <div class="square-size small-size">
                                    <input class="visually-hidden input-radio" type="radio" value="small-square" id="small-square" name="size-square">
                                    <label for="small-square">
                                        <div class="small-square"></div>
                                    </label>
                                    <span class="small-square-size">
                                            12x12
                                            ס”מ
                                        </span>
                                    <div class="form-price">50 ש”ח</div>
                                    <p>90-ב רק 2</p>
                                </div>
                            </div>
                        </div>
                        <div class="size-container" id="square-3">
                            <div class="size-wrapper">
                                <div class="square-size big-size">
                                    <input class="visually-hidden input-radio" type="radio" value="big-circle" id="big-circle" name="size-circle">
                                    <label for="big-circle">
                                        <div class="big-circle"></div>
                                    </label>
                                    <span class="big-circle-size">
                                            17x17
                                            ס”מ
                                        </span>
                                    <div class="form-price">70 ש”ח</div>
                                    <p>112-ב רק 2</p>
                                </div>
                                <div class="square-size medium-size">
                                    <input class="visually-hidden input-radio" type="radio" value="medium-circle" id="medium-circle" name="size-circle">
                                    <label for="medium-circle">
                                        <div class="medium-circle"></div>
                                    </label>
                                    <span class="medium-circle-size">
                                            15x15
                                            ס”מ
                                        </span>
                                    <div class="form-price">60 ש”ח</div>
                                    <p>102-ב רק 2</p>
                                </div>
                                <div class="square-size small-size">
                                    <input class="visually-hidden input-radio" type="radio" value="small-circle" id="small-circle" name="size-circle">
                                    <label for="small-circle">
                                        <div class="small-circle"></div>
                                    </label>
                                    <span class="small-circle-size">
                                            12x12
                                            ס”מ
                                        </span>
                                    <div class="form-price">50 ש”ח</div>
                                    <p>90-ב רק 2</p>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="next-btn hidden btn">המשך</a>
                    </li>
                    <li class="option-item hidden option-load" id="stage-3">
                        <canvas class="canvas" id="canvas"></canvas>
                        <div class="img-prop">
                            <input class="visually-hidden" type="file" id="loadImage" name="filename">
                            <label for="loadImage">
                                <i class="fas fa-cloud-upload-alt fa-icon"></i>
                                <p>הוספת תמונה</p>
                            </label>

                            <a class="Add-text">
                                <i class="fas fa-font  fa-icon"></i>
                                <p>הוספת טקסט</p>
                            </a>
                        </div>
                        <!-- <a class="imageSaver" id="imageSaver" href="#">Save image</a>  -->

                        <p>
                            מקמו את התמונה או חלקה כרצונכם
                        </p>
                        <p>
                            שטח התמונה אשר ישמש לטובת ההדפסה הנו השטח המופיע בתוך המסגרת האפורה
                        </p>
                        <div class="btn-wrapper">
                            <a href="#" class="back-btn btn">חזור</a>
                            <a href="#" class="tp-link btn">המשך</a>
                        </div>
                        <div class="controls-container">
                            <a class="control-label trash">
                                <i class="fas fa-trash-alt fa-icon"></i>
                            </a>
                            <div class="controls-box hidden">
                                <input type="color" value="" class="text-color visually-hidden" id="text-color" size="10">
                                <label class="control-label" for="text-color">
                                    <i class="fas fa-palette fa-icon"></i>
                                </label>

                                <input class="visually-hidden" type='checkbox' name='fonttype' id="text-cmd-bold">
                                <label class="control-label" for="text-cmd-bold">
                                    <i class="fas fa-bold fa-icon"></i>
                                </label>

                                <input class="visually-hidden" type='checkbox' name='fonttype' id="text-cmd-italic">
                                <label class="control-label" for="text-cmd-italic">
                                    <i class="fas fa-italic fa-icon"></i>
                                </label>

                                <label class="control-label" for="font-family">
                                </label>
                                <div class="select">
                                    <select id="font-family">
                                        <option id="font-selected" value="arial">Arial</option>
                                        <option id="font-selected" value="helvetica" selected>Helvetica</option>
                                        <option id="font-selected" value="myriad pro">Myriad Pro</option>
                                        <option id="font-selected" value="delicious">Delicious</option>
                                        <option id="font-selected" value="verdana">Verdana</option>
                                        <option id="font-selected" value="georgia">Georgia</option>
                                        <option id="font-selected" value="courier">Courier</option>
                                        <option id="font-selected" value="comic sans ms">Comic Sans MS</option>
                                        <option id="font-selected" value="impact">Impact</option>
                                        <option id="font-selected" value="monaco">Monaco</option>
                                        <option id="font-selected" value="optima">Optima</option>
                                        <option id="font-selected" value="hoefler text">Hoefler Text</option>
                                        <option id="font-selected" value="plaster">Plaster</option>
                                        <option id="font-selected" value="engagement">Engagement</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <input class="visually-hidden" type='checkbox' name='fonttype' id="text-cmd-underline">
                                <label for="text-cmd-underline">
                                    <i class="fas fa-underline fa-icon"></i>
                                </label>

                                <input class="visually-hidden" type='checkbox' name='fonttype' id="text-cmd-linethrough">
                                <label for="text-cmd-linethrough">
                                    <i class="fas fa-strikethrough fa-icon"></i>
                                </label>

                                <input class="visually-hidden" type='checkbox' name='fonttype' id="text-cmd-overline">
                                <label for="text-cmd-overline">
                                    <i class="fab fa-reddit-alien fa-icon"></i>
                                </label> -->
                        </div>

                    </li>
                    <li class="option-item hidden option-toppings">
                        <h2>בחר תוספת</h2>
                        <p>*התוספת תהיה בצד השני של השוקולד*<p>ניתן לבחור עד 2 תוספות</p>
                            <div class="toppings-wrapper">
                                <ul class="toppings-list">
                                    <li class="toppings-option">
                                        <input class="visually-hidden input-checkbox" type="checkbox" id="tp-1" name="check" value=" שומשום שחור קלוי">
                                        <label for="tp-1">
                                            שומשום שחור קלוי
                                        </label>
                                    </li>
                                    <li class="toppings-option">
                                        <input class="visually-hidden input-checkbox" type="checkbox" id="tp-2" name="check" value="אגוזי לוז מסוכרים">
                                        <label for="tp-2">
                                            אגוזי לוז מסוכרים
                                        </label>
                                    </li>
                                    <li class="toppings-option">
                                        <input class="visually-hidden input-checkbox" type="checkbox" id="tp-3" name="check" value="קוקוס מקורמל">
                                        <label for="tp-3">
                                            קוקוס מקורמל
                                        </label>
                                    </li>
                                    <li class="toppings-option">
                                        <input class="visually-hidden input-checkbox" type="checkbox" id="tp-4" name="check" value="מיני מרשמלו">
                                        <label for="tp-4">
                                            מיני מרשמלו
                                        </label>
                                    </li>
                                    <li class="toppings-option">
                                        <input class="visually-hidden input-checkbox" type="checkbox" id="tp-5" name="check" value="דובוני גומי">
                                        <label for="tp-5">
                                            דובוני גומי
                                        </label>
                                    </li>
                                    <li class="toppings-option">
                                        <input class="visually-hidden input-checkbox" type="checkbox" id="tp-6" name="check" value="קינמון">
                                        <label for="tp-6">
                                            קינמון
                                        </label>
                                    </li>
                                    <li class="toppings-option">
                                        <input class="visually-hidden input-checkbox" type="checkbox" id="tp-7" name="check" value="סוכריות צבעוניות">
                                        <label for="tp-7">
                                            סוכריות צבעוניות
                                        </label>
                                    </li>
                                </ul>
                                <div class="btn-wrapper">
                                    <a href="#" class="back-tp btn">חזור</a>
                                    <a href="#" class="next-tp btn">המשך</a>
                                </div>
                            </div>
                    </li>
                    <li class="option-item hidden option-email">
                        <div class="box">
                            <form class="php-form" enctype='multipart/form-data' action="send.php" method="post">
                                <div class="php-wrapper">
                                    <div class="visible-param">
                                        <h2 dir="rtl">סיכום הזמנה:</h2>
                                        <div class="left-column">
                                            <div dir="rtl" class="visible-shape visible"></div>
                                            <div dir="rtl" class="visible-size visible"></div>
                                            <div dir="rtl" class="visible-tp visible"></div>
                                        </div>
                                        <img class="visible-img" width="160px" height="160px" src="#">
                                    </div>
                                    <div class="php-params">
                                        <input dir="rtl" class="img-canvas" type='hidden' name='img-canvas' id="img-canvas" value="">
                                        <input dir="rtl" class="shape-input" type='hidden' name='shape-input' id="shape-input" value="shape ">
                                        <input dir="rtl" class="size-input" type='hidden' name='size-input' id="size-input" value="size ">
                                        <input dir="rtl" class="tp-input" type='hidden' name='tp-input' id="tp-input" value="">

                                        <input dir="rtl" type="text" class="form-control h" name="name" placeholder="שם מלא:" required>

                                        <input dir="rtl" type="text" class="form-control h" name="email" placeholder="מייל:" required>

                                        <input dir="rtl" type="text" class="form-control h" name="phone" placeholder="טלפון:" required>

                                        <textarea dir="rtl" name="text" class="form-control" id="exampleFormControlTextarea1" placeholder="הערות:" rows="3"></textarea>
                                        <p>אישור ההזמנה מתבצע לאחר חיוב טלפוני אנו ניצור איתכם קשר בזמן הקרוב לצורך אישור ההזמנה</p>
                                    </div>
                                </div>
                                <div class="btn-controls">
                                    <a href="#" class="form-back btn">עיצוב אחד נוסף</a>
                                    <input type="submit" class="submit-button btn" value="סיימתי את ההזמנה" id="canvas-form">
                                </div>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
    </section>
    <script src="js/script.js"></script>
    <script src="js/load.js"></script>

    <!-- <script src="js/delegation.js"></script> -->

</body>

</html>