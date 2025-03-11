!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="jquery.js" charset="utf-8"></script>
    <link href="bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>

    <link rel="stylesheet" href="bootstrap-modal-link/bootstrap.min.css">
    <script src="bootstrap-modal-link/jquery.min.js"></script>
    <script src="bootstrap-modal-link/bootstrap.min.js"></script>
  </head>
  <style media="screen">
    .photo{
      object-fit: cover;
      object-position:0px -350px;
    }
    .main{
      background: rgb(130,138,138);
      background: linear-gradient(131deg, rgba(138,138,138,1) 1%, rgba(255,255,255,1) 57%);
      height:660px;
    }
    .bg{
      background-color:gray;
      color:white;
      width:250px;
      padding-top:5px;
      padding-bottom:5px;
    }
    @media(max-width:800px) {
      body{
        display: none !important;
      }
    }
  </style>
  <body>
    <h1>Hello</h1>
      <div class="d-flex main">
          <div class="col-6" style="margin-top:120px;">
              <div class="" style="border-top:28px solid gray; width:350px;"></div>
              <img src="image/myphoto4.jpg" class="photo" alt="" style="width:600px; height:400px;">
              <div class="" style="border-bottom:28px solid gray; width:350px;"></div>
          </div>
          <div class="col-6 container">
            <div class="" style="margin-top:150px;">
              <h1 style="font-size:80px;">PORT</h1>
              <h1 style="font-size:80px;">FOLIO</h1>
              <hr>
              <div class="bg">
                  <b>Mg Kaung Khant Zay Yar</b>
              </div>
            </div>
          </div>
      </div>
  </body>
</html>
