<?php

namespace AlgoWeb\PODataLaravel\Models;

use AlgoWeb\PODataLaravel\Interfaces\AuthInterface;
use AlgoWeb\PODataLaravel\Query\LaravelBulkQuery;
use AlgoWeb\PODataLaravel\Query\LaravelHookQuery;
use AlgoWeb\PODataLaravel\Query\LaravelQuery;

class LaravelQueryDummy extends LaravelQuery
{
    public function setModelHook(LaravelHookQuery $hook)
    {
        $this->modelHook = $hook;
    }

    public function setBulk(LaravelBulkQuery $bulk)
    {
        $this->bulk = $bulk;
    }

    public function setAuth(AuthInterface $auth)
    {
        $this->auth = $auth;
    }
}
