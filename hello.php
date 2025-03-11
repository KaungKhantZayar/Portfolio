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
<script src="jquery.js" charset="utf-8"></script>

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
        background-color:#002155;
      }
      .navbar{
        background-color:#001c49;
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
        border-top-left-radius:100px;
        border-bottom-right-radius:100px;
        border-top-right-radius:10px;
        border-bottom-left-radius:10px;
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
          background-color:lightblue;
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
.Services-btn{
    border:none;
    margin-left:10px;
    background-color:lightgreen;
    border-radius:20px;
    padding-top:3px;
    padding-bottom:3px;
    padding-left:20px;
    padding-right:20px;
    transition:0.4s;
}
.Services-btn:hover{
    background-color:lightblue;
    box-shadow:10px 10px 30px lightgreen;
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
.contact-text{
  color:lightgreen;
  transition:0.5s;
  text-align: justify;
}
.contact-text:hover{
  color:lightblue;
}
.Footer{
  background-color:#222222;
}
  </style>
  <body>



    <nav class="navbar navbar-expand-sm  navbar-dark fixed-top" id="up">
      <!-- Brand/logo -->
      <a class="navbar-brand" href="#" style="margin-left:90px;">
          <img src="image/logo2.jpg" alt="" width="100px">
      </a>

      <!-- Links -->
      <ul class="navbar-nav" style="margin-left:500px;">
        <li class="nav-item">
          <a class="nav-link ms-3 nav-color" href="#home" style="color:white;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-3 nav-color" href="#about" style="color:white;">Aboud Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-3 nav-color" href="#skill" style="color:white;">Skill</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-3 nav-color" href="#services" style="color:white;">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-3 nav-color" href="#project" style="color:white;">Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-3 nav-color" href="#contact" style="color:white;">Contact</a>
        </li>
        <li class="nav-item">
          <svg xmlns="http://www.w3.org/2000/svg" style="color:white; margin-left:80px; margin-top:10px;" width="16" height="16" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278"/>
          </svg>
        </li>
      </ul>
    </nav>

    <br>

    <div class="container" id="home" style="margin-top:50px;">
        <div class="d-flex">
            <div class="col-6">
              <div class="" style="margin-top:150px;">

                <div class="d-flex" style="">
                <h3 style="color:white;">Hello I'm</h3>
                <div class="ms-3 d-flex" style="font-size:35px; margin-left:10px; color:white; margin-top:-10px; font-family: serif; color:orange;  text-shadow:5px 5px 5px lightblue;">
                  <div id="k" class="me-2 hide">K</div>
                  <div id="a" class="me-2 hide" style="margin-left:2px;">a</div>
                  <div id="u" class="me-2 hide" style="margin-left:2px;">u</div>
                  <div id="n" class="me-2 hide" style="margin-left:2px;">n</div>
                  <div id="g" class="me-2 hide" style="margin-left:2px;">g</div>

                  <div id="kk" class="me-5 hide" style="margin-left:10px;">K</div>
                  <div id="h" class="me-2 hide" style="margin-left:2px;">h</div>
                  <div id="aa" class="me-2 hide" style="margin-left:2px;">a</div>
                  <div id="nn" class="me-2 hide" style="margin-left:2px;">n</div>
                  <div id="t" class="me-2 hide" style="margin-left:2px;">t</div>

                  <div id="z" class="me-2 hide" style="margin-left:10px;">Z</div>
                  <div id="aaa" class="me-2 hide"style="margin-left:2px;">a</div>
                  <div id="y" class="me-2 hide" style="margin-left:2px;">y</div>

                  <div id="yy" class="me-2 hide" style="margin-left:10px;">Y</div>
                  <div id="aaaa" class="me-2 hide"style="margin-left:2px;">a</div>
                  <div id="r" class="me-2 hide" style="margin-left:2px;">r</div>

                  <div id="dop" class="me-2 hide">.</div>
                  <div id="dopp" class="me-2 hide"style="margin-left:2px;">.</div>
                  <div id="doppp" class="me-2 hide" style="margin-left:2px;">.</div>
                </div>
              </div>
                  <h4 style="color:white;">I am Web Developer</h4>
                  <p style="color:white; text-align:justify;" class="mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
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

                  <div class="">
                    <a href="icon-link">
                    <svg xmlns="http://www.w3.org/2000/svg" style="color:white;" width="25" height="25" fill="currentColor" class="bi bi-facebook ms-2 icon-link1" viewBox="0 0 16 16">
                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                    </svg>
                    </a>

                    <a href="icon-link">
                    <svg xmlns="http://www.w3.org/2000/svg" style="color:white;" width="25" height="25" fill="currentColor" class="bi bi-telegram ms-2 icon-link1" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/>
                    </svg>
                    </a>

                    <a href="icon-link">
                    <svg xmlns="http://www.w3.org/2000/svg" style="color:white;"  width="25" height="25" fill="currentColor" class="bi bi-instagram ms-2 icon-link1" viewBox="0 0 16 16">
                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                    </svg>
                    </a>

                    <a href="icon-link">
                    <svg xmlns="http://www.w3.org/2000/svg" style="color:white;"  width="25" height="25" fill="currentColor" class="bi bi-linkedin ms-2 icon-link1" viewBox="0 0 16 16">
                      <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                    </svg>
                    </a>

                    <a href="icon-link">
                    <svg xmlns="http://www.w3.org/2000/svg" style="color:white;"  width="25" height="25" fill="currentColor" class="bi bi-twitter ms-2 icon-link1" viewBox="0 0 16 16">
                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
                    </svg>
                    </a>
                  </div>
                    <div class="mt-5">
                    <button type="submit" class="button" name="button"><b>More About Me</b></button>
                  </div>
                </div>
                </div>
            <div class="col-6">
                  <div class="" style="margin-top:25px;">
                      <a href="#"><img src="image/myphoto3.jpg" alt="" class="photo"></a>
                  </div>
            </div>
        </div>
    </div>

      <div class="container" id="about">
          <div class="d-flex">
              <div class="col-6" style="margin-top:120px; margin-bottom:120px; margin-left:-80px;">
                <a href="#"><img src="image/photo1.jpg" alt="" class="photo1"></a>
              </div>
              <div class="col-6">
                <div class="" style="margin-top:220px; margin-left:100px;">
                  <h1 style="color:white;">About <font color="lightgreen">Me</font></h1>
                  <h5 style="color:white;">I am Web Developer</h5>

                  <div class="mt-4">
                      <p style="color:white; text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>

                  <div class="mt-5">
                  <button type="submit" class="button" name="button"><b>See More</b></button>
                </div>
                </div>
              </div>
          </div>
      </div>

        <div class="container" id="skill" style="padding-top:100px;">
            <div class="main-title">
              <h1 class="text-center" style="color:white;">My Skills</h1>
              <div class="skill-border"></div>
              <p class="text-center mt-4" style="color:white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed nostrud exercitation ullamco <br>laboris nisi ut aliquip ex ea commodo consequat. Duis</p>
            </div>

            <div class="row">
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

          <div class="container" id="services" style="padding-top:100px; margin-bottom:50px;">

              <div class="">
                  <h1 style="color:white;" class="text-center">Our Services</h1>
                  <div class="" style="border:2px solid lightgreen; width:250px; margin-left:430px;"></div>
              </div>

              <div class="d-flex mt-5" style="margin-bottom:40px;">
                  <div class="col-3" style="margin-left: 45px;">
                    <div class="card cc" style="background-color:#666666; border-radius:10px;">
                        <div class="card-body">
                          <div class="" style="margin-left:100px;">
                          <svg style="" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                            <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                          </div>
                          <div class="">
                              <h3 style="color:white; margin-left:20px;" class="mt-3">Web Developer</h3>
                          </div>
                          <div class="">
                            <p class="text-center mt-4" style="color:white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed nostrud exercitation ullamco <br>laboris nisi ut aliquip ex ea commodo consequat. Duis</p>
                          </div>
                          <div class="mt-4" style="margin-left:55px; margin-bottom:10px;">
                            <button type="submit" class="Services-btn" name="button"><b>See More</b></button>
                          </div>
                          </svg>
                        </div>
                    </div>
                  </div>
                  <div class="col-1">

                  </div>
                  <div class="col-3">
                    <div class="card cc" style="background-color:#666666; border-radius:10px;">
                        <div class="card-body">
                          <div class="" style="margin-left:100px;">
                          <svg style="" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                            <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                          </div>
                          <div class="">
                              <h3 style="color:white; margin-left:20px;" class="mt-3">Web Developer</h3>
                          </div>
                          <div class="">
                            <p class="text-center mt-4" style="color:white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed nostrud exercitation ullamco <br>laboris nisi ut aliquip ex ea commodo consequat. Duis</p>
                          </div>
                          <div class="mt-4" style="margin-left:55px; margin-bottom:10px;">
                            <button type="submit" class="Services-btn" name="button"><b>See More</b></button>
                          </div>
                          </svg>
                        </div>
                    </div>
                  </div>
                  <div class="col-1">

                  </div>
                  <div class="col-3">
                    <div class="card cc" style="background-color:#666666; border-radius:10px;">
                        <div class="card-body">
                          <div class="" style="margin-left:100px;">
                          <svg style="" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                            <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                          </div>
                          <div class="">
                              <h3 style="color:white; margin-left:20px;" class="mt-3">Web Developer</h3>
                          </div>
                          <div class="">
                            <p class="text-center mt-4" style="color:white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed nostrud exercitation ullamco <br>laboris nisi ut aliquip ex ea commodo consequat. Duis</p>
                          </div>
                          <div class="mt-4" style="margin-left:55px; margin-bottom:10px;">
                            <button type="submit" class="Services-btn" name="button"><b>See More</b></button>
                          </div>
                          </svg>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <div id="project">

          </div>
          <br><br><br><br>

          <div>
              <h2 style="color:white; text-align:center;">My Project</h2>
          </div>

              <div>
                <div id="carouselExampleFade" class="carousel slide carousel-fade container" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="container d-flex">
                      <div class="" style="margin-top:70px;">

                        <div class="container">
                          <img src="project/2.png" alt="" style="width:550px; margin-left:270px; border-radius:5px; box-shadow:3px 3px 15px gray;">
                              <h3 style="color:white; margin-left:380px;" class="mt-2">English School Version [ 1 ]</h3>
                              <p class="" style="text-align:justify; color:white; width:400px; margin-left:350px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dignissimos nihil praesentium laudantium minus similique sunt necessitatibus corrupti cupiditate eligendi.</p>
                        </div>

                    </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="container d-flex">
                      <div class="col-6">
                    </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="container d-flex">
                      <div class="col-6">
                      <img src="image/schoolph.avif" alt="" style="width:550px;">
                    </div>
                    <div class="col-6" style="margin-top:70px;">

                    </div>
                    </div>
                  </div>

                </div>

                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon s" aria-hidden="true"></span>
                  <span class="sr-only ">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                  <span class="carousel-control-next-icon s" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
                </div>


                <div class="" style="position:fixed; top:580px; left:95%;">
                  <a href="#up">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-up-square-fill up" viewBox="0 0 16 16">
                      <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0"/>
                    </svg>
                  </a>
                </div>


              </div>


          <div class="container" id="contact" style="padding-top:100px; margin-bottom:200px;">

                <h1 style="color:white;" class="text-center">Contact</h1>
                <div class="" style="border:2px solid gray; width:200px; margin-left:460px; border-color:lightgreen;"></div>

                <div class="d-flex mt-5">
                    <div class="col-6">
                        <div class="card cd">
                            <div class="card-body">

                                <h2 style="color:white;">CONTACT</h2>
                                  <div class="" style="border:2px solid lightgreen; width:140px; border-radius:10px;"></div>
                                  <div class="mt-1" style="border:2px solid lightgreen; width:60px; border-radius:10px;"></div>


                                <label for="" style="font-size:20px; color:white;" class="mt-5">Email</label>
                                <input type="email" name="email" value="" placeholder="Enter Your Email" class="form-control mt-2">

                                <div class="mt-3">
                                <button type="submit" name="button" class="contact-btn" style="font-size:18px;"><b>Sent</b></button>
                              </div>
                              <hr style="margin-top:20px; color:white;">
                                <div class="" style="margin-top:-20px;">
                                  <iframe class="google" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1619.2715390351332!2d96.17921668205915!3d16.898810980164164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2smm!4v1704365702946!5m2!1sen!2smm" width="100%" height="468px" style="margin-top:50px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 ms-4">
                      <div class="card cdr">
                          <div class="card-body">
                              <h2 style="color:white;">DESCRIPTION</h2>
                              <div class="" style="border:2px solid lightgreen; width:140px; border-radius:10px;"></div>
                              <div class="mt-1" style="border:2px solid lightgreen; width:60px; border-radius:10px;"></div>

                            <div class="" style="margin-left:35px;">
                              <div class="d-flex mt-5 ms-5">
                                    <h3 style="font-size:21px; color:white;">Phone : 09-956069638</h3>
                                    <div class="mt-1" style="border-left:2px solid lightgreen; height:20px; margin-left:10px;"></div>
                                    <h3 style="font-size:21px; margin-left:10px; color:white;">09-976891729</h3>
                              </div>
                              <div class="ms-5 mt-2">
                                  <h3 style="font-size:21px; color:white;">Email : kaungkhantzayyar@gmail.com</h3>
                              </div>
                              <div class="mt-3" style="margin-left:10px;">
                                <h3 style="color:white; font-size:21px;">Address : Yangon Northokkapal Ayar(22),road</h3>
                              </div>
                            </div>
                            <hr style="margin-top:55px; color:white;">

                            <div class="" style="margin-top:40px;">
                                <p class="contact-text"><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</b></p>
                            </div>

                              <div class="">
                                  <img src="image/sky1.jpg" alt="" width="100%" height="300px">
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
          </div>

            <div class="Footer">
                <h4 style="color:white; font-size:30px; text-align:center;" class="pt-4">Mg Kaung Khant Zay Yar</h4>

              <div class="d-flex mt-4" style="margin-left:610px;">
                <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" style="color:white;" width="30" height="30" fill="currentColor" class="bi bi-facebook ms-2 icon-link1" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                  </svg>
                </div>

                <div class="ms-2">
                  <svg xmlns="http://www.w3.org/2000/svg" style="color:white;" width="30" height="30" fill="currentColor" class="bi bi-telegram ms-2 icon-link1" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/>
                  </svg>
                </div>

                <div class="ms-2">
                  <svg xmlns="http://www.w3.org/2000/svg" style="color:white;"  width="30" height="30" fill="currentColor" class="bi bi-instagram ms-2 icon-link1" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                  </svg>
                </div>
              </div>

              <div class="" style="padding-bottom:20px;">
                <div class="d-flex mt-4" style="margin-left:410px;">
                  <div class="" style="border-bottom:2px solid white; width:200px; margin-bottom:14px;"></div>
                    <h4 class="ms-2" style="color:white; font-size:15px;">Power By ProTech</h4>
                  <div class="ms-2" style="border-bottom:2px solid white; width:200px; margin-bottom:14px;"></div>
                </div>
              </div>

            </div>

  </body>
</html>
