<?php

namespace Rooles\Contracts;

/**
 * Class Role
 * @package App\Crm\Permission
 */
interface Role
{

    /**
     * Constructor
     *
     * @param string $name
     */
    public function __construct($name);

    /**
     * Grants a single or multiple (array) permission
     *
     * @param array|string $permissions
     *
     * @return $this;
     */
    public function grant($permissions);

    /**
     * Denies a single or multiple (array) permission
     *
     * @param array|string $permissions
     *
     * @return $this;
     */
    public function deny($permissions);

    /**
     * Invert the result of can
     *
     * @param array|string $permissions
     *
     * @return bool
     */
    public function cannot($permissions);

    /**
     * Check permission for a single or multiple (array or "&" operator) permission query
     *
     * @param array|string $permissions
     *
     * @return bool
     */
    public function can($permissions);

    /**
     * Verify if the current role is the one provided
     *
     * @param string $roleName
     *
     * @return bool
     */
    public function is($roleName);

    /**
     * Verify if the current role is in the provided array
     *
     * @param array $roles
     *
     * @return mixed
     */
    public function isIn(array $roles);

    /**
     * Return role name
     *
     * @return string
     */
    public function name();

    /**
     * If the object is called as a string will return the role name
     *
     * @return string
     */
    public function __toString();

}