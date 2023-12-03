var typed = new Typed('.strx', {
	strings: ["frontend developer", "backend learner"],
	typeSpeed: 150, //yozish tezligi
	startDelay: 0, //boshlash vaqti
	backSpeed: 3000, //o'chirish tezligi
	backDelay: 1200, //o'chirishni kutish
	loop: true, //yozishni takrorlashni tasdiqlash
	loopCount: Infinity, //yozishni takrorlash
	fadeOut: true, //o'chirish turini tasdiqlash
    fadeOutClass: 'typed-fade-out', //o'chirish turi
	showCursor: true, //kursor turini tasdiqlash
	cursorChar:`<span id="kursor">♠|♠</span>`, //kursor turi
});