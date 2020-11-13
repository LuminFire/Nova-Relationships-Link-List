# Nova Relationships Link List

## Introduction

This package provides a field that displays related models as a comma-separated, linked list, rather than a full table of related models.

By default, it’s displayed only on the index and detail views.

## Usage

```php
use BrilliantPackages\NovaRelationshipsLinkList\RelationshipsLinkList;

    public function fields(Request $request)
    {
        return [
            // Other fields

            RelationshipsLinkList::make('Terms'),

            // Other fields
        ];
    }
```
