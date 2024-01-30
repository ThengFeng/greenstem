// Check if the window width is less than or equal to 800 pixels to determine if it's a phone
const isPhone = window.innerWidth <= 800;


// Function to toggle the accordion item and adjust associated styles
function toggleAccordion(selectedButton, selectedContent) {
    // Get references to the selected content, all accordion items, and all images
    var content = document.getElementById(selectedContent);
    var category = document.querySelectorAll('.accordion-item');
    var pics = document.querySelectorAll('.pic');
    var targetPic = document.getElementById(selectedButton.getAttribute('data-target-pic'));

    // Close all accordion items
    category.forEach(item => {
        var body = item.querySelector('.accordion-body');
        body.classList.remove('expanded');
        body.style.maxHeight = '0';
    });

    // Toggle the selected accordion item's visibility
    content.classList.toggle('expanded');
    content.style.maxHeight = content.classList.contains('expanded') ? content.scrollHeight + 'px' : '0';

    // Adjust image widths based on the selected accordion item
    pics.forEach(function (pic) {
        if (pic !== targetPic) {
            pic.style.width = '10%';
        } else {
            pic.style.width = '80%';
        }
    });

    // Update symbols to indicate expand or collapse state
    var selectedSymbol = selectedButton.querySelector('.accordion-symbol');
    if (!(selectedSymbol.textContent === 'remove')) updateAccordionSymbol(selectedSymbol);
}

// Function to update the selected accordion symbol
function updateAccordionSymbol(selectedSymbol) {
    // Get all symbols and update their content and styling
    var symbols = document.querySelectorAll('.accordion-symbol');
    symbols.forEach(symbol => {
        symbol.textContent = symbol === selectedSymbol ? 'remove' : 'add';
        symbol.classList.toggle('expanded', symbol === selectedSymbol);
    });
}

// Function to expand the accordion content when clicking on an image
document.addEventListener('DOMContentLoaded', function () {
    // Get all images
    var pics = document.querySelectorAll('.pic');

    // Attach click event listeners to each image
    if (pics) {
        pics.forEach(function (pic) {
            pic.addEventListener('click', () => {
                // Get the associated accordion header and simulate a click event
                var headerId = pic.getAttribute('data-header');
                var header = document.getElementById(headerId);
                $(document).ready(function () {
                    $(header).click();
                });
            });
        });
    }
});


//customer testimonial carousel  (home page)
new Swiper(".customer-review", {
    slidesPerView: isPhone ? 1 : 3,
    spaceBetween: 30,
    freeMode: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true,
    centeredSlides: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
});


//event gallery carousel (about us)
document.addEventListener('DOMContentLoaded', function () {
    var eventSwiper = new Swiper(".event-swiper", {
        slidesPerView: isPhone ? 2 : 3,
        loop: true,
        spaceBetween: 30,
        centeredSlides: true,

    });

    if (eventSwiper) {

        // Add 'hover' class on initial load
        eventSwiper.slides[eventSwiper.activeIndex].classList.add('hover');

        eventSwiper.on('slideChange', function () {
            // Remove 'hover' class from all slides
            eventSwiper.slides.forEach(function (slide) {
                slide.classList.remove('hover');
            });

            // Add 'hover' class to the active slide
            var activeSlide = eventSwiper.activeIndex;
            if (activeSlide !== undefined) {
                eventSwiper.slides[activeSlide].classList.add('hover');
            }
        });

        eventSwiper.on('click', function () {
            eventSwiper.slideToClickedSlide();
        });

        // Mouseover handling
        eventSwiper.slides.forEach(function (hoverSlide, index) {
            hoverSlide.addEventListener('mouseover', function () {
                // Remove 'hover' class from all slides
                eventSwiper.slides.forEach(function (slide) {
                    slide.classList.remove('hover');
                });

                // Add 'hover' class to the hovered slide
                hoverSlide.classList.add('hover');
            });

            hoverSlide.addEventListener('mouseleave', function () {
                var activeSlide = eventSwiper.activeIndex;

                if (hoverSlide != activeSlide) {
                    hoverSlide.classList.remove('hover');
                    eventSwiper.slides[activeSlide].classList.add('hover');
                }
            });
        });
    }
});

//image carousel (about us - gallery)
document.addEventListener('DOMContentLoaded', function () {
    var gallerySwiper = new Swiper(".gallery-swiper", {
        slidesPerView: isPhone ? 2 : 3,
        spaceBetween: 0,
        centeredSlides: true,
        keyboard: {
            enabled: true,
        },
        effect: "coverflow",
        coverflowEffect: {
            rotate: 10,
            stretch: isPhone ? 10 : 100,
            depth: 0,
            modifier: 1,
            slideShadows: true,
        },

    })

    if (gallerySwiper) {
        gallerySwiper.on('click', function () {
            gallerySwiper.slideToClickedSlide();
        })
    }


})
// event gallery fancybox setting
document.addEventListener('DOMContentLoaded', function () {
    function initializeFancybox(images) {
        return () => {
            new Fancybox(images, {
                Thumbs: { showOnStart: false },
                Carousel: { Navigation: false },
                Toolbar: {
                    display: {
                        left: [],
                        middle: ["prev", "infobar", "next"],
                        right: ["thumbs", "close"],
                    },
                },
            });
        };
    }

    var teamBuildingBtns = document.querySelectorAll('.team-building-Btn');
    if (teamBuildingBtns) {
        teamBuildingBtns.forEach(function (button) {
            button.addEventListener('click', initializeFancybox([
                {
                    src: "../greenstem/pic/team_building/team_building_1.jfif",
                    type: "image",
                    caption: "Team Building Event",
                },
                {
                    src: "../greenstem/pic/team_building/team_building_2.jpg",
                    type: "image",
                    caption: "Team Building Event",
                },
                {
                    src: "../greenstem/pic/team_building/team_building_4.jpg",
                    type: "image",
                    caption: "Team Building Event",
                },
                {
                    src: "../greenstem/pic/team_building/team_building_6.jpg",
                    type: "image",
                    caption: "Team Building Event",
                }
            ]));
        });
    }

    var miapex2023GalleryBtns = document.querySelectorAll('.miapex2023-btn');
    if (miapex2023GalleryBtns) {
        miapex2023GalleryBtns.forEach(function (button) {
            button.addEventListener('click', initializeFancybox([
                {
                    src: "../greenstem/pic/Nov23_Miapex-2023/1.jpg",
                    type: "image",
                    caption: "MIAPEX 2023",
                },
                {
                    src: "../greenstem/pic/Nov23_Miapex-2023/2.jpg",
                    type: "image",
                    caption: "MIAPEX 2023",
                },
                {
                    src: "../greenstem/pic/Nov23_Miapex-2023/3.jpg",
                    type: "image",
                    caption: "MIAPEX 2023",
                },
                {
                    src: "../greenstem/pic/Nov23_Miapex-2023/4.jpg",
                    type: "image",
                    caption: "MIAPEX 2023",
                }
            ]));
        });
    }

    var evm2023GalleryButtons = document.querySelectorAll('.evm2023-btn');
    if (evm2023GalleryButtons) {
        evm2023GalleryButtons.forEach(function (button) {
            button.addEventListener('click', initializeFancybox([
                {
                    src: "../greenstem/pic/sept23_EVM-Asia23/1.jpg",
                    type: "image",
                    caption: "EVM 2023",
                },
                {
                    src: "../greenstem/pic/sept23_EVM-Asia23/2.jpg",
                    type: "image",
                    caption: "EVM 2023",
                }, {
                    src: "../greenstem/pic/sept23_EVM-Asia23/3.jpg",
                    type: "image",
                    caption: "EVM 2023",
                }, {
                    src: "../greenstem/pic/sept23_EVM-Asia23/4.jpg",
                    type: "image",
                    caption: "EVM 2023",
                }
            ]))
        })
    }

    var gstSeminarButton = document.querySelector('.gstSeminar-btn');
    if (gstSeminarButton) {
        gstSeminarButton.addEventListener('click', initializeFancybox([
            {
                src: "../greenstem/pic/gst-seminar/greenstem (16).jpg",
                type: "image",
                caption: "GST Seminar",
            },
            {
                src: "../greenstem/pic/gst-seminar/greenstem (22).jpg",
                type: "image",
                caption: "GST Seminar",
            },
            {
                src: "../greenstem/pic/gst-seminar/greenstem (25).jpg",
                type: "image",
                caption: "GST Seminar",
            },
            {
                src: "../greenstem/pic/gst-seminar/greenstem (45).jpg",
                type: "image",
                caption: "GST Seminar",
            },
        ]))
    }
});


//dropdown function use on footer 
function showDropdown(selectedButton) {
    var buttons = document.querySelectorAll(".dbtn");

    //to make sure only one button been expended by removing the expanded class to other button
    buttons.forEach(function (button) {
        if (button !== selectedButton) {
            button.classList.remove('expanded');
        }
    })

    //toggle the expanded class to selected button
    selectedButton.classList.toggle('expanded');
}

//funtion to resize texarea height base on user input (contact us)
document.addEventListener('DOMContentLoaded', function () {
    var textarea = document.getElementById('message');

    if (textarea) {
        textarea.addEventListener('input', function () {
            // Auto-adjust the height up to the maximum height
            this.style.height = 'auto';
            this.style.height = (Math.min(this.scrollHeight, parseInt(getComputedStyle(this).maxHeight)) + 2) + 'px';
        });
    }
});

//product container hover effect (home page)
document.addEventListener('DOMContentLoaded', function () {
    var targets = document.querySelectorAll('.product-content');

    if (!isPhone) {
        targets.forEach(function (target) {
            var targetIconId = target.getAttribute("data-icon-target");
            var targetIcon = document.getElementById(targetIconId);

            target.addEventListener("mouseover", function () {
                target.classList.add("hover");
                if (targetIcon) {
                    targetIcon.style.opacity = '0';
                    targetIcon.style.transform = 'translateY(-100%)';
                }
            });

            target.addEventListener("mouseout", function () {
                target.classList.remove("hover");
                if (targetIcon) {
                    targetIcon.style.opacity = '1';
                    targetIcon.style.transform = 'translateY(0)';
                }
            });
        });
    }
});

//navigation bar effect
document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.getElementById('navigation');
    const navButton = document.getElementById('navigationBtn');
    const navContent = document.getElementById("navbarSupportedContent");

    let lastScrollPosition = isPhone? 10:0;

    function checkScroll() {
        var scrollTop = window.scrollY;

        if (scrollTop > lastScrollPosition) {
            // Scrolling down
            navbar.style.transform = 'translateY(-100%)';
            if (navContent.classList.contains('show')) {
                navButton.click();
            }

        } else {
            // Scrolling up
            navbar.style.transform = 'translateY(0)';
        }
        if(scrollTop < 10){
            scrollTop = isPhone? 10: scrollTop;
        }
        lastScrollPosition = scrollTop;
    }

    window.addEventListener('scroll', checkScroll);
    window.addEventListener('mousemove', function (event) {
        // Show the navigation bar when hovering near the top
        if (event.clientY <= 10) {
            navbar.style.transform = 'translateY(0)';
        }
    });
});


//function to change the button style when hover 
function changeButtonStyle(button, onHover) {
    var color = button.style.color || getComputedStyle(button).color;
    var bgColor = button.style.backgroundColor || getComputedStyle(button).backgroundColor;
    var border = button.style.border || getComputedStyle(button).border;

    if (onHover) {
        button.style.color = bgColor;
        button.style.backgroundColor = color;
        button.style.border = `2.5px solid ${bgColor}`;
    }

    button.addEventListener('mouseout', function () {
        button.style.backgroundColor = bgColor;
        button.style.color = color;
        button.style.border = border;
    });
}


//set up for fancy box 
document.addEventListener("DOMContentLoaded", function () {
    var picGalleries = document.querySelectorAll(".gallery");

    picGalleries.forEach(function (picGallery) {
        var targetGallery = picGallery.getAttribute('data-fancybox');

        picGallery.addEventListener('click', function () {
            if (targetGallery) {
                Fancybox.bind('[data-fancybox="' + targetGallery + '"]', {
                    // Your Fancybox options here
                    Thumbs: {
                        showOnStart: false,
                    },
                    Carousel: {
                        Navigation: false,
                    },
                    Toolbar: {
                        display: {
                            left: [],
                            middle: ["prev", "infobar", "next"],
                            right: ["thumbs", "close"],
                        },
                    },
                });
            }
        });
    });
});


//function to show the image base on user select (product page - product-preview)
function productPreviewList(selectedButton, targetId) {
    // Get references to all list-group items and product preview images
    var buttons = document.querySelectorAll('.list-group-item');
    var imgList = document.querySelectorAll('.product-preview-img');

    // Remove the 'active' class from all list-group items and product preview images
    buttons.forEach(function (button) {
        button.classList.remove('active');
    });

    imgList.forEach(function (element) {
        element.classList.remove('active');
    });

    // Get the target image element based on the provided targetId
    var target = document.getElementById(targetId);

    // Check if the target element exists
    if (target) {
        // Add the 'active' class to the selected button and show the corresponding image
        selectedButton.classList.add('active');
        target.classList.add('active', 'animate__animated', 'animate__fadeIn');
    }
}


//animate when element been observe function 
const the_animation = document.querySelectorAll('.animation');

// Iterate through each element with the class 'animation'
the_animation.forEach((element) => {
    // Set the intersection threshold for triggering the animation
    const threshold = isPhone? 0.05:0.3; // Default threshold is 0.5

    // Create an IntersectionObserver to handle element visibility changes
    const observer = new IntersectionObserver((entries) => {
        // Iterate through each entry (element visibility status)
        entries.forEach((entry) => {
            // Check if the element is currently intersecting with the viewport
            if (entry.isIntersecting) {
                // Add animation classes when the element becomes visible
                entry.target.classList.remove('animation');
                entry.target.classList.add('animate__animated', 'animate__fadeInUp');

                // Stop observing the element to prevent multiple animations
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: threshold }); // Configure the observer with the specified threshold

    // Start observing the current element for visibility changes
    observer.observe(element);
});


//number animation (home page)
document.addEventListener("DOMContentLoaded", function () {
    // Select the element with the id 'number'
    let number = document.getElementById('number');

    // Set the intersection threshold for triggering the animation
    const threshold = 1;

    // Flag to track if the animation has been executed to prevent multiple executions
    let animationExecuted = false;

    // Check if the element with id 'number' exists
    if (number) {
        // Create an IntersectionObserver to handle element visibility changes
        const observer = new IntersectionObserver((entries) => {
            // Iterate through each entry (element visibility status)
            entries.forEach((entry) => {
                // Check if the element is currently intersecting with the viewport and animation hasn't been executed
                if (entry.isIntersecting && !animationExecuted) {
                    // Set the flag to indicate that the animation is being executed
                    animationExecuted = true;

                    // Define parameters for the random number animation
                    let start = 20;       // Set the starting value
                    let end = 1000;       // Set the ending value
                    let ticks = 10;        // Set the number of animation steps
                    let speed = 100;       // Set the speed of the animation

                    // Generate an array of random numbers within the specified range
                    let randomNumbers = [end];
                    for (let i = 0; i < ticks - 1; i++) {
                        randomNumbers.unshift(
                            Math.floor(Math.random() * (end - start + 1) + start)
                        );
                    }

                    // Sort the array in ascending order
                    randomNumbers.sort((a, b) => { return a - b });

                    // Initialize a counter for the animation steps
                    let x = 0;

                    // Set up an interval to update the 'number' element with random numbers
                    let interval = setInterval(function () {
                        // Update the 'number' element with the next random number
                        if (number) {
                            number.innerHTML = randomNumbers.shift();
                        }

                        // Check if the animation steps are complete
                        if (++x === ticks) {
                            // Clear the interval to stop the animation
                            window.clearInterval(interval);
                        }
                    }, speed);
                }
            });
        }, { threshold: threshold }); // Configure the observer with the specified threshold

        // Start observing the 'number' element for visibility changes
        observer.observe(number);
    }
});


//animation effect (product page - product-features)
document.addEventListener("DOMContentLoaded", function () {
    initializeObserver();
});

function initializeObserver() {
    var elements = document.querySelectorAll('.features');

    elements.forEach(function (element) {
        element.classList.remove('active');
    })

    const threshold = 0.5;

    if (elements.length > 0) {
        elements.forEach((element) => {
            observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, { threshold: threshold });

            observer.observe(element);
        });
    }
}

//function to change display content (product page)
function showContent(selectedButton, targetContent, changeImg) {
    // Get references to all selection bar items, system contents, and the target content
    var buttons = document.querySelectorAll('.selection-bar-item');
    var contents = document.querySelectorAll('.system');
    var selectedContent = document.getElementById(targetContent);

    // Get the system view image element
    var imageToChange = document.querySelector('.systemView');

    // Iterate through each button and add or remove the 'active' class based on the selection
    buttons.forEach(function (button) {
        if (button === selectedButton) {
            button.classList.add('active');
        } else {
            button.classList.remove('active');
        }
    });

    // Toggle the 'active' class for each system content based on the selected content
    contents.forEach(function (content) {
        content.classList.toggle('active', content === selectedContent);
    });

    // Apply fadeIn animation to the system view image and remove it after a delay
    imageToChange.classList.add('animate__animated', 'animate__fadeIn');
    setTimeout(() => {
        imageToChange.classList.remove('animate__animated', 'animate__fadeIn');
    }, 1000);

    // Change background and SVG images based on the 'changeImg' parameter
    if (changeImg) {
        imageToChange.src = '../greenstem/pic/product/workshop-system-preview.png';
        (document.querySelector('.bg')).src = '../greenstem/pic/product/workshop blobWrapper.svg';
        (document.querySelector('.svg-icon1')).src = '../greenstem/pic/product/workshop-unmatched-support.svg';
        (document.querySelector('.svg-icon2')).src = '../greenstem/pic/product/workshop-device.svg';
        (document.querySelector('.svg-icon3')).src = '../greenstem/pic/product/workshop-print.svg';
        (document.querySelector('.svg-icon4')).src = '../greenstem/pic/product/workshop-inventory.svg';
    } else {
        imageToChange.src = '../greenstem/pic/product/spare-part-system-preview.png';
        (document.querySelector('.bg')).src = '../greenstem/pic/product/blobWrapper.svg';
        (document.querySelector('.svg-icon1')).src = '../greenstem/pic/product/unmatchedSupport.svg';
        (document.querySelector('.svg-icon2')).src = '../greenstem/pic/product/deviceAccessibility.svg';
        (document.querySelector('.svg-icon3')).src = '../greenstem/pic/product/barcodePrinting.svg';
        (document.querySelector('.svg-icon4')).src = '../greenstem/pic/product/inventoryManagement.svg';
    };

    // Reset the preview list to default
    var previewButtons = document.querySelectorAll('.list-group-item');
    var imgList = document.querySelectorAll('.product-preview-img');

    previewButtons.forEach(function (button) {
        button.classList.remove('active');
    });

    imgList.forEach(function (element) {
        element.classList.remove('active');
    });

    // Set the default items in the preview list to active
    var defaultItems = document.querySelectorAll(".default");

    defaultItems.forEach(function (item) {
        item.classList.add("active");
    })

    // Initialize the observer
    initializeObserver();
}


//change all clickable cursor
document.addEventListener('DOMContentLoaded', function () {
    // Get all elements with the 'onclick' attribute
    var clickableElements = document.querySelectorAll('[onclick]');

    // Add a CSS class to each clickable element
    clickableElements.forEach(function (element) {
        element.style.cursor = 'pointer';
    });
});


//add hover effect to footer contact number 
function hover(button) {
    var container = document.querySelector('.phone-number');
    var icon = container.querySelector('.footer-icon');

    icon.style.transition = 'all 300ms linear';
    button.style.transition = 'all 300ms linear';
    icon.style.color = 'black';
    icon.style.transform = 'scale(1.01)';
    button.style.color = 'black';
    button.style.transform = 'scale(1.01)';

    button.addEventListener('mouseout', function () {
        icon.style.color = 'white';
        icon.style.transform = 'scale(1)';
        button.style.color = 'white';
        button.style.transform = 'scale(1)';
    })

}

//function to generate the current year
document.addEventListener('DOMContentLoaded', function () {
    var year = new Date().getFullYear();

    document.getElementById("copyRight").textContent = '©' + year + ' Greenstem Business Software Sdn Bhd (387389-H) - All rights reserved';
})

//product page title typing effect
document.addEventListener('DOMContentLoaded', function () {
    // Call the consoleText function with an array of words and the target element id
    consoleText(['Beyond Excellence', 'Redefining Superiority', 'Unveiling the Pinnacle of Our Products'], 'text');

    // Function to create a typing animation effect
    function consoleText(words, id) {
        // Get references to the console container and set initial variables
        var con = document.getElementById('console');
        var letterCount = 0;
        var wordIndex = 0;
        var x = 1;
        var target = document.getElementById(id);

        // Check if the target element exists
        if (!target) {
            // Exit the function if the target element is not found
            return;
        }

        // Function to simulate typing characters
        function type() {
            // Check if there are more words to display
            if (wordIndex < words.length) {
                var currentWord = words[wordIndex];

                // Check if there are more letters in the current word to display
                if (letterCount <= currentWord.length) {
                    // Update the target element with the current substring of the word
                    target.innerHTML = currentWord.substring(0, letterCount);
                    letterCount += x;

                    // Set a timeout to continue typing after a short delay
                    setTimeout(type, 100);
                } else {
                    // Check if it's the last word
                    if (wordIndex === words.length - 1) {
                        // Display the last word without disappearing effect
                        target.innerHTML = currentWord;

                        // Hide the console after a short delay
                        setTimeout(() => {
                            con.style.display = 'none';
                        }, 200);
                    } else {
                        // Move to the next word with disappearing effect
                        reverseType(currentWord);
                    }
                }
            }
        }

        // Function to reverse the typing effect
        function reverseType(word) {
            // Check if there are more letters to delete
            if (letterCount >= 0) {
                // Update the target element with the current substring of the word
                target.innerHTML = word.substring(0, letterCount);
                letterCount -= x;

                // Set a timeout to continue reversing after a short delay
                setTimeout(function () {
                    reverseType(word);
                }, 100);
            } else {
                // Move to the next word after finishing the reverse typing
                wordIndex++;
                letterCount = 0;
                type();
            }
        }

        // Function to simulate blinking cursor
        function blinkCursor() {
            // Toggle the 'hidden' class to create a blinking effect
            if (con.className.includes('hidden')) {
                con.classList.remove('hidden');
            } else {
                con.classList.add('hidden');
            }
        }

        // Start the typing animation
        type();

        // Set interval for the blinking cursor effect
        setInterval(blinkCursor, 200);
    }
});

//function to disaply the t&c content (contact us)
function showPopUp(button) {
    var popUp = document.getElementById('popUpWindow');

    button.style.color = '#29a87a';
    button.style.textDecoration = 'underline';

    popUp.classList.add('active');
}

//function to close the t&c window (contact us)
function closePopUp() {
    var popUp = document.getElementById('popUpWindow');
    var closeButton = document.getElementById('popUpCloseBtn');

    if (event.target === popUp || event.target === closeButton) {
        popUp.classList.remove('active');
    }
}

//function to detect the mouse click 
document.addEventListener('DOMContentLoaded', function () {
    var popUp = document.getElementById('popUpWindow');

    if (popUp) {
        popUp.addEventListener('click', function () {
            closePopUp();
        })
    }

})

//hover effect for timeline
document.addEventListener('DOMContentLoaded', function () {
    // Get all elements with the class 'timeline-item'
    var timelineItems = document.querySelectorAll('.timeline-item');

    // Iterate through each timeline item
    timelineItems.forEach(function (item) {
        // Add a mouseover event listener to each timeline item
        item.addEventListener('mouseover', function () {
            // Add the 'hover' class to the current timeline item
            item.classList.add('hover');

            // Iterate through all timeline items and remove the 'hover' class from others
            timelineItems.forEach(function (otherItem) {
                if (otherItem !== item) {
                    otherItem.classList.remove('hover');
                }
            });
        });
    });
});

function formValidation(){
    const maxFileSize = 10*1024*1024  //10mb
    var fileInput = document.getElementById('careerFile');
    var fileSize = fileInput.files[0].size;

    if (fileSize > maxFileSize) {
        alert('File size exceeds the maximum allowed limit (10 MB). Please choose a smaller file.');
        return false; // Prevent form submission
    }

    

    return true;
}



// Prevent closing from click inside dropdown
document.querySelectorAll('.nav-dropdown').forEach(function (element) {
    element.addEventListener('click', function (e) {
        e.stopPropagation();
    });
})


//function to change the dropdown'symboll (navigation bar)
document.addEventListener('DOMContentLoaded', function () {
    var symbols = document.querySelectorAll('.nav-symboll');

    if (symbols) {
        symbols.forEach(function (symbol) {
            symbol.innerHTML = isPhone ? "&raquo;" : "&laquo;"; // Use innerHTML to display the HTML entities
        })
    }
})


//funtion to adjust the fb page width if using mobile to view 
document.addEventListener('DOMContentLoaded', function () {
    var fb = document.getElementById('fbPage');

    if (fb && isPhone) {
        fb.setAttribute('data-width', 300);
    }
})

document.addEventListener('DOMContentLoaded', function () {
    var txt = document.querySelector('.company-name');
    var subtitle = document.getElementById('subtitle');

    if (isPhone) {
        txt.innerHTML = "Greenstem Business Software <br> Sdn Bhd";
        subtitle.innerHTML= "Greenstem Solutions - <br> Tailored IT Excellence for <br> Empowering Your Automotive Business"
    }
})

//to change the navigation dropdown show by hover 
document.addEventListener('DOMContentLoaded', function () {
    var navbar = document.getElementById('navigation');
    var navDropDown = document.getElementById('navbarDropdown');
    var submenu = navDropDown.nextElementSibling;

    // Function to check if an element is part of the dropdown or its submenu
    function isDropdownElement(element) {
        return (
            element.classList.contains('nav-item') ||
            element.closest('.nav-item') !== null
        );
    }

    navbar.addEventListener('mouseleave', function (event) {
        if (!isDropdownElement(event.relatedTarget)) {
            // Close the dropdown
            navDropDown.setAttribute('aria-expanded', 'false');
            submenu.style.display = 'none';
        }
    });

    navDropDown.addEventListener('mouseenter', function () {
        // Open the dropdown when entering the navbar
        navDropDown.setAttribute('aria-expanded', 'true');
        submenu.style.display = 'block';
    });

    navDropDown.addEventListener('mouseleave', function () {
        // Close the dropdown when leaving the navbar
        navDropDown.setAttribute('aria-expanded', 'false');
        submenu.style.display = 'none';
    });

    // Handle mouseover and mouseout events on the submenu
    submenu.addEventListener('mouseover', function () {
        // Keep the dropdown open when over the submenu
        navDropDown.setAttribute('aria-expanded', 'true');
        submenu.style.display = 'block';
    });

    submenu.addEventListener('mouseout', function (event) {
        // Close the dropdown only if the mouse is not over the submenu or the dropdown button
        if (!isDropdownElement(event.relatedTarget)) {
            navDropDown.setAttribute('aria-expanded', 'false');
            submenu.style.display = 'none';
        }
    });
});

const jsonData = [
    //logo
    {
        "@context": "https://schema.org",
        "type": "Organization",
        "url": "https://www.greenstem.com.my",
        "logo": "https://www.greenstem.com.my/pic/icon.webp"
    },
    //	Local Business
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "@id": "https://www.greenstem.com.my",
        "name": "Greenstem Business Software Sdn Bhd",
        "image": [
            "https://www.greenstem.com.my/img/photo/greenstem (1).webp"
        ],
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Block A, A-3-3A, Ativo Plaza",
            "addressLocality": "Bandar Sri Damansara",
            "addressRegion": "KL",
            "postalCode": "52200",
            "addressCountry": "MY"
        },
        //	Option
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 3.1966091,
            "longitude": 101.6160515
        },
        "openingHoursSpecification": [
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday"
                ],
                "opens": "09:00",
                "closes": "18:00"
            }
        ],
        "telephone": "+603-6263 3933",
        "email": "mailto:admin@greenstem.com.my",
        "faxNumber": "+603-6263 7738",
        "url": "https://www.greenstem.com.my"
    },
    //	FAQ
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "Why choose us?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": `
                        Specifically designed for spare parts to improve <strong>efficiency</strong> and <strong>productivity</strong>.
                    `
                }
            },
            {
                "@type": "Question",
                "name": "Achievement",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": `
                        <ul>
                            <li>Engaged in spare parts accounting software business more than <strong>20 years</strong>.</li>
                            <li>Installed to more than <strong>800 spare parts companies</strong>.</li>
                        </ul>
                    `
                }
            }
        ]
    },
    //Product 
    {
        "@context": "https://schema.org",
        "@type": "ItemList",
        "itemListElement": [
            {
                "@type": "SoftwareApplication",
                "name": "Spare Parts Management & Accounting System",
                "description": "Our specialized system for spare parts companies optimizes efficiency through real-time inventory management, automated orders, and streamlined accounting",
                "brand": {
                    "@type": "brand",
                    "name": "Greenstem Business Software SDN BHD"
                },

                "image": [
                    "https://www.greenstem.com.my/img/photo/greenstem (1).webp"
                ],
                "applicationCategory": "Business / Workshop",
                "availableOnDevice": "PC & Mobile",
                "featureList": "https://www.greenstem.com.my",
                "inLanguage": "English",
                "operatingSystem": "Windows"
            },
            {
                "@type": "SoftwareApplication",
                "name": "Workshop Management System",
                "description": "Designed for workshops, optimizes efficiency with features like job scheduling, inventory tracking, and automated billing.",
                "brand": {
                    "@type": "brand",
                    "name": "Greenstem Business Software SDN BHD"
                },

                "image": [
                    "https://www.greenstem.com.my/img/photo/greenstem (1).webp"
                ],
                "applicationCategory": "Business / Workshop",
                "availableOnDevice": "PC & Mobile",
                "featureList": "https://www.greenstem.com.my",
                "inLanguage": "English",
                "operatingSystem": "Windows"
            }]
    }
]

const jsonLdScript = document.getElementById('json-ld');

// Set the content of the script element to the JSON-LD data
jsonLdScript.textContent = JSON.stringify(jsonData, null, 2);