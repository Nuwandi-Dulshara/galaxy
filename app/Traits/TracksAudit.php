<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

trait TracksAudit
{
    public static function bootTracksAudit(): void
    {
        static::creating(function (Model $model) {
            // Only set if column exists and user is authenticated
            if (Auth::check() && Schema::hasColumn($model->getTable(), 'created_by')) {
                $model->created_by = Auth::id();
            }
        });

        static::updating(function (Model $model) {
            // Only set if column exists and user is authenticated
            if (Auth::check() && Schema::hasColumn($model->getTable(), 'updated_by')) {
                $model->updated_by = Auth::id();
            }
        });
    }
}
