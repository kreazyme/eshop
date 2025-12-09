document.addEventListener("DOMContentLoaded", function () {
	const container = document.getElementById("screenshotContainer");
	const image = document.getElementById("scrollImage");

	if (!container || !image) return;

	let scrollInterval;
	let currentTop = 0;
	const speed = 1; // pixels per step
	const delay = 5; // milliseconds per step

	container.addEventListener("mouseenter", function () {
		const containerHeight = container.offsetHeight;
		const imageHeight = image.offsetHeight;
		const maxScroll = imageHeight - containerHeight;

		scrollInterval = setInterval(() => {
			if (currentTop > -maxScroll) {
				currentTop -= speed;
				image.style.top = currentTop + "px";
			} else {
				clearInterval(scrollInterval);
			}
		}, delay);
	});

	container.addEventListener("mouseleave", function () {
		clearInterval(scrollInterval);
		currentTop = 0;
		image.style.top = "0px";
	});
});