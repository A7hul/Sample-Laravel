<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'register:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new user.';

    /**
     * Execute the console command.
     * https://laravel.com/docs/9.x/artisan
     *
     * @return int
     */
    public function handle()
    {
        $name = Str::random(8);
        $input = [
            'name' => $name,
            'email' => $name . '@example.com',
            'password' => Hash::make('password'),
        ];

        try {
            //create a new user.
            $user = User::factory()->create($input);
        } catch (\Exception$e) {
            $this->error($e->getMessage());
            return;
        }

        // Success message
        $this->info('User created successfully!');
        $this->info('Uuid: ' . $user['uuid'] . ', Name: ' . $input['name'] . ', Email: ' . $input['email'] . ', Password: "password"');
    }
}
