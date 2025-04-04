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
.d_m{
  background:none;
}
.dr_it{
  background:rgb(0,0,0,0.1);
  border-radius:12px;
  border:solid 5px rgb(255,255,255,0.1);
  backdrop-filter:blur(25px);
  box-shadow:0px 6px 30px 20px rgb(0,0,0,0.1);
  color:white;
  width:100%;
  justify-content:center;
  background-size:cover;
  background-position:center;
  text-align: center;
}
.kkzy{
  display: block !important;
  text-decoration: none;
  font-weight: bold;
  font-size:30px !important;
  margin-top:20px;
}
.bg_main{
  height:90px;
}
  }

.bg_main{
  background: rgb(36,36,36);
  background: linear-gradient(0deg, rgba(36,36,36,1) 0%, rgba(255,201,0,1) 100%);
}
.bg_main{
  border-radius:20px;
  margin:20px;
}
</style>
<nav class="navbar navbar-expand-sm navbar-dark fixed-top bg_main">
  <a class="navbar-brand" href="#" style="margin-left:90px;">
    <div class="d-flex mt-2">
    <svg id="main_icon" style="" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">
      <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5M12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0m2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0M1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25"/>
    </svg>
    </div>
  </a>
  <p class="kkzy" href="#" style="color:white; font-size:18px; display:none;">KKZY</p>
  <ul class="navbar-nav min_nav" style="margin-left:700px;">
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
    <ul class="dropdown-menu d_m" style="margin-left:-100px; margin-top:20px;">
        <li><a class="dropdown-item dr_it ms-2" href="#home" style="color:gray; ">Home</a></li>
        <li><a class="dropdown-item dr_it mt-2 ms-2" href="#about" style="color:gray;">About Us</a></li>
        <li><a class="dropdown-item dr_it mt-2 ms-2" href="#skill" style="color:gray;">Skill</a></li>
        <li><a class="dropdown-item dr_it mt-2 ms-2" href="#services" style="color:gray;">Services</a></li>
        <li><a class="dropdown-item dr_it mt-2 ms-2" href="#project" style="color:gray;">Project</a></li>
        <li><a class="dropdown-item dr_it mt-2 ms-2" href="#contact" style="color:gray;">Contact</a></li>
    </ul>
  </div>

</nav>
