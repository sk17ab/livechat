<?php
/**
 * Created by PhpStorm.
 * User: reaz
 * Date: 5/22/2019
 * Time: 1:14 PM
 */

namespace App\Interfaces;


interface BaseRepositoryInterface
{
    /**
     * Return all users
     *
     * @return mixed
     */
    public function all();
    /**
     * Create a new user
     *
     * @param array $user
     * @return mixed
     */
    public function create(array $data);
    /**
     * Find user by id
     *
     * @param string $id
     * @return mixed
     */
    public function find(string $id);
    /**
     * Update user with id
     *
     * @param string $id
     * @param array $user
     * @return mixed
     */
    public function update(string $id, array $data);
    /**
     * Delete user with id
     *
     * @param string $id
     * @return mixed
     */
    public function delete(string $id);
}
