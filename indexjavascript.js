var imagenes = ['imagenesindex/brasil.jpg', 'imagenesindex/canada.jpg', 'imagenesindex/japon.jpg','imagenesindex/australia.jpg'],
cont = 0;

function carrousel(contenedor){

    contenedor.addEventListener('click', e=>{
        let atras = contenedor.querySelector('.atras'),
        adelante = contenedor.querySelector('.adelante'),
        img = contenedor.querySelector('img'),
        targt = e.target;

        if(targt == atras){
            if(cont>0){
                img.src = imagenes[cont - 1];
                cont--;
            }
            else{
                img.src = imagenes[imagenes.length -1];
                cont = imagenes.length -1;
            }

        }else if(targt == adelante){
            if(cont < imagenes.length -1){
                img.src = imagenes[cont+1];
                cont ++;
            }
            else{
                img.src = imagenes[0];
                cont= 0;
            }
        }
    });
}

document.addEventListener('DOMContentLoaded', () =>{
    let contenedor = document.querySelector('.contenedor');
    
    carrousel(contenedor);
});
