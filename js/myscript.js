const box = document.getElementById("box");
const img = document.querySelector("#tenisC");

box.addEventListener("mousemove", (e) =>{
	const x = e.clientX - e.target.offsetLeft;
	const y = e.clientY - e.target.offsetTop; 
	
	console.log(x, y);
	
	img.style.transformOrigin = `${x}px ${y}px`;
	img.style.transform = "scale(2)";
});
box.addEventListener("mouseleave", () =>{
	img.style.transformOrigin = "center center";
	img.style.transform= "scale(1)";
})