(function () {
  let scrollexItems = [];

  function onScroll() {
    const viewportHeight = window.innerHeight;
    scrollexItems.forEach((item) => {
      const elemRect = item.element.getBoundingClientRect();
      const elemTop = elemRect.top;
      const elemBottom = elemRect.bottom;
      const elemMiddle = elemTop + (elemBottom - elemTop) / 2;

      // Calculate inView based on mode
      let inView = false;
      switch (item.mode) {
        case "top":
          inView = elemTop < viewportHeight && elemTop >= 0;
          break;
        case "bottom":
          inView = elemBottom > 0 && elemBottom < viewportHeight;
          break;
        case "middle":
          inView = elemMiddle > 0 && elemMiddle < viewportHeight;
          break;
        case "top-only":
          inView = elemTop >= 0 && elemBottom > viewportHeight;
          break;
        case "bottom-only":
          inView = elemTop < 0 && elemBottom <= viewportHeight;
          break;
        default:
          inView = elemTop < viewportHeight && elemBottom > 0;
      }

      // Trigger enter or leave events
      if (inView && !item.inView) {
        item.inView = true;
        item.onEnter && item.onEnter();
      } else if (!inView && item.inView) {
        item.inView = false;
        item.onLeave && item.onLeave();
      }
    });
  }
  function addScrollex(element, options) {
    const scrollexItem = {
      element: element,
      mode: options.mode || "default",
      onEnter: options.enter,
      onLeave: options.leave,
      inView: false,
    };
    scrollexItems.push(scrollexItem);
    options.initialize && options.initialize();
  }

  function removeScrollex(element) {
    scrollexItems = scrollexItems.filter((item) => item.element !== element);
  }

  // Attach the scroll event listener
  window.addEventListener("scroll", onScroll);

  // Expose global methods
  window.addScrollex = addScrollex;
  window.removeScrollex = removeScrollex;
})();

// Usage:
// addScrollex(document.getElementById('myElement'), {
//   mode: 'top',
//   enter: () => console.log('Entered'),
//   leave: () => console.log('Left'),
//   initialize: () => console.log('Initialized')
// });

// Select all elements with the class 'spotlight'
var spotlights = document.querySelectorAll('.spotlight');

spotlights.forEach(spotlight => {
  // Implement _parallax() functionality if needed

  const on = function() {
    let mode, top, bottom;

    // Set background image
    const mainImage = spotlight.querySelector('.image.main > img');
    if (mainImage) {
      spotlight.style.backgroundImage = `url("${mainImage.src}")`;
    }

    // Determine mode based on class
    if (spotlight.classList.contains('top')) {
      mode = 'top';
      top = '-20%';
      bottom = 0;
    } else if (spotlight.classList.contains('bottom')) {
      mode = 'bottom-only';
      top = 0;
      bottom = '20%';
    } else {
      mode = 'middle';
      top = 0;
      bottom = 0;
    }

    // Add scrollex
    addScrollex(spotlight, {
      mode: mode,
      top: top,
      bottom: bottom,
      initialize: function() { spotlight.classList.add('inactive'); },
      terminate: function() { spotlight.classList.remove('inactive'); },
      enter: function() { spotlight.classList.remove('inactive'); },
      // leave: function() { spotlight.classList.add('inactive'); },
    });
  };

  const off = function() {
    // Clear spotlight's background
    spotlight.style.backgroundImage = '';

    // Remove scrollex
    removeScrollex(spotlight);
  };

  // Implement breakpoint handling
  // breakpoints.on('<=medium', off);
  // breakpoints.on('>medium', on);
});

// Note: The breakpoint handling needs a custom implementation
