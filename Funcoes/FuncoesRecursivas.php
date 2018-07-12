<?php
$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //Inicio: diretor comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    //Inicio: Gerente de vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                    //Final: Gerente de vendas
                )
            ),
            //Final: Diretor Comercial
            
            //Inicio: Diretor Financeiro
            array(D
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    //Inicio: Gerente de Contas a Pagar
                    array(
                        'nome_cargo' => 'Gerente de Contas a Pagar',
                        'subordinados' => array(
                            //Inicio: Supervisor de Pagamentos
                            array(
                                'nome_cargo' => 'Supervisor de Pagamentos'
                            )
                            //Final: Supervisor de Pagamentos
                        )
                    ),
                    //Final: Gerente de Contas a Pagar
                    
                    //Inicio: Gerente de Compras
                    array (
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            //Inicio: Supervisor de Suprimentos
                            array(
                                'nome_cargo' => 'Supervisor de Suprimentos',
                                'subordinados' => array(
                                    //Inicio: Comprador
                                    array(
                                        'nome_cargo' => 'Comprador'
                                    )
                                    //Final: Comprador
                                )
                            )
                            //Final: Supervisor de Suprimentos
                        )
                    )
                )
            )
            //Final: Diretor Financeiro
        )
    )
);

function exibe ($cargos) {
    $html = '<ul>';
    
    foreach ($cargos as $cargo) {
        $html .= "<li>";
        $html .= $cargo['nome_cargo'];
        $html .= "</li>";
        
        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            $html .= exibe($cargo['subordinados']);
        }
    }
    
    $html .= '</ul>';
    return $html;
}

echo exibe($hierarquia);
?>
