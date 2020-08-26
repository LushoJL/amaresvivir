class Bootloader extends Phaser.Scene{
    constructor() {
        super({key:"Bootloader"});
    }
    preload(){

        this.load.on("complete",()=>{
            this.scene.start("Scene_play");

        });
        this.load.image("image","js/phaser/assets/Image.png");
        this.load.image("button","js/phaser/assets/Button.png");
        this.load.image("background","js/phaser/assets/BackGround.png");
        this.load.image("TextBox","js/phaser/assets/TextBox.png");


    }
}
export default Bootloader;
