
class Bootloader extends Phaser.Scene{
    constructor() {
        super({key:"Bootloader"});
    }



    preload(){

        this.load.on("complete",()=>{
            this.scene.start("SceneUno");

        });
        this.load.image("pikachu","js/phaser/jovenes/actividadDos/assets/Pikachu.png");
        this.load.image("miu","js/phaser/jovenes/actividadDos/assets/miu.jpg");
        this.load.image("button","js/phaser/jovenes/actividadDos/assets/Button.png");
        this.load.image("background","js/phaser/jovenes/actividadDos/assets/BackGround.png");
        this.load.image("TextBox","js/phaser/jovenes/actividadDos/assets/TextBox.png");
        this.load.script('webfont', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js');
    }
}
export default Bootloader;
