<?php

namespace Innofied\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider{

  public function boot(){

    $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    $this->loadViewsFrom(__DIR__.'/resources/views', 'contact');
    $this->loadMigrationsFrom(__DIR__.'/database/migrations');

    // $this->publishes([
    //     __DIR__.'/config/contact.php' => config_path('contact.php'),
    // ]);
    $this->mergeConfigFrom(
        __DIR__.'/config/contact.php', 'contact'
    );
  }

  public function register(){

  }
}

?>