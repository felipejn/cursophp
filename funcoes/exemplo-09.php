<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //Início: Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array (
                    //Início: Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                    //Final: Gerente de Vendas
                )
            ),
            //Término: Diretor Comercial
            //Início: Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    //Início: Gerente de Contas a Pagar
                    array(
                        'nome_cargo' => 'Gerente de Contas a Pagar',
                        'subordinados' => array(
                            //Início: Supervisor de Pagamentos
                            array(
                                'nome_cargo' => 'Supervisor de Pagamentos'
                            )
                            //Termino: Supervisor de Pagamentos
                        )
                    ),
                    //Término: Gerente de Contas a Pagar
                    //Inicio: Gerente de Compras
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            //Inicio: Supervisor de Suprimentos
                            array(
                                'nome_cargo' => 'Supervisor de Suprimentos'
                            )
                            //Termino: Supervisor de Suprimentos
                        )
                    )
                    //Termino: Gerente de Compras
                )
            )
            //Término: Direitor Financeiro
        )
    )
);
//Funcão para exibir cargos e subordinados
function exibe($cargos) {

    $html = '<ul>';

    foreach ($cargos as $cargo) {

        $html .= "<li>";

        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            $html .= exibe($cargo['subordinados']);
        }

        $html .= "</li>";
    }

    $html .= '</ul>';

    return $html;
}

echo exibe($hierarquia);

?>
