btn = document.getElementById("submit")
username = document.getElementById("username")
password = document.getElementById("password")
btn.addEventListener('click', (e)=>{
    e.preventDefault()
    username = username.value
    password = password.value
    if(username == 'administrateur' && password== '12345'){
        location.href = "quality.php";
    }else{
        location.href = "index.php"
    }
})
function toggle(){
    const menu = document.querySelector(".menu")
    const menu_btn = document.querySelector(".menu_btn")
    const nv_btn = document.querySelector("nav img")
    menu.style.transition = "left 0.5s ease";
    menu.style.left = parseInt(menu.style.left) != 0 ?  "0px" : "-350px"
    nv_btn.setAttribute("src", nv_btn.getAttribute("src") == "icons/pepicons-pop_menu.png" ?  "icons/fluent-mdl2_cancel.png" : "icons/pepicons-pop_menu.png")
}
function cancel_fun(){
    cancel = document.querySelector(".fa-times");
    cancel.parentElement.style.display = "none";
}


//////////////////////NEW///////////////////////////
