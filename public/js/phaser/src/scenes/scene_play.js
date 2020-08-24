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

        this.btn1=this.add.image(75, 520, "button");
        this.btn2=this.add.image(135, 520, "button");
        this.btn3=this.add.image(195, 520, "button");
        this.btn5=this.add.image(255, 520, "button");
        this.btn5=this.add.image(315, 520, "button");
        this.btn6=this.add.image(375, 520, "button");


        this.btn7=this.add.image(75, 570, "button");
        this.btn8=this.add.image(135, 570, "button");
        this.btn9=this.add.image(195, 570, "button");
        this.btn10=this.add.image(255, 570, "button");
        this.btn11=this.add.image(315, 570, "button");
        this.btn12=this.add.image(375, 570, "button");


        var sprite = this.add.sprite(375, 600, 'button').setInteractive();

        sprite.on('pointerdown', function (pointer) {

            this.setTint(0x848484);

        });

        sprite.on('pointerout', function (pointer) {

            this.clearTint();

        });

        sprite.on('pointerup', function (pointer) {
            console.log("a")

            this.clearTint();

        });

    }
}
export default Scene_play;
