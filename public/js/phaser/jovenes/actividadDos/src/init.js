import Bootloader from './bootloader.js';
import SceneUno from './scenes/sceneUno.js';
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
        SceneUno
    ]
}
new Phaser.Game(config);

