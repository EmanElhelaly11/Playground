var slider=document.querySelector(".slider-ground"),
arr_image7=["img/yoga.jpg","img/yoga2.jpg","img/yoga3.jpg"],
    next=document.querySelector(".slider-ground .next"),
    prev=document.querySelector(".slider-ground .prev"),
    x=0;
    slider.children[0].children[0].src=arr_image7[x]
    next.onclick=function(){
      
        if(x<arr_image7.length-1){
            x++
            }
            else{
            x=0
            }
            slider.children[0].children[0].src=arr_image7[x]
    }

    prev.onclick=function(){
        
        if(x<arr_image.length && x>0){
            x--
            }
            else{
           x=arr_image.length-1;
            }
            slider.children[0].children[0].src=arr_image7[x]
    }