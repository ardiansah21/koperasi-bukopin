<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Str;
use Ottaviano\Faker\Gravatar;
use Laravel\Jetstream\Features;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new Gravatar($this->faker));
        $gender = $this->faker->randomElement(['Laki-Laki', 'Perempuan']);
        $email = $this->faker->unique()->safeEmail();
        return [

            'username' => $this->faker->unique()->userName(),
            'email' => $email,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'nama_lengkap' => $this->faker->name($gender == 'Perempuan' ? 'famale' : 'male'),
            // 'name' => $this->faker->name($gender == 'Perempuan' ? 'famale' : 'male'),
            'nik' => $this->faker->numerify('#####################'),
            'pekerjaan' => $this->faker->jobTitle(),
            'alamat' => $this->faker->address(),
            'jenis_kelamin' => $gender,
            'no_hp' => $this->faker->phoneNumber(),
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->dateTimeThisCentury->format('Y-m-d'),
            'status' => 'aktif',
            // 'profile_photo_path' => $this->faker->gravatarUrl()
            // 'profile_photo_url' => "https://www.gravatar.com/avatar/" . md5(strtolower(trim($email))) . "?s=64"
            'profile_photo_path' => "https://www.gravatar.com/avatar/" . md5(strtolower(trim($email)))
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    /**
     * Indicate that the user should have a personal team.
     *
     * @return $this
     */
    public function withPersonalTeam()
    {
        if (!Features::hasTeamFeatures()) {
            return $this->state([]);
        }

        return $this->has(
            Team::factory()
                ->state(function (array $attributes, User $user) {
                    return ['name' => $user->name . '\'s Team', 'user_id' => $user->id, 'personal_team' => true];
                }),
            'ownedTeams'
        );
    }
}
