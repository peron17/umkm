<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    // page title name
    public $pageTitle;
    
    // for generate route purpose ex: xxx.index xxx.create
    public $key;
    
    // value is array of datatable columns
    public $tableColumns;

    public $model;

    private $route;
    
    private $button = 'btn-primary';
    
    private $icon;
    
    private $title;

    public function menuPageIndex()
    {
        return [
            $this->btnCreate()
        ];
    }

    public function menuPageCreate()
    {
        return [
            $this->btnManage()
        ];
    }

    public function menuPageEdit($id)
    {
        return [
            $this->btnShow($id),
            $this->btnDelete($id),
            $this->btnCreate(),
            $this->btnManage(),
        ];
    }

    public function menuPageShow($id)
    {
        return [
            $this->btnEdit($id),
            $this->btnDelete($id),
            $this->btnCreate(),
            $this->btnManage(),
        ];
    }

    private function btnManage()
    {
        $this->setRoute( $this->routeIndex() );
        $this->setIcon('fa-list-alt');
        $this->setTitle('Manage');
        return $this->baseMenu();
    }

    private function btnCreate()
    {
        $this->setRoute( $this->routeCreate() );
        $this->setIcon('fa-plus');
        $this->setTitle('Create');
        return $this->baseMenu();
    }

    private function btnEdit($id)
    {
        $this->setRoute( $this->routeEdit($id) );
        $this->setIcon('fa-edit');
        $this->setTitle('Edit');
    }

    private function btnShow($id)
    {
        $this->setRoute( $this->routeShow($id) );
        $this->setIcon('fa-search');
        $this->setTitle('Show');
    }

    private function btnDelete($id)
    {
        $this->setRoute( $this->routeDelete($id) );
        $this->setButton('btn-danger');
        $this->setIcon('fa-trash');
        $this->setTitle('Delete');
    }

    private function baseMenu()
    {
        return [
            'route' => $this->route,
            'button' => $this->button,
            'icon' => $this->icon,
            'title' => $this->title
        ];
    }

    public function setRoute($route)
    {
        $this->route = $route;
    }

    private function setButton($button)
    {
        $this->button = $button;
    }

    private function setIcon($icon)
    {
        $this->icon = $icon;
    }

    private function setTitle($title)
    {
        $this->title = $title;
    }

    private function routeIndex()
    {
        return route($this->key . '.index');
    }

    private function routeCreate()
    {
        return route($this->key . '.create');
    }

    private function routeEdit($id)
    {
        return route($this->key . '.edit', $id);
    }

    private function routeShow($id)
    {
        return route($this->key . '.show', $id);
    }

    private function routeDelete($id)
    {
        return route($this->key . '.delete', $id);
    }

    public function getTableColumns()
    {
        return $this->model::TABLE_COLUMNS;
    }
}