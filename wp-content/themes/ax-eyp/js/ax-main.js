$(document).ready(function(){
   $('body').animate({'opacity':'1'}, 1000 );
    
    var contRp = $('.ax-cont-responsive');
    contRp.hide();
    var menuIt = $(".ax-nav-header");
    var cMenuRp = $(".ax-cont-menu-responsive");
    var cMenu = $('.ax-mark-header')
    var openMenu = $('.ax-openMenu .fa');
	var closeMenu = $('.fa-times');
    
    var search = $('.ax-search');
    var contSearchRp = $('.ax-cont-search-responsive');
    var contHeaderNav = $('.ax-mark-header');
    
    function entrarMenu() {
        var widthPage = $(window).width();
        if(widthPage < 769){
            menuIt.appendTo(cMenuRp);
            search.appendTo(contSearchRp)
        }else {
            menuIt.appendTo(cMenu);
            search.appendTo(contHeaderNav)
        }
    }
    
    entrarMenu();
    
    $(window).resize(
        function() {
            entrarMenu();
        }
    )
    
    //activar Menu Responsive
    
    openMenu.on("click", function(){
        contRp.fadeToggle("fast");
        $('.menuResponsive').animate({ "left": "-=60%" }, "slow" );
    })
    
	//cerrar menu
	
	closeMenu.on("click", function(){
		contRp.fadeToggle("fast");
        $('.menuResponsive').animate({ "left": "+=60%" }, "slow" );
	});
    $('.ax-search-cont').hide();
    $('.ax-search i').on('click', function(){
        $('.ax-search-cont').fadeToggle();
        $(this).toggleClass('ax-close-search');
    })
    
    // estilo de scroll
    
    $(".ax-section[data-type='parallax_section']").each(function(){
        var $bgobj = $(this);
        $(window).scroll(function() {
            $window = $(window);
            var yPos = -($window.scrollTop() / $bgobj.data('speed'));
            var coords = '50% '+ yPos + 'px';
            $bgobj.css({ backgroundPosition: coords });
        });
    });

//datos de los numeros    

    var numGroupEstadist = [];
    var numEst = $('.ax-result-figure');
    
    var itemNum1 = $('.ax-result-figure.item-1')
    var itemNum2 = $('.ax-result-figure.item-2')
    var itemNum3 = $('.ax-result-figure.item-3')

    $('.ax-content-text-figure').find($('.ax-result-figure')).each(function(){
        numGroupEstadist.push($(this).text());
    });
    numEst.text(0);
    
    function subirNumeros(item, valNum){
        var numReset = 0;
        var ValNumIncrt = setInterval(function(){ sumarNum() },40);
        
        function sumarNum(){
            if(numReset < valNum){
                numReset = numReset+15;
                item.text(numReset);
            }else {
                clearInterval(ValNumIncrt);
            }
        }
    }

    //Animaciones
		
		$(function(){
		  var $elems = $('.ax-statistics');
		  var winheight = $(window).height();
		  var fullheight = $(document).height();
		  
		  $(window).scroll(function(){
			animate_elems();
		  });
		  
		  function animate_elems() {
			wintop = $(window).scrollTop(); // calculate distance from top of window
		 
			// loop through each item to check when it animates
			$elems.each(function(){
			  $elm = $(this);
			  
			  if($elm.hasClass('animated')) { return true; } // if already animated skip to the next item
			  
			  topcoords = $elm.offset().top; // element's distance from top of page in pixels
			  
			  if(wintop > (topcoords - (winheight*.75))) {
				// animate when top of the window is 3/4 above the element
				$elm.addClass('animated');
                  
                subirNumeros(itemNum1, numGroupEstadist[0]);
                subirNumeros(itemNum2, numGroupEstadist[1]);
                subirNumeros(itemNum3, numGroupEstadist[2]);
                  
			  }
			});
		  } // end animate_elems()
		});
    
})