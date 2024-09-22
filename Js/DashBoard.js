/*
* !DropDown Sidebare 
*/
const DropdownListeP = document.querySelector(".DropdownListeP");
const ListeDropdownListeP = document.querySelector(".ListeDropdownListeP");
const angleRight = document.getElementById("angleRight").firstElementChild;
const accountDrop =document.querySelector(" .accountDrop");
const AccountDropdown =document.getElementById("AccountDropdown");
console.log(AccountDropdown);
// console.log(DropdownListeP)
DropdownListeP.addEventListener("click",()=>{
        ListeDropdownListeP.classList.toggle("ListeDropdownListeP");
        ListeDropdownListeP.classList.toggle("active");
        angleRight.classList.toggle("rotate_angle");
        console.log("SSi salah ");
})

AccountDropdown.addEventListener("click",()=>{
        accountDrop.classList.toggle("accountDrop");
        accountDrop.classList.toggle("accountShow");
        console.log("Hi a bro");
})