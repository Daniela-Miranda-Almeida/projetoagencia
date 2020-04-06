<?php

include_once 'Component.php';

class Table extends Component
{

    private $data;
    private $label;


    private $header_classes = '';
    private $nome_table = '';
    private $icon_table = '';
    private $id_table = '';


    private $body_classes = '';
    private $class_div = '';

    private $use_action_button = false;
    private $use_action_button2 = false;
    private $use_action_button3 = false;

    private $url_visualizar = '';
    private $url_editar = '';
    private $url_deletar = '';

    function __construct(array $data, array $label)
    {
        $this->label = $label;
        $this->data = $data;
    }


    function getHTML()
    {
        $html = '<div class="'.$this->header_classes.'">';
        $html .= '<i class="'.$this->icon_table.' mr-2"></i>'; 
        $html .= ''.$this->nome_table.''; 
        $html .= '</div>'; 
        $html .= '<div class=" '.$this->class_div. '">';
        $html .= '<div class="table-responsive">';
        $html .= '<table class="table  ' . $this->body_classes .  '" id="' . $this->id_table . '" width="100%" cellspacing="0">';
        $html .= $this->header();
        $html .= $this->body();
        $html .= '</table>';
        $html .= '</div>';
        $html .= '</div>';
        return $html;
    }

    public function addHeaderClass($class)
    {
        $this->header_classes .= $class . '';
    }
    public function addIdTable($id_tabela)
    {
        $this->id_table .= $id_tabela . '';
    }
    public function addNomeTable($nome) {
        $this->nome_table .= $nome . '';
    }
    public function addIconTable($icon) {
        $this->icon_table .= $icon . '';
    }

    public function addUrlVisualizar($url)
    {
        $this->url_visualizar .= $url . '';
    }
    public function addUrlEditar($url)
    {
        $this->url_editar .= $url . '';
    }

    public function addUrlDelete($url)
    {
        $this->url_deletar .= $url . '';
    }



    private function header()
    {

        $html = '<thead><tr class="text-center">';
        foreach ($this->label as $name) {
            $html .= '<th>' . $name . '</th>';
        }
        if ($this->use_action_button || ($this->use_action_button2) || ($this->use_action_button3)) {
            $html .= '<th>Ação</th>';
        } 

        $html .= '</tr></thead>';
        return $html;
    }



    private function action_buttons($id)
    {
        $html = '<a href="' . base_url($this->url_editar . '/' . $id) . '" title="Editar">';
        $html .= '<i  class="fas fa-pencil-alt text-warning mr-2"></i></a>';

        $html .= '<a href="' . base_url($this->url_deletar . '/' . $id) . '" title="Deletar">';
        $html .= '<i class="fas fa-times text-danger"></i></a>';

        return $html;
    }
    private function action_buttons2($id)
    {

        $html = '<a href="' . base_url($this->url_visualizar . '/' . $id) . '" title="Visualizar">';
        $html .= '<i  class="fa fa-eye text-black mr-2"></i></a>';
        $html .= '<a href="' . base_url($this->url_deletar . '/' . $id) . '" title="Deletar">';
        $html .= '<i class="fas fa-times text-danger"></i></a>';

        return $html;
    }

    private function action_buttons3($id)
    {
        $html = '<a href="' . base_url($this->url_visualizar . '/' . $id) . '" title="Visualizar">';
        $html .= '<i  class="fa fa-eye text-black mr-2"></i></a>';
        $html .= '<a href="' . base_url($this->url_editar . '/' . $id) . '" title="Editar">';
        $html .= '<i  class="fas fa-pencil-alt text-warning"></i></a>';
        $html .= '<a href="' . base_url($this->url_deletar . '/' . $id) . '" title="Deletar">';
        $html .= '<i class="fas fa-times text-danger mr-2"></i></a>';

        return $html;
    }

    private function body()
    {

        $html = '<tbody>';

        foreach ($this->data as $row) {
            $html .= '<tr>';


            foreach ($row as $cel) {
                $html .= '<td class ="text-truncate diminui">' . $cel . '</td>';
            }

            if ($this->use_action_button) {
                $html .= '<td class="text-center ">' . $this->action_buttons($row['id']) . '</td>';
            } else {
                if ($this->use_action_button2) {
                    $html .= '<td class="text-center ">' . $this->action_buttons2($row['id']) . '</td>';
                } else {
                    if ($this->use_action_button3) {
                        $html .= '<td class="text-center ">' . $this->action_buttons3($row['id']) . '</td>';
                    }
                }
            }


            $html .= '</tr>';
        }
        $html .= '</tbody>';
        return $html;
    }

    public function useZebra()
    {
        $this->body_classes .= 'table-striped ';
    }

    public function useBorder()
    {
        $this->body_classes .= 'table-bordered ';
    }
    public function useHover()
    {
        $this->body_classes .= 'table-hover ';
    }
    public function smallRow()
    {
        $this->body_classes .= 'table-sm';
    }

    public function useActionButton()
    {
        $this->use_action_button = true;
    }
    public function useActionButton2()
    {
        $this->use_action_button2 = true;
    }
    public function useActionButton3()
    {
        $this->use_action_button3 = true;
    }

    public function useCard() {
        $this->class_div .= 'border p-5';
    }
}
