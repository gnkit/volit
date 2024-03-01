<?php

namespace Domain\Task\Enums;

enum TaskStatus: string
{
    case PUBLISHED = 'published';
    case DRAFT = 'draft';
    case PENDING = 'pending';
    case CANCELLED = 'cancelled';
    case SUCCESSFUL = 'successful';
}
