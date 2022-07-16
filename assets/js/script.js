var section = {
	about: null,
	contact: null
}
var container = {
	counted:false,
	counterValues: []
}

const delay_offset = 100; // 100 pixels into the section before animation



const scrollToAbout = () => {
	const position = section.about.offsetTop;
	window.scrollTo(0,position);
	console.log("scrolled to",position);
}

const scrollToContact = () => {
	const position = section.contact.offsetTop;
	window.scrollTo(0,position);
	console.log("scrolled to",position);
}

const scrollToGallery = () => {}






window.onload = () => {


	container.loaderLine = document.querySelector('.loader__line');
	container.loader  = document.querySelector('.loader');
	container.banner = document.querySelector('#banner');


	let loaderCount = 1;
	let timer = 0;
	timer = setInterval( () => {
		container.loaderLine.style.width = loaderCount+"%";
		if(loaderCount >= 100){
			// container.loader.hidden = true;
			container.loader.classList.add("animate__zoomOut");
			container.banner.classList.add("animate__fadeInLeft");
			setTimeout(() => { container.loader.hidden = true;},500);
			clearInterval(timer);
		}
		loaderCount+= Math.random() + 1;

	},50)


	section.about = document.querySelector('#section__about_us');
	section.contact = document.querySelector('#section__contact_us');

	const init = (e) => {
		container.animatedElements = document.querySelectorAll(".hidden");
		container.counters = document.querySelectorAll('.counter');
		window.a = container.animatedElements;
	}

	const startCount = () => {
		if(container.counted)
			return;
		container.counted = true;
		container.counters.forEach((counter) => {
			const value = Number.parseInt(counter.getAttribute("data-value"));
			container.counterValues.push(value);
			counter.innerHTML = Math.floor(value/2);
		})

		console.log(container.counterValues);

		let count1 = Math.floor(container.counterValues[0]/2);
		let count2 = Math.floor(container.counterValues[1]/2);
		let count3 = Math.floor(container.counterValues[2]/2);

		let timer1 = 0;
		let timer2 = 0;
		let timer3 = 0;

		timer1 = setInterval(()=> {
			const value = container.counterValues[0];
			if(count1 >= value){
				clearInterval(timer1);
			}
			container.counters[0].innerHTML = count1
			count1++;
		},20)

		timer2 = setInterval(()=> {
			const value = container.counterValues[1];
			if(count2 >= value){
				clearInterval(timer2);
			}
			container.counters[1].innerHTML = count2
			count2++;
		},20)

		timer3 = setInterval(()=> {
			const value = container.counterValues[2];
			if(count3 >= value){
				clearInterval(timer3);
			}
			container.counters[2].innerHTML = count3
			count3++;
		},20)

	}

	const check = (e) => {
		container.animatedElements.forEach((item) => {			
			if(window.pageYOffset + window.innerHeight >= item.offsetTop + delay_offset){
				const animationType = item.getAttribute('animation-type');
				item.classList.remove('hidden');
				item.classList.add(animationType);
				if(item.classList.contains('counter_container')){
					startCount();
				}
			}

			// const topPos = item.getBoundingClientRect().top;
			// if(topPos - window.innerHeight - delay_offset <= 0){
			// 	const animationType = item.getAttribute('animation-type');
			// 	// console.log(animationType);
			// 	item.hidden = false;
			// 	item.classList.add(animationType);
			// }
		});
	}

	window.onscroll = (e) => check(e);
	window.onresize = (e) => init(e);
	init();
}
