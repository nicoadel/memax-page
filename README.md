
Would do's:

Fullscreen mobile navigation when opened
Alt Tags in img's
Swiper re-init on rescale


Techs Used:
composer, yarn, node, scss, blade, php, swiperJS, hamburgers


Small Guide to where important file's are stored 

resources/views:            here is the PHP code located
resources/views/modules:    here are my custom modules located
  - main-slider.blade.php ->    the hero module
  - main-videos.blade.php ->    the four video accord
  - season-slider.blade.php ->  the last swiper on the page

resources/views/layouts/app.blade.php   -> my three modules are getting @included here
resources/functions.php                 -> I am enqueuing both the CSS and JS of swiperJS here

resources/assets/scripts/common.js -> where the custom JS located. I only initialize the swiper here.

resources/assets/styles/common/_variable.scss -> Where the theme-colours/font-sizes/etc.. are defined. 
resources/assets/styles/common/_global.scss   -> Where the theme-colours/font-sizes/etc get applied. Also commonly used elements are stored there aswell. As example the video-cards or buttons.

resources/assets/styles/modules   ->  Here are the three main .scss files for the modules.  
