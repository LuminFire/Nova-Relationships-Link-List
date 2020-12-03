<?php

namespace BrilliantPackages\NovaRelationshipsLinkList;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Nova;

class RelationshipsLinkList extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-relationships-link-list';

    /**
     * Indicates if the element should be shown on the create view.
     *
     * @var \Closure|bool
     */
    public $showOnCreation = false;

    /**
     * Indicates if the element should be shown on the update view.
     *
     * @var \Closure|bool
     */
    public $showOnUpdate = false;

    /**
     * Resolve the given attribute from the given resource.
     *
     * @param  mixed  $resource
     * @param  string  $attribute
     * @return string
     */
    protected function resolveAttribute($resource, $attribute)
    {
        $this->withMeta(['asHtml' => true]);

        if ($resource->{$attribute}->isEmpty()) {
            return '—';
        }

        return $resource
            ->{$attribute}
            ->map(function ($model) use ($resource, $attribute) {
                return '<a class="no-underline dim text-primary font-bold" href="'.url(Nova::path().'/resources/'.$attribute.'/'.$model->id).'">'.$model->name.'</a>';
            })
            ->implode(', ');
    }
}
