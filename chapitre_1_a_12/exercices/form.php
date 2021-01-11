<?php

/**
 * class form
 * permet de gérer un formulaire rapidement et simplement
 */
class Form
{

    /**
     * @var données utilisées pour le formulaire
     */
    private $data;
    /**
     * @var données utilisée pour entourer les champs
     */
    public $surround = 'p';

    /**
     * @param array $data
     * @param string $string
     */

    public function __construct($data = array())
    {
        $this->data = $data;
    }
    /**
     * @param  $html string code HTML à entourer
     * @return string
     */
    private function surround($html)
    {
        return "<{$this->surround}>$html</{$this->surround}>";
    }
    /**
     * @param  $index string
     * @return string
     */
    private function getValue($index)
    {

        return isset($this->data[$index]) ? $this->data[$index] : null;
    }
    /**
     * @param  $name string
     * @return string
     */

    public function input($name)
    {
        return  $this->surround('<input type ="texte" name= "' . $name .  '" value "' . $this->getValue($name) . '">');
    }
    /**
     * @return string
     */

    public function submit()
    {
        return $this->surround('<button type ="submit"> Envoyer </button>');
    }
}
