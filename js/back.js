
//con esta función comprabamos que cargue primero el documento y luego ejecute la función
document.addEventListener('DOMContentLoaded', function (){


    let btn = document.querySelector('.fa-chevron-circle-left')

    btn.addEventListener("click", function (){
        window.history.back()
    }, false)

})