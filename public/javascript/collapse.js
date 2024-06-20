var buttons = document.getElementsByClassName("collapse"); //classe porque id nao retorna Array[]
var i;

for (i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", function() {
        
        this.classList.toggle("active"); //colocar estilo na classe active, ela acrescenta no meu elemento a partir do JS
        
        var content = this.nextElementSibling; //vai pegar o proximo irmão do botão, ou seja, o proximo elemento
        
        if (content.style.display === "block"){ //se no display da class collapse estiver === block ele está aparente
            content.style.display = "none";//se nao, ele exibe
        }else{
            content.style.display = "block";//se nao, ele deixa block
        }
    });
}