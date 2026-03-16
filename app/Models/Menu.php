<?php


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'url',
        'icono',
        'parent_id',
        'orden',
        'ubicacion',
        'activo'
    ];

    protected $casts = [
        'activo' => 'boolean',
    ];

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id')->orderBy('orden');
    }

    public function scopeActivos($query, $ubicacion = 'header')
    {
        return $query->where('activo', true)
                    ->where('ubicacion', $ubicacion)
                    ->whereNull('parent_id')
                    ->orderBy('orden')
                    ->with('children');
    }
}