$(document).ready(function() {
	$('.nav__burger').click(function(event) {
		$('.nav__burger,.nav__menu').toggleClass('active');
		$('body').toggleClass('lock');
	});
});

 const prev = document.getElementById('btn-prev'),
	  next = document.getElementById('btn-next'),
	  slides = document.querySelectorAll('.slide'),
	  dots = document.querySelectorAll('.dot'),
	  slidesWrapper = document.querySelectorAll('.slider__wrapper');

let index = 0;

const activeSlide = n => {
	for(slide of slides) {
		slide.classList.remove('active');
	}
	slides[n].classList.add('active');
}

const activeDot = n => {
	for(dot of dots) {
		dot.classList.remove('active');
	}
	dots[n].classList.add('active');
}

const prepareCurrentSlide = ind => {
	activeSlide(ind);
	activeDot(ind);
}
const nextSlide = () => {
	if(index == slides.length - 1) {
		index = 0;
		prepareCurrentSlide(index);
	} else {
		index++;
		prepareCurrentSlide(index);
	}
}




const prevSlide = () => {
	if(index == 0) {
		index = slides.length - 1;
		prepareCurrentSlide(index);
	} else {
		index--;
		prepareCurrentSlide(index);
	}
}

dots.forEach((item, indexDot) =>{
	item.addEventListener('click',() =>{
		index = indexDot;
		prepareCurrentSlide(index);
	
	})
})


/*prev.addEventListener('click', prevSlide);*/



function findVideos() {
    let videos = document.querySelectorAll('.video');

    for (let i = 0; i < videos.length; i++) {
        setupVideo(videos[i]);
    }
}

function setupVideo(video) {
    let link = video.querySelector('.video__link');
    let media = video.querySelector('.video__media');
    let button = video.querySelector('.video__button');
    let id = parseMediaURL(media);

    video.addEventListener('click', () => {
        let iframe = createIframe(id);

        link.remove();
        button.remove();
        video.appendChild(iframe);
    });

    link.removeAttribute('href');
    video.classList.add('video--enabled');
}

function parseMediaURL(media) {
    let regexp = /https:\/\/i\.ytimg\.com\/vi\/([a-zA-Z0-9_-]+)\/maxresdefault\.jpg/i;
    let url = media.src;
    let match = url.match(regexp);

    return match[1];
}

function createIframe(id) {
    let iframe = document.createElement('iframe');

    iframe.setAttribute('allowfullscreen', '');
    iframe.setAttribute('allow', 'autoplay');
    iframe.setAttribute('src', generateURL(id));
    iframe.classList.add('video__media');

    return iframe;
}

function generateURL(id) {
    let query = '?rel=0&showinfo=0&autoplay=1';

    return 'https://www.youtube.com/embed/' + id + query;
}

findVideos();

$(document).ready(function() {
	$('.footer__menu_title_name').click(function(event) {
		$(this).siblings().toggleClass("activited");
	});
});
 




                                                                                                             /*POPUP*/
const popupLinks = document.querySelectorAll('.popup-link');
const body = document.querySelector('body');
const lockPadding = document.querySelectorAll(".lock-padding");

let unlock = true;

const timeout = 800; 

if (popupLinks.length > 0) {
	for (let index = 0; index < popupLinks.length; index++) {
		const popupLink = popupLinks[index];
		popupLink.addEventListener("click", function(e) {
			const popupName = popupLink.getAttribute('href').replace('#', '');
			const curentPopup = document.getElementById(popupName);
			popupOpen(curentPopup);
			e.preventDefault();
		});
	}
}

const popupCloseIcon = document.querySelectorAll('.close-popup');
if (popupCloseIcon.length > 0) {
	for (let index = 0; index < popupCloseIcon.length; index++) {
		const el = popupCloseIcon[index];
		el.addEventListener('click', function(e){
			popupClose(el.closest('.popup'));
			e.preventDefault();
		});
	}
}

function popupOpen(curentPopup) {
	if (curentPopup && unlock) {
		const popupActive = document.querySelector('.popup.open');
		if (popupActive) {
			popupClose(popupActive, false);
		} else {
			/*bodyLock();*/
		}
		curentPopup.classList.add('open');
		curentPopup.addEventListener("click", function (e) {
			if (!e.target.closest('.popup__content')) {
				popupClose(e.target.closest('.popup'));
			}
		});
	}
}

function popupClose(popupActive, doUnlock = true) {
	if (unlock) {
		popupActive.classList.remove('open');
		if (doUnlock) {
			/*bodyUnlock();*/
		}
	}
}
/*
function bodyLock() {
	const lockPaddingValue = window.innerWidth - document.querySelector('.wrapper').offsetWidth
 + 'px';
	if (lockPadding.length>0){
		for (let index = 0; index < lockPadding.length; index++) {
			const el = lockPadding[index];
			el.style.paddingRight = lockPaddingValue;
		}
	}
	body.style.paddingRight = lockPaddingValue;
	body.classList.add('lock');

	unlock = false;
	setTimeout(function(){
		unlock = true;
	}, timeout);
}

function bodyUnlock() {
	setTimeout(function (){
		if (lockPadding.length>0) {
			for (let index = 0; index < lockPadding.length; index++) {
				const el = lockPadding[index];
				el.style.paddingRight = '0px';
			}
		}
		body.style.paddingRight = '0px';
		body.classList.remove('lock');
	}, timeout);

	unlock = false;
	setTimeout(function () {
		unlock = true;
	}, timeout);
}*/

document.addEventListener('keydown', function(e) {
	if (e.which === 27) {
		const popupActive = document.querySelector('.popup.open');
		popupClose(popupActive);
	}
});





/* 
$(document).ready(function() {
	$('.popup-link').click(function(event) {
		$('.popup-link,.tabs__block').addClass('actived');
	
	});
});
                                                                                                             */
                                                                                                             // tabs

/*$('.popup-link').each(function() {
  var $this = $(this);
  var href = $this.attr('href');
  if (href.indexOf('#') === -1) {
     $this.attr('href', $this.attr('href') + '#tab_01');
  }
});*/

$('.popup-link').click(function() {
location.hash = 'tab_02';
/*$('.popup-link').css({ "color": "red",
	   "text-decoration": "underline" });*/
});


$('.tabs__item').click(function() {
$('.this').css({"text-decoration": "underline"})
});