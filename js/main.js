(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($("#spinner").length > 0) {
        $("#spinner").removeClass("show");
      }
    }, 1);
  };
  spinner();

  // Initiate the wowjs
  new WOW().init();

  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 45) {
      $(".navbar").addClass("sticky-top shadow-sm");
    } else {
      $(".navbar").removeClass("sticky-top shadow-sm");
    }
  });

  // Dropdown on mouse hover
  const $dropdown = $(".dropdown");
  const $dropdownToggle = $(".dropdown-toggle");
  const $dropdownMenu = $(".dropdown-menu");
  const showClass = "show";

  $(window).on("load resize", function () {
    if (this.matchMedia("(min-width: 992px)").matches) {
      $dropdown.hover(
        function () {
          const $this = $(this);
          $this.addClass(showClass);
          $this.find($dropdownToggle).attr("aria-expanded", "true");
          $this.find($dropdownMenu).addClass(showClass);
        },
        function () {
          const $this = $(this);
          $this.removeClass(showClass);
          $this.find($dropdownToggle).attr("aria-expanded", "false");
          $this.find($dropdownMenu).removeClass(showClass);
        }
      );
    } else {
      $dropdown.off("mouseenter mouseleave");
    }
  });

  // Facts counter
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000,
  });

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
    return false;
  });

  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1500,
    dots: true,
    loop: true,
    center: true,
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
    },
  });

  // Vendor carousel
  $(".vendor-carousel").owlCarousel({
    loop: true,
    margin: 45,
    dots: false,
    autoplay: true,
    smartSpeed: 1000,
    responsive: {
      0: {
        items: 2,
      },
      576: {
        items: 4,
      },
      768: {
        items: 5,
      },
      992: {
        items: 5,
      },
    },
  });
})(jQuery);

function changeImageOnScroll() {
  var image = document.getElementById("logo-head");
  var screenWidth = window.innerWidth;

  // Change the image source when scrolling past a certain point or on mobile devices
  if (window.scrollY > 20 || screenWidth <= 728) {
    image.src = "assets/img/logo_rp.png";
    image.alt = "Black Logo";
  } else {
    image.src = "assets/img/logo_rp_white.png";
    image.alt = "Initial Image";
  }
}

// Attach the function to the window's scroll event and resize event
window.onscroll = changeImageOnScroll;
window.onresize = changeImageOnScroll;

// Trigger the function on page load to set the initial state
changeImageOnScroll();

function handleSubmit(formId) {
  const form = document.getElementById(formId);
  const name = form.querySelector('input[name="name"]').value;
  const email = form.querySelector('input[name="email"]').value;

  let subject = "";
  let title = "";

  if (formId === "contactForm") {
    subject = form.elements.subject.value;
    title = "HUBUNGI%20KAMI%0D%0A------------------";
  } else if (formId === "landingPageForm") {
    subject = "Paket UMKM";
    title = "PEMESANAN%20LANDING%20PAGE%0D%0A--------------------------------";
  } else if (formId === "socialMediaForm") {
    const selectElement = form.querySelector('select[name="services"]').value;
    subject = `Paket ${selectElement} Bulan`;
    title = "PENDAFTARAN%20SOCIAL%20MEDIA%0D%0A----------------------------------";
  } else if (formId === "cctvForm") {
    subject = `Pemasangan CCTV`;
    title = "PEMASANGAN%20CCTV%0D%0A-----------------------";
  }

  const message = form.querySelector('textarea[name="message"]').value;

  const url = `https://wa.me/6281144608008?text=${title}%0D%0ANAMA: ${name}%0D%0AEMAIL: ${email}%0D%0ASUBJEK: ${subject}%0D%0APESAN: ${message}`;
  window.open(url, "_blank");
}

const formIds = ["contactForm", "landingPageForm", "socialMediaForm", "cctvForm"];
formIds.forEach((formId) => {
  const form = document.getElementById(formId);
  if (form) {
    form.addEventListener("submit", () => handleSubmit(formId));
  }
});
