
class Bootloader extends Phaser.Scene{
    constructor() {
        super({key:"Bootloader"});
    }



    preload(){

        this.load.on("complete",()=>{
            this.scene.start("SceneUno");

        });
        //this.load.image("pikachu","js/phaser/jovenes/actividadDos/assets/Pikachu.png");
        this.load.image("T","js/phaser/jovenes/actividadDos/assets/T.jpg");
        this.load.image("T1","js/phaser/jovenes/actividadDos/assets/T1.jpg");
        this.load.image("T2","js/phaser/jovenes/actividadDos/assets/T2.jpg");
        this.load.image("T3","js/phaser/jovenes/actividadDos/assets/T3.jpg");
        this.load.image("C","js/phaser/jovenes/actividadDos/assets/C.jpg");
        this.load.image("C1","js/phaser/jovenes/actividadDos/assets/C1.jpg");
        this.load.image("C2","js/phaser/jovenes/actividadDos/assets/C2.jpg");
        this.load.image("C3","js/phaser/jovenes/actividadDos/assets/C3.jpg");
        this.load.image("P","js/phaser/jovenes/actividadDos/assets/P.jpg");
        this.load.image("P1","js/phaser/jovenes/actividadDos/assets/P1.jpg");
        this.load.image("P2","js/phaser/jovenes/actividadDos/assets/P2.jpg");
        this.load.image("P3","js/phaser/jovenes/actividadDos/assets/P3.jpg");
        this.load.image("D","js/phaser/jovenes/actividadDos/assets/D.png");
        this.load.image("D1","js/phaser/jovenes/actividadDos/assets/D1.jpg");
        this.load.image("D2","js/phaser/jovenes/actividadDos/assets/D2.jpg");
        this.load.image("D3","js/phaser/jovenes/actividadDos/assets/D3.jpg");
        //this.load.image("miu","js/phaser/jovenes/actividadDos/assets/miu.jpg");
        this.load.image("button","js/phaser/jovenes/actividadDos/assets/Button.png");
        this.load.image("background","js/phaser/jovenes/actividadDos/assets/BackGround.png");
        this.load.image("TextBox","js/phaser/jovenes/actividadDos/assets/TextBox.png");
        this.load.script('webfont', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js');
    }
}
export default Bootloader;
