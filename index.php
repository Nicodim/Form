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
                                    <img class="form-heart" src="img/heart.png" alt="heart-img">
                                </div>
                            </li>
                            <li class="form-option rectangle" id="opt-2">
                                <div class="img-wrapper">
                                    <div class="form-rectangle"></div>
                                </div>
                            </li>
                            <li class="form-option circle" id="opt-3">
                                <div class="img-wrapper">
                                    <div class="form-circle"></div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="option-item hidden option-size" id="stage-2">
                        <div class="size-container" id="square-1">
                            <div class="size-wrapper">
                                <div class="square-size big-size">
                                    <img class="big-heart" src="img/heart.png" alt="triangle-img">
                                    <div class="form-price">5$</div>
                                </div>
                                <div class="square-size small-size">
                                    <img class="small-heart" src="img/heart.png" alt="triangle-img">
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

                        <a href="#" class="next-btn hidden">Next</a>
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
                            <label class="control-label trash" for="deleted">
                                <i class="fas fa-trash-alt fa-icon"></i>
                                </label>
                        </div>
                         <!-- <a class="imageSaver" id="imageSaver" href="#">Save image</a>  -->
                         <div class="btn-wrapper">
                         <a href="#" class="back-btn">Back</a> 
                         <a href="#" class="mail-link">Next</a>
                         </div> 
                        <div class="controls-container hidden">
                            
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
                                    <option value="arial">Arial</option>
                                    <option value="helvetica" selected>Helvetica</option>
                                    <option value="myriad pro">Myriad Pro</option>
                                    <option value="delicious">Delicious</option>
                                    <option value="verdana">Verdana</option>
                                    <option value="georgia">Georgia</option>
                                    <option value="courier">Courier</option>
                                    <option value="comic sans ms">Comic Sans MS</option>
                                    <option value="impact">Impact</option>
                                    <option value="monaco">Monaco</option>
                                    <option value="optima">Optima</option>
                                    <option value="hoefler text">Hoefler Text</option>
                                    <option value="plaster">Plaster</option>
                                    <option value="engagement">Engagement</option>
                                </select>
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
                        </div>
                    </li>
                    <li class="option-item hidden option-email">
                        <div class="box">
                            <form class="php-form" action="send.php" method="post">
                                <input class="img-canvas" type='hidden' name='img-canvas' id="img-canvas">
                                <input class="shape-input" type='hidden' name='shape-input' id="shape-input" value="shape ">
                                <input class="size-input" type='hidden' name='size-input' id="size-input" value="size ">

                                <input type="text" class="form-control h" name="name" placeholder="Full name*" required>

                                <input type="text" class="form-control h" name="email" placeholder="E-mail*" required>

                                <input type="text" class="form-control h" name="phone" placeholder="Phone Number*" required>

                                <textarea name="text" class="form-control" id="exampleFormControlTextarea1" placeholder="Talk to us" rows="5"></textarea>
                           
                                <input type="submit" class="submit-button" value="Send" id="canvas-form" onclick="validation(this.form)">
                            </form>
                        </div>
                    </li>
                </ul>
                </d>
            </div>
    </section>
    <script src="js/script.js"></script>
    <script src="js/load.js"></script>

    <!-- <script src="js/delegation.js"></script> -->

</body>

</html>