<?php
/**
 * Created by PhpStorm.
 * User: reaz
 * Date: 5/22/2019
 * Time: 1:15 PM
 */

namespace App\Repositories;


use App\Chat;
use App\Interfaces\BaseRepositoryInterface;

class ChatRepository implements BaseRepositoryInterface
{

    private $model;
    /**
     * UserRepository constructor.
     * @param User $user
     */
    public function __construct(Chat $chat)
    {
        $this->model = $chat;
    }



    /**
     * Return all users
     *
     * @return mixed
     */
    public function all()
    {
        // TODO: Implement all() method.
    }

    /**
     * Create a new user
     *
     * @param array $user
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->model->create($data);
        // TODO: Implement create() method.
    }

    /**
     * Find user by id
     *
     * @param string $id
     * @return mixed
     */
    public function find(string $id)
    {
        // TODO: Implement find() method.
    }

    /**
     * Update user with id
     *
     * @param string $id
     * @param array $user
     * @return mixed
     */
    public function update(string $id, array $user)
    {
        // TODO: Implement update() method.
    }

    /**
     * Delete user with id
     *
     * @param string $id
     * @return mixed
     */
    public function delete(string $id)
    {
        // TODO: Implement delete() method.
    }
}
