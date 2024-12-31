document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector("#header");
  let logo = document.querySelector("#logo");

  if (header) {
    // IF HEADER EXISTS
    const headerOffset = header.offsetTop;

    window.addEventListener("scroll", () => {
      if (window.scrollY > headerOffset) {
        header.classList.add("sticky");
        logo.classList.add("slideRight");
      } else {
        header.classList.remove("sticky");
        logo.classList.remove("slideRight");
        logo.classList.add("sliderleft");
      }
    });
  } else {
    console.error("Header element not found!");
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const boxes = document.querySelectorAll(".box");

  window.addEventListener("scroll", () => {
    boxes.forEach((box) => {
      if (box.getBoundingClientRect().top <= window.innerHeight) {
        box.classList.add("visible");
      }
    });
  });
});






document.addEventListener('DOMContentLoaded', () => {

  
  const images = [
    '../assets/images/banner/bannerauto.png',
    '../assets/images/banner/computer-bg.png',
    '../assets/images/banner/entertainment-bg.png'
  ];

  const heroSection = document.querySelector('.hero-bg');
  let currentIndex = 0;

  function changeBackground() {
    const img = new Image();
    img.src = images[currentIndex];
    img.onload = () => {
      heroSection.style.backgroundImage = `url(${images[currentIndex]})`;
      currentIndex = (currentIndex + 1) % images.length; // loop image
    };
    img.onerror = () => {
      let default_image = heroSection.style.backgroundImage = `url(${images[0]})`;
      console.error(`Image not found: ${images[currentIndex]}  default_image: ${default_image}`);  
    };
  }

  // CALL SLIDESHOW
  changeBackground();
  setInterval(changeBackground, 10000);
});




    document.addEventListener('DOMContentLoaded', () => {
        const menuItems = document.querySelectorAll('.menu-item a');
        const iframe = document.querySelector('#content-frame');

        // Load the last visited page from localStorage (if any)
        const savedPage = localStorage.getItem('iframePage');
        if (savedPage) {
            iframe.src = savedPage;
        }

        // Add click event to each menu item
        menuItems.forEach(item => {
            item.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent default link behavior

                // Get the link's href value
                const pageUrl = this.getAttribute('href');

                // Save the URL to localStorage
                localStorage.setItem('iframePage', pageUrl);

                // Update the iframe's src to load the page
                iframe.src = pageUrl;
            });
        });
    });

