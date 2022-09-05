var section = {
	about: null,
	contact: null
}
var container = {
	counted:false,
	counterValues: []
}



const delay_offset = 100; // 100 pixels into the section before animation
let dddd = 0;


const scrollToAbout = () => {
	const position = section.about.offsetTop;
	window.scrollTo(0,position);
}

const scrollToContact = () => {
	const position = section.contact.offsetTop;
	window.scrollTo(0,position);
}

const scrollToGallery = () => {}


window.onload = () => {


	container.loaderLine = document.querySelector('.loader__line');
	container.loader  = document.querySelector('.loader');
	container.banner = document.querySelector('#banner');
	container.modal = document.querySelector('.custom-modal-container');
	container.modalBtn = document.querySelector('.custom-modal .btn-close');
	container.modalBody = document.querySelector('.modal-body');
	container.form = document.querySelector('form');
	section.about = document.querySelector('#section__about_us');
	section.contact = document.querySelector('#section__contact_us');

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

	},35)


	const init = (e) => {
		container.animatedElements = document.querySelectorAll(".hidden");
		container.animatedElements.forEach((item) => {		
			item.done = false;
		});
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
				item.classList.add("animate__fadeInUp");
				// item.classList.add(animationType);
				if(item.classList.contains('counter_container')){
					startCount();
				}
			}

			// let target = item.offsetTop
			// let position = window.innerHeight + window.pageYOffset

			// if(position >= target && position <= target + 100 && !item.done){
			// 	const animationType = item.getAttribute('animation-type');
			// 	item.classList.remove('hidden');
			// 	item.classList.add("animate__fadeInUp");
			// 	// item.classList.add(animationType);
			// 	if(item.classList.contains('counter_container')){
			// 		startCount();
			// 	}
			// 	item.done = true;
			// }


		});
	}


	container.form.onsubmit = (e) => {
		e.preventDefault();
		const button = document.querySelector("button[type='submit']");
		const spinner = button.children[0];
		const buttonText = button.children[1]
		spinner.hidden = false;
		buttonText.hidden = true;

		container.modalBtn.onclick = ()=> {
			container.modal.classList.add('modal-hidden');
		}

		const showModal = (header,message) => {
			spinner.hidden = true;
			buttonText.hidden = false;
			document.querySelector('#modal-header-text').innerText = header;
			container.modalBody.innerText = message;
			container.modal.classList.remove('modal-hidden');
		} 


		const formdata = new FormData(container.form); 
		const url = "contact.php";
		const options = {
			method: 'post',
			body: formdata,
			mode: 'cors',
			credentials: 'same-origin',
		};

		fetch(url,options)
			.then( response => response.json())
			.then( data => {
				showModal(data.header,data.message);
			})
			.catch( error => {
				showModal("Error","No internet connection");
			});



	}

	window.onscroll = (e) => check(e);
	window.onresize = (e) => init(e);
	init();	

}


