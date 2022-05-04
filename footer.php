<footer id="foot" class="before after">
  <div class="wrapper-extra-wide wrapper rel flex space-btwn">

    <div class="col logo-col">
      <a id="foot-logo" href="<?php bloginfo('url'); ?>/">
        <img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" />
      </a>
    </div>




    <div class="col text-col copycol col1 flex align-c just-c">
      <p>Copyright <?php echo date('Y'); ?> Protecting Our Dignity. All Rights Reserved.</p>
    </div>



    <div id="foot-wrap" class="flex">
      <?php if (is_active_sidebar('footer1')) { ?>
        <div class="col text-col col2">
          <?php dynamic_sidebar('footer1'); ?>
        </div>
      <?php } ?>




      <div class="col social-col flex flex-col">
        <h4>Follow Us</h4>
        <div id="social-wrap" class="flex align-c">
          <?php if (get_field('facebook_link', 18)) : ?>
            <a class="facebook" href="<?php the_field('facebook_link', 18); ?>" target="_blank">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 96.124 96.123" style="enable-background:new 0 0 96.124 96.123;" xml:space="preserve">
                <g>
                  <path d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803
		c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654
		c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246
		c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z"></path>
                </g>
              </svg>


            </a>
          <?php endif; ?>

          <?php if (get_field('twitter_link', 18)) : ?>
            <a class="twitter" href="<?php the_field('twitter_link', 18); ?>" target="_blank">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                  <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
			c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
			c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
			c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
			c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
			c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
			C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
			C480.224,136.96,497.728,118.496,512,97.248z"></path>
                </g>
              </svg>
            </a>
          <?php endif; ?>

          <?php if (get_field('instagram_link', 18)) : ?>
            <a class="insta" href="<?php the_field('instagram_link', 18); ?>" target="_blank">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;" xml:space="preserve">
                <g>
                  <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
		c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
		c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
		c17.455,0,31.656,14.201,31.656,31.655V122.407z"></path>
                  <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
		C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
		c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"></path>
                  <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
		c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
		C135.661,29.421,132.821,28.251,129.921,28.251z"></path>
                </g>
              </svg>
            </a>
          <?php endif; ?>

          <?php if (get_field('linkedin_link', 18)) : ?>
            <a class="linked" href="<?php the_field('linkedin_link', 18); ?>" target="_blank">
              <svg id="Bold" enable-background="new 0 0 24 24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="m23.994 24v-.001h.006v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07v-2.185h-4.773v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243v7.801z"></path>
                <path d="m.396 7.977h4.976v16.023h-4.976z"></path>
                <path d="m2.882 0c-1.591 0-2.882 1.291-2.882 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909c-.001-1.591-1.292-2.882-2.882-2.882z"></path>
              </svg>
            </a>
          <?php endif; ?>

          <?php if (get_field('youtube_link', 18)) : ?>
            <a class="youtube" href="<?php the_field('youtube_link', 18); ?>" target="_blank">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                  <path d="M490.24,113.92c-13.888-24.704-28.96-29.248-59.648-30.976C399.936,80.864,322.848,80,256.064,80
			c-66.912,0-144.032,0.864-174.656,2.912c-30.624,1.76-45.728,6.272-59.744,31.008C7.36,138.592,0,181.088,0,255.904
			C0,255.968,0,256,0,256c0,0.064,0,0.096,0,0.096v0.064c0,74.496,7.36,117.312,21.664,141.728
			c14.016,24.704,29.088,29.184,59.712,31.264C112.032,430.944,189.152,432,256.064,432c66.784,0,143.872-1.056,174.56-2.816
			c30.688-2.08,45.76-6.56,59.648-31.264C504.704,373.504,512,330.688,512,256.192c0,0,0-0.096,0-0.16c0,0,0-0.064,0-0.096
			C512,181.088,504.704,138.592,490.24,113.92z M192,352V160l160,96L192,352z"></path>
                </g>
              </svg>
            </a>
          <?php endif; ?>
        </div>



      </div>

    </div>


  </div>


</footer>

<div id="modal-overlay"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
  (function($) {


    $slideshow1 = $('#hero-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false

    });

    $('#next-link').on('click', function(slider) {
      $slideshow1.slick('slickNext');
      return false;
    });

    $('#prev-link').on('click', function(slider) {
      $slideshow1.slick('slickPrev');
      return false;
    });

    $("html:not(.fl-builder-edit) .three-staff-row:not(.new) .fl-col.three-col").each(function() {
      var imgbox = $(this).find('.fl-module-photo');
      var img = $(this).find('.fl-module-photo img');
      var imglink = $(img).attr("src");
      $(imgbox).css("background-image", "url(" + imglink + ")");
    });

    $("#video-slider .pp-video-carousel .pp-video-carousel-nav").each(function() {
      $(this).append('<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"><path d="M398.572,104.287L246.857,256.001l151.715,151.714c3.617,3.618,5.428,7.904,5.428,12.856c0,4.953-1.811,9.238-5.428,12.857 l-47.428,47.428c-3.619,3.619-7.904,5.428-12.857,5.428s-9.238-1.809-12.857-5.428l-212-212c-3.619-3.618-5.428-7.904-5.428-12.856 c0-4.953,1.81-9.238,5.428-12.857l212-212c3.619-3.618,7.904-5.428,12.857-5.428s9.238,1.81,12.857,5.428l47.428,47.429 C402.189,82.19,404,86.476,404,91.428c0,4.953-1.811,9.238-5.428,12.857V104.287z"></path></svg>');
    });


    $("#hero p a, #nav-items ul li.button a, body.search-page a.fl-button, body.category a.fl-button").each(function() {
      $(this).wrapInner("<span class='text'></span>");
      $(this).append('<svg id="Icon_ionic-ios-arrow-dropright" data-name="Icon ionic-ios-arrow-dropright" xmlns="http://www.w3.org/2000/svg" width="18.545" height="18.545" viewBox="0 0 18.545 18.545"><path id="Path_1" data-name="Path 1" d="M14.668,10.233a.864.864,0,0,1,1.217,0L20.138,14.5a.859.859,0,0,1,.027,1.186l-4.19,4.2a.859.859,0,1,1-1.217-1.213l3.562-3.615-3.651-3.615A.85.85,0,0,1,14.668,10.233Z" transform="translate(-7.415 -5.295)" /><path id="Path_2" data-name="Path 2" d="M3.375,12.648a9.273,9.273,0,1,0,9.273-9.273A9.271,9.271,0,0,0,3.375,12.648Zm1.427,0A7.843,7.843,0,0,1,18.193,7.1,7.843,7.843,0,1,1,7.1,18.193,7.779,7.779,0,0,1,4.8,12.648Z" transform="translate(-3.375 -3.375)" /></svg>');
    });

    $("html:not(.fl-builder-edit) .pp-content-posts .pp-content-post").each(function() {
      var imgbox = $(this).find('.fl-photo');
      var img = $(this).find('.fl-photo img');
      var imglink = $(img).attr("src");
      $(imgbox).css("background-image", "url(" + imglink + ")");

      var text = $(this).find('.pp-content-grid-title, .pp-content-post-meta, .pp-content-grid-content').wrapAll('<div class="wrap" />');

      var button = $(this).find('.pp-more-link-button');
      var btnlink = $(button).attr("href");
      var body = $(this).find('.pp-content-body');
      $(body).append("<a class='link' href='" + btnlink + "'></a>");

      $(button).wrapInner("<span class='text'></span>");
      $(button).append('<span class="tri"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5.11 8.68"><defs></defs><path id="Path_59" data-name="Path 59" class="cls-1" d="M.22.22a.73.73,0,0,1,1,0L4.89,3.86a.74.74,0,0,1,0,1L1.33,8.46a.73.73,0,0,1-1-1h0l3-3.09L.21,1.25a.74.74,0,0,1,0-1Z"/></svg></span>');

    });

    $("html .uabb-modal").each(function() {
      var contain = $(this).find('.uabb-modal-text');
      $(contain).wrapInner("<div class='text-box'></div>");

      if ($(this).find('img').length) {
        $(contain).prepend("<div class='img-box'></div>");

        var box = $(this).find(".img-box");
        $(box).prepend("<div class='img-wrap'></div>");

        var img = $(this).find('.uabb-modal-text img');
        var imglink = $(img).attr("src");
        $(box).css("background-image", "url(" + imglink + ")");
      }
    });



    $("html:not(.fl-builder-edit) .fl-col.grouped").each(function() {
      var text = $(this).find('.fl-rich-text h5, .fl-module-rich-text p').wrapAll('<div class="wrap" />');
    });


    $("body #main-content #filter-posts .pp-content-post-grid .pp-content-post-data").each(function() {
      var text = $(this).find('.pp-post-title, .pp-post-meta, .pp-post-content').wrapAll('<div class="wrap" />');
    });

    $("body #main-content .simple-btn a.fl-button").each(function() {
      $(this).append('<span class="tri"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5.11 8.68"><defs></defs><path id="Path_59" data-name="Path 59" class="cls-1" d="M.22.22a.73.73,0,0,1,1,0L4.89,3.86a.74.74,0,0,1,0,1L1.33,8.46a.73.73,0,0,1-1-1h0l3-3.09L.21,1.25a.74.74,0,0,1,0-1Z"/></svg></span>');
    });


    $(".pp-social-icons-left").prepend("<h6 class='title'>CONNECT</h6>");
    //            $(".pp-video-image-overlay").prepend("<div class='vid-title'><h5>Watch this video</h5></div>");

    $("#photo-gallery-row > .fl-row-content-wrap .gallery-heading1 .fl-heading").append("<span class='line'></span>");
    $("#main-content #testimonial-row.version4 .fl-row-content-wrap .fl-col-content").prepend("<div class='quote-wrap flex align-c'><div class='line'></div><div class='quote'></div><div class='line'></div></div>");



    $("html:not(.fl-builder-edit) #intro-section.cta-row .cta-col").each(function() {
      var text = $(this).find('.fl-module-photo, .fl-module-rich-text').wrapAll('<div class="people-wrap" />');
    });


    $("html:not(.fl-builder-edit) .fl-row:not(.new) .fl-col.three-col, html:not(.fl-builder-edit) .fl-row:not(.new) .fl-col.four-col").each(function() {
      var imgbox = $(this).find('.fl-module-photo');
      var img = $(this).find('.fl-module-photo img');
      var imglink = $(img).attr("src");
      $(imgbox).css("background-image", "url(" + imglink + ")");
    });




    $(".pp-hover-card").each(function() {
      var img = $(this).find('img').attr("src");

      $(this).css("background-image", "url(" + img + ")");

    });




    //	  		$("#search-icon").click(function() {
    //			    $("#modal-overlay").toggleClass("open");
    //			    $("body").toggleClass("fixed");
    //			    $("#modal-container").toggleClass("show");
    //			});





    var headerContainer = $('nav#main');
    var topPanel = headerContainer.find('#nav-items');
    var searchHolder = headerContainer.find('.search-holder');
    var searchForm = headerContainer.find('#search-form');
    var openToggle = headerContainer.find('#search-icon');
    var closeToggle = searchForm.find('#form-close');

    function calculateAnimationProps() {
      var vpWidth = $(window).outerWidth(true);
      var width = 0;

      if (vpWidth < 1000) {
        width = topPanel.outerWidth(true); // Minus container side padding
      } else {
        width = topPanel.outerWidth(true) / 2;
      }

      var right = width - openToggle.outerWidth(true);

      return {
        formWidth: width,
        formRight: right,
        toggleRight: right / 2
      };
    }


    openToggle.on('click', function() {
      var animProps = calculateAnimationProps();

      $(this).attr('aria-expanded', 'true');

      searchHolder.show().css({
        width: animProps.formWidth,
        height: headerContainer.outerHeight(true)
      });

      searchForm.css({
        width: animProps.formWidth,
        right: -(animProps.formRight),
        transform: 'translatex(-' + animProps.formRight + 'px)'
      }).addClass('active');

      $(this).css({
        right: animProps.toggleRight,
        transform: 'translatex(-' + animProps.toggleRight + 'px)'
      }).addClass('hidden');


      $("#nav-items, header").addClass("hide");
    });



    openToggle.keyup(function(e) {

      if (e.keyCode === 13 || e.keyCode === 32) { // key press for WCAG

        jQuery(this).click();



      }

    });


    // Hide search form
    closeToggle.on('click', function() {

      $("#search-icon").attr('aria-expanded', 'false');
      searchForm.css('transform', '')
        .removeClass('active');

      // Let the animation finished first then hide the holder
      setTimeout(function() {
        searchHolder.hide();
      }, 500);

      openToggle.removeAttr('style')
        .removeClass('hidden');

      $("#nav-items, header").removeClass("hide");
    });

    closeToggle.keyup(function(e) {

      if (e.keyCode === 27) { // escape key press for WCAG

        closeToggle.click(); // faux click the close button to dismiss

        openToggle.focus(); // set focus back to where it came from

      }

    });


    $(document).mouseup(function(e) {
      var container = headerContainer;

      // if the target of the click isn't the container nor a descendant of the container
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        searchForm.css('transform', '')
          .removeClass('active');

        // Let the animation finished first then hide the holder
        setTimeout(function() {
          searchHolder.hide();
        }, 500);

        openToggle.removeAttr('style')
          .removeClass('hidden');

        $("#nav-items, header").removeClass("hide");



      }
    });


    $("#close-container").click(function() {
      $("#modal-overlay").toggleClass("open");
      $("body").toggleClass("fixed");
      $("#modal-container").toggleClass("show");
    });
    // Generic
    $("#testimonials.two-tone .fl-row-content-wrap").append("<div id='testimonial-background'></div>");



    $("html .uabb-modal-parent-wrapper").first().addClass("prev-disable");
    $("html .uabb-modal-parent-wrapper").last().addClass("next-disable");


    $("html .uabb-modal-parent-wrapper").each(function() {


      var contentbox = $(this).find(".uabb-content");
      $(contentbox).prepend('<a class="prev pag-link" href="#"><span></a>');
      $(contentbox).append('<a class="next pag-link" href="#"><span></a>');


    });



    if (window.matchMedia("(min-width: 1000px)").matches) {

      $("html .uabb-modal-parent-wrapper").each(function() {
        var wrap = $(this).find('.uabb-modal');
        var prev = $(this).find('a.prev');
        var next = $(this).find('a.next');

        var con = $(this);


        $(next).click(function() {

          $(wrap).removeClass("uabb-show");
          var nextm = $(con).next();
          $(nextm).find(".uabb-modal").addClass("uabb-show");
        });


        $(prev).click(function() {

          $(wrap).removeClass("uabb-show");
          var prevm = $(con).prev();
          $(prevm).find(".uabb-modal").addClass("uabb-show");
        });


      });

    } else {
      $("html .uabb-modal-parent-wrapper").each(function() {
        var wrap = $(this).find('.uabb-modal');
        var prev = $(this).find('a.prev');
        var next = $(this).find('a.next');

        var con = $(this);


        $(next).click(function() {

          $(wrap).removeClass("uabb-show uabb-modal-scroll");
          var nextm = $(con).next();
          $(nextm).find(".uabb-modal").addClass("uabb-show uabb-modal-scroll");
        });


        $(prev).click(function() {

          $(wrap).removeClass("uabb-show uabb-modal-scroll");
          var prevm = $(con).prev();
          $(prevm).find(".uabb-modal").addClass("uabb-show uabb-modal-scroll");
        });


      });



    }

    $(".shape-row").each(function() {
      $(this).append("<div class='shape'></div>");

    });
  })(jQuery);
</script>
<?php wp_footer() ?>
</body>

</html>