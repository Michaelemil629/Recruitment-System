<!-- Footer -->
<footer>
    <div id="footer-subscribe">
        <div class="container">
<div class="flex container">
					<div class="footer-about">
                        <h3><font color="blue">Contact <span><font color="white"> Us</font></span></font> </h3>
                         <ul>
                             <li style="text-align: left"><i class="fa fa-history" style="color:blue;"></i> <span style="font-size: 14px;"><font color="white">&nbsp;1996.</font>
                            </span> 
                             
                             <li style="text-align: left"><i class="fa fa-home" style="color:blue;"></i> <span style="font-size: 14px;"><font color="white">&nbsp;KM 28 Cairo – Ismailia Road Ahmed Orabbi District, Cairo–Egypt.</font>
                             </span>
                                 
                             <li style="text-align: left"><i class="fa fa-phone" style="color:blue;"></i> <span style="font-size: 14px;"><font color="white">&nbsp;19648. </font>
                             </span>
                                 
                             <li style="text-align: left"><i class="fa fa-envelope-o" style="color:blue;"></i> <span style="font-size: 14px;"><font color="white">&nbsp;miu@miuegypt.edu.eg.</font>
                            </span> 
                            </ul>
    </div>
        
<div class="footer-subscribe"> 
<h3><font color="blue">Follow <span><font color="white"> Us</font></span></font> </h3>
<ul>
<li><a href="https://www.facebook.com/MIUSS1"><span class="fab fa-facebook-f" style="color:MediumBlue;"></span></a></li>
<!-- <li><a href="#"><span class="fab fa-twitter"></span></a></li> -->
<li><a href="https://www.instagram.com/miusarcasmsociety/?hl=en"><span class="fab fa-instagram" style="color:MediumVioletRed;"></span></a></li>
<li><a href="https://twitter.com/miusociety"><span class="fab fa-twitter" style="color:DeepSkyBlue;"></span></a></li>
<li><a href="https://www.youtube.com/channel/UCaPpWt0BZ2dMTEoDIXl06bQ"><span class="fab fa-youtube" style="color:red;"></span></a></li>
</ul>
</div>
</div>
</div>
</div>


<!-- Java Script -->
    
    <script>
        $(function () {
            let headerElem = $('header');
            let logo = $('#logo');
            let navMenu = $('#nav-menu');
            let navToggle = $('#nav-toggle');
            
            navToggle.on('click', () => {
               navMenu.css('right', '0');
           });
            $('#close-flyout').on('click', () => {
                navMenu.css('right', '-100%');
           });
           $(document).on('click', (e) => {
               let target = $(e.target);
               if (!(target.closest('#nav-toggle').length > 0 || target.closest('#nav-menu').length > 0)) {
                   navMenu.css('right', '-100%');
               }
           });

           $('#properties-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                prevArrow: '<a href="#" class="slick-arrow slick-prev">previous</a>',
                nextArrow: '<a href="#" class="slick-arrow slick-next">next</a>',
                responsive: [
                    {
                        breakpoint: 1100,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 530,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    }
                ]
           });
           $(document).scroll(() => {
               let scrollTop = $(document).scrollTop();

               if (scrollTop > 0) {
                   navMenu.addClass('is-sticky');
                   logo.css('color', '#000');
                   headerElem.css('background', '#fff');
                   navToggle.css('border-color', '#000');
                   navToggle.find('.strip').css('background-color', '#000');
               } else {
                   navMenu.removeClass('is-sticky');
                   logo.css('color', '#fff');
                   headerElem.css('background', 'transparent');
                   navToggle.css('bordre-color', '#fff');
                   navToggle.find('.strip').css('background-color', '#fff');
               }

               headerElem.css(scrollTop >= 200 ? {'padding': '0.5rem', 'box-shadow': '0 -4px 10px 1px #999'} : {'padding': '1rem 0', 'box-shadow': 'none' });
           });

           $(document).trigger('scroll');
        });
    </script>
	
<script>
	function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}


function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>
	
<script>
	
	var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
</footer>