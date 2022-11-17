var open =document.querySelector(".menu i"),
    html=document.documentElement,
    close=document.querySelector(".close"),
    full_nav=document.querySelector(".full-nav"),
    con_full_nav=document.querySelector(".con-nav-full"),
    full_loading=document.querySelector(".full-loading"),
    con_button=document.querySelector(".con-button"),
    full_login=document.querySelector(".full-log"),
    full_sign=document.querySelector(".full-sign"),
    button_to_top=document.querySelector(".to-top"),
    close_sign=document.querySelector(".full-sign .close"),
    close_login=document.querySelector(".full-log .close");
   

    open.onclick=function(){
        full_nav.style.opacity='1';
        full_nav.style.visibility="visible";
        con_full_nav.style.left="0"
    }
    close.onclick=function(){
        full_nav.style.opacity='0';
        full_nav.style.visibility="hidden";
        con_full_nav.style.left="-100%"
    }
window.onscroll=function(){
    full_nav.style.opacity='0';
    full_nav.style.visibility="hidden";
    con_full_nav.style.left="-100%";
    if(window.scrollY>250){
        button_to_top.style.visibility="visible";
        button_to_top.style.opacity="1";
        button_to_top.style.overflow="initial"
    }
    else{
        button_to_top.style.visibility="hidden";
        button_to_top.style.opacity="0"
       
    }
}
window.onload=function(){
    full_loading.style.opacity="0";
    full_loading.style.visibility="hidden"
}


//to top 
button_to_top.onclick=function(){
    window.scrollTo(0,0);
}
var login=con_button.children[0],
sign=con_button.children[1];
//open login form 
login.onclick=function(){
    full_login.style.opacity='1';
        full_login.style.visibility="visible";
        html.style.overflowY="hidden"
      
}
sign.onclick=function(){
    full_sign.style.opacity='1';
        full_sign.style.visibility="visible";
        html.style.overflowY="hidden"
      
}
close_login.onclick=function(){
    full_login.style.opacity='0';
    full_login.style.visibility="hidden";
    html.style.overflowY="visible"
    
}
close_sign.onclick=function(){
    full_sign.style.opacity='0';
    full_sign.style.visibility="hidden";
    html.style.overflowY="visible"
    
}