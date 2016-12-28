<?php

//TODO: Refactor projects to use this, instead of the gateway

namespace phpCollab\Projects;

use phpCollab\Database;

class Projects
{
    protected $projects_gateway;
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
        $this->projects_gateway = new ProjectsGateway($this->db);
    }

    public function getProjectById($projectId)
    {
        $projectId = filter_var($projectId, FILTER_VALIDATE_INT);

        return $this->projects_gateway->getProjectById($projectId);
    }

    public function getProjectsByOwner($ownerId, $sorting)
    {
        $sorting = filter_var($sorting, FILTER_SANITIZE_STRING);
        return $this->projects_gateway->getAllByOwner($ownerId, $sorting);
    }
}