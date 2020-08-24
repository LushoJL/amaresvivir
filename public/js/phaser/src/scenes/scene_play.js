
class Scene_play extends Phaser.Scene{
    constructor() {
        super({key: "Scene_play"});
    }

    create(){
        var add = this.add;
        function NumeroRandom(min, max) {
            return Math.floor(Math.random() * (max - min)) + min;
        }
        this.img1=this.add.image(225, 325, "background");
        this.img1=this.add.image(120, 120, "image");
        this.img2=this.add.image(330, 120, "image");

        this.img3=this.add.image(120, 305, "image");
        this.img4=this.add.image(330, 305, "image");

        var TextBoxX=[126,159,192,225,258,291,324]
        var TextBoxY=[450,450,450,450,450,450,450]

        this.p=this.add.image(126, 450, "TextBox");
        this.i=this.add.image(159, 450, "TextBox");
        this.k=this.add.image(192, 450, "TextBox");
        this.a=this.add.image(225, 450, "TextBox");
        this.c=this.add.image(258, 450, "TextBox");
        this.h=this.add.image(291, 450, "TextBox");
        this.u=this.add.image(324, 450, "TextBox");

        var LetrasDesordenadas = [];
        var Resultado = [];
        var abecedario=["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
        abecedario = abecedario.sort(function() {return Math.random() - 0.5});

        var Respuesta=["P","I","K","A","C","H","U"];
        for (var i=Respuesta.length;i<12;i++){
            Respuesta[i]=abecedario[i]

        }
        var SelectLetras=[];
        Respuesta = Respuesta.sort(function() {return Math.random() - 0.5});
        var ButtonX=[75,135,195,255,315,375,75,135,195,255,315,375]
        var ButtonY=[520,520,520,520,520,520,570,570,570,570,570,570]

        let buttonGroup=this.add.group({
            key:'button',
            repeat:11,

        });

        for (var i=0;i<12;i++){

            buttonGroup.getChildren()[i].x=ButtonX[i];
            buttonGroup.getChildren()[i].y=ButtonY[i];
            buttonGroup.getChildren()[i].setInteractive();
            buttonGroup.getChildren()[i].setOrigin(0.5,0.5);

            SelectLetras[i]=add.text(ButtonX[i], ButtonY[i], Respuesta[i], { fontSize: 30, color: '#000000' }).setOrigin(0.5,0.5);

            LetrasDesordenadas[i] = {
                letra: Respuesta[i],
                x: ButtonX[i],
                y: ButtonY[i],
            };
        }

            buttonGroup.children.iterate((x)=>{
            x.on('pointerdown', function (pointer) {
                this.setTint(0x848484);
            });

            x.on('pointerout', function (pointer) {
                this.clearTint();
            });

            x.on('pointerup', function (pointer) {

                for (var i=0;i<12;i++){
                    if (LetrasDesordenadas[i].x===x.x && LetrasDesordenadas[i].y===x.y){
                        Resultado.push(LetrasDesordenadas[i].letra);
                        add.text(TextBoxX[Resultado.length-1], TextBoxY[Resultado.length-1], Resultado[Resultado.length-1], { fontSize: 30, color: '#000000' }).setOrigin(0.5,0.5);
                        x.alpha=0;
                        SelectLetras[i].alpha=0;
                    }
                }
                this.clearTint();
            });
        })


    function imprimirResultado(esto){
            for (var i=0;i<Resultado.length;i++){
                this.add.text(TextBoxX[i], TextBoxY[i], Resultado[i], { fontSize: 30, color: '#000000' }).setOrigin(0.5,0.5);
                console.log(Resultado)

            }
    }

    }
}
export default Scene_play;
