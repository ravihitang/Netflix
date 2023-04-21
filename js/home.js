let movies = [ 'mov21','mov4','mov2','mov5','mov31', 'mov32', 'mov33', 'mov34', 'mov7','mov35', 'mov36', 'mov37', 'mov38', 'movie_11', 'movie_12', 'movie_13'];
let alta = ['mov39', 'mov40', 'mov21', 'mov41', 'movie_18', 'movie_20', 'movie_21', 'mov2', 'mov36'];
let assitiu = ['mov38', 'mov21','mov4','movie_28','movie_29','movie_30','movie_31','movie_32', 'movie_33'];
let netflix = ['mov41', 'mov21', 'mov39', 'mov7', 'mov35','movie_20','movie_3'];

let continueWatch = document.querySelector('#continue');
let emAlta = document.querySelector('#emAlta');
let pqAssistiu = document.querySelector('#pqAssistiu');
let original = document.querySelector('#original');

function imgCarrouselJPEG(arrayImgs, elementHtml){
    for(let i = 0; i < arrayImgs.length ; i++){
        elementHtml.innerHTML += `
            <div class="item">
                <img class="box-movie" src="./assets/img/movies/${arrayImgs[i]}.jpg"/>
            </div>`;
    }

}

function carrouseOriginalNetflix(arrayImgs, elementHtml){

    for(let i = 0; i < arrayImgs.length ; i++){
        elementHtml.innerHTML += `
            <div class="item">
                <img class="box-movie-original" src="./assets/img/movies/${arrayImgs[i]}.jpg"/>
            </div>`;
    }

}


imgCarrouselJPEG(movies, continueWatch);
imgCarrouselJPEG(alta, emAlta);
imgCarrouselJPEG(assitiu, pqAssistiu);
carrouseOriginalNetflix(netflix, original);



$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
