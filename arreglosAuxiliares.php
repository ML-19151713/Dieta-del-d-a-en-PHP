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
        'lala 100 sin lactosa dorada', 'café preparado con agua'
    ];

    $valoresUniCode = [
        '0.5' => '&#189;',
        '0.25' => '&#188;',
        '0.3333' => '&#8531;',
        '0.2' => '&#8533;',
        '0.75' => '&#xBE;',
        '0.95' => '1',
        '0.66' => '&#x2154;'
    ];

    $todasLasSiglasTablaEquivalentes = [
        [
            'id' => 'FR',
            'id2' => '',
            'n' => 'Fruta',
            'en' => 'Fruit',
            'hdec' => 15,
            'prot' => 0,
            'lip' => 0
        ],
        [
            'id' => 'VE',
            'id2' => '',
            'n' => 'Verdura',
            'en' => 'Vegetable',
            'hdec' => 4,
            'prot' => 2,
            'lip' => 0
        ],
        [
            'id' => 'CETU',
            'id2' => '',
            'n' => 'Cereales y tubérculos',
            'en' => 'Cereals and tubers',
            'hdec' => 15,
            'prot' => 2,
            'lip' => 0
        ],
        [
            'id' => 'CETUG',
            'id2' => '',
            'n' => 'Cereales con grasa',
            'en' => 'Cereal with fat',
            'hdec' => 15,
            'prot' => 2,
            'lip' => 5
        ],
        [
            'id' => 'LEG',
            'id2' => ['LE'],
            'n' => 'Leguminosas',
            'en' => 'Legumes',
            'hdec' => 20,
            'prot' => 8,
            'lip' => 1
        ],
        [
            'id' => 'OAMBG',
            'id2' => ['CMBG'],
            'n' => 'O.A muy bajo en grasa',
            'en' => 'Very lean meat',
            'hdec' => 0,
            'prot' => 7,
            'lip' => 1
        ],
        [
            'id' => 'OABG',
            'id2' => ['CBG'],
            'n' => 'O.A. bajo en grasa',
            'en' => 'Lean meat',
            'hdec' => 0,
            'prot' => 7,
            'lip' => 3
        ],
        [
            'id' => 'OAMG',
            'id2' => ['CMG'],
            'n' => 'O.A. moderado en grasa',
            'en' => 'Medium-fat meat',
            'hdec' => 0,
            'prot' => 7,
            'lip' => 5
        ],
        [
            'id' => 'OAAG',
            'id2' => ['CAG'],
            'n' => 'O.A. alto en grasa',
            'en' => 'High-fat meat',
            'hdec' => 0,
            'prot' => 7,
            'lip' => 8
        ],
        [
            'id' => 'LED',
            'id2' => '',
            'n' => 'Leche descremada',
            'en' => 'Skim milk',
            'hdec' => 12,
            'prot' => 9,
            'lip' => 2
        ],
        [
            'id' => 'LES',
            'id2' => '',
            'n' => 'Leche semidescremada',
            'en' => 'Low-fat milk',
            'hdec' => 12,
            'prot' => 9,
            'lip' => 4
        ],
        [
            'id' => 'LEE',
            'id2' => '',
            'n' => 'Leche entera',
            'en' => 'Whole milk',
            'hdec' => 12,
            'prot' => 9,
            'lip' => 8
        ],
        [
            'id' => 'AZ',
            'id2' => ['AZU'],
            'n' => 'Azúcar',
            'en' => 'Sugar',
            'hdec' => 10,
            'prot' => 0,
            'lip' => 0
        ],
        [
            'id' => 'G',
            'id2' => '',
            'n' => 'Grasa',
            'en' => 'Fat',
            'hdec' => 0,
            'prot' => 0,
            'lip' => 5
        ],
        [
            'id' => 'AZGR',
            'id2' => ['AZG'],
            'n' => 'Azúcar con grasa',
            'en' => 'Sugar whit fat',
            'hdec' => 10,
            'prot' => 0,
            'lip' => 5
        ],
        [
            'id' => 'GP',
            'id2' => ['GRPROT'],
            'n' => 'Grasa con proteina',
            'en' => 'Fat with proteins',
            'hdec' => 3,
            'prot' => 3,
            'lip' => 5
        ],
        [
            'id' => 'SUP',
            'id2' => '',
            'n' => 'Suplemento de proteína',
            'en' => 'Protein supplement',
            'hdec' => 0,
            'prot' => 7,
            'lip' => 1
        ]
    ];
    
    
    