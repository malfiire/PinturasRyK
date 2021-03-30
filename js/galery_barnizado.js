
//con esta función comprabamos que cargue primero el documento y luego ejecute la función
document.addEventListener('DOMContentLoaded', function (){

    let imagenes= [
        {img: '../images/barnizado/barnizado1.jpg'},
        {img: '../images/barnizado/barnizado2.jpg'}
    ]
    //ACUERDATE QUE EN JS NO HACE FALTA PONER PUNTO Y COMA XD

    let contador = 0 //para controlar la imagen la que estamos
    const contenedor = document.querySelector('.slideshow')
    const overlay = document.querySelector('.overlay')

    //nos devuelve todos los nodos img dentro de la clase .galeriatrabajos
    const images_galery = document.querySelectorAll('.galeriaservicios img')
    const img_slideshow = document.querySelector('.slideshow img')


    contenedor.addEventListener('click', function (event){

        //hacemos referencia a los botones de atras y de adelante
        let atras = contenedor.querySelector('.atras'),
            delante = contenedor.querySelector('.delante'),
            img = contenedor.querySelector('img'),
            ttarget = event.target
        if(ttarget == atras){//identifica si el target es el boton de atras
            if(contador>0){
                img.src = imagenes[contador - 1].img //le asignamos la foto mediante el array de imagenes
                contador-- //par que vaya hacia atrás
            }else{// en este caso hay que asignarle la última imagen del array
                img.src = imagenes[imagenes.length - 1].img
                contador = imagenes.length - 1
            }
        }else if(ttarget == delante){
            if(contador < imagenes.length - 1){
                img.src = imagenes[contador + 1].img
                contador++
            }else{
                img.src = imagenes[0].img
                contador=0
            }
        }
    })

    Array.from(images_galery).forEach(img =>{
        //para que al darle click podamos obtener la imagen
        img.addEventListener('click', event =>{
            //el '+' transforma el string a un entero y asi saber el contador
            const imagen_seleccionada = +event.target.dataset.imgMostrar
            img_slideshow.src = imagenes[imagen_seleccionada].img
            contador = imagen_seleccionada
            overlay.style.display = "flex"

        })
    })


    document.querySelector('.btn-cerrar').addEventListener('click', () => {
        overlay.style.display = "none"
    })

})