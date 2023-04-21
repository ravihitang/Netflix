let movies = [ 'kids2','kids3','kids5','kids6','kids7', 'kids8', 'kids16', 'kids4', 'kids10','kids11', 'kids12', 'kids13', 'kids14', 'kids15', 'kids16', 'kids17'];
let alta = ['kids19', 'kids20', 'kids21', 'kids22', 'kids23', 'kids18', 'kids2', 'kids3', 'kids4'];
let assitiu = ['kids5', 'kids6','kids7','kids8','kids4','kids10','kids11','kids12', 'kids13'];
let netflix = ['kids19', 'kids20', 'kids21', 'kids22', 'kids23','kids18','kids17'];

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
