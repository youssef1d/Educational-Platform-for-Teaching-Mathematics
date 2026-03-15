
 
let h1 =document.getElementById('name');
let i= 0
let text = " | يوسف خالد"

let inter = setInterval(
    function slid(){
    h1.innerHTML+= text[i] 
    i++
    if(i==13){
        h1.innerHTML=''
        i=0
    }
}
,500)


// animation on scroll
let ser = document.querySelector('.serv');
let card1 = document.getElementById('card1');
let card2 = document.getElementById('card2');
let card3 = document.getElementById('card3');

window.onscroll = function () {
    if (window.scrollY >= ser.offsetTop -400 ){ 
        console.log('done');
        card1.style.opacity = "1";
        card2.style.opacity = "1";
        card3.style.opacity = "1";   
    }
    else if (window.scrollY <= ser.offsetTop -400){
        card1.style.opacity = "0";
        card2.style.opacity = "0";
        card3.style.opacity = "0"; 
    }
}

// resize header 
let header = document.getElementById('header');
window.onscroll = function ev(){ 
    if(scrollY >= 40){
        header.style.height='60px';
        header.style.transition='0.3s';
    }
    else if (scrollY <= 40){
        header.style.height='100px';
    }
}









 