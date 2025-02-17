<?php
 
namespace App\Jobs;
 
use App\Models\User;
use App\Services\AudioProcessor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
 
class SampleUserJob implements ShouldQueue
{
    use Queueable;
 
    /**
     * Create a new job instance.
     */
    public function __construct(
        public User $user,
    ) {}
 
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // nothing
        $user->password = \Str::random();
        $user->save();
    }
}
