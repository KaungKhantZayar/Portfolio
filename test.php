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
  <body>
    <div class="main">
      <div class="col-6 lo">
        <div class="kaung">
        <div class="">
          <div class="kaung ms-4" style="font-size:31px;">
            <div id="kaung" class="me-2 hide">Kaung</div>
            <div id="khant" class="me-2 hide">Khant</div>
            <div id="zay" class="me-2 hide">Zay</div>
            <div id="yar" class="me-2 hide">Yar</div>
          </div>
        </div>
    </div>


    <script type="text/javascript">
      $(document).ready(function(){
        for (var i = 0; i < 5; i++) {
          if (i==1) {
              setTimeout(()=>{one()}, 500);
          }
          if (i==2) {
              setTimeout(()=>{two()}, 1000);
          }
          if (i==3) {
              setTimeout(()=>{three()}, 1500);
          }
          if (i==4) {
              setTimeout(()=>{four()}, 2000);
          }
        }

        function one(){
          $("#kaung").show();
        }
        function two(){
          $("#khant").show();
        }
        function three(){
          $("#zay").show();
        }
       function four(){
          $("#yar").show();
       }


        var projectcount = 1;
        $("#next").on('click', function(){
          if(projectcount == 1){
            $("#project1").show();
            $("#project3").hide();
            $("#project2").hide();
            projectcount = 2;
          }else if(projectcount == 2){
            $("#project1").hide();
            $("#project3").hide();
            $("#project2").show();
            projectcount = 3;
          }else if(projectcount == 3){
            $("#project1").hide();
            $("#project2").hide();
            $("#project3").show();
            projectcount = 1;
          }else{
            $("#project1").show();
            projectcount = 2;
          }
        });
        $("#prev").on('click', function(){
          if(projectcount == 3){
            $("#project1").show();
            $("#project3").hide();
            $("#project2").hide();
            projectcount = 1;
          }else if(projectcount == 2){
            $("#project1").hide();
            $("#project3").hide();
            $("#project2").show();
            projectcount = 3;
          }else if(projectcount == 1){
            $("#project1").hide();
            $("#project2").hide();
            $("#project3").show();
            projectcount = 2;
          }else{
            $("#project1").show();
            projectcount = 2;
          }
        });
      });
    </script>


  </body>
</html>
