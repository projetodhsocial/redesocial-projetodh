const form = document.getElementById("form-group");
const select = document.getElementById("exampleFormControlSelect1");
const inputNecessidade = document.getElementById("exampleFormControlInput1");
const textArea = document.getElementById("exampleFormControlTextarea1");
const botao = document.getElementById("botao");
const transparente = document.getElementById("transparente-background");
const containerModal = document.getElementById("container-modal");
const btnOk = document.getElementById("ok");
let objValue = {
    form: null,
    select: null,
    textArea: null,

};

function openModal(e){ 
    e.preventDefault();
    transparente.style.display = "block";
    containerModal.style.display = "flex"; 

    objValue = {
        form: form.value, 
        select: select.value,
        textArea: textArea.value,
    
    };
console.log(objValue);
}

function closeModal(e){
e.preventDefault();
transparente.style.display = "none";
containerModal.style.display = "none";

}

botao.addEventListener("click", openModal);
btnOk.addEventListener("click", closeModal);






