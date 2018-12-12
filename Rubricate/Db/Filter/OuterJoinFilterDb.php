<?php

namespace Rubricate\Db\Filter;

class OuterJoinFilterDb extends AbstractDisableWhereFilterDb
{
    private $table;
    private $filter;
    
    public function __construct($table, $key, $value) 
    {
        $this->filter = new FilterDb($key, $value);
        $this->table = $table;
    }
    

    public function getFilter()
    {
        return sprintf(
            " OUTER JOIN %s ON %s ", 
            $this->table, $this->filter->getFilter()
        );
    }


}
