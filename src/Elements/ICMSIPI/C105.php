<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C105: OPERAÇÕES COM ICMS ST RECOLHIDO PARA UF DIVERSA DO
 * DESTINATÁRIO DO DOCUMENTO FISCAL (CÓDIGO 55).
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C105 extends Element implements ElementInterface
{
    const REG = 'C105';
    const LEVEL = 3;
    const PARENT = 'C100';

    protected $parameters = [
        'OPER' => [
            'type' => 'string',
            'regex' => '^[0-1]{1}$',
            'required' => true,
            'info' => 'Indicador do tipo de operação',
            'format' => ''
        ],
        'UF' => [
            'type' => 'string',
            'regex' => '^[a-zA-Z]{2}$',
            'required' => true,
            'info' => 'Sigla da UF de destino do ICMS_ST',
            'format' => ''
        ]
    ];

    /**
     * Constructor
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
    }
}
