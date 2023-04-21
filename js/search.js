var number=['mov21','mov4','mov2','mov5','mov31', 'mov32', 'mov33', 'mov34', 'mov7','mov35', 'mov36', 'mov37', 'mov38', 'movie_11', 'movie_12', 'movie_13']
var keys=document.getElementById('key')
var but=document.getElementById('sb')

function searchfun(){
    if(number.indexOf(Number (keys.value))==-1){
        document.write(keys.value +"<b>Not found</b>")
    }
    else{
        document.write("<b> Elements found "+number.indexOf(Number (keys.value))+"Position</b>")
    }
}

but=addEventListener('click',searchfun)