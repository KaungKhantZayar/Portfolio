
<style media="screen">
@media only screen and (max-width: 600px) {
 .menu_btn{
  display: block !important;
  margin-right:50px;
  cursor: pointer;
  transition:0.5s;
}
.menu_btn:hover{
   transform: rotate(3.142rad) !important;
}
.name{
  margin-left:-50px;
}
.min_nav{
  display:none;
}
}
</style>
<nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color:black;">
  <a class="navbar-brand" href="#" style="margin-left:90px;">
      <p style="font-size:30px;" class="name"><b>KKZY</b></p>
  </a>
  <!-- <img src="project/2.png" alt="" style="width:550px; margin-left:270px; border-radius:5px; box-shadow:3px 3px 15px gray;"> -->

  <!-- Links -->
  <ul class="navbar-nav min_nav" style="margin-left:350px;">
    <li class="nav-item">
      <a class="nav-link ms-3 nav-color" href="#home" style="color:white; font-size:18px;">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link ms-3 nav-color" href="#about" style="color:white; font-size:18px;">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link ms-3 nav-color" href="#skill" style="color:white; font-size:18px;">Skill</a>
    </li>
    <li class="nav-item">
      <a class="nav-link ms-3 nav-color" href="#services" style="color:white; font-size:18px;">Services</a>
    </li>
    <li class="nav-item">
      <a class="nav-link ms-3 nav-color" href="#project" style="color:white; font-size:18px;">Project</a>
    </li>
    <li class="nav-item">
      <a class="nav-link ms-3 nav-color" href="#contact" style="color:white; font-size:18px;">Contact</a>
    </li>
  </ul>
  <div class="dropdown">
      <svg style="display:none; color:yellow;" xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-list menu_btn dropdown-toggle" data-bs-toggle="dropdown"  viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
      </svg>
    <ul class="dropdown-menu" style="margin-left:-100px; margin-top:20px;">
        <li><a class="dropdown-item" href="#home" style="color:gray; ">Home</a></li>
        <li><a class="dropdown-item" href="#about" style="color:gray;">About Us</a></li>
        <li><a class="dropdown-item" href="#skill" style="color:gray;">Skill</a></li>
        <li><a class="dropdown-item" href="#services" style="color:gray;">Services</a></li>
        <li><a class="dropdown-item" href="#project" style="color:gray;">Project</a></li>
        <li><a class="dropdown-item" href="#contact" style="color:gray;">Contact</a></li>
    </ul>
  </div>


</nav>
