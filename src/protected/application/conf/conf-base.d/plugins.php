<?php

return [
    'plugins' => [
        'EvaluationMethodTechnical' => ['namespace' => 'EvaluationMethodTechnical', 'config' => ['step' => 0.1]],
        'EvaluationMethodTechnicalSaude' => ['namespace' => 'EvaluationMethodTechnicalSaude', 'config' => ['step' => 0.1]],
        'EvaluationMethodSimple' => ['namespace' => 'EvaluationMethodSimple'],
        'EvaluationMethodDocumentary' => ['namespace' => 'EvaluationMethodDocumentary'],
        //PLUGIN DESENVOLVIDO PELA ESP
        'LocationStateCity' => [
            'namespace' => 'LocationStateCity'
        ],
    ]
];