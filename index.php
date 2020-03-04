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
                        <ul class="form-list">
                            <li class="form-option heart" id="opt-1">
                                <div class="img-wrapper">
                                    <i class="form-figure form-heart far fa-heart"></i>
                                </div>
                            </li>
                            <li class="form-option rectangle" id="opt-2">
                                <div class="img-wrapper">
                                    <div class="form-figure form-rectangle"></div>
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
                        <div class="size-container" id="square-1">
                            <div class="size-wrapper">
                                <div class="square-size big-size">
                                    <!-- <img class="big-heart" src="img/heart.png" alt="triangle-img"> -->
                                    <i class="big-heart far fa-heart" alt="heart-img"></i>
                                    <div class="form-price">5$</div>
                                </div>
                                <div class="square-size small-size">
                                    <!-- <img class="small-heart" src="img/heart.png" alt="triangle-img"> -->
                                    <i class="small-heart far fa-heart" alt="heart-img"></i>
                                    <div class="form-price">3$</div>
                                </div>
                            </div>
                        </div>
                        <div class="size-container" id="square-2">
                            <div class="size-wrapper">
                                <div class="square-size big-size">
                                    <div class="big-rectangle"></div>
                                    <div class="form-price">5$</div>
                                </div>
                                <div class="square-size small-size">
                                    <div class="small-rectangle"></div>
                                    <div class="form-price">3$</div>
                                </div>
                            </div>
                        </div>
                        <div class="size-container" id="square-3">
                            <div class="size-wrapper">
                                <div class="square-size big-size">
                                    <div class="big-circle"></div>
                                    <div class="form-price">5$</div>
                                </div>
                                <div class="square-size small-size">
                                    <div class="small-circle"></div>
                                    <div class="form-price">3$</div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="next-btn hidden btn">Next</a>
                    </li>
                    <li class="option-item hidden option-load" id="stage-3">
                        <canvas class="canvas" id="canvas"></canvas>
                        <div class="img-prop">
                            <input class="visually-hidden" type="file" id="loadImage" name="filename">
                            <label for="loadImage">
                                <i class="fas fa-cloud-upload-alt fa-icon"></i>
                            </label>

                            <a class="Add-text">
                                <i class="fas fa-font  fa-icon"></i>
                            </a>
                        </div>
                        <!-- <a class="imageSaver" id="imageSaver" href="#">Save image</a>  -->
                        <div class="btn-wrapper">
                            <a href="#" class="back-btn btn">Back</a>
                            <a href="#" class="mail-link">Next</a>
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
                                    <i class="fas fa-pizza-slice fa-icon"></i>
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
                    <li class="option-item hidden option-email">
                        <div class="box">
                            <form class="php-form" enctype='multipart/form-data' action="send.php" method="post">
                                <div class="visible-param">
                                    <div class="left-column">
                                        <div class="visible-shape"></div>
                                        <div class="visible-size"></div>
                                    </div>
                                    <img class="visible-img" width="100px" height="100px" src="#">
                                </div>

                                <input class="img-canvas" type='hidden' name='img-canvas' id="img-canvas" value="">
                                <input class="shape-input" type='hidden' name='shape-input' id="shape-input" value="shape ">
                                <input class="size-input" type='hidden' name='size-input' id="size-input" value="size ">

                                <input type="text" class="form-control h" name="name" placeholder="Full name*" required>

                                <input type="text" class="form-control h" name="email" placeholder="E-mail*" required>

                                <input type="text" class="form-control h" name="phone" placeholder="Phone Number*" required>

                                <textarea name="text" class="form-control" id="exampleFormControlTextarea1" placeholder="Talk to us" rows="5"></textarea>
                                <div class="btn-controls">
                                    <a href="#" class="form-back btn">Back</a>
                                    <input type="submit" class="submit-button" value="Send" id="canvas-form">
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