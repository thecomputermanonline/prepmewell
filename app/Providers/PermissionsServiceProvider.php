<?php

namespace App\Providers;
use App\Permission;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
class PermissionsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Permission::get()->map(function($permission){
            Gate::define($permission->slug, function($user) use ($permission){
                return $user->hasPermissionTo($permission);
            });
        });
        //Blade directives
        Blade::directive('role', function ($role){
            //$role = substr(substr($role, 0, -1), 1);
            return "<?php if(auth()->check() && auth()->user()->hasRole({$role})) : ?>";
        });
        Blade::directive('endrole', function ($role){
            return "<?php endif; ?>";
        });
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }




}
