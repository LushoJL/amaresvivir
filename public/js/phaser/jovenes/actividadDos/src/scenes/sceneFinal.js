class SceneFinal extends Phaser.Scene {
    constructor() {
        super({key: "SceneFinal"});
    }

    create() {
        var add = this.add;
        var tweens=this.tweens;

        this.img1 = this.add.image(225, 325, "background");

        var TextFinal;

        WebFont.load({
            google: {
                families: [ 'Londrina Solid']
            },
            active: function ()
            {
                TextFinal=add.text(225, -100, 'lOGRADO', { fontFamily: 'Londrina Solid', fontSize: 80, color: '#29e705' }).setShadow(2, 2, "#333333", 2, false, true).setOrigin(0.5,0.5);

            }
        });

        var imgf = this.add.image(225, 325, "background");
        tweens.add({
            targets:imgf,
            duration: 3000,
            alpha: {
                getStart: () => 1,
                getEnd: () => 0
            },
            onComplete:()=>{
                tweens.add({
                    targets:TextFinal,
                    duration: 3000,
                    y:300
                });
            }
        });
    }
}
export default SceneFinal;
