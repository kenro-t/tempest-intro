<?php

namespace App\Migration;

use Tempest\Database\DatabaseMigration;
use Tempest\Database\QueryStatement;
use Tempest\Database\QueryStatements\CreateTableStatement;
use Tempest\Database\QueryStatements\DropTableStatement;

final class CreateUserTable implements DatabaseMigration
{
    public string $name = '2025-08-30_migration_create_user_table';

    public function up(): QueryStatement
    {
        return new CreateTableStatement(
            tableName: 'migration_create_user_table',
        )
            ->primary()
            ->text('name')
            ->datetime('created_at')
            ->datetime('updated_at');
    }

    public function down(): QueryStatement
    {
        return new DropTableStatement(
            tableName: 'migration_create_user_table',
        );
    }
}
