<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>ClickMantra</title>
         
      <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
                <link rel="stylesheet" type="text/css" href="style.css? version=51"/>
        </head>
   
        <body>
      
	<!--Logo -->
        <div>
            <a href="#"><img src="images/logo1.jpg" alt="Logo" class="logo"/></a>
        </div>
        <!--header-->
        <div id="navbar">
            
            <!-- Bootstrap id name navbar for top header.In css we add some more feature in navbar and 
            for sticky navigation use ID not class otherwise sticky is not work-->
            
              <div id="sticky-wrapper" class="sticky-wrapper is-sticky">
         <a class="active" href="index.php">Home</a>
          
             <div class="subnav"> <!--  Bootstrap class name subnav for sub menu . In css we add more features inn sub menu-->
             <a class="subnavA" href="#">Category <i class="fa fa-caret-down"></i></a>
          <div class="subnav-content">
           <a href="#" ><div id="get_category"></div> </a>
           </div>
  </div> 
               <a href="#sample">Sample</a>
                <a href="#details">Details</a>
                <a href="#contact-us">Contact</a>
  <!--<div class="subnav"> 
    <button class="subnavbtn">Partners <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#link1">Link 1</a>
      <a href="#link2">Link 2</a>
      <a href="#link3">Link 3</a>
      <a href="#link4">Link 4</a>
    </div>
  </div> -->
        <!-- include products and slider -->
         
              </div></div>
        
   <!-- slider -->
   <div class="slider">
       <figure> <!--If what to remove slider nothing effect in web page if using figure -->
       <div><img src="images/T-shirt1.jpg" alt="image"> </div>
       <div> <img src="images/T-shirt2.jpg" alt="image"> </div>
       <div> <img src="images/T-shirt3.jpg" alt="image"></div> 
        <div> <img src="images/tshirt37.png"></div>
       </figure> </div>      <!-- products display from Alloption or SelectedType -->
         
          <div>   
          <div class="row">
                       <div>
                           <div id="get_product"></div>
                       </div>    
                   </div>
        </div>  
          
          <!--Sample-->
          <section id="sample">
              <div class="container">
                  <img src="images/CLICK MANTRA CATALOG-2.jpg" class="sampleimg">
                  <img src="images/CLICK MANTRA CATALOG-3.jpg" class="sampleimg">
                  <img src="images/CLICK MANTRA CATALOG-4.jpg" class="sampleimg">
                  <img src="images/CLICK MANTRA CATALOG-5.jpg" class="sampleimg">
              </div>
              
          </section>
          
          <section id="details"> 
              
              <div class="container">
                  <img src="images/list(1)(1).jpg" class="sampleimg">
                  
              </div>
          </section>
          
          
          
 <!--footer-->
 
 
 <section  id="contact-us" class="site-padding">
     <div class="container">
         <div class="row">
            <div class="col-sm-6">
               <div class="about-image wow fadeInLeft">
                     <h4>We customized all clothes,key ring,Mug,Apron etc.Contact us for more details.</h4>
	       </div>
	</div>
					<div class="col-sm-6">
						<div class="about-text wow fadeInRight">
							
                                                 <p><i class="fa fa-envelope" aria-hidden="true"></i> click.mantra.tm@gmail.com <br />
						<a href="tel:+919033040858">	<i class="fa fa-phone "></i>  (+91) 9425520574</a><br/>
                                                  Bilaspur Chhattisgard </p>
                 
             </div>
         </div>
     </div>
         
     </div>
    
 </section>
              <div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="copy-text">
								<p>All Rights Reserved | Copyright 2018 &copy; <strong><a href="http://clickmantra.com">ClickMantra</a></strong></p>
							</div>
						</div>
     
                                            <script>
                                                /*  For sticky navigation*/
                                                  window.onscroll= function(){stickyFunction();}
                                                  var navbar =document.getElementById("navbar");
                                                var sticky=navbar.offsetTop;
                                                function stickyFunction(){
                                                    if(window.pageYOffset>=sticky){
                                                        navbar.classList.add("sticky");
                                                    }
                                                    else
                                                        navbar.classList.remove("sticky");
                                                }

                                                
                                            </script>    
                                                
                                                
                                                
   </body>
</html>


