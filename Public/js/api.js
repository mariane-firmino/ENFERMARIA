const AgendaAPI = {

    baseURL: "/api",


    /* =====================================================
       LISTAR
    ===================================================== */

    async listarCompromissos() {

        try {

            const response =
                await fetch(
                    `${this.baseURL}/compromissos`
                );


            if (!response.ok) {

                throw new Error(
                    "Erro ao consultar API"
                );

            }


            return await response.json();


        } catch (error) {

            console.warn(
                "API indisponível. Usando dados de teste."
            );


            /*
             * =================================================
             * DADOS DE TESTE DINÂMICOS
             *
             * Eles sempre usam o mês atual.
             * =================================================
             */

            const hoje =
                new Date();


            const year =
                hoje.getFullYear();


            const month =
                String(
                    hoje.getMonth() + 1
                ).padStart(
                    2,
                    "0"
                );


            /*
             * Exemplos de compromissos.
             *
             * Quando estiver em setembro:
             *
             * 2026-09-04
             * 2026-09-06
             * 2026-09-13
             * 2026-09-18
             *
             * Quando virar outubro,
             * automaticamente serão outubro.
             */

            return [

                {
                    id: 1,

                    data:
                        `${year}-${month}-04`,

                    horario: "08:00",

                    tipo: "Consulta",

                    cor: "#000000",

                    status: "realizado"

                },


                {
                    id: 2,

                    data:
                        `${year}-${month}-06`,

                    horario: "14:00",

                    tipo: "Consulta",

                    cor: "#000000",

                    status: "realizado"

                },


                {
                    id: 3,

                    data:
                        `${year}-${month}-13`,

                    horario: "09:00",

                    tipo: "Consulta",

                    cor: "#ff0000",

                    status: "proximo"

                },


                {
                    id: 4,

                    data:
                        `${year}-${month}-13`,

                    horario: "14:30",

                    tipo: "Consulta",

                    cor: "#1515ff",

                    status: "proximo"

                },


                {
                    id: 5,

                    data:
                        `${year}-${month}-18`,

                    horario: "15:00",

                    tipo: "Psicóloga",

                    cor: "#ffe600",

                    status: "proximo"

                }

            ];

        }

    },


    /* =====================================================
       CRIAR
    ===================================================== */

    async criarCompromisso(
        compromisso
    ) {

        const response =
            await fetch(
                `${this.baseURL}/compromissos`,
                {

                    method: "POST",

                    headers: {

                        "Content-Type":
                            "application/json"

                    },

                    body:
                        JSON.stringify(
                            compromisso
                        )

                }
            );


        if (!response.ok) {

            throw new Error(
                "Erro ao criar compromisso"
            );

        }


        return await response.json();

    },


    /* =====================================================
       EXCLUIR
    ===================================================== */

    async excluirCompromisso(
        id
    ) {

        const response =
            await fetch(
                `${this.baseURL}/compromissos/${id}`,
                {

                    method: "DELETE"

                }
            );


        if (!response.ok) {

            throw new Error(
                "Erro ao excluir compromisso"
            );

        }


        return true;

    }

};
