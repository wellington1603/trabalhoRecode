function exibir_categoria(categoria){
    //alert(categoria)

    let elementos = document.getElementsByClassName('item')
    console.log(elementos);
    for(var i=0; i<elementos.length; i++){
        console.log(elementos[i].id);
        if(categoria == elementos[i].id)
            elementos[i].style="display:block";
        else
            elementos[i].style = "display:none";

    }
}
let exibir_todos = () => {
    let elementos = document.getElementsByClassName('item')
    for(var i=0; i<elementos.length; i++){
        elementos[i].style="display:block";
        
    }
};

let destaque = (imagem) => {
    console.log(imagem);
    if(imagem.width == 350)
        imagem.width = 200;
    else
        imagem.width = 350;
};

let destacar = () =>{
    console.log('está dentro');
}