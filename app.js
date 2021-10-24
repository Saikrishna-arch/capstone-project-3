function start(){
    var ajax = new XMLHttpRequest()
    
    ajax.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
    alert(this.responseText)
    window.location.href = "game.html"
    }
    }
    ajax.open('GET','message.txt',true)
    ajax.send()
    
    }