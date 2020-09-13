jQuery(function($) {


 
    $(document).ready(function() {
        // Set a dynamic value for the VH unit (to resolve the IOS issues)
        var vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', vh + 'px');

        window.addEventListener('resize', function() {
            var vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', vh + 'px');
        });    


        if( $('body').hasClass('home') ) {
           $('#menu-item-779 a').addClass('active');
        } else if(  $('body').hasClass('page-template-page-courses')  ) {
            $('#menu-item-780 a').addClass('active');
        }

        $('.hamburger').on( 'click', function() {
            $(this).toggleClass('is-active');
            $('.main-nav__menu').toggleClass('is-active');        
        });

        $('.nav__search-btn').on('click', function() {

          $('.nav__search-form').addClass('is-active');

        });

        $('.close-btn').on('click', function() {
          $('.nav__search-form').removeClass('is-active');
        })


    });


       // Remove cf7 wrapper for textarea input
       if( $('.form__control').hasClass('form__control--msg') ) {
         $('.form__control--msg').unwrap();
       }

      var firstOption =  $('option').first().attr('disabled', 'disabled');
     



    // Check if script runs in Home Page
    if($('body').hasClass('page-template-front-page')) {
        // Header Swiper Slider
        const headerSlider = new Swiper ('.header-slider', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            effect: 'fade',
            autoplay: true,
            fadeEffect: { crossFade: true },
            // pagination
            pagination: {
              el: '#header-pagination',
              clickable: true
            },
          });

        // Testimonials Swiper Slider
        const testimonialsSlider = new Swiper ('.testimonials-slider', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            effect: 'fade',
            // autoplay: true,
            fadeEffect: { crossFade: true },
            // If we need pagination
            pagination: {
              el: '#testimonials-pagination',
              clickable: true
            },
          });




    }; // end of home page script


    if($('body').hasClass('page-template-page-courses')) {

        // Slick slider for courses
        $('.expertise-nav__list').slick({
            accessibility: true,
            arrows: false,
            mobileFirst: true,
            waitForAnimate: false,
            slidesToShow: 3,
            swipeToSlide: true,
            infinite: false,
            responsive: [
              {
              breakpoint: 991,
              settings: 'unslick'
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 4,
              }
            }
          ]
          });

          $('.counter__text').click(function() {
            $('html, body').scrollTop( $(document).height() - $(window).height() );
          });


// Syllabus Display and Selection script
// Courses Display 
function setupCourses() {
    const navBtns = document.querySelectorAll('.expertise-btn');
  
    navBtns.forEach(navBtn => {
      navBtn.addEventListener('click', () => {
        // Determine the content generated height 
        // and apply it to the div 
        // Removes the active class from the .expertise-btn:
        navBtns.forEach(navBtn => {
          navBtn.classList.remove('expertise-btn--active');
        })
        // Removes the active class from the .expertise-menu__layout:
        const expertiseBoxes = document.querySelectorAll('.expertise-menu__box');
        expertiseBoxes.forEach(box => {
          box.classList.remove('expertise-menu__box--active');
        });
  
        // Get the course number
        const expertiseName = navBtn.dataset.forExpertise;
     
        // And show the corresponding course in the menu
        const courseItems = document.querySelectorAll(`.expertise-menu__box[data-expertise="${expertiseName}"]`);
        courseItems.forEach(courseItem => {
          courseItem.classList.add('expertise-menu__box--active');
        })
        navBtn.classList.add('expertise-btn--active');
      });
    });
     // Count checked items
     function updateCount() {
      var x = jQuery(".expertise-menu__input:checked").length;
      document.querySelector('.counter__number').innerHTML = x;
  
      if(x > 0) {
        document.querySelector('.text--empty').style.display = "none";
      } else {
        document.querySelector('.text--empty').style.display = "block";
  
      }
      
     if(x === 1) {
        document.querySelector('.counter__text').innerHTML = "Course Selected";
      } else {
        document.querySelector('.counter__text').innerHTML = "Courses Selected";
      }
  
  };
  
  
  $('.expertise-menu__input').change((e) => {
      let courseLabelElem = e.target.parentNode.querySelector('label');
      let courseName = courseLabelElem.querySelector('.expertise-menu__text').innerText
      let courseId = courseLabelElem.querySelector('.expertise-menu__text--sub').innerText
 
      
      if(e.target.checked){
          $('#selected___courses').append(
              `<li class="selected___course___item" id="selected_${courseId}">
                  <button class="remove__course__button" id="remove_${courseId}">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/>
         <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/>
        </svg>
                  </button>
                  ${courseName} ${courseId}
              </li>`)


              $('.wpcf7-hidden').val($('.wpcf7-hidden').val() + ' ' + courseId);

              jQuery(`#remove_${courseId}`).click(() =>{
               e.target.checked = false
               jQuery(`#selected_${courseId}`).remove();
               updateCount();
          })
  
      } else {
        jQuery(`#selected_${courseId}`).remove();
      }
  
      updateCount();
      
  });
  
  
  }; // end of setupCourses function

  $(document).ready(function() {
    setupCourses();
    if( document.querySelector('.expertise-btn--active') ) {
      document.querySelector('.expertise-btn--active').click();
    } else {
      document.querySelector('.expertise-btn').classList.add('expertise-btn--active');
     $('.expertise-btn--active').click();

    }
  });

  // VISIBILITY FOR COUNTER ONLY ON COURSES SECTION
const section = document.querySelector('.experties');
const counter = document.querySelector('.counter');

const options = {
  root : null,
  threshold: 0.25,
  rootMargin: "-250px"
};

const observer = new IntersectionObserver(function
  (entries, observer) {
    entries.forEach( entry => {
      if( entry.isIntersecting ) {
        counter.classList.add('appear');
      } else {
        counter.classList.remove('appear');
      }
 
  });
  }, options);

  observer.observe(section);
          

    }; // end of home page script



     // Check if script runs in Home Page
     if($('body').hasClass('single-syllabus')) {

      // Modules Slider
          var slider = tns({
            container: '.tabs__menu',
            items: 3,
            slideBy: 1,
            mouseDrag: true,
            loop: false,
            nav: false,
            controlsContainer: ".tabs__controls",
            controlsPosition: 'bottom',
            viewportMax: true,
            responsive: {
                576: {
                    items: 4
                }
              
            }
        });

        // Hide and show more text
        $('.text-btn').click(function() {
          $('.hiddenText').fadeToggle();
        })

        // Setup Tabs for syllabus

        function setupTabs() {

          const btns = document.querySelectorAll('.tabs__btn');
      
          btns.forEach(btn => {
                  btn.addEventListener('click', () => {
                      const moduleNumber   = btn.dataset.forTab;
                      const modulesContent = document.querySelectorAll('.tabs__content');
                      const selectedContent = document.querySelector(`.tabs__content[data-tab="${moduleNumber}"]`);
      
                     btns.forEach(btn => {
                         btn.classList.remove('tabs__btn--active');
                     })
      
                     modulesContent.forEach(content => {
                          content.classList.remove('tabs__content--active');
                     });
                     btn.classList.add('tabs__btn--active');
                     selectedContent.classList.add('tabs__content--active');
                  });
          });
      };

      $(document).ready(function() {  
        setupTabs();
          document.querySelector('.tabs__btn').classList.add('tabs__btn--active');
          document.querySelector('.tabs__content').classList.add('tabs__content--active');
      })
     }
});