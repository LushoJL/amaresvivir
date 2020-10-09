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
                TextFinal=add.text(225, -100, 'Lo lograste', { fontFamily: 'Londrina Solid', fontSize: 80, color: '#29e705' }).setShadow(2, 2, "#333333", 2, false, true).setOrigin(0.5,0.5);
                tweens.add({
                    targets:TextFinal,
                    y:300,
                    duration:2000,
                    onComplete:()=>{
                        tweens.add({
                            targets:TextFinal,
                            scale:0.7,
                            yoyo:true,
                            duration:1000,
                            repeat:1.5,
                            onComplete:()=>{
                                console.log("termino")
                                document.location.href = '/hablemos-claro-joven'
                            }
                        })
                    }
                });
            }
        });

    }
}
export default SceneFinal;
