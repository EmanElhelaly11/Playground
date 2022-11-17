var  open_drop_p=document.querySelectorAll(".con-box-drop"),
drop_p=document.querySelectorAll('.con-box-drop-p');
for(var x =0;x<open_drop_p.length;x++){
    open_drop_p[x].onclick=function(){
        this.children[1].classList.toggle("open")
    }
}