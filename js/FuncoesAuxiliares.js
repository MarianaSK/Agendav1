function mouseoverPass() {
  var obj = document.getElementById('senha');
  obj.type = "text";
  
}
function mouseoutPass() {
  var obj = document.getElementById('senha');
  obj.type = "password";
}
    
function Verifica(){
    val1=document.getElementById("senha").value;
    val2=document.getElementById("senhaEscolhida").value;
    if(val1!=val2){
        document.getElementById("senha").style.borderColor="#f00";
        document.getElementById("senhaEscolhida").style.borderColor="#f00";
        alert("As senhas são diferentes");
    }
    else{
        document.getElementById("senha").style.borderColor="#000";
        document.getElementById("senhaEscolhida").style.borderColor="#000";
    }
}