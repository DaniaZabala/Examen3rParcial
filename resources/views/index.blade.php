<!DOCTYPE html>
<!--
Template Name: Nocobot
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Inicio</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> +00 (123) 456 7890</li>
        <li><i class="far fa-envelope rgtspace-5"></i> info@domain.com</li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
    <div class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><a href="#" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
        <li><a href="#" title="Sign Up"><i class="fas fa-edit"></i></a></li>
        <li id="searchform">
          <div>
            <form action="#" method="post">
              <fieldset>
                <legend>Quick Search:</legend>
                <input type="text" placeholder="Enter search term&hellip;">
                <button type="submit"><i class="fas fa-search"></i></button>
              </fieldset>
            </form>
          </div>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded" style="background-image:url('images/demo/backgrounds/WallpaperDog-5472932.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left"> 
        <!-- ################################################################################################ -->
        <h1><a href="index.html">Nocobot</a></h1>
        <!-- ################################################################################################ -->
      </div>
      <nav id="mainav" class="fl_right"> 
        <!-- ################################################################################################ -->
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a class="drop" href="#">Pages</a>
            <ul>
              <li><a href="{{route('api')}}">Api</a></li>
              <li><a href="pages/full-width.html">Full Width</a></li>
              <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
              <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
              <li><a href="pages/basic-grid.html">Basic Grid</a></li>
              <li><a href="pages/font-icons.html">Font Icons</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Dropdown</a>
            <ul>
              <li><a href="#">Level 2</a></li>
              <li><a class="drop" href="#">Level 2 + Drop</a>
                <ul>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                </ul>
              </li>
              <li><a href="#">Level 2</a></li>
            </ul>
          </li>
          <li><a href="#">Link Text</a></li>
          <li><a href="#">Link Text</a></li>
          <li><a href="#">Link Text</a></li>
        </ul>
        <!-- ################################################################################################ -->
      </nav>
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="overlay">
    <div id="pageintro" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <article>
        <h3 class="heading">Living Dead Dolls</h3>
        <p>A massa etiam augue nunc lectus duis eget libero non nisi lobortis suscipit praesent viverra nam dapibus orci non erat aliquam erat volutpat.</p>
        <footer><a class="btn" href="#">Gravida sem neque</a></footer>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <section id="introblocks">
      <ul class="nospace group btmspace-80">
        <li class="one_third first">
          <figure><a class="imgover" href="#"><img src="{{$publicaciones[0]->imagen}}" alt=""></a>
            <figcaption>
              <h6 class="heading">{{$publicaciones[0]->nombre}}</h6>
              <div>
                <p>{{$publicaciones[0]->descripcion}}</p>
              </div>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="{{$publicaciones[1]->imagen}}" alt=""></a>
            <figcaption>
              <h6 class="heading">{{$publicaciones[1]->nombre}}</h6>
              <div>
                <p>{{$publicaciones[1]->descripcion}}</p>
              </div>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="{{$publicaciones[2]->imagen}}" alt=""></a>
            <figcaption>
              <h6 class="heading">{{$publicaciones[2]->nombre}}</h6>
              <div>
                <p>{{$publicaciones[2]->descripcion}}</p>
              </div>
            </figcaption>
          </figure>
        </li>
      </ul>
    </section>
    <!-- ################################################################################################ -->
    <hr class="btmspace-80">
    <!-- ################################################################################################ -->
    <section class="group">
      <div class="one_half first"><img class="inspace-15 borderedbox" src="{{$publicaciones[3]->imagen}}" alt=""></div>
      <div class="one_half">
        <ul class="nospace group inspace-15">
          
            <article>
              <h1 class="heading"><a href="#">{{$publicaciones[3]->nombre}}</a></h1>
              <p class="nospace">{{$publicaciones[3]->descripcion}}</p>
            </article>
          
        </ul>
      </div>
    </section>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <figure class="hoc container clear imgroup"> 
    <!-- ################################################################################################ -->
    <figcaption class="sectiontitle">
      <p class="heading underline font-x2">Más modelos</p>
    </figcaption>
    <ul class="nospace group">
    @foreach($publicaciones as $item)
      <li class="one_third"><a class="imgover" href="#"><img src="{{$item->imagen}}" alt=""></a></li>
    @endforeach
     
    </ul>
    <!-- ################################################################################################ -->
  </figure>
  <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">

      <p class="heading underline font-x2">Más modelos</p>
    </div>
    <ul class="nospace group team">
      
      <li class="one_quarter ">
        <figure><a class="imgover" href="#"><img src="{{$item->imagen}}" alt=""></a>
          <figcaption><strong>A. Doe</strong> <em>Job Title Here</em></figcaption>
        </figure>
      </li>
      
      <li class="one_quarter">
        <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
          <figcaption><strong>B. Doe</strong> <em>Job Title Here</em></figcaption>
        </figure>
      </li>
      <li class="one_quarter">
        <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
          <figcaption><strong>C. Doe</strong> <em>Job Title Here</em></figcaption>
        </figure>
      </li>
      <li class="one_quarter">
        <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
          <figcaption><strong>D. Doe</strong> <em>Job Title Here</em></figcaption>
        </figure>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <figure class="hoc container clear clients"> 
    <!-- ################################################################################################ -->
    <figcaption class="sectiontitle">
      <p class="nospace font-xs">Nisl donec eu neque nisi molestie</p>
      <p class="heading underline font-x2">Pellentesque donec ut dolor</p>
    </figcaption>
    <ul class="nospace group">
      <li class="one_quarter first"><a class="imgover" href="#"><img src="images/demo/249x100.png" alt=""></a></li>
      <li class="one_quarter"><a class="imgover" href="#"><img src="images/demo/249x100.png" alt=""></a></li>
      <li class="one_quarter"><a class="imgover" href="#"><img src="images/demo/249x100.png" alt=""></a></li>
      <li class="one_quarter"><a class="imgover" href="#"><img src="images/demo/249x100.png" alt=""></a></li>
      <li class="one_quarter first"><a class="imgover" href="#"><img src="images/demo/249x100.png" alt=""></a></li>
      <li class="one_quarter"><a class="imgover" href="#"><img src="images/demo/249x100.png" alt=""></a></li>
      <li class="one_quarter"><a class="imgover" href="#"><img src="images/demo/249x100.png" alt=""></a></li>
      <li class="one_quarter"><a class="imgover" href="#"><img src="images/demo/249x100.png" alt=""></a></li>
    </ul>
    <!-- ################################################################################################ -->
  </figure>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <section id="testimonials" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <p class="nospace font-xs">Imperdiet at rhoncus vitae ante sed</p>
      <p class="heading underline font-x2">Eu felis etiam et risus at</p>
    </div>
    <article class="btmspace-80">
      <blockquote>Pellentesque ipsum pede malesuada non vulputate at euismod et lorem nullam tincidunt urna eget nisl eleifend vulputate sed vitae risus sed enim fermentum venenatis sed augue eros tempor sit amet.</blockquote>
      <figure class="clear"><img src="images/demo/60x60.png" alt="">
        <figcaption>
          <h6 class="heading">John Doe</h6>
          <em>CEO</em></figcaption>
      </figure>
    </article>
    <footer class="center"><a class="btn" href="#">More Testimonials</a></footer>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <p class="nospace font-xs">Felis dictum viverra mauris dui</p>
      <p class="heading underline font-x2">Phasellus nunc erat cursus</p>
    </div>
    <ul id="latest" class="nospace group">
      <li class="one_third first">
        <article><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a>
          <ul class="nospace meta clear">
            <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
            <li><i class="fas fa-comments"></i> <a href="#">Comments (10)</a></li>
          </ul>
          <div class="excerpt clear">
            <h6 class="heading">Aliquet tincidunt vel vulputate egestas leo</h6>
            <time datetime="2045-04-05T08:15+00:00"><strong>05</strong> <em>Apr</em></time>
            <p>Integer id justo ut diam suscipit laoreet quisque bibendum dolor at ultricies vestibulum risus&hellip;</p>
          </div>
          <footer><a class="btn" href="#">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a>
          <ul class="nospace meta clear">
            <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
            <li><i class="fas fa-comments"></i> <a href="#">Comments (10)</a></li>
          </ul>
          <div class="excerpt clear">
            <h6 class="heading">Dui eleifend elit ac ullamcorper libero tellus</h6>
            <time datetime="2045-04-04T08:15+00:00"><strong>04</strong> <em>Apr</em></time>
            <p>Vel turpis quisque blandit metus ut tellus in mauris vivamus faucibus vivamus egestas lobortis&hellip;</p>
          </div>
          <footer><a class="btn" href="#">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a>
          <ul class="nospace meta clear">
            <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
            <li><i class="fas fa-comments"></i> <a href="#">Comments (10)</a></li>
          </ul>
          <div class="excerpt clear">
            <h6 class="heading">Odio curabitur id neque sed urna facilisis blandit</h6>
            <time datetime="2045-04-03T08:15+00:00"><strong>03</strong> <em>Apr</em></time>
            <p>Donec quis metus vel tortor porttitor pretium cras at justo nullam at lacus id metus pulvinar&hellip;</p>
          </div>
          <footer><a class="btn" href="#">Read More</a></footer>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>

<!-- ################################################################################################ -->
<div class="bgded overlay row4" style="background-image:url('images/demo/backgrounds/01.png');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="heading">Pellentesque dictum</h6>
      <ul class="nospace linklist">
        <li><a href="#">Ultricies in molestie sed</a></li>
        <li><a href="#">Consectetuer nam sodales</a></li>
        <li><a href="#">Euismod tellus sed non</a></li>
        <li><a href="#">Est etiam in eros curabitur</a></li>
        <li><a href="#">Viverra dui nec arcu sed</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Fermentum pellentesque</h6>
      <p class="nospace btmspace-15">Pede ullamcorper facilisis bibendum nulla elit gravida elit vel suscipit urna.</p>
      <form action="#" method="post">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Nisi nunc velit aliquam</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">Sapien sit amet tortor nulla vulputate odio in varius tristique nisi urna.</a></p>
            <time class="block font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
          </article>
        </li>
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">Consequat erat id rutrum nisi magna vel tellus phasellus malesuada bibendum.</a></p>
            <time class="block font-xs" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
          </article>
        </li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Lacinia iaculis nunc</h6>
      <ul class="nospace clear latestimg">
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>