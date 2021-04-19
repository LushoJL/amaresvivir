import SceneDos from "./sceneDos.js";

class SceneTres extends Phaser.Scene{
    constructor() {
        super({key: "SceneTres"});
    }

    create() {
        var add = this.add;
        var tweens=this.tweens;
        var scene=this.scene;
        var VereficarResultado=0;


        this.img1 = this.add.image(225, 325, "background");
        var imgf = this.add.image(225, 325, "background");
        this.img1 = this.add.image(120, 120, "P");
        this.img2 = this.add.image(330, 120, "P1");

        this.img3 = this.add.image(120, 305, "P2");
        this.img4 = this.add.image(330, 305, "P3");

        //creando grupo de caja de text
        let TextBoxGroup = this.add.group({
            key: 'TextBox',
            repeat: 7,
        });

        //creando grupo de botones para las letras
        let buttonGroup = this.add.group({
            key: 'button',
            repeat: 11,

        });

        //Ubicaciones para las cajas donde se imprimiran las letras
        var TextBoxX = [150, 180, 210, 240, 270, 300]
        var TextBoxY = [450, 450, 450, 450, 450, 450]

        //ubicacion de los botones con letras
        var ButtonX = [75, 135, 195, 255, 315, 375, 75, 135, 195, 255, 315, 375]
        var ButtonY = [520, 520, 520, 520, 520, 520, 570, 570, 570, 570, 570, 570]

        var abecedario = ["B", "D", "F", "G", "I", "J", "K", "L", "M", "N", "Q", "S", "T", "U", "V", "W", "X", "Y", "Z"];
        var Respuesta = ["P", "A", "R", "C", "H", "E"];

        //mezcla el array del abecedario
        abecedario = abecedario.sort(function () {
            return Math.random() - 0.5
        });

        var LetrasDeBotones = [];//letras que mostraran en los botones
        var LetrasSeleccionadas = [0, 0, 0, 0, 0, 0];//letras que se selecionaron
        var LetrasAzar = [];//letras mezcladas de abecedario y respuesta

        //concatenando abecedario y respuesta
        for (var i = 0; i < 12; i++) {
            if (i<Respuesta.length)
                LetrasAzar[i] = Respuesta[i]
            else
                LetrasAzar[i] = abecedario[i]
        }

        //mezclando  letraz al azar
        LetrasAzar = LetrasAzar.sort(function () {
            return Math.random() - 0.5
        });

        // poniendo ubicacion a los botones y caja de texto
        for (var i = 0; i < 12; i++) {
            if (i<Respuesta.length){
                //cajas de text
                TextBoxGroup.getChildren()[i].x = TextBoxX[i];
                TextBoxGroup.getChildren()[i].y = TextBoxY[i];
                TextBoxGroup.getChildren()[i].setInteractive();
            }
            //botones
            buttonGroup.getChildren()[i].x = ButtonX[i];
            buttonGroup.getChildren()[i].y = ButtonY[i];
            buttonGroup.getChildren()[i].setInteractive();
            buttonGroup.getChildren()[i].setOrigin(0.5, 0.5);
            //poniendo las letras
            LetrasDeBotones[i] = {
                letra: add.text(ButtonX[i], ButtonY[i], LetrasAzar[i], {
                    fontSize: 30,
                    color: '#000000'
                }).setOrigin(0.5, 0.5),
                x: ButtonX[i],
                y: ButtonY[i],
                i: 100
            };
        }

        buttonGroup.children.iterate((x) => {
            x.on('pointerdown', function (pointer) {
                this.setTint(0x848484);
            });

            x.on('pointerout', function (pointer) {
                this.clearTint();
            });


            x.on('pointerup', function (pointer) {
                var sw = true;
                for (var i = 0; i < 12; i++) {

                    if (LetrasDeBotones[i].letra.x === x.x && LetrasDeBotones[i].letra.y === x.y && VereficarResultado!==8) {

                        for (var j = 0; j < LetrasSeleccionadas.length; j++) {
                            if (LetrasSeleccionadas[j] === 0 && sw) {
                                LetrasSeleccionadas[j] = LetrasDeBotones[i].letra._text;
                                LetrasDeBotones[i].letra.x = TextBoxX[j];
                                LetrasDeBotones[i].letra.y = TextBoxY[j];
                                LetrasDeBotones[i].i = j;
                                sw = false;
                                x.alpha = 0;

                            }
                        }
                        verefica();

                    }
                }

                this.clearTint();
            });
        });
        TextBoxGroup.children.iterate((x) => {
            x.on('pointerout', function (pointer) {
                this.clearTint();
            });
            x.on('pointerup', function (pointer) {

                for (var i = 0; i < 12; i++) {
                    if (LetrasDeBotones[i].letra.x === x.x && LetrasDeBotones[i].letra.y === x.y && VereficarResultado!==Respuesta.length+1) {
                        LetrasDeBotones[i].letra.x = LetrasDeBotones[i].x;
                        LetrasDeBotones[i].letra.y = LetrasDeBotones[i].y;
                        LetrasSeleccionadas[LetrasDeBotones[i].i] = 0;
                        LetrasDeBotones[i].i = 100;
                        buttonGroup.getChildren()[i].alpha = 1


                    }

                }

                this.clearTint();
            });
        });

        var TextFinal;

        WebFont.load({
            google: {
                families: [ 'Londrina Solid']
            },
            active: function ()
            {
                TextFinal=add.text(225, -100, 'PARCHE', { fontFamily: 'Londrina Solid', fontSize: 80, color: '#29e705' }).setShadow(2, 2, "#333333", 2, false, true).setOrigin(0.5,0.5);

            }
        });
        function verefica(){
            VereficarResultado=0;
            for (var i=0;i<LetrasSeleccionadas.length;i++){
                if (LetrasSeleccionadas[i]===Respuesta[i])VereficarResultado++;
            }
            if (VereficarResultado===Respuesta.length){
                for (var i=0;i<12;i++){
                    if (LetrasDeBotones[i].i!==100)LetrasDeBotones[i].letra.setColor('#06f300');
                }
                VereficarResultado++;
                imgf.setDepth(1);
                tweens.add({
                    targets:imgf,
                    duration: 1000,
                    alpha: {
                        getStart: () => 0,
                        getEnd: () => 0.5
                    },

                });
                TextFinal.setDepth(1);
                tweens.add({
                    targets:TextFinal,
                    duration: 2000,
                    yoyo:true,
                    hold:2000,
                    y:300,
                    onYoyo:()=>{
                        tweens.add({
                            targets:imgf,
                            duration: 2000,
                            alpha: {
                                getStart: () => 0.5,
                                getEnd: () => 1
                            },
                            onComplete:()=>{
                                scene.add("SceneDos", new SceneDos());
                                scene.start("SceneDos");

                            }

                        });
                    }
                })
            }
        }
    }
}
export default SceneTres;
