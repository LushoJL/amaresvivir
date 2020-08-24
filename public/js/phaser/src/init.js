import Bootloader from './bootloader.js';
import Scene_play from './scenes/scene_play.js';
const config = {
    width: 450,
    height: 650,
    parent: 'containerPHASER',
    type: Phaser.AUTO,
    scale: {
        parent: 'containerPHASER',
        autoCenter: Phaser.Scale.CENTER_BOTH,
    },
    scene: [
        Bootloader,
        Scene_play
    ]
}
new Phaser.Game(config);
//
// function preload(){
//     this.load.image("image","js/phaser/assets/Image.png");
//     this.load.image("button","js/phaser/assets/Button.png");
//     this.load.image("background","js/phaser/assets/BackGround.png");
//     this.load.image("TextBox","js/phaser/assets/TextBox.png");
//
// }
// function create(){
//     this.img1=this.add.image(225, 325, "background");
//     this.img1=this.add.image(120, 120, "image");
//     this.img2=this.add.image(330, 120, "image");
//
//     this.img3=this.add.image(120, 305, "image");
//     this.img4=this.add.image(330, 305, "image");
//
//     this.p=this.add.image(126, 450, "TextBox");
//     this.i=this.add.image(159, 450, "TextBox");
//     this.k=this.add.image(192, 450, "TextBox");
//     this.a=this.add.image(225, 450, "TextBox");
//     this.c=this.add.image(258, 450, "TextBox");
//     this.h=this.add.image(291, 450, "TextBox");
//     this.u=this.add.image(324, 450, "TextBox");
//
//     this.btn1=this.add.image(75, 520, "button");
//     this.btn2=this.add.image(135, 520, "button");
//     this.btn3=this.add.image(195, 520, "button");
//     this.btn5=this.add.image(255, 520, "button");
//     this.btn5=this.add.image(315, 520, "button");
//     this.btn6=this.add.image(375, 520, "button");
//
//
//     this.btn7=this.add.image(75, 570, "button");
//     this.btn8=this.add.image(135, 570, "button");
//     this.btn9=this.add.image(195, 570, "button");
//     this.btn10=this.add.image(255, 570, "button");
//     this.btn11=this.add.image(315, 570, "button");
//     this.btn12=this.add.image(375, 570, "button");
//
//
//
//     console.log(this.img2)
//
// }
// function update(){


