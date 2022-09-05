window.onload = () => {

	const images = document.querySelectorAll('.gallery-image');
	const modalImage = document.querySelector('.modal-image');
	const modalDisplay = document.querySelector('.display-modal');
	const modalCloseBtn = document.querySelector('span.close');

	const displayImage = (src) => {
		modalImage.src = src;
		modalDisplay.classList.remove('hidden');
		modalDisplay.classList.add('animate__fadeIn');
	}

	images.forEach((image) => {
		image.addEventListener('click',(event) => {
			displayImage(image.src);
		});
	});

	const closeModalDisplay = (event) => {
		modalDisplay.classList.add('hidden');
		modalDisplay.classList.remove('animate__fadeIn');
	}

	modalCloseBtn.addEventListener('click',closeModalDisplay);

	modalDisplay.addEventListener('click', (e) => {
		closeModalDisplay(e)
	});
	
	document.addEventListener('keyup', (e) => {
		if (e.key === "Escape")
			closeModalDisplay(e)
	});
};