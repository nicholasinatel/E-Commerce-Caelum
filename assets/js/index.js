//Codigo para troca automatica do Banner
//Array com enderecos das imagens
var banners = ["img/destaque-home.png","img/destaque-home-2.png"];
//Contador para array
var bannerAtual = 0;

function trocaBanner() {
    //Logica para incrementacao da troca
    bannerAtual = (bannerAtual + 1) % 2;
    //Mudando o source na query indicada mas no html
    document.querySelector('.destaque img').src = banners[bannerAtual];
}
//Funcao executada automaticamente apesar de estar declarada em uma variavel
var timer = setInterval(trocaBanner, 4000);
//query selector da ancora do botao
var controle = document.querySelector('.pause');

controle.onclick = function() {
    //Ao clickar e a classe do botao for pause
    if(controle.className == 'pause') {
        clearInterval(timer);
        //& muda classe do botao para play
        controle.className = 'play';
    } else { //se classe for play
        timer = setInterval(trocaBanner, 4000);
        //seta o timer e muda classe devolta para pause
        controle.className = 'pause';
    }

    return false;
};

// jQuery
$('.novidades').addClass('painel-compacto');
$('.mais-vendidos').addClass('painel-compacto');

$('.novidades').click(function() {
    $('.novidades').removeClass('painel-compacto');
});

$('.mais-vendidos').click(function() {
    $('.mais-vendidos').removeClass('painel-compacto');
});
