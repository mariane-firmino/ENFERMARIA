
const tabela = document.getElementById(
    "consultaAlunoTabelaScroll"
);

const trilho = document.getElementById(
    "consultaAlunoTrilho"
);

const indicador = document.getElementById(
    "consultaAlunoIndicador"
);

const esquerda = document.getElementById(
    "consultaAlunoScrollEsquerda"
);

const direita = document.getElementById(
    "consultaAlunoScrollDireita"
);


/* =====================================================
ATUALIZA A BARRA
===================================================== */

function atualizarBarra() {

    const larguraVisivel =
        tabela.clientWidth;

    const larguraTotal =
        tabela.scrollWidth;

    const larguraTrilho =
        trilho.clientWidth;


    if (larguraTotal <= larguraVisivel) {
        indicador.style.width = "100%";
        indicador.style.left = "0px";
        return;
    }

    const proporcao =
        larguraVisivel / larguraTotal;

    const larguraIndicador =
        Math.max(
            50,
            larguraTrilho * proporcao
        );

    const limite =
        larguraTrilho -
        larguraIndicador;

    const maxScroll =
        larguraTotal -
        larguraVisivel;

    const posicao =
        (tabela.scrollLeft / maxScroll) *
        limite;

    indicador.style.width =
        larguraIndicador + "px";

    indicador.style.left =
        posicao + "px";

}


tabela.addEventListener(
    "scroll",
    atualizarBarra
);


window.addEventListener(
    "resize",
    atualizarBarra
);

let arrastando = false;


indicador.addEventListener(
    "pointerdown",
    function (evento) {
        arrastando = true;
        indicador.setPointerCapture(
            evento.pointerId
        );
    }
);


indicador.addEventListener(
    "pointermove",
    function (evento) {

        if (!arrastando) {
            return;
        }

        const rect =
            trilho.getBoundingClientRect();

        const largura =
            indicador.offsetWidth;

        let posicao =
            evento.clientX -
            rect.left -
            (largura / 2);

        const limite =
            rect.width -
            largura;

        posicao = Math.max(
            0,
            Math.min(
                posicao,
                limite
            )
        );

        const porcentagem =
            limite === 0
                ? 0
                : posicao / limite;

        const maxScroll =
            tabela.scrollWidth -
            tabela.clientWidth;

        tabela.scrollLeft =
            porcentagem * maxScroll;
    }
);


indicador.addEventListener(
    "pointerup",
    function () {
        arrastando = false;
    }
);


indicador.addEventListener(
    "pointercancel",
    function () {
        arrastando = false;
    }
);


trilho.addEventListener(
    "click",
    function (evento) {

        if (
            evento.target === indicador
        ) {
            return;
        }

        const rect =
            trilho.getBoundingClientRect();

        const porcentagem =
            (
                evento.clientX -
                rect.left
            ) / rect.width;

        const maxScroll =
            tabela.scrollWidth -
            tabela.clientWidth;

        tabela.scrollLeft =
            porcentagem * maxScroll;

    }
);


esquerda.addEventListener(
    "click",
    function () {

        tabela.scrollBy({
            left: -250,
            behavior: "smooth"
        });
    }
);


direita.addEventListener(
    "click",
    function () {

        tabela.scrollBy({
            left: 250,
            behavior: "smooth"
        });
    }
);


atualizarBarra();

