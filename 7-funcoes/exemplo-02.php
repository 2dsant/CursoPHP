<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //inicio: Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    //inicio: Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                    //termino: Gerente de Vendas
                )
            ),
            //termino: Diretor Comercial
            //inicio: Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' =>  array(
                    //Incio: Gerente de Contas a Pagar
                    array(
                        'nome_cargo' => 'Gerente de Contas a Pagar',
                        'subordinados' => array(
                            //Inicio: Supervisor de pagamentos
                            array(
                                'nome_cargo' => 'Supervisor de pagamentos'
                            )
                            //Termino: Supervisor de pagamentos
                        )
                    ),
                    //Termino: Gerente de contas a Pagar
                    //Inicio gerente de comprar
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            //inicio supervisor de suplementos
                            array(
                                'nome_cargo' => 'Supervisor de suplementos'

                            )
                            //termino supervisor de suplementos
                        )
                    )
                    //Termino gerente de comprar
                )
            )
             //Termino: Diretor Financeiro
        )
    )
);


function exibe($cargos){

    $html = '<ul>';

    foreach ($cargos as $cargo) {

        $html .= "<li>";

        $html .= $cargo['nome_cargo'];

        if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

            $html .= exibe($cargo['subordinados']);

        }

        $html .= "</li>";
        
    }

    $html .= '</ul>';

    return $html;

}

echo exibe($hierarquia);