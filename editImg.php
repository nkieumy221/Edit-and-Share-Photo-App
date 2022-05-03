<!DOCTYPE HTML>
<html>
  <head>
    <meta name="keywords" content="HTML,CSS,Python,JavaScript">
    <meta name="author" content="Yi-Nung Yeh">
    <link href='https://fonts.googleapis.com/css?family=Walter+Turncoat|Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Permanent+Marker|Fredericka+the+Great|Fontdiner+Swanky|Freckle+Face|Finger+Paint|Cabin+Sketch|Love+Ya+Like+A+Sister' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    
    <link rel="stylesheet" href="assets/css/if.css">
    <title>Image Processing & Filters APP</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
        var header = $('header');
        var mutato;
        mutato=0;
        var backgrounds = new Array(
            'url(../images/header-background4.jpg)'
        , 'url(../images/header-background.jpg)'
        , 'url(../images/header-background2.jpg)'
        , 'url(../images/header-background3.jpg)'
        );
            function kepcsere()
            {
                $('header').animate({opacity: 0}, 'slow', function() {
                    $(this).css({
                        'background-image': backgrounds[mutato]
                    }).animate({opacity: 1}, 'fast');
                });
                mutato++;
                if (mutato>=backgrounds.length)
                {
                    mutato=0;
                }

                setTimeout(function(){kepcsere()},8000);
            }
            kepcsere();
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   </head>
   <body>
    <script src="assets/js/if.js" type="text/javascript"></script>
    <div id="sitebody " class="container-fluid">
        <div id="header">
            <div class="header-top row frame">
                <div class="col-2 ">
                    <button class="btn-header">
                        <a href="homepage.php" ><i class="fa-solid fa-arrow-left"></i></a>
                    </button>
                </div>
                <h1 class="col-8">
                    <img src="assets/img/logoleaf.png" alt="" class="logo " width="40">
                </h1>
                <div class="col-2 ">
                    <div class="list-btn">
                        <button class="btn-header">
                            <a href="" download="converted_image.png" id="download">
                                <i class="fa-solid fa-download"></i>
                            </a>
                        </button>
                        <button class="btn-header">
                            <a href="" id="post">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row frame">
                <label class="upload-label">Upload Image File:</label>
                <input class="hint" onclick="changeclass()" type="file" id="imageLoader" name="imageLoader"/><br>
                <div class="list-filter">
                    <div class="" id="btns">
                        <button class="btnFilter" onclick="myFunction7()">Invert Color</button>
                        <button class="btnFilter" onclick="myFunction8()">Grayscale</button>
                        <button class="btnFilter" onclick="myFunction9()">Transparent</button>
                        <button class="btnFilter" onclick="myFunction20()">Darken</button>
                        <button class="btnFilter" onclick="myFunction16()">Sharpen</button>
                        <button class="btnFilter" onclick="myFunction23()">Gaussian Blur</button>
                        <button class="btnFilter" onclick="myFunction24()">Motion Blur</button>
                        <button class="btnFilter" onclick="myFunction21()">Edge</button>
                        <button class="btnFilter" onclick="myFunction25()">Edge2</button>
                        <button class="btnFilter" onclick="myFunction26()">Contour</button>
                        <button class="btnFilter" onclick="myFunction22()">Emboss</button>
                        <button class="btnFilter" onclick="myFunction27()">Detail</button>
                        <button class="btnFilter" onclick="myFunction28()">Smooth</button>
                        <button class="btnFilter" onclick="myFunction29()">Sobel</button>
                        <button class="btnFilter" onclick="myFunction18()">Carve</button>
                        <button class="btnFilter" onclick="myFunction19()">Luminance</button>
                        <button class="btnFilter" onclick="myFunction15()">Threshold</button>
                        <button class="btnFilter" onclick="myFunction31()">Vintage</button>
                        <button class="btnFilter" onclick="myFunction32()">Erosion</button>
                        <button class="btnFilter" onclick="myFunction33()">Dilate</button>
                        <button class="btnFilter" onclick="myFunction34()">Red <i class="fa fa-arrows-h"></i> Green</button>
                        <button class="btnFilter" onclick="myFunction35()">Red <i class="fa fa-arrows-h"></i> Blue</button>
                        <button class="btnFilter" onclick="myFunction36()">Green <i class="fa fa-arrows-h"></i> Blue</button>
                        <button class="btnFilter" onclick="myFunction37()">Diffusion</button>
                        <button class="btnFilter" onclick="myFunction38()">Comic</button>
                    </div>          
                </div>
            </div>
        </div>
        <div class="row mt-2">   
            <div class="col-sm-9">
                <div id="sidebar_left" class="">
                    <div>
                        <canvas id="zoom" width="200" height="200"></canvas><br>
                        <label for="smoothbtn">
                            <input type="checkbox" name="smoothbtn" checked="checked" id="smoothbtn">
                            Enable Smoothing
                        </label>
                    </div>
                </div>
                <div id="sidebar_right"></div>
                <div id="content"><canvas class="img-fluid" height="1000px" id="canvas"></canvas></div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-12 sidebar_mini" id="btns">
                        <button class="btn btn-outline-info mr-2" onclick="myFunction2()">Flip Upside-Down</button>
                        <button class="btn btn-outline-info mr-2" onclick="myFunction3()">Flip Horizontal</button>
                        <button class="btn btn-outline-info mr-2 mt-2" onclick="handleClear()">Clear</button>
                    </div>
                    <div class="col-12" id="btns">
                        <label for="brightness" class="form-label" >Brightness</label> <br>
                        <input type="range" name="brightness" id="brightness" min="0" max="200"
                            step="1" value="100" onchange="brightness(this.value)" style="width: 100%;">
                    </div>
                    <div class="col-12" id="btns">
                        <label for="cool" class="form-label">Cool</label> <br>
                        <input type="range" name="cool" id="cool" min="0" max="200" 
                            step="1" value="100" onchange="toCool(this.value)" style="width: 100%;">
                    </div>
                    <div class="col-12" id="btns">
                        <label for="warm" class="form-label">Warm</label> <br>
                        <input type="range" name="warm" id="warm" min="0" max="200" 
                            step="1" value="100" onchange="toWarm(this.value)" style="width: 100%;">
                    </div>
                    <div class="col-12" id="btns">
                        <label for="meanBlur" class="form-label">Blur</label> <br>
                        <input type="range" name="meanBlur" id="meanBlur" min="0" max="51" 
                            step="1" value="0" onchange="toBlur(this.value)" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var imageLoader = document.getElementById('imageLoader');
        imageLoader.addEventListener('change', handleImage, false);
        var canvas=document.getElementById('canvas');
        var ctx=canvas.getContext('2d');
        var img;
        var ulx=0;
        var uly=0;
        function handleImage(e)
        {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ulx=0;
            uly=0;
            var reader = new FileReader();
            reader.onload = function(event)
            {
                img = new Image();
                img.onload = function()
                {    
                    canvas.width=img.width*1000/img.width;
                    canvas.height=img.height*1000/img.width;                              
                    ctx.drawImage(img,0,0,img.width*1000/img.width,img.height*1000/img.width);
                    img.width=canvas.width;
                    img.height=canvas.height;
                }
                img.src = event.target.result;
            }
            reader.readAsDataURL(e.target.files[0]);   
            
        }
        myFunction6();
        function myFunction6()
        {
            var zoomctx = document.getElementById('zoom').getContext('2d'); 
            var smoothbtn = document.getElementById('smoothbtn');
            var toggleSmoothing = function(event)
            {
                zoomctx.imageSmoothingEnabled = this.checked;
                zoomctx.mozImageSmoothingEnabled = this.checked;
                zoomctx.webkitImageSmoothingEnabled = this.checked;
                zoomctx.msImageSmoothingEnabled = this.checked;
            };
            smoothbtn.addEventListener('change', toggleSmoothing);
            var zoom = function(event)
            {
                var x = event.layerX;
                var y = event.layerY;
                zoomctx.drawImage(canvas,
                Math.abs(x - 5),
                Math.abs(y - 5),
                10, 10,
                0, 0,
                200, 200);
            };
            canvas.addEventListener('mousemove', zoom);
        }

        let downloadBtn = document.querySelector("#download");
            downloadBtn.addEventListener("click", (e) => {
                e.target.href = canvas.toDataURL("image/png");
        })

        let postBtn = document.querySelector("#post");
            postBtn.addEventListener("click", (e) => {
                data = canvas.toDataURL();
                $.ajax({
                    type: "POST",
                    url: "saveimg.php",
                    data: {
                        imgBase64: data
                    }
                    // Sau khi gửi dữ liệu thành công thì sẽ thêm nút Đi tới link ảnh 
                })
            })
        
    </script>
  </body>
</html> 
