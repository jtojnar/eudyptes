<?php

namespace App\Model;

use Nextras\Orm\Repository\Repository;

class PostRevisionRepository extends Repository {
	public static function getEntityClassNames(): array {
		return [PostRevision::class];
	}
}
