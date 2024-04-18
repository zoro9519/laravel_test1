<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PostFactory extends Factory
{
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds = User::pluck('id')->toArray();
        $socialPlatforms = ['facebook', 'twitter', 'linkedin', 'tiktok'];
        $socialPlatform = $this->faker->randomElement($socialPlatforms);

        $socialLinks = [
            'facebook' => 'https://www.facebook.com/',
            'twitter' => 'https://www.twitter.com/',
            'linkedin' => 'https://www.linkedin.com/',
            'tiktok' => 'https://www.tiktok.com/',
        ];
        $socialLink = $socialLinks[$socialPlatform];
        $content = $this->faker->paragraphs(1, true);
        $createdAt = $this->faker->dateTimeBetween('-3 year', 'now');

        return [
            'title' => fake()->sentence(),
            'content' => $content,
            'owner_id' => $this->faker->randomElement($userIds),
            'social' => $socialPlatform,
            'social_link' => $socialLink,
            'created_at' => $createdAt,
            'updated_at' => $createdAt, 
        ];
    }
}
