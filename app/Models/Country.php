class Country extends Model {
  use SoftDeletes; protected $guarded = [];
  public function departments(){ return $this->hasMany(Department::class, 'id_country'); }
}
