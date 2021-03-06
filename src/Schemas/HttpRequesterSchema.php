<?php

namespace Amethyst\Schemas;

use Amethyst\Managers\DataBuilderManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class HttpRequesterSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('name')
                ->setRequired(true)
                ->setUnique(true),
            Attributes\LongTextAttribute::make('description'),
            Attributes\BelongsToAttribute::make('data_builder_id')
                ->setRelationName('data_builder')
                ->setRelationManager(DataBuilderManager::class),
            Attributes\TextAttribute::make('url')
                ->setRequired(true),
            Attributes\TextAttribute::make('method')
                ->setRequired(true),
            Attributes\YamlAttribute::make('headers'),
            Attributes\LongTextAttribute::make('body'),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
