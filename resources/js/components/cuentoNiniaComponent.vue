<template>

    <div>
        <h1><center>MARITA</center></h1>
        <p>
            Marita era una niña de pelo largo y negro, gordita, muy alegre, juguetona y muy feliz. Ella se había mudado a una nueva ciudad y a una nueva escuela.
            Por otro lado, Julieta era: inteligente, abusona, violenta, con mucha picardía y sin nada de empatía. Todas las fechorías que decía o hacia estaba bien para los que la seguían.
            - ¡Eh, tú! - le gritó Julieta a Marita, al verla en la fila para entrar al aula.
            A Marita le asusto ese tono de voz, y sin hacer caso se dirigió a su clase.
            Cuando fue a sentarse, Julieta le habló susurrando a su espalda amenazadoramente, cuidándose de que la profesora no la oyera. - ¿Dónde vas gorda? ¡Ese es mi sitio! Marita, sin mirarla, fue a colocarse en uno de los pupitres de la última fila.
            Cuando llegó a casa no contó nada a pesar de estar muy disgustada.
            A la mañana siguiente, Marita desayunó nerviosa deseando que esas niñas se hubieran olvidado de ella, pero en cuanto la vieron llegar, empezaron de nuevo los ataques.  - ¡Gordaaaaa, gordaaaaa! - le cantaron, delante de todos.
            Y a la hora de la salida…. Cuando salió las niñas estaban esperándola en la puerta. Marita siguió su camino sin mirarlas, pero una de ellas le puso el pie haciendo que tropezara. - ¡Jajajajajajajaja! ¡Perdona, ha sido sin querer! - escuchó que decían
            Se estaba levantando del suelo cuando llegó la profesora, que no había visto nada. - ¿Qué te ha pasado Marita? ¿Te has hecho daño? - le dijo preocupada. - Solo he resbalado - dijo ocultando la verdad ante la mirada amenazadora de las otras.
            Otros niños de la clase vieron lo que estaba pasando, pero por miedo a ser objeto también de sus ataques se callaron.
            Pasaban los días y Marita cada vez estaba más amargada, no podía dormir y no sabía cómo resolver esa situación. Marita bajó en sus notas, no comía bien, estaba muy triste y se volvió muy reservada.
            Los padres estaban preocupados por su cambio de actitud, pero pensaban que le estaba costando mucho adaptarse a la nueva ciudad, la nueva casa y el nuevo colegio, y decidieron tener paciencia y estar más atentos.
            Mientras, Julieta y sus seguidoras continuaban con el acoso sin darle tregua. Estuvo así durante todo el curso; atormentada.
            Poco antes de que terminara el curso, se mudaron a otra ciudad
            y Marita les conto a sus padres todo lo que había vivido.


        </p>
        <p><button @click="question">Preguntas</button></p>

    </div>



</template>

<script>
export default {
    name: "cuentoNiniaComponent",
    methods: {
        question() {

            const inputOptions1 = new Promise((resolve) => {
                setTimeout(() => {
                    resolve({
                    'MARITA': 'MARITA',
                    'JULIETA': 'JULIETA',
                    'LOS DEMAS COMPAÑEROS': 'LOS DEMAS COMPAÑEROS'
                    })
                }, 0)
            });
            const inputOptions2 = new Promise((resolve) => {
                setTimeout(() => {
                    resolve({
                    'SERIA IGUAL': 'SERIA IGUAL',
                    'CABIARÍA': 'CAMBIARÍA',
                    'PEDIRIA AYUDA': 'PEDIRIA AYUDA'
                    })
                }, 0)
            });
            const inputOptions3 = new Promise((resolve) => {
                setTimeout(() => {
                    resolve({
                    'SI': 'SI',
                    'NO': 'NO',
                    })
                }, 0)
            });
            const inputOptions4 = new Promise((resolve) => {
                setTimeout(() => {
                    resolve({
                    'AMENAZAS': 'AMENAZAS',
                    'MIEDO': 'MIEDO',
                    'VERGÜENZA': 'VERGÜENZA',
                    'ME GUSTA': 'ME GUSTA',
                    })
                }, 0)
            });
            // Use sweetalert2
            const { value: options1 } = Swal.mixin({

                confirmButtonText: 'Siguiente &rarr;',
                showCancelButton: true,
                progressSteps: ['1', '2', '3', '4', '5', '6']
            }).queue([
                {
                    title: '¿Con qué personaje te identificas del cuento?',
                    input: 'radio',
                    inputOptions: inputOptions1,
                    html:'<hr>',
                    inputValidator: (value) => {
                        if (!value) {
                            return 'Slecciona una opción';
                        }
                    }
                },

                {
                    title: '¿Qué harías tú en lugar del personaje que elegiste?',
                    input: 'radio',

                    inputOptions: inputOptions2,
                    inputValidator: (value) => {
                        if (!value) {
                            return 'Slecciona una opción';
                        }
                    }
                },
                {
                    title: '¿LE DIRIAS A ALGUIEN SI VIERAS QUE OTRO SUFRE COMO MARITA?',
                    input: 'radio',
                    inputOptions: inputOptions3,
                    inputValidator: (value) => {
                        if (!value) {
                            return 'Slecciona una opción';
                        }
                    }
                },
                {
                    title: '¿HAS SUFRIDO LO MISMO QUE MARITA ALGUNA VEZ?',
                    input: 'radio',
                    inputOptions: inputOptions3,
                    inputValidator: (value) => {
                        if (!value) {
                            return 'Slecciona una opción';
                        }
                    }
                },
                {
                    title: '¿SE LO CONTASTE A ALGUIEN PARA PAEDIR AYUDA(A TUS PAPÁS, AMIGOS, MAESTRA/O)?',
                    input: 'radio',
                    inputOptions: inputOptions3,
                    inputValidator: (value) => {
                        if (!value) {
                            return 'Slecciona una opción';
                        }
                    }
                },
                {
                    title: '¿POR QUÉ NO SE LO CONTARIAS A ALGUIEN?',
                    input: 'radio',
                    inputOptions: inputOptions4,
                    inputValidator: (value) => {
                        if (!value) {
                            return 'Slecciona una opción';
                        }
                    }
                },
            ]).then((result) => {
                if (result.value) {
                    const answers = JSON.stringify(result.value)
                    Swal.fire({
                        title: '¡Terminaste!',
                        html: `
                        Your answers:
                        <pre><code>${answers}</code></pre>
                    `,
                        confirmButtonText: 'Hecho'
                    })
                }
            })
        },
    },
}
</script>

<style scoped>
p {
    font-family: 'Indie Flower', cursive;
    border: #ffffff 27px solid;
    border-image-source: url("../../../public/image/actividadesyjuegos/border.png");
    border-image-slice: 27;

    padding: 10px;
    text-align: justify;
    font-size: 34px;
}
div{
    margin-top: 50px;
    margin-left: 10%;
    margin-right: 10%;
}
</style>
