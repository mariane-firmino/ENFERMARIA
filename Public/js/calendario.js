/* =========================================================
   ESTADO
========================================================= */

const hoje = new Date();

let calendarioAgendaDate = new Date(
    hoje.getFullYear(),
    hoje.getMonth(),
    1
);


/* =========================================================
   MESES
========================================================= */

const calendarioAgendaMonths = [

    "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro"

];


/* =========================================================
   DIAS DA SEMANA
========================================================= */

const calendarioAgendaWeekDays = [

    "Dom",
    "Seg",
    "Ter",
    "Qua",
    "Qui",
    "Sex",
    "Sáb"

];


/* =========================================================
   ELEMENTOS
========================================================= */

const calendarioAgendaGrid =
    document.getElementById(
        "calendario-agenda-grid"
    );


const calendarioAgendaWeek =
    document.getElementById(
        "calendario-agenda-week"
    );


const calendarioAgendaMonthButton =
    document.getElementById(
        "calendario-agenda-month-button"
    );


const calendarioAgendaYearButton =
    document.getElementById(
        "calendario-agenda-year-button"
    );


const calendarioAgendaMonthMenu =
    document.getElementById(
        "calendario-agenda-month-menu"
    );


const calendarioAgendaYearMenu =
    document.getElementById(
        "calendario-agenda-year-menu"
    );


const calendarioAgendaUpcoming =
    document.getElementById(
        "calendario-agenda-upcoming"
    );


const calendarioAgendaCompleted =
    document.getElementById(
        "calendario-agenda-completed"
    );


/* =========================================================
   EVENTOS
========================================================= */

let calendarioAgendaEvents = [];


/* =========================================================
   INICIALIZAÇÃO
========================================================= */

document.addEventListener(
    "DOMContentLoaded",
    calendarioAgendaInit
);


async function calendarioAgendaInit() {

    calendarioAgendaCreateWeek();

    calendarioAgendaCreateMonths();

    calendarioAgendaCreateYears();

    calendarioAgendaRender();

    await calendarioAgendaLoadEvents();

}


/* =========================================================
   DIAS DA SEMANA
========================================================= */

function calendarioAgendaCreateWeek() {

    calendarioAgendaWeek.innerHTML = "";


    calendarioAgendaWeekDays.forEach(
        function (dayName) {

            const day =
                document.createElement("div");


            day.className =
                "calendario-agenda-week-day";


            day.textContent =
                dayName;


            calendarioAgendaWeek.appendChild(
                day
            );

        }
    );

}


/* =========================================================
   MENU DE MESES
========================================================= */

function calendarioAgendaCreateMonths() {

    calendarioAgendaMonthMenu.innerHTML = "";


    calendarioAgendaMonths.forEach(
        function (monthName, monthIndex) {

            const button =
                document.createElement("button");


            button.type = "button";


            button.className =
                "calendario-agenda-dropdown-button";


            button.textContent =
                monthName;


            button.addEventListener(
                "click",
                function (event) {

                    event.stopPropagation();


                    calendarioAgendaDate.setMonth(
                        monthIndex
                    );


                    calendarioAgendaCloseMenus();


                    calendarioAgendaRender();

                }
            );


            calendarioAgendaMonthMenu.appendChild(
                button
            );

        }
    );

}


/* =========================================================
   MENU DE ANOS
========================================================= */

function calendarioAgendaCreateYears() {

    calendarioAgendaYearMenu.innerHTML = "";


    const currentYear =
        new Date().getFullYear();


    for (
        let year = currentYear - 10;
        year <= currentYear + 20;
        year++
    ) {

        const button =
            document.createElement("button");


        button.type = "button";


        button.className =
            "calendario-agenda-dropdown-button";


        button.textContent =
            year;


        button.addEventListener(
            "click",
            function (event) {

                event.stopPropagation();


                calendarioAgendaDate.setFullYear(
                    year
                );


                calendarioAgendaCloseMenus();


                calendarioAgendaRender();

            }
        );


        calendarioAgendaYearMenu.appendChild(
            button
        );

    }

}


/* =========================================================
   BOTÃO DO MÊS
========================================================= */

calendarioAgendaMonthButton.addEventListener(
    "click",
    function (event) {

        event.stopPropagation();


        calendarioAgendaYearMenu.classList.remove(
            "is-open"
        );


        calendarioAgendaMonthMenu.classList.toggle(
            "is-open"
        );

    }
);


/* =========================================================
   BOTÃO DO ANO
========================================================= */

calendarioAgendaYearButton.addEventListener(
    "click",
    function (event) {

        event.stopPropagation();


        calendarioAgendaMonthMenu.classList.remove(
            "is-open"
        );


        calendarioAgendaCreateYears();


        calendarioAgendaYearMenu.classList.toggle(
            "is-open"
        );

    }
);


/* =========================================================
   FECHAR MENUS
========================================================= */

document.addEventListener(
    "click",
    function () {

        calendarioAgendaCloseMenus();

    }
);


function calendarioAgendaCloseMenus() {

    calendarioAgendaMonthMenu.classList.remove(
        "is-open"
    );


    calendarioAgendaYearMenu.classList.remove(
        "is-open"
    );

}


/* =========================================================
   MÊS ANTERIOR
========================================================= */

document.getElementById(
    "calendario-agenda-prev"
).addEventListener(
    "click",
    function () {

        calendarioAgendaDate.setMonth(
            calendarioAgendaDate.getMonth() - 1
        );


        calendarioAgendaRender();

    }
);


/* =========================================================
   MÊS PRÓXIMO
========================================================= */

document.getElementById(
    "calendario-agenda-next"
).addEventListener(
    "click",
    function () {

        calendarioAgendaDate.setMonth(
            calendarioAgendaDate.getMonth() + 1
        );


        calendarioAgendaRender();

    }
);


/* =========================================================
   RENDERIZAR CALENDÁRIO
========================================================= */

function calendarioAgendaRender() {

    const year =
        calendarioAgendaDate.getFullYear();


    const month =
        calendarioAgendaDate.getMonth();


    calendarioAgendaMonthButton.textContent =
        calendarioAgendaMonths[month];


    calendarioAgendaYearButton.textContent =
        year;


    calendarioAgendaGrid.innerHTML = "";


    const firstDay =
        new Date(
            year,
            month,
            1
        ).getDay();


    const daysInMonth =
        new Date(
            year,
            month + 1,
            0
        ).getDate();


    const daysInPreviousMonth =
        new Date(
            year,
            month,
            0
        ).getDate();


    /* =====================================================
       DIAS DO MÊS ANTERIOR
    ================================================== */

    for (
        let i = firstDay - 1;
        i >= 0;
        i--
    ) {

        calendarioAgendaCreateDay(
            daysInPreviousMonth - i,
            true
        );

    }


    /* =====================================================
       DIAS DO MÊS ATUAL
    ================================================== */

    for (
        let day = 1;
        day <= daysInMonth;
        day++
    ) {

        calendarioAgendaCreateDay(
            day,
            false,
            year,
            month
        );

    }


    /* =====================================================
       COMPLETAR A ÚLTIMA SEMANA
    ================================================== */

    const totalCells =
        calendarioAgendaGrid.children.length;


    const remaining =
        totalCells % 7;


    if (remaining !== 0) {

        for (
            let day = 1;
            day <= 7 - remaining;
            day++
        ) {

            calendarioAgendaCreateDay(
                day,
                true
            );

        }

    }


    calendarioAgendaRenderSidePanel();

}


/* =========================================================
   CRIAR DIA
========================================================= */

function calendarioAgendaCreateDay(
    dayNumber,
    otherMonth,
    year,
    month
) {

    const cell =
        document.createElement("div");


    cell.className =
        "calendario-agenda-day";


    if (otherMonth) {

        cell.classList.add(
            "is-other-month"
        );

    }


    /* =====================================================
       NÚMERO DO DIA
    ===================================================== */

    const number =
        document.createElement("span");


    number.className =
        "calendario-agenda-day-number";


    number.textContent =
        dayNumber;


    cell.appendChild(
        number
    );


    /* =====================================================
       COMPROMISSOS
       
       IMPORTANTE:
       NÃO MOSTRA O HORÁRIO DENTRO DO CALENDÁRIO.
       
       Mostra somente:
       ● Consulta
       
    ===================================================== */

    if (!otherMonth) {

        const events =
            calendarioAgendaGetEvents(
                year,
                month,
                dayNumber
            );


        events.forEach(
            function (event) {

                const eventElement =
                    document.createElement("div");


                eventElement.className =
                    "calendario-agenda-event";


                /* BOLINHA */

                const dot =
                    document.createElement("span");


                dot.className =
                    "calendario-agenda-event-dot";


                dot.style.backgroundColor =
                    event.cor || "#000000";


                /* NOME DA CONSULTA */

                const name =
                    document.createElement("span");


                name.className =
                    "calendario-agenda-event-name";


                /*
                 * AQUI FICA SOMENTE O TIPO.
                 * O HORÁRIO NÃO APARECE NO CALENDÁRIO.
                 */

                name.textContent =
                    event.tipo || "Consulta";


                eventElement.appendChild(
                    dot
                );


                eventElement.appendChild(
                    name
                );


                cell.appendChild(
                    eventElement
                );

            }
        );

    }


    calendarioAgendaGrid.appendChild(
        cell
    );

}


/* =========================================================
   PEGAR EVENTOS
========================================================= */

function calendarioAgendaGetEvents(
    year,
    month,
    day
) {

    return calendarioAgendaEvents.filter(
        function (event) {

            if (!event.data) {

                return false;

            }


            const parts =
                event.data.split("-");


            return (

                Number(parts[0]) === year &&

                Number(parts[1]) - 1 === month &&

                Number(parts[2]) === day

            );

        }
    );

}


/* =========================================================
   CARREGAR EVENTOS DA API
========================================================= */

async function calendarioAgendaLoadEvents() {

    try {

        calendarioAgendaEvents =
            await AgendaAPI.listarCompromissos();


        if (
            !Array.isArray(
                calendarioAgendaEvents
            )
        ) {

            calendarioAgendaEvents = [];

        }

    } catch (error) {

        console.error(
            "Erro ao carregar compromissos:",
            error
        );


        calendarioAgendaEvents = [];

    }


    calendarioAgendaRender();

}


/* =========================================================
   PAINEL LATERAL
========================================================= */

function calendarioAgendaRenderSidePanel() {

    calendarioAgendaUpcoming.innerHTML = "";

    calendarioAgendaCompleted.innerHTML = "";


    const year =
        calendarioAgendaDate.getFullYear();


    const month =
        calendarioAgendaDate.getMonth();


    const monthEvents =
        calendarioAgendaEvents.filter(
            function (event) {

                if (!event.data) {

                    return false;

                }


                const parts =
                    event.data.split("-");


                return (

                    Number(parts[0]) === year &&

                    Number(parts[1]) - 1 === month

                );

            }
        );


    /* =====================================================
       PRÓXIMAS
    ===================================================== */

    const upcoming =
        monthEvents.filter(
            function (event) {

                return event.status !== "realizado";

            }
        );


    /* =====================================================
       REALIZADAS
    ===================================================== */

    const completed =
        monthEvents.filter(
            function (event) {

                return event.status === "realizado";

            }
        );


    /* =====================================================
       PRÓXIMAS CONSULTAS
    ===================================================== */

    if (upcoming.length === 0) {

        calendarioAgendaUpcoming.innerHTML =
            `
            <div class="calendario-agenda-empty">
                Nenhuma consulta
            </div>
            `;

    } else {

        upcoming.forEach(
            function (event) {

                calendarioAgendaCreateSideItem(
                    event,
                    calendarioAgendaUpcoming
                );

            }
        );

    }


    /* =====================================================
       CONSULTAS REALIZADAS
    ===================================================== */

    if (completed.length === 0) {

        calendarioAgendaCompleted.innerHTML =
            `
            <div class="calendario-agenda-empty">
                Nenhuma consulta
            </div>
            `;

    } else {

        completed.forEach(
            function (event) {

                calendarioAgendaCreateSideItem(
                    event,
                    calendarioAgendaCompleted
                );

            }
        );

    }

}


/* =========================================================
   ITEM DO PAINEL
========================================================= */

function calendarioAgendaCreateSideItem(
    event,
    container
) {

    const item =
        document.createElement("div");


    item.className =
        "calendario-agenda-list-item";


    const dot =
        document.createElement("span");


    dot.className =
        "calendario-agenda-list-dot";


    dot.style.backgroundColor =
        event.cor || "#000000";


    const text =
        document.createElement("span");


    /*
     * NO PAINEL LATERAL O HORÁRIO CONTINUA APARECENDO.
     */

    text.textContent =
        `${event.horario || ""} - ${event.tipo || "Consulta"}`;


    item.appendChild(
        dot
    );


    item.appendChild(
        text
    );


    container.appendChild(
        item
    );

}


/* =========================================================
   BOTÃO "ADICIONAR COMPROMISSO"
   
   NÃO ADICIONAR EVENTO DE CLIQUE AQUI.

   O botão permanece apenas VISUAL.
   
   Não abre modal.
   Não salva.
   Não altera o calendário.
========================================================= */
