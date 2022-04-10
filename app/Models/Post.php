<?php

namespace App\Models;

use App\Likable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, Likable;

}

/*
 * -posts
 *      - title
 *      - body
 *
 * - users
 *      - id
 *
 *  - post_user
 *      - user_id
 *      - post_id
 */
