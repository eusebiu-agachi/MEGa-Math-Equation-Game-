let i = 0;
let placeholder = "";
const txt = "Cauti pe cineva?";
const speed = 100;

function type(){
	placeholder = placeholder + txt.charAt(i);
	document.getElementById("text-id").setAttribute("placeholder", placeholder);
	i++;
	setTimeout(type,speed);
}
type();

document.getElementById("btn-login").addEventListener("click", function(){
	document.querySelector(".popup").style.display = "flex";
	document.querySelector(".navbar").style.display = "none";
})

document.querySelector(".close").addEventListener("click", function(){
	document.querySelector(".popup").style.display ="none";
	document.querySelector(".popup-register").style.display ="none";
	document.querySelector(".navbar").style.display = "flex";
})

document.querySelector(".close-register").addEventListener("click", function(){
	document.querySelector(".popup-register").style.display ="none";
	document.querySelector(".navbar").style.display = "flex";
})
document.getElementById("left-register").addEventListener("click", function(){
	document.querySelector(".popup-register").style.display="flex";
	document.querySelector(".popup").style.display="none";
})
document.getElementById("left-login").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "flex";
    document.querySelector(".popup-register").style.display="none";
})
document.getElementById("btn-register").addEventListener("click", function(){
	document.querySelector(".popup-register").style.display="flex";
	document.querySelector(".navbar").style.display="none";
})