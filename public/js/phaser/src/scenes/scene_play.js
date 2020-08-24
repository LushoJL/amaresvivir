var i=0;
class Scene_play extends Phaser.Scene{
    constructor() {
        super({key: "Scene_play"});
    }

    create(){
        this.img1=this.add.image(225, 325, "background");
        this.img1=this.add.image(120, 120, "image");
        this.img2=this.add.image(330, 120, "image");

        this.img3=this.add.image(120, 305, "image");
        this.img4=this.add.image(330, 305, "image");

        this.p=this.add.image(126, 450, "TextBox");
        this.i=this.add.image(159, 450, "TextBox");
        this.k=this.add.image(192, 450, "TextBox");
        this.a=this.add.image(225, 450, "TextBox");
        this.c=this.add.image(258, 450, "TextBox");
        this.h=this.add.image(291, 450, "TextBox");
        this.u=this.add.image(324, 450, "TextBox");


        var ButtonX=[75,135,195,255,315,375,75,135,195,255,315,375]
        var ButtonY=[520,520,520,520,520,520,570,570,570,570,570,570]
        let buttonGroup=this.add.group({
            key:'button',
            repeat:11,

        });
        console.log();



        for (i;i<12;i++){

            buttonGroup.getChildren()[i].x=ButtonX[i];
            buttonGroup.getChildren()[i].y=ButtonY[i];
            buttonGroup.getChildren()[i].setInteractive();
            buttonGroup.getChildren()[i].setOrigin(0.5,0.5);

            this.add.text(ButtonX[i], ButtonY[i], 'I', { fontSize: 30, color: '#000000' }).setOrigin(0.5,0.5);




        }

        buttonGroup.children.iterate((x)=>{
            x.on('pointerdown', function (pointer) {
                this.setTint(0x848484);
            });

            x.on('pointerout', function (pointer) {
                this.clearTint();
            });

            x.on('pointerup', function (pointer) {

                console.log(x);
                this.clearTint();
            });
        })
        // for (var i=0;i<12;i++){
        //     buttonGroup.create()
        //     var button=this.add.image(ButtonX[i], ButtonY[i], "button").setInteractive();
        //     button.on('pointerdown', function (pointer) {
        //
        //         this.setTint(0x848484);
        //
        //     });
        //
        //     button.on('pointerout', function (pointer) {
        //
        //         this.clearTint();
        //
        //     });
        //
        //     button.on('pointerup', function (pointer) {
        //         console.log(button);
        //
        //         this.clearTint();
        //
        //     });
        // }

        // this.btn1=this.add.image(75, 520, "button");
        // this.btn2=this.add.image(135, 520, "button");
        // this.btn3=this.add.image(195, 520, "button");
        // this.btn5=this.add.image(255, 520, "button");
        // this.btn5=this.add.image(315, 520, "button");
        // this.btn6=this.add.image(375, 520, "button");
        //
        //
        // this.btn7=this.add.image(75, 570, "button");
        // this.btn8=this.add.image(135, 570, "button");
        // this.btn9=this.add.image(195, 570, "button");
        // this.btn10=this.add.image(255, 570, "button");
        // this.btn11=this.add.image(315, 570, "button");
        // var btn12=this.add.image(375, 570, "button").setInteractive();




    }
}
export default Scene_play;
