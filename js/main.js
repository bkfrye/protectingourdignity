
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