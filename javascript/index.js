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
