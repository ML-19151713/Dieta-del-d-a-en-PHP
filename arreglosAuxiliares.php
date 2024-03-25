<?php
    
    $siglasCaseras = [
        ['id' => 'r', 'id2' => '', 'n' => ['rebanada', 'rebanadas'], 'en' => 'slice'],
        ['id' => 'p', 'id2' => '', 'n' => ['pieza','piezas'], 'en' => 'piece'],
        ['id' => 'c', 'id2' => 'cg', 'n' => ['cucharada', 'cucharadas'], 'en' => 'tablespoon'],
        ['id' => 'ch', 'id2' => '', 'n' => ['cucharadita', 'cucharaditas'], 'en' => 'teaspoonful'],
        ['id' => 'cc', 'id2' => 'ch', 'n' => ['cucharadita', 'cucharaditas'], 'en' => 'teaspoonful'],
        ['id' => 't', 'id2' => '', 'n' => ['taza', 'tazas'], 'en' => 'cup-slice'],
        ['id' => 'tr', 'id2' => 't', 'n' => ['taza', 'tazas'], 'en' => 'cup'],
        ['id' => 'l', 'id2' => '', 'n' => ['lata', 'latas'], 'en' => 'Can'],
        ['id' => 'slice', 'id2' => 'r', 'n' => ['rebanada', 'rebanadas'], 'en' => 'slice'],
        ['id' => 'piece', 'id2' => 'p', 'n' => ['pieza', 'piezas'], 'en' => 'piece'],
        ['id' => 'tbsp', 'id2' => 'cg', 'n' => ['cucharada', 'cucharadas'], 'en' => 'tablespoon'],
        ['id' => 'tsp', 'id2' => 'ch', 'n' => ['cucharita de té', 'cucharitas de té'], 'en' => 'teaspoonful'],
        ['id' => 'cupliquid', 'id2' => 't', 'n' => ['taza', 'tazas'], 'en' => 'cup'],
        ['id' => 'cupsliced', 'id2' => 'tr', 'n' => ['taza', 'tazas'], 'en' => 'cup-slice'],
        ['id' => 'can', 'id2' => 'l', 'n' => ['lata', 'latas'], 'en' => ''],
        ['id' => 'botella', 'id2' => '', 'n' => ['botella', 'botellas'], 'en' => ''],
        ['id' => 'caja', 'id2' => '', 'n' => ['caja', 'cajas'], 'en' => ''],
        ['id' => 'copa', 'id2' => '', 'n' => ['copa', 'copas'], 'en' => ''],
        ['id' => 'cupos', 'id2' => '', 'n' => ['cuchara postrera colmada', 'cucharas postreras colmadas'], 'en' => ''],
        ['id' => 'cusopa', 'id2' => '', 'n' => ['cuchara sopera' ,'cucharas soperas'], 'en' => ''],
        ['id' => 'cusopa0', 'id2' => '', 'n' => ['cuchara sopera rasa', 'cucharas soperas rasas'], 'en' => ''],
        ['id' => 'cusopa1', 'id2' => '', 'n' => ['cucharada sopera colmada', 'cucharadas soperas colmadas'], 'en' => ''],
        ['id' => 'cusopa2', 'id2' => '', 'n' => ['cucharada sopera alta','cucharadas soperas altas'], 'en' => ''],
        ['id' => 'cutin', 'id2' => '', 'n' => ['cuchara tintera', 'cucharas tinteras'], 'en' => ''],
        ['id' => 'cudulsa', 'id2' => '', 'n' => ['cucharada dulcera', 'cucharadas dulceras'], 'en' => ''],
        ['id' => 'cudulsa0', 'id2' => '', 'n' => ['cuchara dulcera rasa', 'cucharas dulceras rasas'], 'en' => ''],
        ['id' => 'cudulsa1', 'id2' => '', 'n' => ['cuchara dulcera colmada', 'cucharas dulceras colmadas'], 'en' => ''],
        ['id' => 'cucharon', 'id2' => '', 'n' => ['cucharón', 'cucharones'], 'en' => ''],
        ['id' => 'cucharon1', 'id2' => '', 'n' => ['cucharón colmado', 'cucharones colmados'], 'en' => ''],
        ['id' => 'lata', 'id2' => '', 'n' => ['lata', 'latas'], 'en' => ''],
        ['id' => 'libra', 'id2' => '', 'n' => ['libra', 'libras'], 'en' => ''],
        ['id' => 'lonchita', 'id2' => '', 'n' => ['lonchita', 'lonchitas'], 'en' => ''],
        ['id' => 'medallon', 'id2' => '', 'n' => ['medallón', 'medallones'], 'en' => ''],
        ['id' => 'pqtmed', 'id2' => '', 'n' => ['paquete mediano', 'paquetes medianos'], 'en' => ''],
        ['id' => 'pqtpeq', 'id2' => '', 'n' => ['paquetes pequeños'], 'en' => ''],
        ['id' => 'pasti', 'id2' => '', 'n' => ['pastilla', 'pastillas'], 'en' => ''],
        ['id' => 'pocillo', 'id2' => '', 'n' => ['pocillo chocolatero', 'pocillos chocolateros'], 'en' => ''],
        ['id' => 'rodadel', 'id2' => '', 'n' => ['rodaja delgada', 'rodajas delgadas'], 'en' => ''],
        ['id' => 'rodamed', 'id2' => '', 'n' => ['rodaja delgada mediana', 'rodajas delgadas medianas'], 'en' => ''],
        ['id' => 'rodapeq', 'id2' => '', 'n' => ['rodaja pequeña', 'rodajas pequeñas'], 'en' => ''],
        ['id' => 'tll', 'id2' => '', 'n' => ['tallo', 'tallos'], 'en' => ''],
        ['id' => 'tbl', 'id2' => '', 'n' => ['tabla', 'tablas'], 'en' => ''],
        ['id' => 'tjd', 'id2' => '', 'n' => ['tajada', 'tajadas'], 'en' => ''],
        ['id' => 'tjddl', 'id2' => '', 'n' => ['tajada delgada', 'tajadas delgadas'], 'en' => ''],
        ['id' => 'tjdmd', 'id2' => '', 'n' => ['tajada mediana', 'tajadas medianas'], 'en' => ''],
        ['id' => 'tjdgr', 'id2' => '', 'n' => ['tajada gruesa', 'tajadas gruesas'], 'en' => '']
    ];


    $alimentosQueSeMidenEnMililitros = [
        'leche', 'agua', 'jugo', 'zumo', 'aceite', 'licuado', 'malteada', 'choco',
        'crema', 'yogurt', 'café', 'té', 'vino', 'refresco', 'sopa', 'infusión', 
        'gatorade', 'bebida', 'vaso', 'tarro', 'lata', 'botella', 'crema agria, light', 'agua mineral',
        'lala 100 sin lactosa dorada'
    ];

    $valoresUniCode = [
        '0.5' => '&#189;',
        '0.25' => '&#188;',
        '0.3333' => '&#8531;',
        '0.2' => '&#8533;',
        '0.75' => '&#190;',
        '0.95' => '1'
    ];
    
    