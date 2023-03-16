<?php

class VulkaanController extends BaseController
{
    private $volcanoModel;

    public function __construct()
    {
        $this->volcanoModel = $this->model('VulkaanModel');
    }

    public function index()
    {
        $volcanoes = $this->volcanoModel->getVulkaan();

        $rows = '';
        foreach ($volcanoes as $result) {
            $rows .= "<tr>
                        <td>$result->Id</td>
                        <td>$result->Naam</td>
                        <td>$result->Hoogte</td>
                        <td>$result->Land</td>
                        <td>$result->JaarLaatsteUitbarsting</td>
                        <td>$result->AantalSlachtoffers</td>
                      </tr>";
        }

        $data = [
            'title' => 'Top 5 actiefste vulkanen ter wereld',
            'rows'  => $rows
        ];

        $this->view('Vulkaan/index', $data);
    }
}
