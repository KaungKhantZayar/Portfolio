<div id="up"></div>
<div id="home"></div>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link href="bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-modal-link/bootstrap.min.css">
    <script src="bootstrap-modal-link/jquery.min.js"></script>
    <script src="bootstrap-modal-link/bootstrap.min.js"></script>
    <script src="app.js" charset="utf-8"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
   <link href='custom.css' rel='stylesheet' type='text/css'>
<script src="app.js" charset="utf-8"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  </head>
  <style media="screen">
      .main-bg{
        background-color:black;
      }
      .nav-color{
          transition:0.5s;
      }
      .nav-color:hover{
        border-bottom:2px solid lightblue;
        margin-bottom:-10px;
        margin-top:-5px;
      }
      body{
        background-color:black;
      }
      .navbar{
        /* background-color:#001c49; */
       /* background-color:#002155; */
      }
      .photo{
        object-fit: cover;
        /* border-top-left-radius:100px;
        border-bottom-right-radius:100px;
        border-top-right-radius:10px;
        border-bottom-left-radius:10px; */
        /* height:300px; */
        width:450px;
        margin-top:20px;
        margin-left:100px;
        transition:0.4s;
        cursor: pointer;
      }
      .photo:hover{
        /* box-shadow:2px 2px 30px lightblue;
        border-top-left-radius:10px;
        border-bottom-right-radius:10px;
        border-top-right-radius:100px;
        border-bottom-left-radius:100px; */
        padding:10px;
      }

      /* photo1 */
      .photo1{
        object-fit: cover;
        /* border-top-left-radius:100px;
        border-bottom-right-radius:100px;
        border-top-right-radius:10px;
        border-bottom-left-radius:10px; */
        height:360px;
        width:440px;
        margin-top:120px;
        margin-left:100px;
        transition:0.4s;
        cursor: pointer;
      }
      .photo1:hover{
        box-shadow:2px 2px 30px lightblue;
        border-top-left-radius:10px;
        border-bottom-right-radius:10px;
        border-top-right-radius:100px;
        border-bottom-left-radius:100px;
      }

      .icon-link1{
        border:2px outset ;
        border-radius:20px;
        box-shadow:0px 0px 5px lightblue;
        transition:0.5s;
      }
      .icon-link1:hover{
        padding:3px;
        /* box-shadow:0px 7px 30px 20px #107637; */
        box-shadow:0px 7px 30px 20px lightgreen;
        border-radius:20px;
        cursor: pointer;
      }
      .button{
        border:none;
        background-color:lightgreen;
        border-radius:20px;
        padding-top:3px;
        padding-bottom:3px;
        padding-left:20px;
        padding-right:20px;
        transition:0.4s;
        color:gray;
      }
      .button:hover{
        box-shadow:0px 7px 30px 0px lightblue;
          padding-left:50px;
          padding-right:50px;
          background-color:#002155;
          border:1px solid lightgreen;
          color:white;
      }
      .skill-border{
        border:2px solid gray;
        width:200px;
        margin-left:460px;
      }
      .subject{
        font-size:18px;
        font-weight:thin;
        color:#808080;
        padding-bottom:15px;
        text-transform:uppercase;
      }
      .progress-bar{
        position:relative;
        width:100%;
        height:10px;
        background-color:#808080;
        border-radius:15px;
        margin-bottom:20px;
      }
        .progress-bar::after{
          position:absolute;
          content: attr(value);
          top:-35px;
          right:0;
          color:#808080;
          font-size:18px;
        }
        .progress-line{
          position: absolute;
          width:0%;
          height:10px;
          background-color:yellow;
          border-radius:15px;
          top:-1px;
          animation: animate 1.5s cubic-bezier(1,0.2,0.2,1) forwards;
        }
        @keyframes  animate {
              100%{
                width:100%  ;
              }
        }

        .progress-line::after{
          content:'';
          position: absolute;
          width:13px;
          height:13px;
          border-radius:50px;
          top:50%;
          left:100%;
          transform: translate(-50%, -50%);
          /* background-color:#d03645; */
        }

.cc{
  box-shadow:10px 5px 15px lightblue;
  transition:0.4s;
}
.cc:hover{
  box-shadow:10px 10px 30px lightblue;
}
.cd{
  background-color:#777777;
  transition:0.5s;
}
.cd:hover{
  box-shadow:10px 10px 30px lightblue;

}
.contact-btn{
  border:none;
  margin-left:10px;
  background-color:lightgreen;
  border-radius:5px;
  padding-top:3px;
  padding-bottom:3px;
  padding-left:20px;
  padding-right:20px;
  transition:0.4s;
  width:400px;
  margin-left:60px;
  margin-bottom:10px;
  margin-top:10px;
}
.contact-btn:hover{
  background-color:lightblue;
  box-shadow:2px 2px 30px lightgreen;
}
.cdr{
  background-color:#777777;
  transition:0.4s;
}
.cdr:hover{
  box-shadow:10px 10px 30px lightblue;

}
/* .google{
  transition: 0.4s;
  border:5px outset lightblue;
}
.google:hover{
  background-color:;
} */
.Footer{
  background-color:#222222;
}
.about_me_btn{
    background-color:yellow;
    color:black;
}
.footer_link{
  text-decoration: none;
}
.btn{
  backdrop-filter:blur(25px);
  width:100%;
  padding:10px 16px 10px 38px;
  border-radius:20px;
  border:solid 3px transparent;
  background:rgb(255,255,255,0.1);
  outline:none;
  caret-color:white;
  color:white;
  font-weight:500;
  transition:0.25s;
}
.int{
  border:none;
}
.main_footer_cd{
  background:rgb(0,0,0,0.1);
  border-radius:16px;
  border:solid 5px rgb(255,255,255,0.1);
  backdrop-filter:blur(25px);
  box-shadow:0px 6px 30px 20px rgb(0,0,0,0.1);
  color:white;
  /* background:url('image/photo6.jpg'); */
  width:100%;
  justify-content:center;
  background-size:cover;
  background-position:center;
}
.input_box input{
  width:100%;
  padding:10px 16px 10px 38px;
  border-radius:20px;
  border:solid 3px transparent;
  background:rgb(255,255,255,0.1);
  outline:none;
  caret-color:white;
  color:white;
  font-weight:500;
  transition:0.25s;
}
.input_box input:focus{
  border:solid 3px rgb(255,255,255,0.25);
}
.input_box input::placeholder{
  color:rgb(255,255,255,0.75);
}
.input_box input::-ms-reveal{
  filter: invert(100%);
}

.services_btn{
  /* margin-right:-2000px !important; */
  border:none;
  padding:8px;
  background-color:yellow;
  border-radius:10px;
}
.services_card{
border:2px solid lightblue;
/* border-radius:50px; */
background-color:gray;
transition:0.5s;
}
.services_card:hover{
/* border:none; */
border:2px solid yellow;
border-radius:50px;
background-color:gray;
}
.carousel_btn_1{
  border:none;
  padding:10px;
  border-radius:10px;
  background-color:yellow;
  margin-left:280px;
}
.prev_next_btn{
  margin-top:-110px;
}

@media only screen and (max-width: 600px) {
  .main_photo{
    display:none;
  }
  .text_col-div{
    width:100%;
    padding:20px;
    margin-top:-60px !important;
  }
  .text_size{
    font-size:30px !important;
  }
  .dop{
    display:none;
  }
  .main_icon{
    margin-left:150px;
  }
  .web_text{
    margin-left:120px;
    margin-top:10px;
  }
  .up{
    display:none;
  }
  .about_photo{
      width:100%;
  }
  .about_text{
    width:100%;
  }
  .main_about{
    width:100%;
    margin:0px;
    padding:20px;
    margin-top:80px !important;
  }
  .about_myphoto{
    margin-left:90px !important;
  }
  .about_text_div{
    width:100%;
    margin-left:0px !important;
    margin-top:-90px;
  }
  .about_texts{
    text-align: center;
  }
  .about_story{
    margin-left:85px;
  }
  .about_email{
    margin-left:85px;
  }
  .about_contact{
    margin-left:200px;
  }
  .about_me_text{
    display: block !important;
  }
  .skill_outline{
      display:none !important;
  }
  .main_skill{
    padding:20px;
    margin-top:-25px !important;
  }
  .contact_div{
    width:100%;
    padding:20px;
  }
  .contact_google_map_div{
    width:100% !important;
    padding:20px;
    border-radius:90px !important;
  }
  .google_map{
    width:100%;
    height:300px;
  }
  .services_col{
    width:100%;
    padding:40px;
  }
  .services_icon{
    margin-left:183px !important;
  }
  .training_text{
    margin-left:160px !important;
  }
  .services_button{
    margin-left:155px;
  }
  .Web_Design_text{
    margin-left:144px !important;
  }
  .Web_Development_text{
    margin-left:110px !important;
  }
  .main_carousel{
    width:450px !important;
  }
  .carousel_btn_1{
    margin-left:150px !important;
  }
  .modal_width{
    padding:50px !important;
    margin-right:20px;
    /* padding-; */
  }
  .close_btn{
    /* margin-left:120px !important; */
    padding-left:-50% !important;
  }
}


  </style>
  <body>

<?php include 'navbar.php'; ?>
<br><br><br><br><br>
    <div class="container" style="margin-top:-10px;">
        <div class="d-flex main-div">
            <div class="text_col-div">
              <div class="" style="margin-top:150px;">

                <div class="d-flex" style="">
                <h3 style="color:white;">Hello I'm</h3>
                <div class="ms-3 d-flex text_size" style="font-size:30px; margin-left:10px; color:white; margin-top:-10px; font-family: serif; color:yellow; font-weight:bold; text-shadow:5px 5px 5px lightblue;">
                  <div id="k" class="hide">K</div>
                  <div id="a" class="hide" style="margin-left:0px;">a</div>
                  <div id="u" class="hide" style="margin-left:0px;">u</div>
                  <div id="n" class="hide" style="margin-left:0px;">n</div>
                  <div id="g" class="me-2 hide" style="margin-left:0px;">g</div>

                  <div id="kk" class="hide" style="margin-left:0px;">K</div>
                  <div id="h" class="hide" style="margin-left:0px;">h</div>
                  <div id="aa" class="hide" style="margin-left:0px;">a</div>
                  <div id="nn" class="hide" style="margin-left:0px;">n</div>
                  <div id="t" class="me-2 hide" style="margin-left:0px;">t</div>

                  <div id="z" class="hide" style="margin-left:0px;">Z</div>
                  <div id="aaa" class="hide"style="margin-left:0px;">a</div>
                  <div id="y" class="me-2 hide" style="margin-left:0px;">y</div>

                  <div id="yy" class="hide" style="margin-left:0px;">Y</div>
                  <div id="aaaa" class="hide"style="margin-left:0px;">a</div>
                  <div id="r" class="me- hide" style="margin-left:0px;">r</div>

                  <div id="dop" class="me- hide">.</div>
                  <div id="dopp" class="me- hide dop"style="margin-left:0px; font-size:30px;">.</div>
                  <!-- <div id="doppp" class="me- hide dop" style="margin-left:0px; font-size:30px;">.</div> -->
                </div>
              </div>
                  <h4 style="color:white;" class="web_text">I am Web Developer</h4>
                  <p style="color:gray; text-align:justify; font-size:17px;" class="mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo....
                </p>



                  <script>

                        $(document).ready(function(){

                          $("#k").hide();
                          $("#a").hide();
                          $("#u").hide();
                          $("#n").hide();
                          $("#g").hide();

                          $("#kk").hide();
                          $("#h").hide();
                          $("#aa").hide();
                          $("#nn").hide();
                          $("#t").hide();

                          $("#z").hide();
                          $("#aaa").hide();
                          $("#y").hide();

                          $("#yy").hide();
                          $("#aaaa").hide();
                          $("#r").hide();

                          $("#dop").hide();
                          $("#dopp").hide();
                          $("#doppp").hide();


                            for (var i = 0; i < 20; i++) {
                                if (i==1) {
                                    setTimeout(()=>{K()}, 200);
                                }
                                if (i==2) {
                                  setTimeout(()=>{A()}, 400);
                                }
                                if (i==3) {
                                  setTimeout(()=>{U()}, 600);
                                }
                                if (i==4) {
                                  setTimeout(()=>{N()}, 800);
                                }
                                if (i==5) {
                                  setTimeout(()=>{G()}, 1000);
                                }

                                if (i==6) {
                                  setTimeout(()=>{KK()}, 1200);
                                }
                                if (i==7) {
                                  setTimeout(()=>{H()}, 1400);
                                }
                                if (i==8) {
                                  setTimeout(()=>{AA()}, 1600);
                                }
                                if (i==9) {
                                  setTimeout(()=>{NN()}, 1800);
                                }
                                if (i==10) {
                                  setTimeout(()=>{T()}, 2000);
                                }

                                if (i==11) {
                                  setTimeout(()=>{Z()}, 2200);
                                }
                                if (i==12) {
                                  setTimeout(()=>{AAA()}, 2400);
                                }
                                if (i==13) {
                                  setTimeout(()=>{Y()}, 2600);
                                }

                                if (i==14) {
                                  setTimeout(()=>{YY()}, 2800);
                                }
                                if (i==15) {
                                  setTimeout(()=>{AAAA()}, 3000);
                                }
                                if (i==16) {
                                  setTimeout(()=>{R()}, 3200);
                                }

                                if (i==17) {
                                  setTimeout(()=>{Dop()}, 3400);
                                }
                                if (i==18) {
                                  setTimeout(()=>{Dopp()}, 3600);
                                }
                                if (i==19) {
                                  setTimeout(()=>{Doppp()}, 3000);
                                }
                            }

                              function K(){
                                $("#k").show();
                              }
                              function A(){
                                $("#a").show();
                              }
                              function U(){
                                $("#u").show();
                              }
                              function N(){
                                $("#n").show();
                              }
                              function G(){
                                $("#g").show();
                              }

                              function KK(){
                                $("#kk").show();
                              }
                              function H(){
                                $("#h").show();
                              }
                              function AA(){
                                $("#aa").show();
                              }
                              function NN(){
                                $("#nn").show();
                              }
                              function T(){
                                $("#t").show();
                              }

                              function Z(){
                                $("#z").show();
                              }
                              function AAA(){
                                $("#aaa").show();
                              }
                              function Y(){
                                $("#y").show();
                              }

                              function YY(){
                                $("#yy").show();
                              }
                              function AAAA(){
                                $("#aaaa").show();
                              }
                              function R(){
                                $("#r").show();
                              }

                              function Dop(){
                                $("#dop").show();
                              }
                              function Dopp(){
                                $("#dopp").show();
                              }
                              function Doppp(){
                                $("#doppp").show();
                              }

                        });

                  </script>

                  <div class="main_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" style="color:white;" width="25" height="25" fill="currentColor" class="bi bi-facebook ms-2 icon-link1" viewBox="0 0 16 16">
                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" style="color:white;" width="25" height="25" fill="currentColor" class="bi bi-telegram ms-2 icon-link1" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" style="color:white;"  width="25" height="25" fill="currentColor" class="bi bi-instagram ms-2 icon-link1" viewBox="0 0 16 16">
                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                    </svg>
                  </div>
                    <div class="mt-5">
                    <button type="button" class="btn about_me_btn" name="button" style="background-color:yellow; color:black;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><b>More About Me</b></button>

                  <!-- Modal -->
                  <div class="modal fade modal_width" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="margin-top:190px;">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header bg-dark">
                          <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color:yellow; font-size:20px !important;">About Me</h1>
                        </div>
                        <div class="modal-body bg-dark">
                          <p style="color:gray;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo....</p>
                        </div>
                        <div class="modal-footer bg-dark">
                          <button class="p-2" type="button" name="button" data-bs-dismiss="modal" style="background-color:yellow; margin-left:190px; border-radius:10px;"><b>Close Now</b></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                </div>
                </div>

            <div class="col-6 main_photo">
                  <div class="" style="margin-top:26px;">
                      <a href="#"><img src="image/cartoo_peter.png" alt="" class="photo"></a>
                  </div>
            </div>
        </div>
    </div>

<br><br><br>
<div id="about">

</div>

  <div class="container main_about" style="margin-top:100px;">
    <div class="row">
      <h4 style="color:yellow; font-size:28px; display:none;" class="about_texts about_me_text">Aboud Me</h4>

      <div class="col-6 about_photo">
        <div class="mt-5 about_photo_div" style="margin-left:-90px;">
          <img src="image/cartoo_peter.png" alt="" class="photo about_myphoto">
        </div>
      </div>
      <div class="col-6 about_text">
        <div class="about_text_div" style="margin-top:120px; margin-left:90px;">
          <h4 style="color:yellow; font-size:28px;" class="about_texts">Aboud Me</h4>
          <p style="color:white; text-align:justify; font-size:17px;" class="mt-4 about_story">A story of hardwork and preseveracne</p>
          <p style="color:gray;" class="about_texts">Hi I'm KKZY a web developer and designer speciallzing in creating visually angaging user-friendly website. My expertise blends innovative design with robust functionality to bring your digital ideas to life.</p>
          <p style="color:white; text-align:justify; font-size:17px;" class="mt-4 about_contact">Contact</p>
          <p style="color:gray;" class="about_texts">Do you have fancy saying hi to me or you want to get started with your project and you need my help? Feel free to contact me.</p>
          <a href="#" style="color:yellow; text-align:justify; font-size:17px;" class="mt-4 about_email">www.kaungkhantzayyar13@gmail.com</a>
          <div class="mt-3">
          <button type="button" class="btn about_me_btn" name="button"  style="background-color:yellow; color:black;"><b>HLRE ME</b></button>
        </div>
        </div>
      </div>
    </div>
  </div>

  <div id="skill">

  </div>

        <div class="container main_skill" style="padding-top:150px;">
            <div class="main-title">
              <h1 class="text-center" style="color:white;">My <font color="yellow">Skills</font></h1>
            </div>

            <div class="row mt-5">
                <section class="col">
                    <div class="sub-title mt-4">
                        <h3 style="color:white;">Programming Skills</h3>
                    </div>

                    <div class="skill-container mt-5">

                        <div class="skill">
                            <div class="subject" style="color:white;">HTML <span class="float-end">94%</span> </div>
                            <div class="progress-bar" value="94%">
                                <div class="progress-line" style="max-width:94%;"></div>
                            </div>
                        </div>

                        <div class="skill">
                            <div class="subject" style="color:white;">CSS <span class="float-end">83%</span> </div>
                            <div class="progress-bar" value="83%">
                                <div class="progress-line" style="max-width:83%;"></div>
                            </div>
                        </div>

                        <div class="skill">
                            <div class="subject" style="color:white;">JavaScript <span class="float-end">88%</span> </div>
                            <div class="progress-bar" value="88%">
                                <div class="progress-line" style="max-width:88%;"></div>
                            </div>
                        </div>

                        <div class="skill">
                            <div class="subject" style="color:white;">Php <span class="float-end">68%</span> </div>
                            <div class="progress-bar" value="68%">
                                <div class="progress-line" style="max-width:68%;"></div>
                            </div>
                        </div>

                    </div>
                </section>


                <section class="col">
                    <div class="sub-title mt-4">
                        <h3 style="color:white;">Designing Skills</h3>
                    </div>

                    <div class="skill-container mt-5">

                        <div class="skill">
                            <div class="subject" style="color:white;">Photoshop <span class="float-end">82%</span> </div>
                            <div class="progress-bar" value="82%">
                                <div class="progress-line" style="max-width:82%;"></div>
                            </div>
                        </div>

                        <div class="skill">
                            <div class="subject" style="color:white;">Figma <span class="float-end">63%</span> </div>
                            <div class="progress-bar" value="63%">
                                <div class="progress-line" style="max-width:63%;"></div>
                            </div>
                        </div>

                        <div class="skill">
                            <div class="subject" style="color:white;">Illustrator <span class="float-end">20%</span> </div>
                            <div class="progress-bar" value="20%">
                                <div class="progress-line" style="max-width:20%;"></div>
                            </div>
                        </div>

                        <div class="skill">
                            <div class="subject" style="color:white;">Responsive Design <span class="float-end">10%</span> </div>
                            <div class="progress-bar" value="10%">
                                <div class="progress-line" style="max-width:10%;"></div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>
          </div>

<div id="services">

</div>
<br><br><br><br><br><br><br><br><br>
<div>
    <h2 style="color:white;" class="text-center"><b>Our <font color="yellow">Services</font></b></h2>
</div>
<br>
  <div class="container mt-5">
    <div class="row">
      <div class="col-4 services_col">
        <div class="card services_card">
          <div class="card-body" style="background-color:black;">
            <svg style="margin-left:170px; color:yellow;" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-laptop services_icon" viewBox="0 0 16 16">
              <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5"/>
            </svg>

            <h4 style="margin-left:143px; color:white; margin-top:10px;" class="training_text"><b>Training</b></h4>
            <p style="text-align:center; color:gray;" class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoin..</p>
            <button type="button" name="button" class="services_btn mt-3 services_button" style="margin-left:143px !important;"data-bs-toggle="modal" data-bs-target="#staticBackdrop1"><b>Read More</b></button>
          </div>
        </div>
      </div>


    <!-- Modal -->
    <div class="modal fade modal_width" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="margin-top:190px;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-dark">
            <h1 class="modal-title fs-5" id="staticBackdropLabel1" style="color:yellow; font-size:20px !important;"><font color="white">Training</font> Services</h1>
          </div>
          <div class="modal-body bg-dark">
            <p style="color:gray;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo....</p>
          </div>
          <div class="modal-footer bg-dark">
            <button class="p-2" type="button" name="button" data-bs-dismiss="modal" style="background-color:yellow; margin-left:190px; border-radius:10px;"><b>Close Now</b></button>
          </div>
        </div>
      </div>
    </div>


      <div class="col-4 services_col">
        <div class="card services_card">
          <div class="card-body" style="background-color:black;">
            <svg style="margin-left:170px; color:yellow;" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-palette services_icon" viewBox="0 0 16 16">
              <path d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m4 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M5.5 7a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
              <path d="M16 8c0 3.15-1.866 2.585-3.567 2.07C11.42 9.763 10.465 9.473 10 10c-.603.683-.475 1.819-.351 2.92C9.826 14.495 9.996 16 8 16a8 8 0 1 1 8-8m-8 7c.611 0 .654-.171.655-.176.078-.146.124-.464.07-1.119-.014-.168-.037-.37-.061-.591-.052-.464-.112-1.005-.118-1.462-.01-.707.083-1.61.704-2.314.369-.417.845-.578 1.272-.618.404-.038.812.026 1.16.104.343.077.702.186 1.025.284l.028.008c.346.105.658.199.953.266.653.148.904.083.991.024C14.717 9.38 15 9.161 15 8a7 7 0 1 0-7 7"/>
            </svg>
            <h4 style="margin-left:124px; color:white; margin-top:10px;" class="Web_Design_text"><b>Web Design</b></h4>
            <p style="text-align:center; color:gray;" class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoin..</p>
            <button type="button" name="button" class="services_btn mt-3 services_button" style="margin-left:143px !important;"data-bs-toggle="modal" data-bs-target="#staticBackdrop2"><b>Read More</b></button>
          </div>
        </div>
      </div>


      <div class="modal fade modal_width" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="margin-top:190px;">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-dark">
              <h1 class="modal-title fs-5" id="staticBackdropLabel2" style="color:yellow; font-size:20px !important;"><font color="white">Web Design</font> Services</h1>
            </div>
            <div class="modal-body bg-dark">
              <p style="color:gray;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo....</p>
            </div>
            <div class="modal-footer bg-dark">
              <button class="p-2" type="button" name="button" data-bs-dismiss="modal" style="background-color:yellow; margin-left:190px; border-radius:10px;"><b>Close Now</b></button>
            </div>
          </div>
        </div>
      </div>


      <div class="col-4 services_col">
        <div class="card services_card">
          <div class="card-body" style="background-color:black;">
            <b><svg style="margin-left:170px; color:yellow;" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-code-slash services_icon" viewBox="0 0 16 16">
              <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0"/>
            </svg></b>
            <h4 style="margin-left:85px; color:white; margin-top:10px;" class="Web_Development_text"><b>Web Development</b></h4>
            <p style="text-align:center; color:gray;" class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoin..</p>
            <button type="button" name="button" class="services_btn mt-3 services_button" style="margin-left:143px !important;"data-bs-toggle="modal" data-bs-target="#staticBackdrop3"><b>Read More</b></button>
          </div>
        </div>
        </div>

        <div class="modal fade modal_width" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="margin-top:190px;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-dark">
                <h1 class="modal-title fs-5" id="staticBackdropLabel3" style="color:yellow; font-size:20px !important;"><font color="white">Web Development</font> Services</h1>
              </div>
              <div class="modal-body bg-dark">
                <p style="color:gray;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo....</p>
              </div>
              <div class="modal-footer bg-dark">
                <button class="p-2" type="button" name="button" data-bs-dismiss="modal" style="background-color:yellow; margin-left:190px; border-radius:10px;"><b>Close Now</b></button>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- <div class="col-3">
        <div class="card">
          <div class="card-body">

          </div>
        </div>
      </div> -->
    </div>
  </div>


          <div id="project">

          </div>
          <br><br><br><br><br><br><br><br>
          <div>
          <div>
              <h2 style="color:white;" class="text-center"><b>My <font color="yellow">Project</font></b></h2>
          </div>

<div class="container main_carousel mt-5" style="width:700px;">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="project/2.png" class="d-block w-100" alt="...">
                  <p style="color:white; font-size:25px; text-align:center;" class="mt-3"><b>School Project Version [1]</b></p>
                  <button type="button" name="button" class="carousel_btn_1"><b>More Project</b></button>
              </div>
              <div class="carousel-item">
                <img src="project/1.png" class="d-block w-100" alt="...">
                <p style="color:white; font-size:25px; text-align:center;" class="mt-3"><b>School Project Version [2]</b></p>
                <button type="button" name="button" class="carousel_btn_1"><b>More Project</b></button>
              </div>
              <div class="carousel-item">
                <img src="project/3.png" class="d-block w-100" alt="...">
                <p style="color:white; font-size:25px; text-align:center;" class="mt-3"><b>Restaurant Project Version [1]</b></p>
                <button type="button" name="button" class="carousel_btn_1"><b>More Project</b></button>
              </div>
              <div class="carousel-item">
                <img src="project/4.png" class="d-block w-100" alt="...">
                <p style="color:white; font-size:25px; text-align:center;" class="mt-3"><b>Restaurant Project Version [2]</b></p>
                <button type="button" name="button" class="carousel_btn_1"><b>More Project</b></button>
              </div>
              <div class="carousel-item">
                <img src="project/5.png" class="d-block w-100" alt="...">
                <p style="color:white; font-size:25px; text-align:center;" class="mt-3"><b>Shwe Myanmar San Company</b></p>
                <button type="button" name="button" class="carousel_btn_1"><b>More Project</b></button>
              </div>
            </div>
            <button class="carousel-control-prev prev_next_btn" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next prev_next_btn" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>


              <div  id="contact">

              </div>
              <br><br><br><br><br>
              <!-- contact -->
              <h2 style="color:white;" class="text-center"><b>Contact <font color="yellow">Me</font></b></h2>

                <div class="container mt-5 main_footer_bg">
                  <div class="row">
                    <div class="col-6 contact_div">
                      <div class="card main_footer_cd">
                        <div class="card-body">
                          <h3>Contact</h3>
                          <form class="" action="index.html" method="post">
                            <div class="input_box mt-3">
                            <input type="text" name="" value="" placeholder="Enter Your Name" style="width:100%;" class="mt-2 int ps-3">
                            <input type="text" name="" value="" placeholder="Enter Your Email" style="width:100%;" class="mt-3 int ps-3">
                            <input type="text" name="" value="" placeholder="Enter Your Password" style="width:100%;" class="mt-3 int ps-3">
                            <input name="name" rows="5" style="width:100%; height:100px;" placeholder="Enter Message" class="mt-3 int ps-3 textarea_box">
                            </div>
                            <button type="" name="button" class="mt-3 btn" style="padding-right:40px !important; background-color:yellow; color:black;"><b>Submit Now</b></button>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 contact_google_map_div">
                      <iframe class="google_map" style="border-radius:10px;" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d393.1766974619688!2d96.17193952284455!3d16.920606562378563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sNorth%20Okkalapa%20ayer%2022street!5e1!3m2!1sen!2smm!4v1741944145666!5m2!1sen!2smm" width="600" height="470" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
              <!-- contact -->

              <div id="up_key" style="position:fixed; top:580px; left:95%;">
                <a href="#up" class="up">
                  <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-up-square-fill up" viewBox="0 0 16 16">
                    <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0"/>
                  </svg>
                </a>
              </div>

              <br><br><br>

<?php include 'footer.php'; ?>

  </body>
</html>
