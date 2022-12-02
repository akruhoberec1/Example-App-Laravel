<?php

namespace App\Services\V1;

use Illuminate\Http\Request;
use App\Models\Meals;
use App\Models\Category;
use App\Models\CategoryTranslation;

class MealTranslationQuery 
{

    protected $allowedParams = 
    [
        'category_id' => ['eq'],
        'title' => ['eq'],
        'description' => ['eq']
    ];

    protected $operatorMap = 
    [
        'eq' => '=',
        'lte' => '≤',
        'lt' => '<',
        'gt' => '>',
        'gte' => '≥',
    ];

    protected $columnMap = 
    [
        ''
    ];

    public function transform(Request $request)
    {
        $eloqQuery = [];

        foreach ($this->allowedParams as $params => $operators){
            $query = $request->query($params);

            if(!isset($query)){
                continue;
            }
            $column = $this->columnMap[$params] ?? $params;

            foreach ($operators as $operator)
            {
                if(isset($query[$operator])){
                    $eloqQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }
    

        return $eloqQuery;

    }
}

