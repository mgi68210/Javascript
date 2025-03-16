


//selection les elements
let form=document.getElementById('form');
let inputname=document.getElementById('username')
let inputemail=document.getElementById('email')
let inputpassword=document.getElementById('password')
let inputpassword2=document.getElementById('password2')
//creer l evement submit et empecher l actualisation de la page

form.addEventListener("submit",e=>{
	e.preventDefault();
	ConfirmationInp();
})

//creation d une focntion d'erreur et fonction de success qui prend 2 parameteres
//l element html et le message 
///fonction d erreur
function ValidationErreur(element,message){
	let inputControl=element.parentElement;
	let erreurDisplay=inputControl.querySelector(".error");
    erreurDisplay.innerText=message;
    inputControl.classList.add("error");
	inputControl.classList.remove("success");
}

function ValidationSuccess(element){
let inputControl=element.parentElement;
let erreurDisplay=inputControl.querySelector(".error");
erreurDisplay.innerText='';
inputControl.classList.remove('error');
inputControl.classList.add("success")
}
//regex
function isValidEmail(email){
	let chaine=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return chaine.test(String(email).toLowerCase());
}

function ConfirmationInp(){
	//.trim()fonction pour supprimer les espaces vides de fin (le cas échéant) au début et à la fin des valeurs.
	let usernameValue=inputname.value.trim();
	let emailValue=inputemail.value.trim();
	let passwordValue=inputpassword.value.trim();
	let password2Value=inputpassword.value.trim();
    //verification username
	if(usernameValue===""){
		ValidationErreur(inputname,'veuillez saisir un username!')
	}else{
		ValidationSuccess(inputname)
	}
	//verification email

	if(emailValue===""){
		ValidationErreur(inputemail,'veuillez saisir un email!')
	}else if(!isValidEmail(emailValue)){
		ValidationErreur(inputemail,'veuillez saisir un email valid!');
	}else{
		ValidationSuccess(inputemail);
	}
	//verification motdepass  
	if(passwordValue==="" && passwordValue.length<8){
		ValidationErreur(inputpassword,'veuillez saisir un password valid ou password qui contient plu de 8 caracteres')
	}else{
		ValidationSuccess(inputpassword)
	}

	if(password2Value==""){
	ValidationErreur(inputpassword2,'veuillez saisir votre Mot de passe!');

	}else if(passwordValue!=password2Value){
		ValidationErreur(inputpassword2,"veuillez saisir le meme Mot de passe!");
	}else{
		ValidationSuccess(inputpassword2);
	}

}