
const form= document.querySelector(".chat form"),
continueBtn= form.querySelector(".button input");

form.onsubmit = (e)=>{
	e.preventDefault();
}
continueBtn.onclick=()=>{
    console.log("hello");
}