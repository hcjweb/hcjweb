<!--start-header-->
 <div class="header-bottom">
 <div class="fixed-header">
  <div class="container">
    <div class="logo wow fadeInLeft" data-wow-delay="0.5s">
      <a class="scroll" href="#home"><img src="images/logo-hcjweb-min.png" class="img-responsive" alt="Logotipo hcj web" /></a>
    </div>
    <span class="menu"> </span>
    <div class="top-menu">
    <nav class="cl-effect-21">
      <ul>
        <li><a class="scroll" href="#home">Início</a></li>
        <li><a class="scroll" href="#about">Sobre</a></li>
        <li><a class="scroll" href="#services">Serviços</a></li>
        <li><a class="scroll" href="#portfolio">Portifólio</a></li>
        <li><a class="scroll" href="#contact">Contato</a></li>
      <ul>
    </nav>
    </div>
  <!-- script for menu -->
      <script>
      $( "span.menu" ).click(function() {
        $( ".top-menu" ).slideToggle( "slow", function() {
          // Animation complete.
        });
      });
    </script>
    <!-- script for menu -->
    <script>
  $(document).ready(function() {
     var navoffeset=$(".header-bottom").offset().top;
     $(window).scroll(function(){
      var scrollpos=$(window).scrollTop();
      if(scrollpos >=navoffeset){
        $(".header-bottom").addClass("fixed");
      }else{
        $(".header-bottom").removeClass("fixed");
      }
     });

  });
  </script>
    <div class="clearfix"></div>
  </div>
 </div>
 </div>
<!--end-header-->
