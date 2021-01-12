   
   $(document).ready(function()
   {
      $('#wb_Card5').addClass('visibility-hidden');
      $('#wb_Card6').addClass('visibility-hidden');
      $("a[href*='#LayoutGridCarousel']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_LayoutGridCarousel').offset().top }, 600, 'easeOutCubic');
      });
      $("a[href*='#infoBlock1']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_infoBlock1').offset().top }, 600, 'easeOutSine');
      });
      $("a[href*='#FlexContainer1']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#FlexContainer1').offset().top }, 600, 'easeOutSine');
      });
      $('#headerMenu .dropdown-toggle').dropdown({popperConfig:{placement:'bottom-start',modifiers:{computeStyle:{gpuAcceleration:false}}}});
      $(document).on('click','.headerMenu-navbar-collapse.show',function(e)
      {
         if ($(e.target).is('a') && ($(e.target).attr('class') != 'dropdown-toggle')) 
         {
            $(this).collapse('hide');
         }
      });
      function skrollrInit()
      {
         skrollr.init({forceHeight: false, mobileCheck: function() { return false; }, smoothScrolling: false});
      }
      skrollrInit();
      function onScrollCard5()
      {
         var $obj = $("#wb_Card5");
         if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
         {
            $obj.addClass("in-viewport");
            AnimateCss('wb_Card5', 'transform-scale-in', 0, 2000);
         }
         else
         if ($obj.hasClass("in-viewport") && !$obj.inViewPort(true))
         {
            $obj.removeClass("in-viewport");
            AnimateCss('wb_Card5', 'animate-fade-out', 0, 0);
         }
      }
      if (!$('#wb_Card5').inViewPort(true))
      {
         $('#wb_Card5').addClass("in-viewport");
      }
      onScrollCard5();
      $(window).scroll(function(event)
      {
         onScrollCard5();
      });
      function onScrollCard6()
      {
         var $obj = $("#wb_Card6");
         if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
         {
            $obj.addClass("in-viewport");
            AnimateCss('wb_Card6', 'transform-scale-in', 0, 2000);
         }
         else
         if ($obj.hasClass("in-viewport") && !$obj.inViewPort(true))
         {
            $obj.removeClass("in-viewport");
            AnimateCss('wb_Card6', 'animate-fade-out', 0, 0);
         }
      }
      if (!$('#wb_Card6').inViewPort(true))
      {
         $('#wb_Card6').addClass("in-viewport");
      }
      onScrollCard6();
      $(window).scroll(function(event)
      {
         onScrollCard6();
      });
      $("#welcome-carousel").on('slid.bs.carousel', function(e)
      {
         var index = $(e.relatedTarget).index();
         switch(index)
         {
            case 0:
               AnimateCss('welcome-text1', 'slide-down-in', 500, 1000);
               AnimateCss('welcome-text2', 'slide-up-in', 1000, 1000);
               AnimateCss('welcome-button1', 'slide-up-in', 2000, 1000);
               break;
            case 1:
               AnimateCss('welcome-text3', 'slide-down-in', 500, 1000);
               AnimateCss('welcome-text4', 'slide-up-in', 1000, 1000);
               AnimateCss('welcome-button2', 'slide-up-in', 2000, 1000);
               break;
         }
      });
      $("#welcome-carousel").bootstrapcarousel({interval:6000, pause: false});
   });
