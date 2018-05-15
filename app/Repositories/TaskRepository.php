<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.05.2018
 * Time: 17:00
 */

namespace App\Repositories;

use App\User;

class TaskRepository
{
    /**
     * Получить все задачи заданного пользователя.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return $user->tasks()
            ->orderBy('created_at', 'asc')
            ->get();
    }
    public function delete(User $user){
        return $user->tasks();
    }
}