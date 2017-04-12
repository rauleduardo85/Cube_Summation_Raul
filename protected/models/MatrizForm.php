<?php

/* 
Clase asociada a la clase cformmodel y encargada
 * de generar la vista para el formulario principal de entrada y salida de datos
 */

class MatrizForm extends CFormModel{
    
    public $input;
    public $output;
    
    public function rules() {
        return array(
            array('input' , 'required'),
            array('output' , 'length' , 'min' => 1 , 'allowEmpty' => true),
            array('input' , 'length' , 'min' => 20)
        );
    }
    
    public function attributeLabels() {
        return array(
            'input' => 'Entrada',
            'output' => 'Salida'
        );
    }
    
    
    
    
    
}
