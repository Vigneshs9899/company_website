// Pre Loader

window.addEventListener("load", function () {
    const preloader = document.getElementById("preloader");
    preloader.style.opacity = "0";
    setTimeout(() => {
        preloader.style.display = "none";
    }, 500); // Matches the transition duration
});


// Page Transition


document.addEventListener("DOMContentLoaded", () => {
    const wrapper = document.getElementById("transition-wrapper");
    wrapper.style.opacity = "1";
});

// Optional: Transition to a new page
document.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", e => {
        e.preventDefault();
        const url = e.target.href;
        document.body.style.opacity = "0";
        setTimeout(() => {
            window.location.href = url;
        }, 500); // Matches the fade-out duration
    });
});

AOS.init();


// TABS 

  document.querySelectorAll('.tab-button').forEach((button, index) => {
    button.addEventListener('click', () => {
      // Remove 'active' from all tab buttons
      document.querySelectorAll('.tab-button').forEach(btn => {
        btn.classList.remove('bg-[#5B6BD5]','text-white', 'font-bold');
      });
      // Add 'active' to the clicked tab button
      button.classList.add('bg-[#5B6BD5]', 'text-white','font-bold');

      // Hide all tab content
      document.querySelectorAll('.tab-content').forEach(content => {
        content.classList.add('hidden');
      });

      // Show the corresponding tab content
      document.querySelector(`.tab-content-${index + 1}`).classList.remove('hidden');
    });
  });


 

  // Initialize Swiper
 

  const swiper = new Swiper('.swiper', {
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    slidesPerView: 1,
    spaceBetween: 20,
  });


  // Horizantal Tabs
        
  function openHorizontalTab(evt, tabId) {
    // Hide all tab contents
    document.querySelectorAll('.horizontal-tab-content').forEach(content => {
        content.classList.add('hidden');
    });

    // Remove active state from all tab buttons
    document.querySelectorAll('.horizontal-tab-button').forEach(button => {
        button.classList.remove('bg-[#5B6BD5]', 'text-white');
        button.classList.add('bg-[#F5F9FF]');
    });

    // Show the current tab and set active state on button
    document.getElementById(tabId).classList.remove('hidden');
    evt.currentTarget.classList.add('bg-[#5B6BD5]', 'text-white');
}


