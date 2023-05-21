

window.addEventListener("load",()=>{
	const input = document.getElementById("upload");
    const filewrapper = document.getElementById("filewrapper");

    input.addEventListener("change",(e)=>{
        let fileName = e.target.files[0].name;
        let filetype = e.target.value.split(".").pop();
        fileshow(fileName, filetype);
    })
    const fileshow=(fileName, filetype)=>{
        const showfileboxElem = document.createElement("div");
        showfileboxElem.classList.add("showfilebox");
        const leftElem = document.createElement("div");
        leftElem.classList.add("left");
        const fileTypeElem = document.createElement("span");
        fileTypeElem.classList.add("filetype");
        fileTypeElem.innerHTML = filetype;
        leftElem.append(fileTypeElem);
        const filetitleElem = document.createElement("h3");
        filetitleElem.innerHTML = fileName;
        showfileboxElem.append(leftElem);
        const rightElem = document.createElement("div");
        rightElem.classList.add("right");
        showfileboxElem.append(rightElem);
        const crossElem = document.createElement("span");
        crossElem.innerHTML="&#215";
        rightElem.append(crossElem);

        filewrapper.append(showfileboxElem);
    }
})


let name = document.querySelector("#name");

let subname = document.querySelector("#subname");

let email = document.querySelector("#email");

let tel = document.querySelector("#tel");

let message = document.querySelector("#message");


let input = document.querySelector('input');


let error = document.querySelector('small');


let form = document.querySelector('#contact');



let infoName = document.querySelector('.name');

let infoSubname = document.querySelector('.subname');

let infoEmail = document.querySelector('.email');

let infoTel = document.querySelector('.tel');

let infoMessage= document.querySelector('.message');

let button = document.querySelector('button');

let verifMail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

let instructions = document.querySelector('#instructions');

let formulaire = document.querySelector('.formulaire');

let nameIsValid     = false;
let subNameIsValid  = false;
let emailIsValid    = false;
let telIsValid      = false;
let messageIsValid  = false;

name.addEventListener('keyup',()=>{
    if(name.validity.valueMissing){
        error.style.display = "inline";
        infoName.textContent = "Le nom est obligatoire."
        name.style.border= "2px solid #c23616"
    }else if(!isNaN(name.value) || name.value.trim==""){
        error.style.display = "inline";
        name.style.border= "2px solid #c23616"
        infoName.textContent = "Le nom ne peut être en chiffres ou vide."
    }else if(name.value.length<2){
        error.style.display = "inline";
        name.style.border= "2px solid #c23616"
        infoName.textContent = "Le nom doit contenir au moins 2 caractères"
    }else{
        name.style.border= "2px solid #7bed9f"
        error.style.display = "none";
        nameIsValid = true;
    }
})


subname.addEventListener('keyup',()=>{
    if(subname.validity.valueMissing){
        //e.preventDefault;
        error.style.display = "inline";
        infoSubname.textContent = "Le prénom est obligatoire."
        subname.style.border= "2px solid #c23616"
    }else if(!isNaN(subname.value) || subname.value.trim==""){
        error.style.display = "inline";
        subname.style.border= "2px solid #c23616"
        infoSubname.textContent = "Le prénom ne peut être en chiffres ou vide."
    }else if(subname.value.length<2){
        error.style.display = "inline";
        subname.style.border= "2px solid #c23616"
        infoSubname.textContent = "Le prénom doit contenir au moins 2 caractères"
    }else{
        subname.style.border= "2px solid #7bed9f"
        error.style.display = "none";
        subNameIsValid = true;
    }
})


email.addEventListener('keyup',()=>{
    if(email.validity.valueMissing){
        error.style.display = "inline";
        infoEmail.textContent = "Le mail est obligatoire."
        email.style.border= "2px solid #c23616"
    }else if(verifMail.test(email.value) ==  false){
        error.style.display = "inline";
        email.style.border= "2px solid #c23616"
        infoEmail.textContent = "Format du e-mail est invalide."

    }else{
        email.style.border= "2px solid #7bed9f"
        error.style.display = "none";
        infoEmail.textContent = '';
        emailIsValid = true;
    }
})

tel.addEventListener('keyup',()=>{
    if(tel.validity.valueMissing){
        error.style.display = "inline";
        infoTel.textContent = "Le tel est obligatoire."
        tel.style.border= "2px solid #c23616"
    }else if(isNaN(tel.value) || tel.value==""){
        error.style.display = "inline";
        tel.style.border= "2px solid #c23616"
        infoTel.textContent = "Le format du tel est invalide."
    }else if(tel.value.length<10 || tel.value.length>10){
        error.style.display = "inline";
        tel.style.border= "2px solid #c23616"
        infoTel.textContent = "Le tel doit contenir 10 chiffres."
    }else{
        tel.style.border= "2px solid #7bed9f"
        error.style.display = "none";
        telIsValid = true;
    } 
})

message.addEventListener('keyup',()=>{
    if(message.validity.valueMissing){
        error.style.display = "inline";
        infoMessage.textContent = "Le message est obligatoire."
        message.style.border= "2px solid #c23616"
    }else if(message.value==""){
        message.style.border= "2px solid #c23616"
        error.style.display = "inline";
        infoMessage.textContent = "Le message ne peut être vide."
    }else if(message.value.length < 10){
        error.style.display = "inline";
        message.style.border= "2px solid #c23616"
        infoMessage.textContent = "Le message doit contenir 10 caractères minimum."
    }else{
        tel.style.border= "2px solid #7bed9f"
        error.style.display = "none";
        messageIsValid = true;
    } 
})





form.addEventListener('submit',formSend);

function formSend(e){
    e.preventDefault();
    if(nameIsValid && subNameIsValid && emailIsValid && telIsValid && messageIsValid) {
      instructions.textContent = "Message envoyé !";
      instructions.style.textAlign = 'center';
      instructions.style.fontWeigth = '900';
      instructions.style.color = "white";
      instructions.className = "instructions send"
      formulaire.style.display= "none"
    }
    else {
      alert('Remplissez le formulaire correctement.');
    }
}


